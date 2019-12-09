<?php

  $config = require __DIR__ .'./config.php';
  define('ROOT_PATH' ,$config['Route']['Path']);


function viewRender($layout, $title = 'Document'){
  $content = ob_get_clean();
  require_once __DIR__. "./../partials/{$layout}";
}
