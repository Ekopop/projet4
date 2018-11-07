<?php
require('config.php');


class PostManager
{
	public function getPosts(): array
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM posts');
		$req->execute();
		return $req->fetchAll();
	}

	public function getPost(int $postId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();

		return $post;
	}

	private function dbConnect(): PDO
	{
		$conf = Config::getConfigByEnv('local');
		return new PDO('mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname'] . ';charset=utf8', $conf['user'], $conf['password']);
	}
}

