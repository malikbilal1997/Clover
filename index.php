<?php 
    // Author: Malik Bilal github: @malikbilal1997.

    // Defining the root directory of the project.
    // Replace '\' with '/' incase of Windows path.

    define('ROOT', str_replace("\\", "/", __DIR__));

    // Setting the name of default route of the website.

    $default = '';

    // Storing the 'url' if it's set in the $_GET array.

    $url = isset($_GET['url']) ? $_GET['url'] : $default;

    // Requiring 'clover.php' that contain Clover class.

    require_once ROOT . '/system/Clover.php';

    // Initiating an object by passing 'url' as a param.

    $app = new Clover($url);

    // Calling this method to load the controller class.

    $app->auto_load();

    // Calling this method to start our web application.

    $app->start();
?>