<?php namespace PrePHase\controllers;
  use PrePHase\libraries\Controller;

  class Pages extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $posts = $this->postModel->getPosts();

        $data = array(
            'title' => 'Welcome',
            'posts' => $posts
        );

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = array(
            'title' => 'About Us'
        );

        $this->view('pages/about', $data);
    }
  }