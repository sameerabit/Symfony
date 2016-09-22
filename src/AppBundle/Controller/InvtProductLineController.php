<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtProductLine;
use AppBundle\Form\InvtProductLineType;

/**
 * InvtProductLine controller.
 *
 * @Route("/invtproductline")
 */
class InvtProductLineController extends Controller
{
    /**
     * Lists all InvtProductLine entities.
     *
     * @Route("/", name="invtproductline_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtProductLines = $em->getRepository('AppBundle:InvtProductLine')->findAll();

        return $this->render('invtproductline/index.html.twig', array(
            'invtProductLines' => $invtProductLines,
        ));
    }

    /**
     * Creates a new InvtProductLine entity.
     *
     * @Route("/new", name="invtproductline_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtProductLine = new InvtProductLine();
        $form = $this->createForm('AppBundle\Form\InvtProductLineType', $invtProductLine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtProductLine);
            $em->flush();

            return $this->redirectToRoute('invtproductline_show', array('id' => $invtProductLine->getId()));
        }

        return $this->render('invtproductline/new.html.twig', array(
            'invtProductLine' => $invtProductLine,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtProductLine entity.
     *
     * @Route("/{id}", name="invtproductline_show")
     * @Method("GET")
     */
    public function showAction(InvtProductLine $invtProductLine)
    {
        $deleteForm = $this->createDeleteForm($invtProductLine);

        return $this->render('invtproductline/show.html.twig', array(
            'invtProductLine' => $invtProductLine,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtProductLine entity.
     *
     * @Route("/{id}/edit", name="invtproductline_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtProductLine $invtProductLine)
    {
        $deleteForm = $this->createDeleteForm($invtProductLine);
        $editForm = $this->createForm('AppBundle\Form\InvtProductLineType', $invtProductLine);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtProductLine);
            $em->flush();

            return $this->redirectToRoute('invtproductline_edit', array('id' => $invtProductLine->getId()));
        }

        return $this->render('invtproductline/edit.html.twig', array(
            'invtProductLine' => $invtProductLine,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtProductLine entity.
     *
     * @Route("/{id}", name="invtproductline_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtProductLine $invtProductLine)
    {
        $form = $this->createDeleteForm($invtProductLine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtProductLine);
            $em->flush();
        }

        return $this->redirectToRoute('invtproductline_index');
    }

    /**
     * Creates a form to delete a InvtProductLine entity.
     *
     * @param InvtProductLine $invtProductLine The InvtProductLine entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtProductLine $invtProductLine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtproductline_delete', array('id' => $invtProductLine->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
