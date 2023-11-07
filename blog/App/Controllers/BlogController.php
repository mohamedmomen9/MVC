<?php 

namespace App\Controllers;

use App\Models\Blog;
use App\Models\User;

class BlogController
{
    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $blog = new Blog();
        $blog->all();

        include_once APP_ROOT . '/views/editBlog.php';
    }

    // Show the blog attributes based on the id.
    public function showAction(int $id)
    {
        $blog = new Blog();
        $blog->read($id);

        include_once APP_ROOT . '/views/blog.php';
    }

    public function create()
    {
        if (!isset($_SESSION['username'])) {
            header("location: login");
            exit();
        }
        include_once APP_ROOT . '/views/createBlog.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        $blog = new Blog();
        $blog->read($id);

        include_once APP_ROOT . '/views/editBlog.php';
    }

    public function update(int $id,  $request)
    {
        $blog = new Blog();
        $blog->update($id, $request->all);

        include_once APP_ROOT . '/views/blog.php';
    }

    public function store()
    {
        $blog = new Blog();
        $blog->setTitle($_POST['title']);
        $blog->setImage($_POST['image']);
        $blog->setText($_POST['text']);
        $blog->setUser($_POST['user']);
        $blog->create();

        header('Location: http://localhost/check24/blog/home');
    }
}
