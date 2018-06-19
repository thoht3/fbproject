<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password1'));
            if ($this->user->loginUser($username, $password)) {
                $userInfo = $this->user->loginUser($username, $password);
                $this->session->set_flashdata('login_msg', '<script>alert("Successfully logged in");</script>');
                echo $this->session->flashdata('login_msg');
                redirect('get');
            } elseif ($this->user->confirm($username, $password)) {
                $this->session->set_flashdata('login_msg', '<script>alert("Your email is not confirm!");</script>');
                $this->load->view('register');
                echo $this->session->flashdata('login_msg');
            } else {
                $this->session->set_flashdata('login_msg', '<script>alert("Your email or password is incorrect!");</script>');
                $this->load->view('register');
                echo $this->session->flashdata('login_msg');
            }
        }
    }
}
