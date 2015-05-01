<?php

require('db_application.php');

class DB_Artwork extends DB_Application {

    function __construct()
    {
        parent::__construct('artwork');
    }

    function insert($image)
    {
        $sql = "INSERT INTO artwork (id, title, description, price, file) VALUES (
            NULL,
            '" .$_POST['title']. "',
            '" .$_POST['description']. "',
            '" .$_POST['price']. "',
            '" .$image. "')";
        $this->db->query($sql);
    }

    function update($image)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $data = array('title' => $title, 'description' => $description, 'price' => $price, 'file' => $image);
        $where = 'id = '.$id;
        $sql = $this->db->update_string('artwork', $data, $where);

        $this->db->query($sql);
    }

    function delete($id) {
        $this->db->delete('artwork', array('id' => $id));
    }
}