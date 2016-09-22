<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Pumper;
use AppBundle\Form\PumperType;

/**
 * Pumper controller.
 *
 * @Route("/pumper")
 */
class PumperController extends Controller
{
    /**
     * Lists all Pumper entities.
     *
     * @Route("/", name="pumper_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pumpers = $em->getRepository('AppBundle:Pumper')->findAll();

        return $this->render('pumper/index.html.twig', array(
            'pumpers' => $pumpers,
        ));
    }

    /**
     * Creates a new Pumper entity.
     *
     * @Route("/new", name="pumper_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pumper = new Pumper();
        $form = $this->createForm('AppBundle\Form\PumperType', $pumper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pumper);
            $em->flush();

            return $this->redirectToRoute('pumper_show', array('id' => $pumper->getId()));
        }

        return $this->render('pumper/new.html.twig', array(
            'pumper' => $pumper,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pumper entity.
     *
     * @Route("/{id}", name="pumper_show")
     * @Method("GET")
     */
    public function showAction(Pumper $pumper)
    {
        $deleteForm = $this->createDeleteForm($pumper);

        return $this->render('pumper/show.html.twig', array(
            'pumper' => $pumper,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pumper entity.
     *
     * @Route("/{id}/edit", name="pumper_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pumper $pumper)
    {
        $deleteForm = $this->createDeleteForm($pumper);
        $editForm = $this->createForm('AppBundle\Form\PumperType', $pumper);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pumper);
            $em->flush();

            return $this->redirectToRoute('pumper_edit', array('id' => $pumper->getId()));
        }

        return $this->render('pumper/edit.html.twig', array(
            'pumper' => $pumper,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pumper entity.
     *
     * @Route("/{id}", name="pumper_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pumper $pumper)
    {
        $form = $this->createDeleteForm($pumper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pumper);
            $em->flush();
        }

        return $this->redirectToRoute('pumper_index');
    }

    /**
     * Creates a form to delete a Pumper entity.
     *
     * @param Pumper $pumper The Pumper entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pumper $pumper)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pumper_delete', array('id' => $pumper->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
