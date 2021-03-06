<?php 
    // Author: Malik Bilal github: @malikbilal1997.

class Clover {

    private $routes = array();

    public function __construct($url) {

        // Dividing the passed 'url' into parts and assigning.

        $this->routes = explode('/', rtrim($url, '/'));
    }

    public function auto_load() {

        // Autoload the file of the class that is instantiated.

        spl_autoload_register(function ($class) {

            // Getting the file path for checking if it exists.

            require_once ROOT . '/app/controllers/' . $class . '.php';

        });
    }

    public function start()  {

        // Getting controller name and making first letters capital.

        $controller = ucfirst($this->routes[0]);

        // Storing the method name if it is called else assign null.

        $method = isset($this->routes[1]) ? $this->routes[1] : null;

        // Stroing the parameter if it is passed else assign null.

        $parameter = isset($this->routes[2]) ? $this->routes[2] : null;
        
        // Requiring parent class of controller and model.

        require_once ROOT . '/system/core/Controller.php';
        require_once ROOT . '/system/core/Model.php';

        $this->auto_load();

        // Instanitaing an object of the controller class.

        $obj = new $controller();

        // If method was called also parameter was passed.

        if(!(is_null($method)) && !((is_null($parameter)))) {

            $obj->$method($parameter);
        }

        // If method was called but the parameter was null.

        else {
            
            $obj->$method();
        }
    }
}

?>