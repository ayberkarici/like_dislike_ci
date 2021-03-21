<?php 

class Post extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("post_model");

        $user = $this->session->userdata("user");

        if(!$user) {
            redirect(base_url('giris-yap'));
        }
    }

    public function index()
    {
        // Userın giriş yapıp yapmadığı kontrol edilmeli    


        $viewData = new stdClass();
        $viewData->user = $this->session->userdata("user");

        //$viewData->posts = $this->post_model->get_all();
        $viewData->posts = $this->post_model->post_list();
 
        $this->load->view("post_list_v", $viewData);
        

    }

    public function vote()
    {
        $post_id        = $this->input->post('post_id');
        $vote_status    = $this->input->post('vote_status');
        $user_id        = $this->session->userdata('user')->id;

        $this->load->model('vote_model');

        $vote = $this->vote_model->get(array (
            "user_id"       => $user_id,
            "post_id"       => $post_id                    
        ));

        if($vote) {
            $update = $this->vote_model->update(
                array (
                    "user_id"       => $user_id,
                    "vote_status"   => $vote_status,
                    "post_id"       => $post_id
                ),
                array(
                    "id"    => $vote->id
                )
            );

            echo "update edildi";
        } else {
            $insert = $this->vote_model->add(
                array (
                    "user_id"       => $user_id,
                    "vote_status"   => $vote_status,
                    "post_id"       => $post_id
                )
            );
            
            echo "eklendi";
        }

        

        echo $insert;

    }


}
