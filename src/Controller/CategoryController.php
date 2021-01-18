<?php


namespace App\Controller;
use App\Model\Category;
use App\Model\CategoryManager;

class CategoryController
{
    protected $categoryManager;

    public function __construct()
    {
        $this->categoryManager = new CategoryManager();
    }

    public function showList()
    {
        $categories = $this->categoryManager->getAllCategory();
        include_once 'src/View/list-category.php';
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-category.php';
        }
        else{
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];

            $category = new Category($id,$name,$description);
            $this->categoryManager->addCategory($category);
            header('Location: index.php');
        }
    }

    public function deleteCategory()
    {
        $id = $_REQUEST['id'];
        $this->categoryManager->deleteCategory($id);
        header('Location: index.php');
    }

    /*public function updateCategory()
    {
        $id = $_REQUEST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $category = new Category($id,$name,$description);
        $this->categoryManager->updateCategory($id, $category);
        header('Location: index.php');
    }

    public function editCategory($id)
    {
        $category = $this->categoryManager->getCategory($id);
        include_once 'src/View/edit-category.php';
    }*/

    public function editCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];

            $category = new Category($id,$name,$description);
            $this->categoryManager->updateCategory($id, $category);
            header('Location: index.php');
        }
        $id = $_REQUEST['id'];
        $category = $this->categoryManager->getCategory($id);
        include_once 'src/View/edit-category.php';
    }

}