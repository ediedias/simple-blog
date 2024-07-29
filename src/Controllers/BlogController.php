<?php

namespace App\Controllers;

use App\Templates\BlogTemplate;
use App\Repository\BlogRepository;

class BlogController
{
    private $template;
    private $repository;

    public function __construct()
    {
        $this->repository = new BlogRepository;
        $this->template = new class extends BlogTemplate {
            protected function content($data)
            {
                include '../src/Views/blog_content.php';
            }
        };
    }

    public function index() 
    {        
        $posts = $this->repository->getAllPosts();        
        $this->template->render($posts);               
    }

    public function create()
    {
        $this->template->render("../src/Views/create.php");        
    }

    public function store()
    {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $this->repository->createPost($title, $body);
        header('Location: /');
    }
}