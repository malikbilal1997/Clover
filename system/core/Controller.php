<?php
    // Author: Malik Bilal github: @malikbilal1997.

    class Controller {

        // Method to load a view from views directory

        protected function view($name, $params) {

            require_once ROOT .'/app/views/'.$name . '.php';

        }
    }
?>