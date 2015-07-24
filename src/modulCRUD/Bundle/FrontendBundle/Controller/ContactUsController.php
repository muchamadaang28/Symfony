<?php

namespace modulCRUD\Bundle\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use modulCRUD\Bundle\FrontendBundle\Entity\ContactUs;
use modulCRUD\Bundle\FrontendBundle\Form\ContactUsType;

/**
 * ContactUs controller.
 *
 * @Route("/contactus")
 */
class ContactUsController extends Controller
{

    /**
     * Lists all ContactUs entities.
     *
     * @Route("/", name="contactus")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('modulCRUDFrontendBundle:ContactUs')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ContactUs entity.
     *
     * @Route("/", name="contactus_create")
     * @Method("POST")
     * @Template("modulCRUDFrontendBundle:ContactUs:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ContactUs();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contactus_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ContactUs entity.
     *
     * @param ContactUs $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ContactUs $entity)
    {
        $form = $this->createForm(new ContactUsType(), $entity, array(
            'action' => $this->generateUrl('contactus_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ContactUs entity.
     *
     * @Route("/new", name="contactus_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ContactUs();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ContactUs entity.
     *
     * @Route("/{id}", name="contactus_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('modulCRUDFrontendBundle:ContactUs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactUs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ContactUs entity.
     *
     * @Route("/{id}/edit", name="contactus_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('modulCRUDFrontendBundle:ContactUs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactUs entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ContactUs entity.
    *
    * @param ContactUs $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ContactUs $entity)
    {
        $form = $this->createForm(new ContactUsType(), $entity, array(
            'action' => $this->generateUrl('contactus_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ContactUs entity.
     *
     * @Route("/{id}", name="contactus_update")
     * @Method("PUT")
     * @Template("modulCRUDFrontendBundle:ContactUs:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('modulCRUDFrontendBundle:ContactUs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactUs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contactus_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ContactUs entity.
     *
     * @Route("/{id}", name="contactus_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('modulCRUDFrontendBundle:ContactUs')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ContactUs entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contactus'));
    }

    /**
     * Creates a form to delete a ContactUs entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactus_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
