<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Entity\Category;
use MainBundle\Form\CategoryType;

class CategoryController extends Controller{

    public function createAction(Request $request){
        $entity = new Category();
        $form = $this->createForm(CategoryType::class,$entity);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirectToRoute("category_read",["id" => $entity->getId()]);
        }
        return $this->render("@Main/Category/form.html.twig",[
            "entity" => $entity,
            "form" => $form->createView()
        ]);
    }

    public function readAction(Category $entity, Request $request){
        return $this->render("@Main/Category/read.html.twig",["entity" => $entity]);
    }

    public function updateAction(Category $entity, Request $request){
        $form = $this->createForm(CategoryType::class,$entity);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirectToRoute("category_read",["id" => $entity->getId()]);
        }
        return $this->render("@Main/Todo/form.html.twig",[
            "entity" => $entity,
            "form" => $form->createView()
        ]);
    }

    public function deleteAction(Request $request){
        $id = $request->request->get("id");
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("MainBundle:Category")->findOneById($id);
        if($entity == null){
            $this->addFlash("error","Invalid credentials.");
        }else{
            $em->remove($entity);
            $em->flush();
            $this->addFlash("success","Category successfully deleted.");
        }
        return $this->redirectToRoute("category_list");
    }

    public function listAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("MainBundle:Category")->findAll();
        return $this->render("@Main/Category/list.html.twig",["entities" => $entities]);
    }

}
