
<!-- Source: https://www.youtube.com/watch?v=Aw28-krO7ZM -->

<?php


$url = rtrim($url, '/'); // trim all multiple '/' e.g in user/func////

$url = explode('/', $_GET['url']);

print_r($url);

require "app/Controller/".$url[0]. ".php";

  $controller = new $url[0]();

  $func = $url[1];
  $param = $url[2];

  if (isset($param)) { // for function with only one paramaters
    $controller->{$func}($param);

  } else  if (isset($func)) { // without paramaters

      $controller->{$func}();
  } 
  // $controller->addUser();
?>

