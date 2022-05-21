<?php

require_once 'app/core/core.php';

require_once './lib/database/connection.php';

require_once './app/controller/homeController.php';
require_once './app/controller/erroController.php';

require_once './app/model/postagem.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
   $core = new Core;
   $core->start($_GET);

  $saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

echo $tplPronto;

?>