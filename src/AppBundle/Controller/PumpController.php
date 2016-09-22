<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Pump;
use AppBundle\Form\PumpType;

/**
 * Pump controller.
 *
 * @Route("/pump")
 */
class PumpController extends Controller
{
    /**
     * Lists all Pump entities.
     *
     * @Route("/", name="pump_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pumps = $em->getRepository('AppBundle:Pump')->findAll();

        return $this->render('pump/index.html.twig', array(
            'pumps' => $pumps,
        ));
    }

    /**
     * Creates a new Pump entity.
     *
     * @Route("/new", name="pump_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pump = new Pump();
        $form = $this->createForm('AppBundle\Form\PumpType', $pump);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pump);
            $em->flush();

            return $this->redirectToRoute('pump_show', array('id' => $pump->getId()));
        }

        return $this->render('pump/new.html.twig', array(
            'pump' => $pump,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pump entity.
     *
     * @Route("/{id}", name="pump_show")
     * @Method("GET")
     */
    public function showAction(Pump $pump)
    {
        $deleteForm = $this->createDeleteForm($pump);

        return $this->render('pump/show.html.twig', array(
            'pump' => $pump,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pump entity.
     *
     * @Route("/{id}/edit", name="pump_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pump $pump)
    {
        $deleteForm = $this->createDeleteForm($pump);
        $editForm = $this->createForm('AppBundle\Form\PumpType', $pump);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pump);
            $em->flush();

            return $this->redirectToRoute('pump_edit', array('id' => $pump->getId()));
        }

        return $this->render('pump/edit.html.twig', array(
            'pump' => $pump,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pump entity.
     *
     * @Route("/{id}", name="pump_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pump $pump)
    {
        $form = $this->createDeleteForm($pump);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pump);
            $em->flush();
        }

        return $this->redirectToRoute('pump_index');
    }

    /**
     * Creates a form to delete a Pump entity.
     *
     * @param Pump $pump The Pump entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pump $pump)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pump_delete', array('id' => $pump->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
