
<!-- Source: https://www.youtube.com/watch?v=Aw28-krO7ZM -->
<?php

require 'app/Config/Paths.php';

spl_autoload_register(function ($class_name) {
    include ROOT_PATH_LIBS. '/'. $class_name . '.php';
});

new Bootstrap();


?>

