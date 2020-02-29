<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@User/Default/index.html.twig');
    }

    public function aproposAction(Request $request){
        return $this->render("@User/Default/about.html.twig");
    }

    public function equipeAction(Request $request){
        return $this->render("@User/Default/team.html.twig");
    }

    public function planDuSiteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $urls = array();
        $hostname = $request->getSchemeAndHttpHost();
 
        // add static urls
        $urls[] = array('loc' => $this->generateUrl('home'));
        $urls[] = array('loc' => $this->generateUrl('contact'));
        $urls[] = array('loc' => $this->generateUrl('offers'));
         
        // add static urls with optional tags
        $urls[] = array('loc' => $this->generateUrl('connexion'), 'changefreq' => 'monthly', 'priority' => '1.0');
        $urls[] = array('loc' => $this->generateUrl('politique_cookie'), 'lastmod' => '2019-05-05');
        $urls[] = array('loc' => $this->generateUrl('politique_confidentialite'), 'lastmod' => '2019-05-05');
        $urls[] = array('loc' => $this->generateUrl('securite_hammeconnage'), 'lastmod' => '2019-05-05');
         
        // add dynamic urls, like blog posts from your DB
        foreach ($em->getRepository('MainBundle:JobOffer')->findBy(['isPusblished' => true]) as $offer) {
            $urls[] = array(
                'loc' => $this->generateUrl('joboffer_view', array('slug' => $offer->getSlug()))
            );
        }
 
        // add image urls
        $articles = $em->getRepository('MainBundle:Article')->findBy(['isPublished' => true]);
        foreach ($articles as $item) {
            $images = array(
                'loc' => $this->getParameter("articles_directory").'/'.$item->getImage(), // URL to image
                'title' => $item->getTitle()    // Optional, text describing the image
            );
 
            $urls[] = array(
                'loc' => $this->generateUrl('article_view', array('slug' => $item->getSlug())),
                'image' => $images              // set the images for this product url
            );
        }
       
 
        // return response in XML format
        $response = new Response(
            $this->renderView('@User/Default/sitemap.html.twig', array( 'urls' => $urls,
                'hostname' => $hostname)),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');
 
        return $response;
    }

    public function contactAction(Request $request)
    {
        $data = [];
        $form = $this->createFormBuilder($data)
        ->add("email",EmailType::class,['attr' => ['class' => 'form-control']])
        ->add("message",TextareaType::class,['attr' => ['class' => 'form-control','rows' => 10 ]])
        ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL) || count($data['message'])){
                $this->addFlash("error","Données non valides.");
            }else{
                $message = \Swift_Message::newInstance()
                        ->setSubject("Message de - ".$data['email'])
                        ->setFrom($data['email'])
                        ->setTo($this->getParameter("email"))
                        ->setBody($data['message']);
                $this->get("mailer")->send($message);
                return $this->redirectToRoute("contact");
            }
        }
        return $this->render('@User/Default/contact.html.twig',['form' => $form->createView()]);
    }
    public function droitAccesAction()
    {
        return $this->render('@User/Default/droit_acces.html.twig');
    }
    public function mentionsLegalesAction()
    {
        return $this->render('@User/Default/mentions_legales.html.twig');
    }
    public function politiqueCookiesAction()
    {
        return $this->render('@User/Default/politique_cookies.html.twig');
    }
    public function politiqueConfidentialiteAction()
    {
        return $this->render('@User/Default/politique_confidentialite.html.twig');
    }
    public function securiteHammeconnageAction()
    {
        return $this->render('@User/Default/securite_hammeconnage.html.twig');
    }

}
