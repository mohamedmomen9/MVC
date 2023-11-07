<?php
namespace App\Controllers;

use App\Models\Blog;

class HomeController
{
    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        // Load the model
        $blog = new Blog();
        $data = $blog->all();
        if (isset($_SESSION['user'])) {
            include 'views/home.php';
        }else{
            // Load the view
            include 'views/home2.php';
        }
    }
}
?>
