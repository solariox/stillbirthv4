<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Default:index.html.twig');
    }
    public function newsAction()
    {
        return $this->render('CoreBundle:Default:news.html.twig');
    }
    public function contactAction()
    {
        return $this->render('CoreBundle:Default:contact.html.twig');
    }
    public function itemsAction()
    {
        return $this->render('CoreBundle:Default:items.html.twig');
    }
    public function wikiAction()
    {
        return $this->render('CoreBundle:Default:Wiki/main.html.twig');
    }
}
