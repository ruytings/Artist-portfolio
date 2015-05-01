<?php
class DB_Application extends CI_Model {

    protected $entity;

    function __construct($entity) {
        parent::__construct();
        $this->entity = $entity;
    }
    private function queryAll($sql) {
        $query = $this->db->query($sql);
        return $query->result();
    }

    private function queryOne($sql) {
        $query = $this->db->query($sql);
        return $query->result()[0];
    }

    public function getAll() {
        $sql = 'SELECT * FROM '.$this->entity;
        return $this->queryAll($sql);
    }

    public function get($id) {
        $sql = 'SELECT * FROM '.$this->entity.' WHERE id = '.$id.' ORDER BY id DESC';
        return $this->queryOne($sql);
    }




}