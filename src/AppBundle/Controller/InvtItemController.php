<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtItem;
use AppBundle\Form\InvtItemType;

/**
 * InvtItem controller.
 *
 * @Route("/invtitem")
 */
class InvtItemController extends Controller
{
    /**
     * Lists all InvtItem entities.
     *
     * @Route("/", name="invtitem_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtItems = $em->getRepository('AppBundle:InvtItem')->findAll();

        return $this->render('invtitem/index.html.twig', array(
            'invtItems' => $invtItems,
        ));
    }

    /**
     * Creates a new InvtItem entity.
     *
     * @Route("/new", name="invtitem_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtItem = new InvtItem();
        $invtItem->setValuation('FIFO');
        $form = $this->createForm('AppBundle\Form\InvtItemType', $invtItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtItem);
            $em->flush();

            return $this->redirectToRoute('invtitem_show', array('id' => $invtItem->getId()));
        }

        return $this->render('invtitem/new.html.twig', array(
            'invtItem' => $invtItem,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtItem entity.
     *
     * @Route("/{id}", name="invtitem_show")
     * @Method("GET")
     */
    public function showAction(InvtItem $invtItem)
    {
        $deleteForm = $this->createDeleteForm($invtItem);

        return $this->render('invtitem/show.html.twig', array(
            'invtItem' => $invtItem,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtItem entity.
     *
     * @Route("/{id}/edit", name="invtitem_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtItem $invtItem)
    {
        $deleteForm = $this->createDeleteForm($invtItem);
        $editForm = $this->createForm('AppBundle\Form\InvtItemType', $invtItem);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtItem);
            $em->flush();

            return $this->redirectToRoute('invtitem_edit', array('id' => $invtItem->getId()));
        }

        return $this->render('invtitem/edit.html.twig', array(
            'invtItem' => $invtItem,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtItem entity.
     *
     * @Route("/{id}", name="invtitem_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtItem $invtItem)
    {
        $form = $this->createDeleteForm($invtItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtItem);
            $em->flush();
        }

        return $this->redirectToRoute('invtitem_index');
    }

    /**
     * Creates a form to delete a InvtItem entity.
     *
     * @param InvtItem $invtItem The InvtItem entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtItem $invtItem)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtitem_delete', array('id' => $invtItem->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
