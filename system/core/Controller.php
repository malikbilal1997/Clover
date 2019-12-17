<?php
    // Author: Malik Bilal github: @malikbilal1997.

    class Controller {

        protected $model;

        // Method to load a view from views directory.

        protected function load_view($name, $params = null) {

            $path = ROOT .'/app/views/'.$name . '.php';

            if(file_exists($path)) {

                require_once $path;
            }        
        }
        
        // Method to load a model from model directory.

        protected function load_model($name) {

            $path = ROOT .'/app/models/'.$name . '.php';

            if(file_exists($path)) {

                require_once $path;

                $this->model = new $name();
            }
        }
    }
?>