<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bank;
use AppBundle\Form\BankType;

/**
 * Bank controller.
 *
 * @Route("/bank")
 */
class BankController extends Controller
{
    /**
     * Lists all Bank entities.
     *
     * @Route("/", name="bank_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $banks = $em->getRepository('AppBundle:Bank')->findAll();

        return $this->render('bank/index.html.twig', array(
            'banks' => $banks,
        ));
    }

    /**
     * Creates a new Bank entity.
     *
     * @Route("/new", name="bank_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bank = new Bank();
        $form = $this->createForm('AppBundle\Form\BankType', $bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bank);
            $em->flush();

            return $this->redirectToRoute('bank_show', array('id' => $bank->getId()));
        }

        return $this->render('bank/new.html.twig', array(
            'bank' => $bank,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bank entity.
     *
     * @Route("/{id}", name="bank_show")
     * @Method("GET")
     */
    public function showAction(Bank $bank)
    {
        $deleteForm = $this->createDeleteForm($bank);

        return $this->render('bank/show.html.twig', array(
            'bank' => $bank,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bank entity.
     *
     * @Route("/{id}/edit", name="bank_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bank $bank)
    {
        $deleteForm = $this->createDeleteForm($bank);
        $editForm = $this->createForm('AppBundle\Form\BankType', $bank);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bank);
            $em->flush();

            return $this->redirectToRoute('bank_edit', array('id' => $bank->getId()));
        }

        return $this->render('bank/edit.html.twig', array(
            'bank' => $bank,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bank entity.
     *
     * @Route("/{id}", name="bank_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bank $bank)
    {
        $form = $this->createDeleteForm($bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bank);
            $em->flush();
        }

        return $this->redirectToRoute('bank_index');
    }

    /**
     * Creates a form to delete a Bank entity.
     *
     * @param Bank $bank The Bank entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bank $bank)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bank_delete', array('id' => $bank->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
