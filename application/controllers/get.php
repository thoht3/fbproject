<?php
    class get extends CI_controller
    {
        public function index()
        {
            $this->load->helper('url');
            $url ="http://1.55.145.15/api/listcourse.php?userid=30229";
            //  Initiate curl
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL, $url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);
            // Will dump a beauty json :3
            $obj = json_decode($result, true);
            $data['course']=$obj;
            $this->load->view('course', $data);
        }
    }
