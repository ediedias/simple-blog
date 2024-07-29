<?php

namespace App\Controllers;

class BlogController
{
    public function index() 
    {
        include "../src/Views/index.php";
    }

    public function create()
    {
        include "../src/Views/create.php";
    }
}