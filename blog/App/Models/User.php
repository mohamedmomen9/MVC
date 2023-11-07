<?php
namespace App\Models;

class User extends Model
{

    public function authenticate($username, $password)
    {
        $query = $this->connection->prepare("SELECT username, password FROM users WHERE username=:username");
        $query->bindParam(':username', $username);
        // $query->bindParam(':password', $password);
        $query->execute();

        
        if($row = $query->fetch()) {
            if(password_verify($password ,$row['password'])){
                return true;
            }
            
        }

        return false; // Authentication failed
    }

    public function getUsername($id)
    {
        $query = $this->connection->prepare("SELECT username FROM users WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();

        if($row = $query->fetch()) {
            return $row['username'];
        }
    }
}
?>
