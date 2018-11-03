<?php

require_once 'dao/PostDao.php';

class FrontendController
{

    private $postDao;

    public function __construct()
    {
        $this->postDao = new PostDao();
    }

    public function home()
    {
        $posts = $this->postDao->findAll();
        require 'view/home.php';
    }

    public function detail($postId)
    {
        $post = $this->postDao->find($postId);
        require 'view/detail.php';
    }

}
