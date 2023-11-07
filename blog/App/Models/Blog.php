<?php
namespace App\Models;

class Blog extends Model
{
    protected $id;
    protected $title;
    protected $text;
    protected $image;
    protected $date;
    protected $user;
    
    // GET METHODS
    public function getId()
    {
        return $this->id;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getText()
    {
        return $this->text;
    }
    
    public function getImage()
    {
        return $this->image;
    }

    public function getUser()
    {
        $user = new User();
        return $user->getUsername($this->user);
    }
    
    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function setText(string $text)
    {
        $this->text = $text;
    }
    
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setUser(string $user)
    {
        $this->user = $user;
    }

    // CRUD OPERATIONS
    public function create()
    {
        $query = "INSERT INTO blogs (title, text, image, date, user) VALUES (?,?,?,?,?)";
        $userInsert = $this->insert($query, [$this->title, $this->text, $this->image, date("Y-m-d h:i:s"), $this->user]);

        if ($userInsert) {
            return $userInsert;
        }
    }
    
    public function read(int $id)
    {
        $result = $this->select('select * from blogs where 1;', []);
        $this->title = $result[0]['title'];
        $this->text = $result[0]['text'];
        $this->image = $result[0]['image'];
        $this->date = $result[0]['date'];
        $this->user = $result[0]['user'];

        return $this;
    }

    public function all()
    {
        $result = $this->select('select * from blogs where 1 order by date;', []);

        return $result;
    }
    
    public function update(int $id, array $data)
    {
        
    }
    
    public function delete(int $id)
    {
        $sql = 'DELETE FROM blogs WHERE id = :id';
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }
}
