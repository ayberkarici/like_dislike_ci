<?php

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login_form ()
    {
        $this->load->view('login_form_v');
    }

    public function login()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("username", "Kullanıcı adı", "required|trim");
        $this->form_validation->set_rules("password", "Şifre", "required|trim");

        $error_messages = array(
            "required"  => "<strong>{field}</strong> alanını boş bırakamazsınız."
        );

        $this->form_validation->set_message($error_messages);

        if($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata("error", validation_errors());

            $this->login_form();
        } else {
            $this->load->model("user_model");

            $user = $this->user_model->get(array(
                "username"  => $this->input->post('username'),
                "password"  => md5($this->input->post('password'))  
            ));

            if ($user) {
                echo 'giriş başarılı';
            } else {
                $this->session->set_flashdata("error", md5($this->input->post('password')));
                
                $this->login_form();
            }
        }
    }
}
