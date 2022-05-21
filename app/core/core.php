<?php

   class Core 
   {
       public function start($urlGet)
       {
          if (isset($urlGet['pagina'])) {
            $controller = ucfirst($urlGet['pagina'].'Controller');
          } else {
              $controller = 'HomeController';
          }
           $acao = 'index';

           if (!class_exists($controller)) {
               $controller = 'ErroController';
           }
           
           call_user_func_array(array(new $controller, $acao),array());
       }
   }

?>