<?php

require('application.php');

class Art extends ApplicationController {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('db_artwork');
        $this->data['art'] = $this->db_artwork->getAll();
        foreach($this->data['art'] as $each) {
            $each->price = $this->priceString($each->price);
        }
        $this->checkLoggedIn('gallery', 'sign_in');
    }

    public function add()
    {
        $this->data['to'] = 'saveNew';
        $this->checkLoggedIn('art_add', 'sign_in');
    }

    public function saveNew()
    {
        $this->validateForm('add');
    }

    public function edit($id)
    {
        $this->load->model('db_artwork');
        $artwork = $this->db_artwork->get($id);
        $this->data['id'] = $artwork->id;
        $this->data['title'] = $artwork->title;
        $this->data['description'] = $artwork->description;
        $this->data['price'] = $artwork->price;
        $this->data['image'] = $artwork->file;

        $this->data['to'] = 'saveEdit';
        $this->checkLoggedIn('art_edit', 'sign_in');
    }

    public function saveEdit()
    {
        $this->validateForm('edit');
    }

    public function delete($id)
    {
        $this->load->model('db_artwork');
        $artwork = $this->db_artwork->get($id);
        $this->db_artwork->delete($id);
        $this->data['title'] = $artwork->title;

        return $this->redirectSuccess('delete');
    }

    private function validateForm($function)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('title', $this->lang->line('title'), 'trim|required|max_length[255]|xss_clean');
        $this->form_validation->set_rules('description', $this->lang->line('description'), 'trim|xss_clean');
        $this->form_validation->set_rules('price', $this->lang->line('price'), 'trim|required|max_length[11]|greater_than[0]|xss_clean|');
        if (empty($_FILES['image']['name']) && $function == 'add') {
            $this->form_validation->set_rules('image', $this->lang->line('image'), 'required');
        }

        if($this->form_validation->run() == FALSE) {
            $this->validationFailure($function);
        } else {
            $this->validationSuccess($function);
        }
    }

    private function validationFailure($function)
    {
        $this->data['validation_errors'] = validation_errors();
        $this->data['title'] = $_POST['title'];
        $this->data['description'] = $_POST['description'];
        $this->data['price'] = $_POST['price'];
        if(ISSET($_POST['current'])) {
            $this->data['image'] = $_POST['current'];
        }

        $errors = array();
        $errors['title'] = form_error('title');
        $errors['description'] = form_error('description');
        $errors['price'] = form_error('price');
        $errors['image'] = form_error('image');
        $this->data['errors'] = $errors;

        $this->redirectFailure($function);
    }

    private function validationSuccess($function)
    {
        if(!empty($_FILES['image']['name'])) {
            $extension = end(explode('.', $_FILES['image']['name']));
            $pictureName = uniqid('image').'.'.$extension;
            $this->uploadFile($pictureName);
        } else $pictureName = $_POST['current'];

        $this->load->model('db_artwork');
        if($function == 'add') {
            $this->db_artwork->insert($pictureName);
        }elseif($function == 'edit') {
            $this->db_artwork->update($pictureName);
        }

        $this->redirectSuccess($function);
    }

    private function redirectFailure($function)
    {
        if($function == 'add') {
            $this->add();
        } elseif($function == 'edit') {
            $this->edit($_POST['id']);
        }
    }

    private function redirectSuccess($function)
    {
        if($function == 'add') {
            $data['success_message'] = $_POST['title'].' has been added to the gallery and will be displayed on the site.';
        } elseif($function == 'edit') {
            $data['success_message'] = $_POST['title'].' has been edited and will be displayed on the site.';
        } else if($function == 'delete') {
            $data['success_message'] = $this->data['title'].' has been deleted and will not be displayed on the site anymore';
        }
        $this->data = array_merge($data, $this->data);

        $this->index();
    }

    public function priceString($price)
    {
        return '€ '.str_replace('.', ",", $price);
    }



} 