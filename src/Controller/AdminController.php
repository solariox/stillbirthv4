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
  * @Route("/admin", name="admin")
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

      $img = $item->getImg();
      // Generate a unique name for the file before saving it
      $imgName = md5(uniqid()).'.'.$img->guessExtension();
      // Move the file to the directory where brochures are stored
      $img->move(
        $this->getParameter('sprite_directory'),
        $imgName
      );
      // Update the 'brochure' property to store the PDF file name
      // instead of its contents
      $item->setImg($imgName);


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
  * @Route("/admin/seeNews", name="admin/seeNews")
  */
  public function seeNewsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $news =  $em->getRepository(News::class)->findAll();

    return $this->render('admin/adminNews.html.twig',array('news'=>$news));

  }

   
  /**
  * @Route("/admin/deleteNew/{id}", name="admin/deleteNew")
  */
  public function deleteNewsAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $new =  $em->getRepository(News::class)->find($id);
    $em->remove($new);
    $em->flush();

    $news =  $em->getRepository(News::class)->findAll();

    return $this->redirectToRoute('admin/seeNews', array('news'=>$news));

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
