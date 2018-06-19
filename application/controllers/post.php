<?php 
    class post extends CI_controller {
        //
        // A very simple PHP example that sends a HTTP POST to a remote site
        //
        public function index() {
            $url = "https://www.googleapis.com/oauth2/v4/token";
            $post = "client_id=702320200153-imu0o88idarll6t523723l29707balhm.apps.googleusercontent.com&client_secret=-cCJ-kWgNZKQ6cucuISFoFdk&refresh_token=1/A-mRMpaEg9lj8fP3FkuscS4_b5sDTgPDqSd0CLlYceiL1exNboka6kWJRakJJJwD&grant_type=refresh_token";
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            // in real life you should use something like:
            // curl_setopt($ch, CURLOPT_POSTFIELDS, 
            //          http_build_query(array('postvar1' => 'value1')));

            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec($ch);
            if(curl_errno($ch)){
                echo curl_error($ch);
            }
            curl_close ($ch);
            var_dump(json_decode($server_output, TRUE));
        }
        
    }
?>