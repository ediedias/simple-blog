<?php

namespace App\Templates;

class BlogTemplate
{
     public function render($content, $data = null)
     {        
          $this->header();
          $this->content($content, $data);
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

     protected function content($content, $data) {
          $data = $data;          
          include $content;
     }
}
