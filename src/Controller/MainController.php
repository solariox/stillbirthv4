<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of IndexController
 *
 * @author Solario
 */
class MainController extends Controller
{
    /**
    * @Route("/")
    */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }    
    
    /**
    * @Route("/news")
    */
    public function newsAction()
    {
        return $this->render('news.html.twig');
    }
    
    /**
    * @Route("/contact")
    */
    public function contactAction()
    {
        return $this->render('contact.html.twig');
    }
    
    /**
    * @Route("/items")
    */
    public function itemsAction()
    {
        return $this->render('items.html.twig');
    }
    
    /**
    * @Route("/wiki")
    */
    public function wikiAction()
    {
        return $this->render('Wiki/main.html.twig');
    }
}

