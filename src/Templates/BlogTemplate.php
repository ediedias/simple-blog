<?php

namespace App\Templates;

abstract class BlogTemplate
{
     public function render($data)
     {        
          $this->header();
          $this->content($data);
          $this->footer();          
          
     }

     protected function header()
     {          
          include '../src/Views/header.php';
     }

     protected function footer()
     {
          include '../src/Views/footer.php';
     }

     protected abstract function content($data);
}
