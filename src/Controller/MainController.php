<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Item;
use App\Entity\News;

/**
 * Description of IndexController
 *
 * @author Solario
 */
class MainController extends Controller
{
    /**
    * @Route("/", name="home")
    */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }

    /**
    * @Route("/news", name="news")
    */
    public function newsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $news =  $em->getRepository(News::class)->findAll();
      return $this->render('news.html.twig',array('news'=>$news));
    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contactAction()
    {
        return $this->render('contact.html.twig');
    }

    /**
    * @Route("/items", name="items")
    */
    public function itemsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $itemsList =  $em->getRepository(Item::class)->findAll();
      return $this->render('items.html.twig',array('itemsList'=>$itemsList));
    }

    /**
    * @Route("/wiki", name="wiki")
    */
    public function wikiAction()
    {
        return $this->render('Wiki/main.html.twig');
    }
}
