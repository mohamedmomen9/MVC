<?php
namespace App\Models;

class User extends Model {

    public function authenticate($username, $password) {
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
