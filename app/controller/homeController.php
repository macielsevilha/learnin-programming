<?php

  class HomeController
  {
      public function index() 
      {
        try {
<<<<<<< HEAD
          
          $colecPostagens = Postagem::selecionaTodos();

          $loader = new \Twig\Loader\FilesystemLoader('app/view');
          $twig = new \Twig\Environment($loader);
          $template = $twig->load('home.html');

          $parametros = array();
          $parametros['postagens'] = $colecPostagens;
          
          $parametros['nome'] = 'Maciel';

          $conteudo = $template->render($parametros);
          echo $conteudo;
          
=======
          $colecPostagens = Postagem::selecionaTodos();

>>>>>>> 1fa6d8a08cbaa393f9196ac9da77cfa19419c09b
        } catch (Exception $e) {
          echo $e->getMessage();
        }
    
      }
  }

?>