<?php
/*
 * Post Class
 * Give's user an example of how to talk
 * to a specific table, in this case "posts"
 */
class Post{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPosts(){
        //$this->db->query('SELECT * FROM posts');

        //return $this->db->resultSet();
    }
}