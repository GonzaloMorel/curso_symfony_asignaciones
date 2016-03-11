<?php

namespace UsuarioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use UsuarioBundle\Entity\Usuario;
use UsuarioBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction(Request $request)
    {
        //$session = $request->getSession();
        //if($sessin->get('login') == true){
            
            $em = $this->getDoctrine()->getManager();
    
            $usuarios = $em->getRepository('UsuarioBundle:Usuario')->findAll();
            
            $entity = new Usuario();
            $helper = $this->container->get('vich_uploader.templating.helper.uploader_helper');
            $path = $helper->asset($entity, 'imageFile');
            
            
    
            return $this->render('usuario/index.html.twig', array(
                'usuarios' => $usuarios,
                'path'  => $path
            ));
        //}else
        //{
        //    $this->get('session')->getFlashBag()->add("mensaje", "Debe Loguearse");
          //  return $this->redirect($this->generateUrl('usuario_index'));
        //}
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('UsuarioBundle\Form\UsuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuario_show', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('UsuarioBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuario_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a Usuario entity.
     *
     * @param Usuario $usuario The Usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    public function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function loginAction(Request $request)
    {
        if($request->getMethod() == "POST")
        {
        
        $em = $this->getDoctrine()->getManager();

        $res = $em->getRepository('UsuarioBundle:Usuario')->findOneBy(array('rut' => $rut, 'password' => $pass));
        
        if($res)
        {
            $session = $request->getSession();
            $session->set("id", $res->getId());
            $session->set("nombres", $res->getNombres());
            $session->set("apPat", $res->getApPat());
            $session->set("apMat", $res->getApMat());
            $session->set("rut", $res->getRut()."-".$res->getDv());
            $session->set("email", $res->getEmail());
            $session->set("login", true);
            
            return $this->redirect($this->generateUrl('usuario_index'));
        }else
        {
            $this->get('session')->getFlashBag()->add("mensaje", "Los Datos No Son Válidos");
            return $this->redirect($this->generateUrl('usuario_index'));
        }
        
        }
        
        return $this->render('usuario/index.html.twig');
    }
    
    public function logout(Request $request){
        $session = $request->getSession();
        $session->clear();
        
        $this->get('session')->getFlashBag()->add("mensaje", "Se ha cerrado la session");
        return $this->redirect($this->generateUrl('usuario_index'));
    }
    
    public function sendmail($name){
        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('gonmore.mm@gmail.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/registration.html.twig',
                array('name' => $name)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);

    // return $this->render(...);
    }
    
    public function downloadImageAction(Image $image)
    {
        $downloadHandler = $this->get('vich_uploader.download_handler');
    
        return $downloadHandler->downloadObject($image, $fileField = 'imageFile');
    }
    
 
    
    


}
