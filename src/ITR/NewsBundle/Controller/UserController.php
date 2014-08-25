<?php

namespace ITR\NewsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use ITR\NewsBundle\Entity\User;
use ITR\NewsBundle\Entity\PasswordRecovery;
use ITR\NewsBundle\Form\UserType;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

     /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NewsBundle:User')->findAll();
        
        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('NewsBundle:User:index.html.twig', array(
            'entities' => $pagination,
        ));
    }
    
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
        }

        return $this->render('NewsBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('NewsBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
   /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
        }

        return $this->render('NewsBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NewsBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    /*
     * @var \ITR\NewsBundle\Entity\User $user     
     */
       
    public function recoveryAction(Request $request)
    {       
        if ($request->getMethod() == 'POST') {            
            $email = $request->request->get('_email');
            $em = $this->getDoctrine()->getManager();
            $user= $em->getRepository('NewsBundle:User')->findOneBy(array('user_email' => $email));
                        
            if ($user != null) {
                $user_name = $user->getUserName();
                $user_email = $user->getUserEmail();
                $user_id = $user->getId();
                $pass_recovery=$em->getRepository('NewsBundle:PasswordRecovery')->findOneBy(array('user' => $user_id));
                
                if(empty($pass_recovery)){
                    $hash_code = md5($user_email.$user_id);
                    $access_hash="http://news.ru/web/updatepassword?user=".$user_id."&hash=".$hash_code;
                    $this->sendEmail($user_name, $access_hash, $user_email);
                    $this->createPasswordRecovery($user, $hash_code);
                    $this->get('session')->getFlashBag()->add('notice',$this->get('translator')->trans('Letter.sent.email'));
                    return $this->redirect($this->generateUrl('_welcome'));
                }else{
                    $this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('Link.reset.password.been.sent'));
                    unset($user);
                    return $this->redirect($this->generateUrl('_welcome'));
                }
            }else{
                 $this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('User.email.not.registered'));
                 

                 return $this->redirect($this->generateUrl('_welcome'));
                 
            }
        }
        return $this->render('NewsBundle:PasswordRecovery:email.html.twig');
    }
    
    public function sendEmail($user_name, $access_hash, $user_email){        
        $message = \Swift_Message::newInstance()
                ->setSubject("Hello $user_name")->setFrom("news.dispatch.itr@gmail.com")
                ->setTo($user_email) 
                ->setBody($this->renderView('NewsBundle:PasswordRecovery:MailBody.html.twig',
                        array('name' => $user_name, 'access_hash' => $access_hash) ),
                        'text/html');
         $this->get('mailer')->send($message);
    }
    
    public function createPasswordRecovery($user, $hash_code) {
        $pass_recovery = new PasswordRecovery();
        $pass_recovery->setUser($user);
        $pass_recovery->setAccessHash($hash_code);
        $date = new \DateTime();
        $date->modify('+1 day');
        $pass_recovery->setExpires($date);
        $em = $this->getDoctrine()->getManager();
            $em->persist($pass_recovery);
            $em->flush();
        
    }
    public function updateUserSubscribeAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $user_subscription = $user->getCategory();
        $new_subscription = $_POST['category'];

        foreach ($user_subscription as $item){
            $user->removeCategory($item);
        }
        if(!empty($new_subscription)){
            foreach ($new_subscription as $category){
                $user->addCategory($em->getRepository('NewsBundle:Category')->findOneBy(array('category_name' => $category)));
            }
        }
        $em->flush();
        return $this->redirect($this->generateUrl('mainpage'));
        
    }
}
