<?php
namespace App\Controllers;

use App\Models\User;

class LoginController {
    public function __construct() {
    }

    public function index() {
        // Display the login form (view)
        include 'views/login.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();
            if ($userModel->authenticate($username, $password)) {
                // Successful login
                session_start();
                $_SESSION['user'] = $username;
                var_dump($_SESSION['user']);
                header('Location: http://localhost/check24/blog/home');
                exit();
            } else {
                // Failed login
                header('Location: http://localhost/check24/blog/login/login?error=1');
            }
        }
    }

    public function logout() {
        // Destroy the session and redirect to the login page
        session_start();
        session_destroy();
        header('Location: http://localhost/check24/blog/home');
    }
}
?>
