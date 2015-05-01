<?php

require('application.php');

class Admin extends ApplicationController {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->redirectController('Art');
    }

    public function signIn()
    {
        if(ISSET($_POST['password'])) {
            $passwordProvided = md5($_POST['password']);
            if ($passwordProvided == $this->config->item('password')) {
                $sessionData = array(
                    'signed_in' => 1,
                );
                $this->session->set_userdata($sessionData);
                $this->redirectController('art');
                return;
            }
        }
        $this->goError('sign_in', 'Invalid password');
    }

    public function signOut()
    {
        $sessionData = array(
            'signed_in' => 0,
        );
        $this->session->set_userdata($sessionData);
        $this->goSucces('sign_in', 'You have been signed out');
    }

} 