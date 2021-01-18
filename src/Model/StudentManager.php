<?php

namespace App\Model;

class StudentManager
{
    protected $dbConnect;
    public static $curStudentId = 0;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllStudent()
    {
        $statement = 'SELECT * FROM Students';
        /*$stmt = $this->dbConnect->connect()->query($sqlQuery);
        $data = $stmt->fetchAll();*/
        $data = $this->dbConnect->query($statement);
        $students = [];
        foreach ($data as $item) {
            $students[] = new Student($item["id"],$item['name'],$item['address'],$item['email']);
        }
        return $students;
    }

    public function addStudent($student)
    {
        $id = $student->getId();
        $name = $student->getName();
        $address = $student->getAddress();
        $email = $student->getEmail();
        $sql = "INSERT INTO `Students`(`id`, `name`, `address`, `email`, `image`) VALUES ('$id','$name','$address','$email','')";
        $this->dbConnect->execute($sql);
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM `Students` WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }

    public function updateStudent($id, $student)
    {
        $id = $student->getId();
        $name = $student->getName();
        $address = $student->getAddress();
        $email = $student->getEmail();
        $sql = "UPDATE `Students` SET `name`='$name',`address`='$address',`email`='$email' WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }
}