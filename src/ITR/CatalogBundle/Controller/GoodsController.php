<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\CatalogBundle\Entity\Goods;
use ITR\CatalogBundle\Form\GoodsType;

/**
 * Goods controller.
 *
 */
class GoodsController extends Controller
{

    /**
     * Lists all Goods entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CatalogBundle:Goods')->findAll();

        return $this->render('CatalogBundle:Goods:index.html.twig', array(
            'entities' => $this->getPagination($entities),
        ));
    }
    /**
     * Creates a new Goods entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Goods();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('goods_show', array('id' => $entity->getId())));
        }

        return $this->render('CatalogBundle:Goods:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Goods entity.
     *
     * @param Goods $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Goods $entity)
    {
        $form = $this->createForm(new GoodsType(), $entity, array(
            'action' => $this->generateUrl('goods_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Goods entity.
     *
     */
    public function newAction()
    {
        $entity = new Goods();
        $form   = $this->createCreateForm($entity);

        return $this->render('CatalogBundle:Goods:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Goods entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Goods:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Goods entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Goods:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Goods entity.
    *
    * @param Goods $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Goods $entity)
    {
        $form = $this->createForm(new GoodsType(), $entity, array(
            'action' => $this->generateUrl('goods_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Goods entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('goods_edit', array('id' => $id)));
        }

        return $this->render('CatalogBundle:Goods:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Goods entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CatalogBundle:Goods')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Goods entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('goods'));
    }

    /**
     * Creates a form to delete a Goods entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goods_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    private function getPagination($object,$pages=10){
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $object,
            $this->get('request')->query->get('page', 1)/*page number*/,
            $pages/*limit per page*/
        );
        return $pagination;
    }
}
