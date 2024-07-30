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
        $this->template = new BlogTemplate;
    }

    public function index() 
    {        
        $posts = $this->repository->getAllPosts();        
        $this->template->render('../src/Views/index.php', $posts);               
    }

    public function create()
    {
        $this->template->render('../src/Views/create.php');
    }

    public function show($id)
    {
        $post = $this->repository->getPostById($id);
        $this->template->render('../src/Views/show.php', $post);
    }

    public function store()
    {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $this->repository->createPost($title, $body);
        header('Location: /');
    }
}