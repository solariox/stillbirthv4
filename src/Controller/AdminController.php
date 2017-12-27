<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Item;
use App\Entity\News;
use App\Form\ItemType;
use App\Form\NewsType;
use \Datetime;



/**
 * @author Solario
 */
class AdminController extends Controller
{
    /**
    * @Route("/admin", name="welcome")
    */
    public function AdminAction()
    {
        return $this->render('admin/admin.html.twig');
    }

    /**
    * @Route("/admin/addItem", name ="admin/addItem")
    */
    public function AddItemAction(Request $request)
    {
        $item = new Item;
        $form = $this->createForm(ItemType::class, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();

            $this->addFlash(
                'notice',
                'un item a été ajouté '
            );

            return $this->redirect('/admin');
        }

        return $this->render('admin/addItem.html.twig',[
            'form' => $form->createView()
        ]);
    }


    /**
    * @Route("/admin/addNews", name="admin/addNews")
    */
    public function AddNewsAction(Request $request)
    {
        $news = new News;
        $form = $this->createForm(NewsType::class, $news);

        $news->setDate(new DateTime);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            $this->addFlash(
                'notice',
                'une news a été ajouté '
            );

            return $this->redirect('/admin');
        }

        return $this->render('admin/addNews.html.twig',[
            'form' => $form->createView()
        ]);
    }


}
