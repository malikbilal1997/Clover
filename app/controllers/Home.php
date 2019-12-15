<?php
    
    class Home extends Controller {
        
        public function __construct() {
    
        }

        public function index() {

            $params = array('Lahore', 'Karachi', 'Islamabad', 'Peshawar');

            $this->view('home', $params);
        }
    }

?>