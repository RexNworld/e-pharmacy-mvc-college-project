<?php
class MedicinePage{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getCategories(){
        $this->db->query("SELECT * FROM `e_category`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getCategoriesByName($slug){
        $this->db->query("SELECT * FROM `e_category` WHERE c_tag = :slug");
        $this->db->bind(':slug',$slug);

        $result = $this->db->resultSet();
        return $result;
    }

    public function getMedicine(){
        $this->db->query("SELECT * FROM `e_medicine`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getMedicineByTag($slug){
        $this->db->query("SELECT * FROM `e_medicine` WHERE name_slug = :slug");
        $this->db->bind(':slug',$slug);
        $result = $this->db->resultSet();
        return $result;
    }

   



}