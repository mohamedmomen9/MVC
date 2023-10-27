<?php
namespace App\Controllers;

use App\Models\Blog;

class HomeController {

    public function __construct() {
        //load the model
    }
    public function index() {
        // Load the model
        $blog = new Blog();
        $data = $blog->all();
        var_dump($_SESSION['user']);
        if (isset($_SESSION['user'])) {
            include 'views/home2.php';
        }
        // Load the view
        include 'views/home.php';
    }
}
?>