<?php
namespace App\Controllers;

use App\Models\User;

class LoginController
{
    public function __construct()
    {
    }

    public function index()
    {
        // Display the login form (view)
        include 'views/login.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();
            if ($userModel->authenticate($username, $password)) {
                // Successful login
                session_start();
                // prevent session fixation attack
                session_regenerate_id();

                // set username in the session
                $_SESSION['username'] = $username;
                $_SESSION['user_id']  = 1;
                $_SESSION['user'] = $username;

                header('Location: http://localhost/check24/blog/home');
                exit();
            } else {
                // Failed login
                print("<div class='alert alert-warning' role='alert'>Login failed. Please try again.</div>");
                exit();
                header('Location: http://localhost/check24/blog/login/login?error=1');
            }
        }
    }

    public function logout()
    {
        // Destroy the session and redirect to the login page
        session_start();
        session_destroy();
        header('Location: http://localhost/check24/blog/home');
    }
}
?>
