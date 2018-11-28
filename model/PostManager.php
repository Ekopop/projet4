<?php

class PostManager
{
	private $db;

	public function __construct() {
		$this->db = DB::getConnection();
	}

	public function getPosts(): array
	{
		$req = $this->db->prepare('SELECT * FROM posts');
		$req->execute();
		return $req->fetchAll();
	}

	public function getPost(int $postId): array
	{
		$req = $this->db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}

	public function getLastPost(): array
	{
		$req = $this->db->prepare('SELECT * FROM posts ORDER BY date_creation DESC LIMIT 1');
		$req->execute();
		return $req->fetchAll();
	}

	public function addPost(string $title, string $content)
    {
		$sql = 'INSERT INTO posts(title, content, date_creation) VALUES(:title, :content, NOW())';

		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			':title' => $title,
			':content' => strip_tags($content)
		));
	}

	public function deletPost(int $id)
    {
		
		$sql = 'DELETE FROM posts WHERE id = :idPost';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			':idPost' => $id
		));
	}
	
	public function modifyPost(int $id, string $content)
    {
		
		$sql = 'UPDATE posts SET content = :content WHERE id = :id';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			':id' => $id,
			':content' => $content
		));
    }
}
