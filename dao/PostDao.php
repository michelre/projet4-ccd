<?php

require_once 'dao/BaseDao.php';
require_once 'model/Post.php';


class PostDao extends BaseDao
{
    public function findAll()
    {
        $query = $this->db->prepare('SELECT * FROM post');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Post::class);
    }

    public function find($postId)
    {
        $query = $this->db->prepare('SELECT * FROM post WHERE id = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, Post::class);
        $query->execute([$postId]);
        return $query->fetch();
    }

    public function insert()
    {

    }

    public function delete($postId)
    {
        $query = $this->db->prepare('DELETE FROM post WHERE id = ?');
        $query->execute([$postId]);
    }

    public function update()
    {

    }


}
