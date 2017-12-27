<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
*/
class News
{
  /**
  * @ORM\Id
  * @ORM\GeneratedValue
  * @ORM\Column(type="integer")
  */
  private $id;

  /**
  * @ORM\Column(type="string", length=100)
  */
  private $title;

  /**
  * @ORM\Column(type="string")
  */
  private $content;

  /**
  * @ORM\Column(type="datetime")
  */
  private $date;



  /**
  * Get the value of Id
  *
  * @return mixed
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set the value of Id
  *
  * @param mixed id
  *
  * @return self
  */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
  * Get the value of Title
  *
  * @return mixed
  */
  public function getTitle()
  {
    return $this->title;
  }

  /**
  * Set the value of Title
  *
  * @param mixed title
  *
  * @return self
  */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
  * Get the value of Content
  *
  * @return mixed
  */
  public function getContent()
  {
    return $this->content;
  }

  /**
  * Set the value of Content
  *
  * @param mixed content
  *
  * @return self
  */
  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }

  /**
  * Get the value of Date
  *
  * @return mixed
  */
  public function getDate()
  {
    return $this->date;
  }

  /**
  * Set the value of Date
  *
  * @param mixed date
  *
  * @return self
  */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

}
