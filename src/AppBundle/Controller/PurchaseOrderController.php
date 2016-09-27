<?php

namespace AppBundle\Controller;

use AppBundle\Entity\InvtItem;
use AppBundle\Entity\PurchaseOrderDetails;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\PurchaseOrder;
use AppBundle\Form\PurchaseOrderType;

/**
 * PurchaseOrder controller.
 *
 * @Route("/purchaseorder")
 */
class PurchaseOrderController extends Controller
{
    /**
     * Lists all PurchaseOrder entities.
     *
     * @Route("/", name="purchaseorder_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchaseOrders = $em->getRepository('AppBundle:PurchaseOrder')->findAll();

        return $this->render('purchaseorder/index.html.twig', array(
            'purchaseOrders' => $purchaseOrders,
        ));
    }

    /**
     * Creates a new PurchaseOrder entity.
     *
     * @Route("/new", name="purchaseorder_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $purchaseOrder = new PurchaseOrder();

        $purchaseOrder->setIsGrn(0);
        $form = $this->createForm(PurchaseOrderType::class, $purchaseOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            /** @var PurchaseOrderDetails $detail */
//            foreach ($purchaseOrder->getPurchaseOrderDetails() as &$detail){
//                $itemId=$detail->getIdItem()->getId();
//                /** @var InvtItem $item */
//                $item=$em->find(InvtItem::class,$itemId);
//                $detail->setIdItem($item);
//              //  $detail->setPurchaseOrder($purchaseOrder);
//                $purchaseOrder->getPurchaseOrderDetails()->add($detail);
//            }
            $puchaseOrderDetail = new PurchaseOrderDetails();
            $puchaseOrderDetail->setPrice(100);
            $purchaseOrder->setPurchaseOrderDetails($puchaseOrderDetail);
            $puchaseOrderDetail->setPurchaseOrder($purchaseOrder);
            $em->persist($purchaseOrder);
            $em->flush();
            return $this->redirectToRoute('purchaseorder_show', array('id' => $purchaseOrder->getId()));
        }

        return $this->render('purchaseorder/new.html.twig', array(
            'purchaseOrder' => $purchaseOrder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PurchaseOrder entity.
     *
     * @Route("/{id}", name="purchaseorder_show")
     * @Method("GET")
     */
    public function showAction(PurchaseOrder $purchaseOrder)
    {
        $deleteForm = $this->createDeleteForm($purchaseOrder);

        return $this->render('purchaseorder/show.html.twig', array(
            'purchaseOrder' => $purchaseOrder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PurchaseOrder entity.
     *
     * @Route("/{id}/edit", name="purchaseorder_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PurchaseOrder $purchaseOrder)
    {
        $deleteForm = $this->createDeleteForm($purchaseOrder);
        $editForm = $this->createForm('AppBundle\Form\PurchaseOrderType', $purchaseOrder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($purchaseOrder);
            $em->flush();

            return $this->redirectToRoute('purchaseorder_edit', array('id' => $purchaseOrder->getId()));
        }

        return $this->render('purchaseorder/edit.html.twig', array(
            'purchaseOrder' => $purchaseOrder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PurchaseOrder entity.
     *
     * @Route("/{id}", name="purchaseorder_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PurchaseOrder $purchaseOrder)
    {
        $form = $this->createDeleteForm($purchaseOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($purchaseOrder);
            $em->flush();
        }

        return $this->redirectToRoute('purchaseorder_index');
    }

    /**
     * Creates a form to delete a PurchaseOrder entity.
     *
     * @param PurchaseOrder $purchaseOrder The PurchaseOrder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PurchaseOrder $purchaseOrder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchaseorder_delete', array('id' => $purchaseOrder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
