<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use MainBundle\Form\TodoType;
use MainBundle\Entity\Todo;

class TodoController extends Controller{

    public function createAction(Request $request){
        $entity = new Todo();
        $form = $this->createForm(TodoType::class,$entity);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            if($entity->getContent() == null){
                $this->addFlash("error","You need to provide a content.");
            }elseif($entity->getDueDate() == null){
                $this->addFlash("error","You need to provide a due date.");
            }else{
                $dueDate = \DateTime::createFromFormat("m/d/Y",$entity->getDueDate());
                $entity->setDueDate($dueDate);
    
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirectToRoute("todo_read",["id" => $entity->getId()]);
            }

        }
        return $this->render("@Main/Todo/form.html.twig",[
            "entity" => $entity,
            "form" => $form->createView()
        ]);
    }

    public function readAction(Todo $entity,Request $request){
        return $this->render("@Main/Todo/read.html.twig",["entity" => $entity]);
    }

    public function updateAction(Todo $entity,Request $request){
        $form = $this->createForm(TodoType::class,$entity);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){

            $dueDate = \DateTime::createFromFormat("m/d/Y",$entity->getDueDate());
            $entity->setDueDate($dueDate);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirectToRoute("todo_read",["id" => $entity->getId()]);
        }
        return $this->render("@Main/Todo/form.html.twig",[
            "entity" => $entity,
            "form" => $form->createView()
        ]);
    }

    public function deleteAction(Request $request){
        $id = $request->request->get("id");
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("MainBundle:Todo")->findOneById($id);
        if($entity == null){
            $this->addFlash("error","Invalid credentials.");
        }else{
            $em->remove($entity);
            $em->flush();
            $this->addFlash("success","Todo successfully deleted.");
        }
        return $this->redirectToRoute("todo_list");
    }

    public function listAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("MainBundle:Todo")->findAll();
        return $this->render("@Main/Todo/list.html.twig",['entities' => $entities]);
    }

    public function checkAction(Request $request){
        $response = new JsonResponse();
        $id = $request->request->get("id");
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("MainBundle:Todo")->findOneById($id);
        if($entity == null){
            $response->setStatusCode(404);
        }else{
            $entity->setIsDone(true);
            $em->persist($entity);
            $em->flush();
            $response->setStatusCode(200);
        }
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}