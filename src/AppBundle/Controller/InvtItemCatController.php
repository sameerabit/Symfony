<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtItemCat;
use AppBundle\Form\InvtItemCatType;

/**
 * InvtItemCat controller.
 *
 * @Route("/invtitemcat")
 */
class InvtItemCatController extends Controller
{
    /**
     * Lists all InvtItemCat entities.
     *
     * @Route("/", name="invtitemcat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtItemCats = $em->getRepository('AppBundle:InvtItemCat')->findAll();

        return $this->render('invtitemcat/index.html.twig', array(
            'invtItemCats' => $invtItemCats,
        ));
    }

    /**
     * Creates a new InvtItemCat entity.
     *
     * @Route("/new", name="invtitemcat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtItemCat = new InvtItemCat();
        $form = $this->createForm('AppBundle\Form\InvtItemCatType', $invtItemCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtItemCat);
            $em->flush();

            return $this->redirectToRoute('invtitemcat_show', array('id' => $invtItemCat->getId()));
        }

        return $this->render('invtitemcat/new.html.twig', array(
            'invtItemCat' => $invtItemCat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtItemCat entity.
     *
     * @Route("/{id}", name="invtitemcat_show")
     * @Method("GET")
     */
    public function showAction(InvtItemCat $invtItemCat)
    {
        $deleteForm = $this->createDeleteForm($invtItemCat);

        return $this->render('invtitemcat/show.html.twig', array(
            'invtItemCat' => $invtItemCat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtItemCat entity.
     *
     * @Route("/{id}/edit", name="invtitemcat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtItemCat $invtItemCat)
    {
        $deleteForm = $this->createDeleteForm($invtItemCat);
        $editForm = $this->createForm('AppBundle\Form\InvtItemCatType', $invtItemCat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtItemCat);
            $em->flush();

            return $this->redirectToRoute('invtitemcat_edit', array('id' => $invtItemCat->getId()));
        }

        return $this->render('invtitemcat/edit.html.twig', array(
            'invtItemCat' => $invtItemCat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtItemCat entity.
     *
     * @Route("/{id}", name="invtitemcat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtItemCat $invtItemCat)
    {
        $form = $this->createDeleteForm($invtItemCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtItemCat);
            $em->flush();
        }

        return $this->redirectToRoute('invtitemcat_index');
    }

    /**
     * Creates a form to delete a InvtItemCat entity.
     *
     * @param InvtItemCat $invtItemCat The InvtItemCat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtItemCat $invtItemCat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtitemcat_delete', array('id' => $invtItemCat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
