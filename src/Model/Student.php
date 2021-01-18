<?php
namespace App\Model;

class Student
{
    protected $id;
    protected $name;
    protected $address;
    protected $email;
    protected $image;

    /**
     * Student constructor.
     * @param $id
     * @param $name
     * @param $address
     * @param $email
     * @param $image
     */
    public function __construct($id, $name, $address, $email, $image= null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed|null $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}