<?php

class CommentManager
{
	private $db;

	public function __construct() {
		$this->db = DB::getConnection();
	}

	public function getComments(): array
	{
		$req = $this->db->prepare('SELECT * FROM post_comment');
		$req->execute();
		return $req->fetchAll();
	}

	public function getComment(int $id_post): array
	{
		$req = $this->db->prepare('SELECT id, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM post_comment WHERE id = ?');
		$req->execute(array($id_post));
		$post = $req->fetch();
		return $comment;
    }

    public function addComment(int $id_post, string $author, string $contentComment)
    {
		$sql = 'INSERT INTO post_comment(id_post, autor, content, date_creation) VALUES(:idPost, :author, :content, NOW())';

		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			':idPost' => $id_post,
			':author' => $author,
			':content' => strip_tags($contentComment)
		));
    }
}
