<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtUomConversion;
use AppBundle\Form\InvtUomConversionType;

/**
 * InvtUomConversion controller.
 *
 * @Route("/invtuomconversion")
 */
class InvtUomConversionController extends Controller
{
    /**
     * Lists all InvtUomConversion entities.
     *
     * @Route("/", name="invtuomconversion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtUomConversions = $em->getRepository('AppBundle:InvtUomConversion')->findAll();

        return $this->render('invtuomconversion/index.html.twig', array(
            'invtUomConversions' => $invtUomConversions,
        ));
    }

    /**
     * Creates a new InvtUomConversion entity.
     *
     * @Route("/new", name="invtuomconversion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtUomConversion = new InvtUomConversion();
        $form = $this->createForm('AppBundle\Form\InvtUomConversionType', $invtUomConversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtUomConversion);
            $em->flush();

            return $this->redirectToRoute('invtuomconversion_show', array('id' => $invtUomConversion->getId()));
        }

        return $this->render('invtuomconversion/new.html.twig', array(
            'invtUomConversion' => $invtUomConversion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtUomConversion entity.
     *
     * @Route("/{id}", name="invtuomconversion_show")
     * @Method("GET")
     */
    public function showAction(InvtUomConversion $invtUomConversion)
    {
        $deleteForm = $this->createDeleteForm($invtUomConversion);

        return $this->render('invtuomconversion/show.html.twig', array(
            'invtUomConversion' => $invtUomConversion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtUomConversion entity.
     *
     * @Route("/{id}/edit", name="invtuomconversion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtUomConversion $invtUomConversion)
    {
        $deleteForm = $this->createDeleteForm($invtUomConversion);
        $editForm = $this->createForm('AppBundle\Form\InvtUomConversionType', $invtUomConversion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtUomConversion);
            $em->flush();

            return $this->redirectToRoute('invtuomconversion_edit', array('id' => $invtUomConversion->getId()));
        }

        return $this->render('invtuomconversion/edit.html.twig', array(
            'invtUomConversion' => $invtUomConversion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtUomConversion entity.
     *
     * @Route("/{id}", name="invtuomconversion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtUomConversion $invtUomConversion)
    {
        $form = $this->createDeleteForm($invtUomConversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtUomConversion);
            $em->flush();
        }

        return $this->redirectToRoute('invtuomconversion_index');
    }

    /**
     * Creates a form to delete a InvtUomConversion entity.
     *
     * @param InvtUomConversion $invtUomConversion The InvtUomConversion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtUomConversion $invtUomConversion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtuomconversion_delete', array('id' => $invtUomConversion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
