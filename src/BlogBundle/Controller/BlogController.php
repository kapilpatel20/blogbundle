<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Blog;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BlogBundle\Form\Type\BlogFormType;
use \DateTime;

class BlogController extends Controller
{
    public function indexAction()
    {
        //$user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $objBlog = $em->getRepository('BlogBundle:Blog')->getBlogList(0, 10, "id", "asc", array(), array(), '', '');
        
        return $this->render('BlogBundle:Blog:index.html.twig', array('objBlog' => $objBlog));
    }
    
    public function newAction(Request $request) {  
       //$user = $this->get('security.context')->getToken()->getUser();
       $em = $this->getDoctrine()->getManager();
       $objBlog = new Blog();
       $form = $this->createForm(new BlogFormType(), $objBlog);
             
            if ($request->getMethod() == "POST") {
                $form->handleRequest($request);
                $formValues = $request->request->get('bb_blog');
                if ($form->isValid()) {
                    $objForm = $form->getData();
//                echo "<pre>";print_r($objForm);exit;    
                    $objForm->setCreatedAt(new \DateTime());
                    $objForm->setUpdatedAt(new \DateTime());
                   
                    $em->persist($objForm);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('success', "Blog added successfully.");
                    return $this->redirect($this->generateUrl('blog_list'));
                }
            }
       return $this->render('BlogBundle:Blog:new.html.twig', array('form' => $form->createView()));
    }
    
    
    public function editAction(Request $request, $id) {  
       //$user = $this->get('security.context')->getToken()->getUser();
       $em = $this->getDoctrine()->getManager();
       
       $objBlog = $em->getRepository('BlogBundle:Blog')->find($id);
        
        if(!$objBlog) {
            $this->get('session')->getFlashBag()->add('failure', "Blog does not exist.");
            return $this->redirect($this->generateUrl('blog_list'));
        }
       $form = $this->createForm(new BlogFormType(), $objBlog);
       
            if ($request->getMethod() == "POST") {
                
                $form->handleRequest($request);
                $formValues = $request->request->get('bb_blog');

                if ($form->isValid()) {
                    $objForm = $form->getData();
                    $objForm->setUpdatedAt(new \DateTime());
                    $em->persist($objForm);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('success', "Blog updated successfully.");
                    return $this->redirect($this->generateUrl('blog_list'));
                }
            }
       return $this->render('BlogBundle:Blog:edit.html.twig', array('form' => $form->createView(), 'id' => $id));
    }
    
    
    public function deleteAction(Request $request) {

        $id = $request->get('id');
        
        //$user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $objBlog = $em->getRepository('BlogBundle:Blog')->find($id);
        
        if ($objBlog) {
            
                $em->remove($objBlog);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', "Blog deleted successfully.");
           
        } else {
            
            $this->get('session')->getFlashBag()->add('danger', "Blog does not exist.");
        }
        
        return $this->redirect($this->generateUrl('blog_list'));
    }

}
