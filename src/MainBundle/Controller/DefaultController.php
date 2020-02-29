<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Entity\JobOffer;
use MainBundle\Entity\User;
use MainBundle\Entity\Company;
use MainBundle\Entity\Article;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public function nos_servicesAction(Request $request){
        return $this->render("@Main/Default/nos_services.html.twig");
    }

    public function carouselAction(){

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("MainBundle:Article")->findBy(['isPublished' => true],[],3, 'DESC');

        return $this->render("@Main/Default/carousel.html.twig",[
            'entities' => $entities,
        ]);
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $offers = $em->getRepository("MainBundle:JobOffer")->findAll();
        $users = $em->getRepository("UserBundle:User")->findAll();
        $companies = $em->getRepository("MainBundle:Company")->findAll();
        $articles = $em->getRepository("MainBundle:Article")->findAll();
        return $this->render('@Main/Default/index.html.twig',[
            "offers" => $offers,
            "users" => $users,
            "companies" => $companies,
            "articles" => $articles,
        ]);
    }

    public function chooseAction(){
        return $this->render("@Main/Default/choose.html.twig",[]);
    }

    public function recruitmentAction(){
        return $this->render("@Main/Default/recruitment.html.twig",[]);
    }

    public function offersAction(){
        return $this->render("@Main/Default/offers.html.twig",[]);
    }

    public function interimAction(){
        return $this->render("@Main/Default/interim.html.twig",[]);
    }

    public function company_homeAction(){
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository("MainBundle:Article")
        ->findBy(['isPublished' => true],['createdOn' => 'DESC'],3);

        $cities = $em->getRepository("MainBundle:City")
        ->findBy([],['popularity' => 'DESC'],6);

        $categories = $em->getRepository("MainBundle:Category")
        ->findBy([],['popularity' => 'DESC'],6);

        $metiers = $em->getRepository("MainBundle:Metier")
        ->findBy([],['popularity' => 'DESC'],6);

        $contracts = $em->getRepository("MainBundle:ContractType")
        ->findBy([],['popularity' => 'DESC'],6);

        return $this->render("@Main/Default/company_home.html.twig",[
            'articles' => $articles,
            'cities' => $cities, 'categories' => $categories,
            'metiers' => $metiers, 'contracts' => $contracts,
        ]);
    }
    public function user_homeAction(){
        $em = $this->getDoctrine()->getManager();
        $offers = $em->getRepository("MainBundle:JobOffer")->findBy(['isPusblished' => true]);
        $_offers = $em->getRepository("MainBundle:JobOffer")->findBy(['isPusblished' => true],['createdOn' => 'DESC'],3);
        return $this->render("@Main/Default/user_home.html.twig",[
            "_offers" => $_offers,
            "size" => count($offers)
        ]);
    }

    public function reussirSonCVAction(Request $request){
        return $this->render("@Main/Default/reussir_son_cv.html.twig",[]);
    }

    public function reussirSonEntretienAction(Request $request){
        return $this->render("@Main/Default/reussir_son_entretien.html.twig",[]);
    }

    public function optimiserSaRechercheEmploiAction(Request $request){
        return $this->render("@Main/Default/optimiser_sa_recherche_emploi.html.twig",[]);
    }

    public function gererSonParcoursProfessionnelAction(Request $request){
        return $this->render("@Main/Default/gerer_son_parcours_professionnel.html.twig",[]);
    }

    public function votreCandidatureEnQuestionAction(Request $request){
        return $this->render("@Main/Default/gerer_son_parcours_professionnel.html.twig",[]);
    }

    public function toutSavoirSurLeCdiInterimaireAction(Request $request){
        return $this->render("@Main/Default/gerer_son_parcours_professionnel.html.twig",[]);
    }

    public function votreRemunerationEnBrefAction(Request $request){
        return $this->render("@Main/Default/votre_remuneration_en_bref.html.twig",[]);
    }

    //
    public function candidatureSpontaneeAction(Request $request){
        return $this->render("@Main/Default/candidature_spontanee.html.twig",[]);
    }
    public function emploiTempsPartielAction(Request $request){
        return $this->render("@Main/Default/emploi_temps_partiel.html.twig",[]);
    }
    public function cibleRhRecrutePourCibleRHAction(Request $request){
        return $this->render("@Main/Default/cible_rh_recrute.html.twig",[]);
    }
    public function nosValeursAction(Request $request){
        return $this->render("@Main/Default/nos_valeurs.html.twig",[]);
    }

    public function rapportRseAction(Request $request){
        return $this->render("@Main/Default/rapport_rse.html.twig",[]);
    }

    public function avisSurCibleRhAction(Request $request){
        return $this->render("@Main/Default/avis_sur_cible_rh.html.twig",[]);
    }    

    public function vousRecherchezUneEntrepriseAction(Request $request){
        return $this->render("@Main/Default/vous_recherchez_une_entreprise.html.twig",[]);
    }    

    public function usersAction(Request $request){
        

        $comp = $request->query->get('comp');
        
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $query = $qb->select(array('t'))
        ->from('UserBundle:User', 't')
        ->where("t.isActive = true");


        if(in_array($comp,['',null]) == false){

            $query->leftJoin('t.competences','competences')
            ->andWhere("competences.title LIKE :w")
            ->setParameter("w",'%'.$comp.'%');

        }


        $_entities_ = $query->getQuery()->getResult();
        
        $entities = $this->get("knp_paginator")->paginate($_entities_,$request->query->get('page',1));
        return $this->render("MainBundle:Default:users.html.twig",
        ['entities' => $entities, 'comp' => $comp]);
    }

}
