<?php 

class Posts extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Userın giriş yapıp yapmadığı kontrol edilmeli    

        $viewData = new stdClass();
        $viewData->user = $this->session->userdata("user");


        $this->load->view("post_list_v", $viewData);
        

    }


}
