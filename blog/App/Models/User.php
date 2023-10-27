<?php
namespace App\Models;

class User extends Model {

    public function authenticate($username, $password) {

        // // Fetch user data from the database
        // $result = $this->select("SELECT id FROM users WHERE username = '$username' and password = '$password'");

        // if (!$result) {
        //     die("Query failed: " . $this->connection->errorInfo());
        // }

        // if ($result) {
        //     $user = $result[0];
        //     $_SESSION['user'] = $username;

        //     return true;
        // }

        $query = $this->connection->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();

        if($row = $query->fetch()){
            return true;
        }

        return false; // Authentication failed
    }
}
?>
