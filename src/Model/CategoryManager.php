<?php


namespace App\Model;


class CategoryManager
{
    protected static $curCategoryId = 0;
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCategory()
    {
        $statement = "SELECT * FROM Categories where name='Adventure'";
        /*$stmt = $this->dbConnect->connect()->query($sqlQuery);
        $data = $stmt->fetchAll();*/
        $data = $this->dbConnect->query($statement);
        echo "<pre>";
        print_r((isset($data[0])) ? $data[0] : 'Null');
        $categories = [];
        foreach ($data as $item) {
            $categories[] = new Category($item["id"],$item['name'],$item['description']);
        }
        return $categories;
    }

    public function addCategory($category)
    {
        $id = $category->getId();
        $name = $category->getName();
        $description = $category->getDescription();
        $sql = "INSERT INTO Categories(`id`, `name`, `description`) VALUES ('$id','$name','$description')";
        $this->dbConnect->execute($sql);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM `Categories` WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }

    public function updateCategory($id, $category)
    {
        $name = $category->getName();
        $description = $category->getDescription();
        $sql = "UPDATE `Categories` SET `name`='$name',`description`='$description' WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }

    public function getCategory($id)
    {
        $sql = "SELECT * FROM Categories where id='$id'";
        return $this->dbConnect->query($sql);
    }
}