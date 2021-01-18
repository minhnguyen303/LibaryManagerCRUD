<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\CategoryController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

$categoryController = new CategoryController();

switch ($page) {
    case 'list-category':
        $categoryController->showList();
        break;
    case 'add-category':
        $categoryController->addCategory();
        break;
    case 'delete':
        $categoryController->deleteCategory();
        break;
    case 'edit':
        $categoryController->editCategory();
        break;
    case 'update':
        $categoryController->updateCategory();
        break;
    default:
        $categoryController->showList();
}