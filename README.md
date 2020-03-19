# Clover
*Clover is a small php framework based on MVC.*
## Usage
1. *Clone this repository to your web server hosting directory.*
2. *Edit **/system/database/config.php** to set up your database.*
3. *Set the default route of your web application in **/index.php***
4. *Create a controller class under **/app/controllers/** directory.*

``` php
<?php
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
```
5. *Create a model class under **/app/models/** directory.*

``` php
<?php

    class Home_model extends Model {

        public function __construct() {
            parent::__construct();
        }

        public function get_posts() {
            return $this->db->query("SELECT * FROM POST");
        }
    }
    
?>
```
6. *Create a view file under **/app/views/** directory.*

``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>This is Home.</h1>  
    <?php foreach($params as $value): ?>
        <h1><?php echo $value['post_title']; ?></h1>
        <p><?php echo $value['post_content']; ?></p>
    <?php endforeach; ?>       
</body>
</html>
```


