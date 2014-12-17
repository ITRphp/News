<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\CatalogBundle\Entity\GoodsSellers;
use ITR\CatalogBundle\Form\GoodsSellersType;

/**
 * GoodsSellers controller.
 *
 */
class GoodsSellersController extends Controller
{

    /**
     * Lists all GoodsSellers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CatalogBundle:GoodsSellers')->findAll();

        return $this->render('CatalogBundle:GoodsSellers:index.html.twig', array(
            'entities' => $this->getPagination($entities),
        ));
    }
    /**
     * Creates a new GoodsSellers entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new GoodsSellers();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('goodssellers_show', array('id' => $entity->getId())));
        }

        return $this->render('CatalogBundle:GoodsSellers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a GoodsSellers entity.
     *
     * @param GoodsSellers $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GoodsSellers $entity)
    {
        $form = $this->createForm(new GoodsSellersType(), $entity, array(
            'action' => $this->generateUrl('goodssellers_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new GoodsSellers entity.
     *
     */
    public function newAction()
    {
        $entity = new GoodsSellers();
        $form   = $this->createCreateForm($entity);

        return $this->render('CatalogBundle:GoodsSellers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a GoodsSellers entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsSellers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsSellers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:GoodsSellers:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing GoodsSellers entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsSellers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsSellers entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:GoodsSellers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a GoodsSellers entity.
    *
    * @param GoodsSellers $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(GoodsSellers $entity)
    {
        $form = $this->createForm(new GoodsSellersType(), $entity, array(
            'action' => $this->generateUrl('goodssellers_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing GoodsSellers entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:GoodsSellers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GoodsSellers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('goodssellers_edit', array('id' => $id)));
        }

        return $this->render('CatalogBundle:GoodsSellers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a GoodsSellers entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CatalogBundle:GoodsSellers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find GoodsSellers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('goodssellers'));
    }

    /**
     * Creates a form to delete a GoodsSellers entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goodssellers_delete', array('id' => $id)))
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
