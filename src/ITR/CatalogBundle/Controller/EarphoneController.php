<?php

namespace ITR\CatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\CatalogBundle\Entity\Earphone;
use ITR\CatalogBundle\Form\EarphoneType;

/**
 * Earphone controller.
 *
 */
class EarphoneController extends Controller
{

    /**
     * Lists all Earphone entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CatalogBundle:Earphone')->findAll();

        return $this->render('CatalogBundle:Earphone:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Earphone entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Earphone();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('earphone_show', array('id' => $entity->getId())));
        }

        return $this->render('CatalogBundle:Earphone:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Earphone entity.
     *
     * @param Earphone $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Earphone $entity)
    {
        $form = $this->createForm(new EarphoneType(), $entity, array(
            'action' => $this->generateUrl('earphone_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Earphone entity.
     *
     */
    public function newAction()
    {
        $entity = new Earphone();
        $form   = $this->createCreateForm($entity);

        return $this->render('CatalogBundle:Earphone:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Earphone entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Earphone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Earphone entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Earphone:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Earphone entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Earphone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Earphone entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CatalogBundle:Earphone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Earphone entity.
    *
    * @param Earphone $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Earphone $entity)
    {
        $form = $this->createForm(new EarphoneType(), $entity, array(
            'action' => $this->generateUrl('earphone_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Earphone entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CatalogBundle:Earphone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Earphone entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('earphone_edit', array('id' => $id)));
        }

        return $this->render('CatalogBundle:Earphone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Earphone entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CatalogBundle:Earphone')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Earphone entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('earphone'));
    }

    /**
     * Creates a form to delete a Earphone entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('earphone_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
