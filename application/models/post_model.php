<?php

class Post_model extends CI_Model 
{
    public $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = "posts";
    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->table)->row();
    }

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function post_list()
    {
        $user_id = $this->session->userdata('user')->id;

        $sql = "SELECT p.*, v.vote_status,
                (SELECT count(*) from votes WHERE vote_status = 1 AND post_id = p.id) as like_count,
                (SELECT count(*) from votes WHERE vote_status = -1 AND post_id = p.id) as dislike_count
                FROM posts p
                LEFT JOIN votes v ON p.id = v.post_id AND v.user_id = " . $user_id;

        return $this->db->query($sql)->result();

    }

    public function get_post($post_id)
    {
        $user_id = $this->session->userdata('user')->id;

        $sql = "SELECT p.*, v.vote_status,
                (SELECT count(*) from votes WHERE vote_status = 1 AND post_id = p.id) as like_count,
                (SELECT count(*) from votes WHERE vote_status = -1 AND post_id = p.id) as dislike_count
                FROM posts p
                LEFT JOIN votes v ON p.id = v.post_id AND v.user_id = " . $user_id . " WHERE p.id = $post_id";

        return $this->db->query($sql)->row();

    }


}
