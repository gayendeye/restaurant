<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(){
        return $this->render('projet/index.html');
    }

     /**
     * @Route("/index.html", name="home")
     */
    public function home(){
        return $this->render('projet/index.html');
    }

    /**
     * @Route("/contacts.html", name="Contacts")
     */
    public function contacts(){
    	return $this->render('projet/contacts.html');
    }

    /**
     * @Route("/about-us.html", name="About-us")
     */
    public function about(){
    	return $this->render('projet/about-us.html');
    }
    /**
     * @Route("/typography.html", name="Typography")
     */
    public function typography(){
    	return $this->render('projet/typography.html');
    }
}
