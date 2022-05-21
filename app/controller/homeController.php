<?php

  class HomeController
  {
      public function index() 
      {
        try {
          $colecPostagens = Postagem::selecionaTodos();

        } catch (Exception $e) {
          echo $e->getMessage();
        }
    
      }
  }

?>