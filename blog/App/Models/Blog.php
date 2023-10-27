<?php
namespace App\Models;

class Blog extends Model
{
    protected $id;
	protected $title;
	protected $text;
	protected $image;
    protected $description;
	
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
	
    // SET METHODS
    public function setTitle(string $title)
	{
		$this->title = $title;
	}
	
	public function setText(string $description)
	{
		$this->description = $description;
	}
	
	public function setImage(string $image)
	{
		$this->image = $image;
	}

    // CRUD OPERATIONS
	public function create(array $data)
	{
		$result = $this->select('select * from blogs where 1;', $data);

		return $result;
	}
	
	public function read(int $id)
	{
		$result = $this->select('select * from blogs where 1;',[]);
		$this->title = $result[0]['title'];
		$this->text = $result[0]['text'];
		$this->image = $result[0]['image'];

		return $this;
	}

	public function all()
	{
		$result = $this->select('select * from blogs where 1;',[]);

		return $result;
	}
	
	public function update(int $id, array $data)
	{
		
	}
	
	public function delete(int $id)
	{
		
	}
}
