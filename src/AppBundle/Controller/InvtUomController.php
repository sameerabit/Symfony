<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtUom;
use AppBundle\Form\InvtUomType;

/**
 * InvtUom controller.
 *
 * @Route("/invtuom")
 */
class InvtUomController extends Controller
{
    /**
     * Lists all InvtUom entities.
     *
     * @Route("/", name="invtuom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtUoms = $em->getRepository('AppBundle:InvtUom')->findAll();

        return $this->render('invtuom/index.html.twig', array(
            'invtUoms' => $invtUoms,
        ));
    }

    /**
     * Creates a new InvtUom entity.
     *
     * @Route("/new", name="invtuom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtUom = new InvtUom();
        $form = $this->createForm('AppBundle\Form\InvtUomType', $invtUom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtUom);
            $em->flush();

            return $this->redirectToRoute('invtuom_show', array('id' => $invtUom->getId()));
        }

        return $this->render('invtuom/new.html.twig', array(
            'invtUom' => $invtUom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtUom entity.
     *
     * @Route("/{id}", name="invtuom_show")
     * @Method("GET")
     */
    public function showAction(InvtUom $invtUom)
    {
        $deleteForm = $this->createDeleteForm($invtUom);

        return $this->render('invtuom/show.html.twig', array(
            'invtUom' => $invtUom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtUom entity.
     *
     * @Route("/{id}/edit", name="invtuom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtUom $invtUom)
    {
        $deleteForm = $this->createDeleteForm($invtUom);
        $editForm = $this->createForm('AppBundle\Form\InvtUomType', $invtUom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtUom);
            $em->flush();

            return $this->redirectToRoute('invtuom_edit', array('id' => $invtUom->getId()));
        }

        return $this->render('invtuom/edit.html.twig', array(
            'invtUom' => $invtUom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtUom entity.
     *
     * @Route("/{id}", name="invtuom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtUom $invtUom)
    {
        $form = $this->createDeleteForm($invtUom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtUom);
            $em->flush();
        }

        return $this->redirectToRoute('invtuom_index');
    }

    /**
     * Creates a form to delete a InvtUom entity.
     *
     * @param InvtUom $invtUom The InvtUom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtUom $invtUom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtuom_delete', array('id' => $invtUom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
