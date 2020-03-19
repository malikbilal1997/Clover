<?php
    // This is a demo code
    class Home extends Controller {
        

        public function __construct() {

            $this->load_model('Home_model');
        }

        public function index() {

            $result = $this->model->get_posts();
            $this->load_view('home', $result);

        }
    }

?>
