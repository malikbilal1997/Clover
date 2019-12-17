<?php

    class Home_model extends Model {

        public function __construct() {
            parent::__construct();
        }

        public function test() {

            return $this->db->query("SELECT * FROM USERS");

        }

    }

?>