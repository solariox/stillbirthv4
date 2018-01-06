<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
*/
class Item
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
  private $name;

  /**
  * @ORM\Column(type="string")
  */
  private $subtitle;

  /**
  * @ORM\Column(type="string")
  * @Assert\NotBlank(message="Please, upload the product as png extension.")
  * @Assert\File(mimeTypes={ "image/png" })
  */
  private $img;

  /**
  * @ORM\Column(type="string")
  */
  private $description;

  /**
  * @ORM\Column(type="string")
  */
  private $foundIn;

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
  * Get the value of Name
  *
  * @return mixed
  */
  public function getName()
  {
    return $this->name;
  }

  /**
  * Set the value of Name
  *
  * @param mixed name
  *
  * @return self
  */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
  * Get the value of Img
  *
  * @return mixed
  */
  public function getImg()
  {
    return $this->img;
  }

  /**
  * Set the value of Img
  *
  * @param mixed img
  *
  * @return self
  */
  public function setImg($img)
  {
    $this->img = $img;

    return $this;
  }

  /**
  * Get the value of Description
  *
  * @return mixed
  */
  public function getDescription()
  {
    return $this->description;
  }

  /**
  * Set the value of Description
  *
  * @param mixed description
  *
  * @return self
  */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
  * Get the value of Found In
  *
  * @return mixed
  */
  public function getFoundIn()
  {
    return $this->foundIn;
  }

  /**
  * Set the value of Found In
  *
  * @param mixed foundIn
  *
  * @return self
  */
  public function setFoundIn($foundIn)
  {
    $this->foundIn = $foundIn;

    return $this;
  }


  /**
  * Get the value of Subtitle
  *
  * @return mixed
  */
  public function getSubtitle()
  {
    return $this->subtitle;
  }

  /**
  * Set the value of Subtitle
  *
  * @param mixed subtitle
  *
  * @return self
  */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;

    return $this;
  }

}
