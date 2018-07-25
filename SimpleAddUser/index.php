

<?php


$url = explode('/', $_GET['url']);

print_r($url);


require "app/Controller/".$url[0]. ".php";

  $controller = new $url[0]();

  $func = $url[1];

  if (isset($func)) {

    $controller->{$func}();
  }

  // $controller->addUser();
?>

