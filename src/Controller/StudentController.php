<?php
namespace App\Controller;
use App\Model\StudentManager;

class StudentController
{
    protected $studentManager;

    public function __construct()
    {
        $this->studentManager = new StudentManager();
    }

    public function listStudent()
    {
        $students = $this->studentManager->getAllStudent();
    }
}