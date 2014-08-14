<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ITR\NewsBundle\Entity\PasswordRecovery;
use ITR\NewsBundle\Form\PasswordRecoveryType;

/**
 * PasswordRecovery controller.
 *
 */
class PasswordRecoveryController extends Controller
{

    /**
     * Lists all PasswordRecovery entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NewsBundle:PasswordRecovery')->findAll();

        return $this->render('NewsBundle:PasswordRecovery:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PasswordRecovery entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PasswordRecovery();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_passwordrecovery_show', array('id' => $entity->getId())));
        }

        return $this->render('NewsBundle:PasswordRecovery:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PasswordRecovery entity.
     *
     * @param PasswordRecovery $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PasswordRecovery $entity)
    {
        $form = $this->createForm(new PasswordRecoveryType(), $entity, array(
            'action' => $this->generateUrl('admin_passwordrecovery_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PasswordRecovery entity.
     *
     */
    public function newAction()
    {
        $entity = new PasswordRecovery();
        $form   = $this->createCreateForm($entity);

        return $this->render('NewsBundle:PasswordRecovery:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PasswordRecovery entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:PasswordRecovery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasswordRecovery entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:PasswordRecovery:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PasswordRecovery entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:PasswordRecovery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasswordRecovery entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:PasswordRecovery:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PasswordRecovery entity.
    *
    * @param PasswordRecovery $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PasswordRecovery $entity)
    {
        $form = $this->createForm(new PasswordRecoveryType(), $entity, array(
            'action' => $this->generateUrl('admin_passwordrecovery_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PasswordRecovery entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:PasswordRecovery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PasswordRecovery entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_passwordrecovery_edit', array('id' => $id)));
        }

        return $this->render('NewsBundle:PasswordRecovery:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PasswordRecovery entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NewsBundle:PasswordRecovery')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PasswordRecovery entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_passwordrecovery'));
    }

    /**
     * Creates a form to delete a PasswordRecovery entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_passwordrecovery_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    
    public function newPasswordAction(Request $request) {
       if ($request->getMethod() == 'POST') {
            $password = filter_input(INPUT_POST, "password1");
            $this->updateUserPassword($password);
            return $this->redirect($this->generateUrl('_welcome'));
       }
        if ($request->getMethod() == 'GET') {
            $user_id = filter_input(INPUT_GET, "user", FILTER_VALIDATE_INT);
            $hash = filter_input(INPUT_GET, "hash");
            $em = $this->getDoctrine()->getManager();
            $pass_recovery = $em->getRepository('NewsBundle:PasswordRecovery')->findOneBy(array('user' => $user_id, 'accessHash' => $hash));
           
            if (!$pass_recovery) {
                throw $this->createNotFoundException('Unable to find User.');
            }
            
            $user = $em->getRepository('NewsBundle:User')->find($user_id);
           
            if (!$pass_recovery) {
                throw $this->createNotFoundException('Unable to find User.');
            }
           
            if(( !empty($pass_recovery)) && ( !empty($user))){
                    if($this->checkAccessDate($pass_recovery)){
                        return $this->redirect($this->generateUrl('_welcome'));                        
                    }
                    $session = $this->getRequest()->getSession();
                    $session->set('user_id', $user->getId());             
                }else{
                   $this->get('session')->getFlashBag()->add('notice', 'Wrong link');
                   return $this->redirect($this->generateUrl('_welcome'));                         
                }
        }
        return $this->render('NewsBundle:PasswordRecovery:update.html.twig');  
    }
    public function checkAccessDate($pass_recovery) {
        $access_date=$pass_recovery->getExpires();
        $current_date = new \DateTime();
        
        if($current_date > $access_date){
            $em = $this->getDoctrine()->getManager();
            $em->remove($pass_recovery);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Link is not active');
            return TRUE;        
        }
    }
    
    public function updateUserPassword($password) {
       $session = $this->getRequest()->getSession();
       $user_id = $session->get('user_id');
       
       $em = $this->getDoctrine()->getManager();
       $user = $em->getRepository('NewsBundle:User')->find($user_id);
       
       if (!$user) {
            throw $this->createNotFoundException('Unable to find User.');
        }

       $pass_recovery = $em->getRepository('NewsBundle:PasswordRecovery')->findOneBy(array('user' => $user_id));
       
       if (!$pass_recovery) {
            throw $this->createNotFoundException('Unable to find User.');
        }
        
       $em->remove($pass_recovery);
       $user->setUserPassword($password);
       $em->flush();
       $this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('Password.changed'));
    }
}
