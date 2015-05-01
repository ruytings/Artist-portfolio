<?php

abstract class ApplicationController extends CI_Controller {

    protected $data;
    protected $css;
    protected $js;
    protected $images;
    protected $fonts;

    function __construct()
    {
        parent::__construct();
        $this->setData();
    }

    protected function go($view)
    {
        $this->load->helper('url');
        $this->load->view($view, $this->data);
    }

    protected function dump($var)
    {
        var_dump($var);
        die;
    }

    protected function setData()
    {
        $this->data['css'] = base_url().'assets/css/';
        $this->data['js'] = base_url().'assets/js/';
        $this->data['images'] = base_url().'assets/images/';
        $this->data['fonts'] = base_url().'assets/fonts/';
    }

    protected function goError($view, $message)
    {
        $this->data['errorMessage'] = $message;
        $this->go($view);
    }

    protected function goSucces($view, $message)
    {
        $this->data['successMessage'] = $message;
        $this->go($view);
    }

    protected function checkLoggedIn($logged, $notLogged)
    {
        if($this->session->userdata('signed_in') == 1) {
            $this->go($logged);
        } else $this->go($notLogged);
    }

    protected function uploadFile($fileName)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($fileName);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    }

    protected function redirectController($controller)
    {
        $this->load->helper('url');
        redirect($controller);
    }

} 