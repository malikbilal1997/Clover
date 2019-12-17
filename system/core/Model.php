<?php

    // Author: Malik Bilal github: @malikbilal1997.

class Model {

    protected $db;

    public function __construct() {

        // Storing the database connection information.

        $config = include( ROOT . '/system/database/config.php');

        // Making a new mysql database connection object.

        $this->db = new mysqli ($config['hostname'], $config['dbuser'], $config['password'], $config['dbname']);        
    }
}

?>