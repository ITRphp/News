<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\CatalogBundle\Entity\Keyboard;
use ITR\CatalogBundle\Form\KeyboardType;

/**
 * Keyboard controller.
 *
 */
class KeyboardController extends Controller
{

    /**
     * Lists all Keyboard entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CatalogBundle:Keyboard')->findAll();

        return $this->render('CatalogBundle:Keyboard:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Keyboard entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Keyboard();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('keyboard_show', array('id' => $entity->getId())));
        }

        return $this->render('CatalogBundle:Keyboard:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Keyboard entity.
     *
     * @param Keyboard $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Keyboard $entity)
    {
        $form = $this->createForm(new KeyboardType(), $entity, array(
            'action' => $this->generateUrl('keyboard_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Keyboard entity.
     *
     */
    public function newAction()
    {
        $entity = new Keyboard();
        $form   = $this->createCreateForm($entity);

        return $this->render('CatalogBundle:Keyboard:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Keyboard entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Keyboard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Keyboard entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Keyboard:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Keyboard entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Keyboard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Keyboard entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Keyboard:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Keyboard entity.
    *
    * @param Keyboard $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Keyboard $entity)
    {
        $form = $this->createForm(new KeyboardType(), $entity, array(
            'action' => $this->generateUrl('keyboard_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Keyboard entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Keyboard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Keyboard entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('keyboard_edit', array('id' => $id)));
        }

        return $this->render('CatalogBundle:Keyboard:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Keyboard entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CatalogBundle:Keyboard')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Keyboard entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('keyboard'));
    }

    /**
     * Creates a form to delete a Keyboard entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('keyboard_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
