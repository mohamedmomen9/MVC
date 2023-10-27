<?php 

namespace App\Controllers;

use App\Models\Blog;

class BlogController
{
    public function index(){
        $blog = new Blog();
        $blog->all();

        require_once APP_ROOT . '/views/editBlog.php';
    }

    // Show the blog attributes based on the id.
	public function showAction(int $id)
	{
        $blog = new Blog();
        $blog->read($id);

        require_once APP_ROOT . '/views/blog.php';
	}

    public function create()
    {
        if (!isset($_SESSION['username'])) {
            header("location: login");
            exit();
        }
        require_once APP_ROOT . '/views/createBlog.php';
    }

    public function edit(){
        $id = $_GET['id'];
        $blog = new Blog();
        $blog->read($id);

        require_once APP_ROOT . '/views/editBlog.php';
    }

    public function updte(int $id,  $request){
        $blog = new Blog();
        $blog->update($id, $request->all);

        require_once APP_ROOT . '/views/blog.php';
    }

    public function store(){
        $blog = new Blog();
        
    }
}