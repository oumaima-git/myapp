<?php

namespace App\Controller;
use App\Entity\Cabinett;
use App\Form\PatientType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class CabinetController extends AbstractController
{
  /**
     * @Route("/", name="cabinet.list", methods="GET")
     *
     */
    public function list(): Response
    {
        $cab= $this->getDoctrine()->getRepository(Cabinett::class)->findAll();
        return  $this->render('cabinet/list.html.twig',['cab' => $cab]);  
      }

      /**
     * Creates a new job entity.
     *
     * @Route("/cabinet/create", name="cabinet.create", methods={"GET", "POST"})
     *
     * @return Response
     */
    public function create(Request $request) : Response
    {
        $cat = new Cabinett();
        $form = $this->createForm(PatientType::class, $cat);

        $form->handleRequest($request);
  
        if($form->isSubmitted() && $form->isValid()) {
          $cat = $form->getData();
  
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($cat);
          $entityManager->flush();
          
  
          return $this->redirectToRoute('cabinet.list');
        }
        return $this->render('cabinet/create.html.twig',['form' => $form->createView()]);
    }
    /**
     *
     * @Route("/cabinet/{id}", name="cabinet.show", methods="GET", requirements={"id":"\d+"})
     */
    public function show($id) : Response
    {
        $cabinet = $this->getDoctrine()->getRepository(cabinett::class)->find($id);
  
        return $this->render('cabinet/show.html.twig', array('cabinet' => $cabinet));
      }

      
/**
     * @Route("/cabinet/edit/{id}", name="cabinet.edit")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $cabinet = new cabinett();
        $cabinet = $this->getDoctrine()->getRepository(cabinett::class)->find($id);
  
        $form = $this->createForm(PatientType::class,$cabinet);
  
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
  
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
          $this->addFlash('success','Patient edited!');
  
          return $this->redirectToRoute('cabinet.list');
        }
  
        return $this->render('cabinet/edit.html.twig', ['form' => $form->createView()]);
      }
      /**
     * @Route("/cabinet/delete/{id}",name="cabinet.delete")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $cabinet = $this->getDoctrine()->getRepository(cabinett::class)->find($id);
  
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($cabinet);
        $entityManager->flush();
        $this->addFlash('success','Patient deleted!');
  
  
        $response = new Response();
        $response->send();
  
        return $this->redirectToRoute('cabinet.list');
      }
}
