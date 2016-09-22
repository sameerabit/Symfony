<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\InvtWarehouses;
use AppBundle\Form\InvtWarehousesType;

/**
 * InvtWarehouses controller.
 *
 * @Route("/invtwarehouses")
 */
class InvtWarehousesController extends Controller
{
    /**
     * Lists all InvtWarehouses entities.
     *
     * @Route("/", name="invtwarehouses_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invtWarehouses = $em->getRepository('AppBundle:InvtWarehouses')->findAll();

        return $this->render('invtwarehouses/index.html.twig', array(
            'invtWarehouses' => $invtWarehouses,
        ));
    }

    /**
     * Creates a new InvtWarehouses entity.
     *
     * @Route("/new", name="invtwarehouses_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $invtWarehouse = new InvtWarehouses();
        $form = $this->createForm('AppBundle\Form\InvtWarehousesType', $invtWarehouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtWarehouse);
            $em->flush();

            return $this->redirectToRoute('invtwarehouses_show', array('id' => $invtWarehouse->getId()));
        }

        return $this->render('invtwarehouses/new.html.twig', array(
            'invtWarehouse' => $invtWarehouse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvtWarehouses entity.
     *
     * @Route("/{id}", name="invtwarehouses_show")
     * @Method("GET")
     */
    public function showAction(InvtWarehouses $invtWarehouse)
    {
        $deleteForm = $this->createDeleteForm($invtWarehouse);

        return $this->render('invtwarehouses/show.html.twig', array(
            'invtWarehouse' => $invtWarehouse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvtWarehouses entity.
     *
     * @Route("/{id}/edit", name="invtwarehouses_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InvtWarehouses $invtWarehouse)
    {
        $deleteForm = $this->createDeleteForm($invtWarehouse);
        $editForm = $this->createForm('AppBundle\Form\InvtWarehousesType', $invtWarehouse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invtWarehouse);
            $em->flush();

            return $this->redirectToRoute('invtwarehouses_edit', array('id' => $invtWarehouse->getId()));
        }

        return $this->render('invtwarehouses/edit.html.twig', array(
            'invtWarehouse' => $invtWarehouse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InvtWarehouses entity.
     *
     * @Route("/{id}", name="invtwarehouses_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InvtWarehouses $invtWarehouse)
    {
        $form = $this->createDeleteForm($invtWarehouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invtWarehouse);
            $em->flush();
        }

        return $this->redirectToRoute('invtwarehouses_index');
    }

    /**
     * Creates a form to delete a InvtWarehouses entity.
     *
     * @param InvtWarehouses $invtWarehouse The InvtWarehouses entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InvtWarehouses $invtWarehouse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invtwarehouses_delete', array('id' => $invtWarehouse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
