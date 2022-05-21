<?php

  class HomeController
  {
      public function index() 
      {
        try {
          
          $colecPostagens = Postagem::selecionaTodos();

          $loader = new \Twig\Loader\FilesystemLoader('app/view');
          $twig = new \Twig\Environment($loader);
          $template = $twig->load('home.html');

          $parametros = array();
          $parametros['postagens'] = $colecPostagens;
          
          $parametros['nome'] = 'Maciel';

          $conteudo = $template->render($parametros);
          echo $conteudo;
          
        } catch (Exception $e) {
          echo $e->getMessage();
        }
    
      }
  }

?>