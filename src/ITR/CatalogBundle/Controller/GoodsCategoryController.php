<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\CatalogBundle\Entity\GoodsCategory;
use ITR\CatalogBundle\Form\GoodsCategoryType;

/**
 * GoodsCategory controller.
 *
 */
class GoodsCategoryController extends Controller
{

    /**
     * Lists all GoodsCategory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CatalogBundle:GoodsCategory')->findAll();

        return $this->render('CatalogBundle:GoodsCategory:index.html.twig', array(
            'entities' => $this->getPagination($entities),
        ));
    }
    /**
     * Creates a new GoodsCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new GoodsCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('goodscategory_show', array('id' => $entity->getId())));
        }

        return $this->render('CatalogBundle:GoodsCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a GoodsCategory entity.
     *
     * @param GoodsCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GoodsCategory $entity)
    {
        $form = $this->createForm(new GoodsCategoryType(), $entity, array(
            'action' => $this->generateUrl('goodscategory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new GoodsCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new GoodsCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('CatalogBundle:GoodsCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a GoodsCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:GoodsCategory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing GoodsCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:GoodsCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a GoodsCategory entity.
    *
    * @param GoodsCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(GoodsCategory $entity)
    {
        $form = $this->createForm(new GoodsCategoryType(), $entity, array(
            'action' => $this->generateUrl('goodscategory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing GoodsCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('goodscategory_edit', array('id' => $id)));
        }

        return $this->render('CatalogBundle:GoodsCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a GoodsCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CatalogBundle:GoodsCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find GoodsCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('goodscategory'));
    }

    /**
     * Creates a form to delete a GoodsCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goodscategory_delete', array('id' => $id)))
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
