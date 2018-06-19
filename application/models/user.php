<?php
defined('BASEPATH') or exit('No direct script access allowed');
class user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertuser($data)
    {
        $kkkk =  $this->db->insert('users', $data);
        return $kkkk;
    }
    public function sendEmail($to_email)
    {
        $from_email = 'thoht3@topica.edu.vn'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = '<br />Please click on the below activation link to verify your email address.<br /><br /> http://localhost/fblocal/registration/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />KMail Team';
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'giadinhlaso1'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = true;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        //send mail
        $this->email->from($from_email, 'Ho Trong Tho');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            $guichua = true;
        } else {
            $guichua = false;
        }
        return $guichua;
    }
    //activate user account
    public function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('users', $data);
    }
    public function loginUser($username, $password)
    {
        //$this->db->where(array('username' = >$username, 'password' => $password));
        $query = $this->db->get_where('users', array('email' => $username, 'password' => $password,'status'=> 1));//status sholud be 1
        if ($query->num_rows() == 1) {
            $userArr = array();
            foreach ($query->result() as $row) {
                $userArr[0] = $row->id;
                $userArr[1] = $row->email;
            }
            $userData = array(
                'id'    => $userArr[0],
                'email' => $userArr[1],
                'logged_in'=> TRUE
            );
            $this->session->set_userdata($userData);
            return $query->result();
        } else {
            return false;
        }
    }
    public function confirm ($username, $password) {
        $query = $this->db->get_where('users', array('email' => $username, 'password' => $password,'status'=> 0));
        if ($query->num_rows() == 1) {
            return true;
        }else {
            return false;
        }
    }
    public function logout()
    {
    }
}

?> 