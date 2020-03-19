<?php

    // This is a demo code
    class Home_model extends Model {

        public function __construct() {
            parent::__construct();
        }

        public function get_posts() {
            return $this->db->query("SELECT * FROM POST");
        }
    }

?>
