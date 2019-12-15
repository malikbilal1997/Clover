<?php
    
    class Home {
        public function __construct() {
        }

        public function greet($name = null) {
            echo "Hello, " .$name;
        }
    }

?>