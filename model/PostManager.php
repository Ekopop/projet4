<?php
require('db.php');

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
}
