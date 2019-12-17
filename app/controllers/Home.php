<?php
    
    class Home extends Controller {
        

        public function __construct() {

            $this->load_model('Home_model');
        }

        public function index() {

            $result = $this->model->test();
            $this->load_view('home', $result);

        }
    }

?>