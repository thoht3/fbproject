<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
    }
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First name', 'required|min_length[2]|max_length[20]'); // Validation for first name Field
        $this->form_validation->set_rules('sname', 'Last name', 'required|min_length[2]|max_length[20]'); // validation for lastname field
        $this->form_validation->set_rules('address', 'Email', 'trim|required|valid_email|is_unique[users.email]'); // Validation for E-mail field.
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]'); // validation for password
        $this->form_validation->set_rules('birth_day', 'Date of birth', 'required'); // Validation for birthday Field.
        $this->form_validation->set_rules('birth_month', 'Date of birth', 'required');
        $this->form_validation->set_rules('birth_year', 'Date of birth', 'required');
        $this->form_validation->set_rules('sex', 'sex', 'required'); // validation for gender
        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $data = array(
                'firstname'          => $this->input->post('fname'),
                'lastname'           => $this->input->post('sname'),
                'email'              => $this->input->post('address'),
                'password'           => md5($this->input->post('password')),
                'birthday'           => $_POST['birth_year']."-". $_POST['birth_month']."-".$_POST['birth_day'],
                'gender'             => $this->input->post('sex'),
            );
            // $this->user->insertuser($data);
            $insertThanhCong = $this->user->insertuser($data);
            if ($insertThanhCong) {
                // send email
                if ($this->user->sendEmail($this->input->post('address'))) {
                    // successfully sent mail
                    $this->session->set_flashdata('regis_msg', '<script>alert("You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!");</script>');
                    $this->load->view('register');
                    echo $this->session->flashdata('regis_msg');
                } else {
                    // error
                    $this->session->set_flashdata('regis_msg', '<script>alert("Oops! Error.  Please try again later!!!");</script>');
                    $this->load->view('register');
                    echo $this->session->flashdata('regis_msg');
                }
            } else {
                // error
                $this->session->set_flashdata('regis_msg', '<script>alert("Oops! Error.  Please try again later!!!");</script>');
                $this->load->view('register');
                echo $this->session->flashdata('regis_msg');
            }
        }
    }
    
    public function verify($hashcode=null)
    {
        if ($this->user->verifyEmailID($hashcode)) {
            $this->session->set_flashdata('verify_msg', '<script>alert("Your email address is successfully verified! Please log in!");</script>');
            echo $this->session->flashdata('verify_msg');
        } else {
            $this->session->set_flashdata('verify_msg', '<script>alert("Sorry! There is error verifying your Email Address!");</script>');
            redirect('login');
        }
    }
}
