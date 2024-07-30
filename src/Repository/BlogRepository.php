<?php

namespace App\Repository;

use App\Models\BlogPost;
use PDO;

class BlogRepository
{
     private $db;

     public function __construct()
     {
          $this->db = new PDO('sqlite:../data/blog.db');
          //$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->createTable();
     }

     private function createTable()
     {
          $this->db->exec("CREATE TABLE IF NOT EXISTS posts (id INTEGER PRIMARY KEY, title TEXT, body TEXT, created_at TEXT)");
     }

     public function createPost($title, $body)
     {
          $stmt = $this->db->prepare("INSERT INTO posts (title, body, created_at) VALUES (:title, :body, :created_at)");
          $stmt->bindParam(':title', $title);
          $stmt->bindParam(':body', $body);
          $stmt->bindParam(':created_at', date("Y-m-d H:i:s"));
          $stmt->execute();
     }

     public function getPostById($id)
     {
          $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
          $stmt->bindParam(':id', $id);
          $stmt->execute();
          $post = $stmt->fetch(PDO::FETCH_ASSOC);
          if ($post) {
               return new BlogPost($post['id'], $post['title'], $post['body'], $post['created_at']);
          }
          return null;
     }

     public function getAllPosts()
     {
          $stmt = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC");
          $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $result = [];
          foreach ($posts as $post) {
               $result[] = new BlogPost($post["id"], $post["title"], $post["body"], $post["created_at"]);
          }
          return $result;
     }
}