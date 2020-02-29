<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Form\Type\RegistrationType;
use UserBundle\Form\Type\PasswordResetRequestType;
use UserBundle\Form\Type\RegistrationWithCompanyType;
use UserBundle\Utils\UserUtils;
use UserBundle\Utils\DateUtils;
use UserBundle\Entity\ActiveToken;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Entity\PasswordRequest;
use UserBundle\Validator\PasswordRequestValidator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\Experience;
use UserBundle\Validator\ExperienceValidator;
use UserBundle\Entity\Competence;
use UserBundle\Validator\CompetenceValidator;
use UserBundle\Entity\Formation;
use UserBundle\Validator\FormationValidator;

class UserController extends Controller{

    public function registerWithCompanyAction(Request $request){
        $user = new User();
        $form = $this->createForm(new RegistrationWithCompanyType(),$user);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $res = UserUtils::isValidUser($user,"USER_CANDIDATE");
            if($res["success"] == true){
                $em = $this->getDoctrine()->getManager();
                $_user = $em->getRepository("UserBundle:User")->findBy(["email" => $user->getEmail()]);
                if(count($_user) > 0){
                    $this->addFlash("error","Cette adresse est déjà utilisée par un compte.");
                }else{
                    $token = new ActiveToken();
                    $user->setToken($token);
                    $message = \Swift_Message::newInstance()
                            ->setSubject("Activation de votre compte - ".$this->getParameter('app_name'))
                            ->setFrom("")
                            ->setTo($user->getEmail())
                            ->setBody($this->render("UserBundle:User:email.html.twig",["token" => $user->getToken()->getValue()]));
                    $res = $this->get("mailer")->send($message);
                    if($res){
                        $em->persist($user);
                        $em->fluhs();
                        return $this->redirectToRoute("activate");
                    }else{
                        $this->addFlash("error","Vous devez fournir des données valides.");
                    }                    
                }
            }else{
                $this->addFlash("error",$res["message"]);
            }
        }
        return $this->render("@User/User/register_with_company.html.twig",[]);
    }

    public function registerAction(Request $request){

        $encoder = $this->get('security.password_encoder');
        $user = new User();
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $encoder = $this->get('security.password_encoder');
            $user->setUsername($user->getEmail());
            $user->setPassword($encoder->encodePassword($user, $user->getPlainPassword()));
            $user->setRoles(["ROLE_USER"]);

            $res = UserUtils::isValidUser($user,"ROLE_USER");

            if($res["success"] == true){

                $em = $this->getDoctrine()->getManager();
                $_user = $em->getRepository("UserBundle:User")->findBy(["email" => $user->getEmail()]);
                if(count($_user) > 0){
                    $this->addFlash("error","Cette adresse est déjà utilisée par un compte.");
                    return $this->redirectToRoute("connexion");
                }else{
                    $token = new ActiveToken();
                    $user->setToken($token);
                    $em->persist($user);
                    $em->flush();
                    
                    $token->setUser($user);
                    $em->persist($token);
                    $em->flush();

                    $message = \Swift_Message::newInstance()
                            ->setSubject("Activation de votre compte - Cible RH Emploi")
                            ->setFrom("noreply@ciblerh.cm")
                            ->setTo($user->getEmail())
                            ->setBody($this->render("@User/User/email.html.twig",["token" => $token->getValue()]));
                    $res = $this->get("mailer")->send($message);
                    if($res){

                        $em->persist($user);
                        $em->flush();
                        
                        $token->setUser($user);
                        $em->persist($token);
                        $em->flush();

                        return $this->redirectToRoute("activate");
                    }else{
                        $this->addFlash("error","Vous devez fournir des données valides.");
                    }                    
                }
            }else{
                $this->addFlash("error",$res["message"]);
                return $this->redirectToRoute("connexion");
            }
        }
        return $this->render("@User/User/register.html.twig",['form' => $form->createView()]);
    } 

    public function loginAction(Request $request){
        $auth = $this->get("security.authentication_utils");
        $error = $auth->getLastAuthenticationError();
        $lastUsername = $auth->getLastUsername();
        return $this->render("@User/User/login.html.twig",[
            "last_username" => $lastUsername,
            "error" => $error,
        ]);
    }

    public function accountActivateAction($token, Request $request){
        $em = $this->getDoctrine()->getManager();
        $p = $em->getRepository("UserBundle:ActiveToken")->findOneBy(['value' => $token]);
        if(!$p){
            throw new NotFoundHttpException();
        }
        $user = $p->getUser();
        $user->setIsActive(true);
        $em->persist($user);
        $em->flush();

        $em->remove($p);
        $em->flush();

        return $this->render("@User/User/activate.html.twig",[]);       
    }

    public function passwordResetRequestAction(Request $request){

        if($this->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute("index");
        }

        $entity = new PasswordRequest();
        $form = $this->createForm(PasswordResetRequestType::class,$entity);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $res = PasswordRequestValidator::isValid($entity);
            if($res['success'] == false){
                $this->addFlash("error",$res["message"]);
            }else{
                $message = \Swift_Message::newInstance()
                            ->setSubject("Réinitialisez votre mot de passe - Cible RH Emploi")
                            ->setFrom("noreply@ciblerh.cm")
                            ->setTo($entity->getEmail())
                            ->setBody($this->render("@User/User/email.html.twig",["token" => $entity->getToken()]));
                $res = $this->get("mailer")->send($message);

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                $this->addFlash("success","Un email vous a été envoyé.");
                return $this->redirectToRoute("password_reset_request");
            }
        }
        return $this->render("@User/User/password_reset_request.html.twig",[
            "form" => $form->createView()
        ]);
    }

    public function passwordResetAction(PasswordRequest $e, Request $request){

        if($this->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute("index");
        }

        $data = [];
        $form = $this->createFormBuilder($data)
        ->add("password",PasswordType::class,["attr" => ["class" => "form-control"]])
        ->getForm();
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()){
            $data = $form->getData();
            $encoder = $this->get('security.password_encoder');
            $user = new User();
            $password = $encoder->encodePassword($user, $data['password']);
            $em = $this->getDoctrine()->getManager();
            $user_ = $em->getRepository("UserBundle:User")->findOneBy(['email' => $e->getEmail()]);

            if(!$user_){
                throw $this->createNotFoundException("Impossible de trouver cette donnée.");
            }

            $user_->setPassword($password);
            $em->persist($user_);
            $em->flush();
            return $this->redirectToRoute("connexion");
        }

        return $this->render("@User/User/password_reset.html.twig",[
            "form" => $form->createView(),
        ]);
    }

    public function connexionAction(Request $request){
        if($this->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute("index");
        }
        return $this->render("@User/User/connexion.html.twig");
    }

    public function activateAction(Request $request){
        if($this->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirectToRoute("index");
        }
        return $this->render("@User/User/activate.html.twig");
    }

    public function profileAction(User $entity, Request $request){
        return $this->render("@User/User/profile/profile_profile.html.twig",[
            "entity" => $entity
        ]);
    }
    
    public function profileEditAction(User $entity, Request $request){
        $r = $entity;
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
        }
        if($user == null || $user != $entity){
            throw $this->createNotFoundException("Impossible de trouver cette donnée.");
        }

        $datas = [ 
            "fname"         => $r->getFname(), 
            "lname"         => $r->getLname(),  
            "profession"    => $r->getProfession(),
            "presentation"  => $r->getPresentation()
        ];
        $form = $this->createFormBuilder($datas)
        ->add('fname',TextType::class,['attr' => ['class' => 'form-control']])
        ->add('lname',TextType::class,['attr' => ['class' => 'form-control']])
        ->add('profession',TextType::class,['required' => false,'attr' => ['class' => 'form-control']])
        ->add('presentation',TextareaType::class,['required' => false,'attr' => ['class' => 'form-control','rows' => 10]])
        ->getForm();
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $datas = $form->getData();
            if(empty($datas['fname']) || empty($datas['lname'])){
                $this->addFlash('error','Vous devez fournir un prénom ou un nom.');
            }else{
                $em = $this->getDoctrine()->getManager();
                $r->setFname($datas['fname']);
                $r->setLname($datas['lname']);
                $r->setPresentation($datas['presentation']);
                $r->setProfession($datas['profession']);
                $em->persist($r);
                $em->flush();
                return $this->redirectToRoute("profile_profile",["slug" => $entity->getSlug()]);
            }
        }
        return $this->render("@User/User/profile/profile_profile_edit.html.twig",[
            "entity" => $entity,
            "form" => $form->createView()
        ]);
    }
    
    public function subscriptionsAction(User $entity,Request $request){
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
        }
        if($user == null || $user != $entity){
            throw $this->createNotFoundException("Impossible de trouver cette donnée.");
        }

        $datas = $this->getDoctrine()->getManager()->getRepository('MainBundle:Subscription')->findBy(['user' => $entity]);

        $entities = $this->get("knp_paginator")->paginate(array_reverse($datas),$request->query->get('page',1));
        return $this->render("@User/User/profile/profile_subscriptions.html.twig",[
            "entity" => $entity,
            "entities" => $entities
        ]);
    }

    public function companiesAction(User $entity,Request $request){
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
        }
        
        $ac = $this->get('security.authorization_checker');
        $access = $ac->isGranted('ROLE_COMPANY_USER');
        if($access == false || $user == null || $user != $entity){
            throw $this->createNotFoundException("Impossible de trouver cette donnée.");
        }

        $_entities_ = $this->getDoctrine()->getManager()->getRepository("MainBundle:Company")->findBy(['createdBy' => $entity]);

        $entities = $this->get("knp_paginator")->paginate(array_reverse($_entities_),$request->query->get('page',1));
        return $this->render("@User/User/profile/profile_companies.html.twig",[
            'entity' => $entity,
            "entities" => $entities
        ]);
    }

    public function offersAction(User $entity,Request $request){
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
        }
        
        $ac = $this->get('security.authorization_checker');
        $access = $ac->isGranted('ROLE_COMPANY_USER');
        if($access == false || $user == null || $user != $entity){
            throw $this->createNotFoundException("Impossible de trouver cette donnée.");
        }

        $_entities_ = $this->getDoctrine()->getManager()->getRepository("MainBundle:JobOffer")->findBy(['createdBy' => $entity]);

        $entities = $this->get("knp_paginator")->paginate(array_reverse($_entities_),$request->query->get('page',1));
        return $this->render("@User/User/profile/profile_offers.html.twig",[
            'entity' => $entity,
            "entities" => $entities,
        ]);
    }

    public function addExperienceAction(Request $request){
        $data = [];
        $statusCode = 400;
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            if($request->getMethod() == "POST"){
                $e = new Experience();
                $e->setTitle($request->get('title'));
                $e->setEntreprise($request->get('entreprise'));
                $e->setDescription($request->get('description'));
                $e->setUser($user);
                $res = ExperienceValidator::isValid($e);
                if($res['success']){
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($e);
                    $em->flush();
                    $statusCode = 200;
                    $data = $e->getJSON();
                }else{
                    $data = ["message" => "Données non valides."];
                }
    
            }
        }else{
            $data = ["message" => "Données non valides."];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function deleteExperienceAction(Request $request){
        $data = [];
        $statusCode = 400;

        $content = $request->getContent();
        if(!empty($content)){
            $content = json_decode($content,true);
            $id = $content["id"];
            var_dump($content);
            var_dump($id);
        }

        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            $e = $em->getRepository("UserBundle:Experience")->findOneBy(['user' => $user,'id' => $id]);
            if($e != null){
                $em->remove($e);
                $em->flush();
                $statusCode = 200;
                $data = [
                    "success" => true,
                    "message" => "Element supprimé avec succès."
                ];
            }else{
                $statusCode = 400;
                $data = [
                    "success" => false,
                    "message" => "Element introuvable."
                ];
            }
        }else{
            $statusCode = 400;
            $data = [
                "success" => false,
                "message" => "Impossible d'accéder à cette donnée."
            ];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function getExperiencesAction(Request $request){
        $data = [];
        $statusCode = 404;
        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        $id = $request->get("id");
        if (true) {
            $user = $token->getUser();
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository("UserBundle:User")->findOneById($id);
            if(!$entity){
                $data = ["message" => "Erreur 1010 : Element introuvable."];
            }else{
                $statusCode = 200;
                $exp = [];
                $isTheCurrentUser = ($user == $entity) ? true : false;
                foreach($entity->getExperiences() as $e){
                    array_push($exp,$e->getJSON($isTheCurrentUser));
                }
                $data = ['data' => $exp];
            }
        }else{
            $data = ["message" => "Erreur 1012 : Element introuvable 2."];
        }
        $response = new Response(json_encode(
            $data
        ));
        $response->setStatusCode($statusCode);
        return $response;
    }



    public function addCompetenceAction(Request $request){
        $data = [];
        $statusCode = 400;
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            if($request->getMethod() == "POST"){
                $content = $request->getContent();

                if(!empty($content)){
                    $params = json_decode($content,true);
                    
                    $title = $params['title'];
                    $e = new Competence();
                    $e->setTitle($title);
                    $e->setUser($user);
                    $res = CompetenceValidator::isValid($e);
                    if($res['success']){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($e);
                        $em->flush();
                        $statusCode = 200;
                        $data = $e->getJSON();
                    }else{
                        $data = ["message" => "Données non valides."];
                    }
                }else{
                    $data = ["message" => "Données non valides."];
                }
            }
        }else{
            $data = ["message" => "Données non valides."];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function deleteCompetenceAction(Request $request){
        $data = [];
        $statusCode = 400;

        $content = $request->getContent();
        if(!empty($content)){
            $content = json_decode($content,true);
            $id = $content["id"];
        }
        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            $e = $em->getRepository("UserBundle:Competence")->findOneBy(['user' => $user,'id' => $id]);
            if($e != null){
                $em->remove($e);
                $em->flush();
                $statusCode = 200;
                $data = [
                    "success" => true,
                    "message" => "Element supprimé avec succès."
                ];
            }else{
                $statusCode = 400;
                $data = [
                    "success" => false,
                    "message" => "Element introuvable."
                ];
            }
        }else{
            $statusCode = 400;
            $data = [
                "success" => false,
                "message" => "Impossible d'accéder à cette donnée."
            ];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function getCompetencesAction(Request $request){
        $data = [];
        $statusCode = 404;
        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        $id = $request->get("id");
        if (true) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository("UserBundle:User")->findOneById($id);
            if(!$entity){
                $data = ["message" => "Erreur 2010 : Element introuvable."];    
            }else{
                $user = $token->getUser();
                $statusCode = 200;
                $exp = [];
                $isTheCurrentUser = ($user == $entity) ? true : false;
                foreach($entity->getCompetences() as $e){
                    array_push($exp,$e->getJSON($isTheCurrentUser));
                }
                $data = ['data' => $exp];
            }
        }else{
            $data = ["message" => "Erreur 2022 : Element introuvable."];
        }
        $response = new Response(json_encode(
            $data
        ));
        $response->setStatusCode($statusCode);
        return $response;
    }




    public function addFormationAction(Request $request){
        $data = [];
        $statusCode = 400;
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            if($request->getMethod() == "POST"){
                $content = $request->getContent();

                if(!empty($content)){
                    $params = json_decode($content,true);
                    
                    $ecole = $params['ecole'];
                    $diplome = $params['diplome'];
                    $debut = $params['debut'];
                    $fin = $params['fin'];
                    $e = new Formation();
                    $e->setEcole($ecole);
                    $e->setUser($user);
                    $e->setDiplome($diplome);
                    $e->setDateDebut($debut);
                    $e->setDateFin($fin);
                    $res = FormationValidator::isValid($e);
                    if($res['success']){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($e);
                        $em->flush();
                        $statusCode = 200;
                        $data = $e->getJSON(true);
                    }else{
                        $data = ["message" => "Données non valides."];
                    }
                }else{
                    $data = ["message" => "Données non valides."];
                }
            }
        }else{
            $data = ["message" => "Données non valides."];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function deleteFormationAction(Request $request){
        $data = [];
        $statusCode = 400;

        $content = $request->getContent();
        if(!empty($content)){
            $content = json_decode($content,true);
            $id = $content["id"];
        }
        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        if (null !== $token && is_object($token->getUser())) {
            $user = $token->getUser();
            $e = $em->getRepository("UserBundle:Formation")->findOneBy(['user' => $user,'id' => $id]);
            if($e != null){
                $em->remove($e);
                $em->flush();
                $statusCode = 200;
                $data = [
                    "success" => true,
                    "message" => "Element supprimé avec succès."
                ];
            }else{
                $statusCode = 400;
                $data = [
                    "success" => false,
                    "message" => "Element introuvable."
                ];
            }
        }else{
            $statusCode = 400;
            $data = [
                "success" => false,
                "message" => "Impossible d'accéder à cette donnée."
            ];
        }
        $response = new Response(json_encode($data));
        $response->setStatusCode($statusCode);
        return $response;
    }

    public function getFormationsAction(Request $request){
        $data = [];
        $statusCode = 404;
        $em = $this->getDoctrine()->getManager();
        $tokenStorage = $this->get('security.token_storage');
        $user = null;
        $token = $tokenStorage->getToken();
        $id = $request->get("id");
        if (true) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository("UserBundle:User")->findOneById($id);
            if(!$entity){
                $data = ["message" => "Erreur 3003 : Element introuvable."];    
            }else{
                $user = $token->getUser();
                $statusCode = 200;
                $exp = [];
                $isTheCurrentUser = ($user == $entity) ? true : false;
                foreach($entity->getFormations() as $e){
                    array_push($exp,$e->getJSON($isTheCurrentUser));
                }
                $data = ['data' => $exp];
            }
        }else{
            $data = ["message" => "Erreur 30213 : Element introuvable."];
        }
        $response = new Response(json_encode(
            $data
        ));
        $response->setStatusCode($statusCode);
        return $response;
    }


}