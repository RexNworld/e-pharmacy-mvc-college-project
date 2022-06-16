<?php
class Medicine{
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

    public function findExistingCategory($slug){
        $this->db->query("SELECT * FROM `e_category` WHERE c_tag = :slug");
        $this->db->bind(':slug',$slug);
        
        if($this->db->rowCount() != 0)
            return true;
        else
            return false;
    }
    public function addCategory($data){
        $this->db->query("INSERT INTO `e_category` (c_name,c_tag,c_img,c_date) VALUES(:c_name,:c_tag,:c_img,:c_date)");

        $this->db->bind(':c_name', $data['c_name']);
        $this->db->bind(':c_tag', $data['c_slug']);
        $this->db->bind(':c_img', $data['c_image']);
        $this->db->bind(':c_date', date('Y-m-d h:i:s', time()));
        
        if($this->db->execute())
            return true;
        else
            return false;
    }

    public function findExistingMedicine($slug){
        $this->db->query("SELECT * FROM `e_medicine` WHERE name_slug = :slug");
        $this->db->bind(':slug',$slug);
        
        if($this->db->rowCount() != 0)
            return true;
        else
            return false;
    }
    public function addMedicine($data){
        $this->db->query("INSERT INTO `e_medicine` (name,name_slug,image,s_price,m_price,categories,packaging_date,expiry_date,short_dec,long_dec,stock,date) VALUES(:name,:name_slug,:image,:s_price,:m_price,:categories,:packaging_date,:expiry_date,:short_dec,:long_dec,:stock,:date)");

        $this->db->bind(':name', $data['m_name']);
        $this->db->bind(':name_slug', $data['name_slug']);
        $this->db->bind(':image', $data['m_image']);
        $this->db->bind(':s_price', $data['m_price']);
        $this->db->bind(':m_price', $data['m_m_price']);
        $this->db->bind(':categories', $data['m_categories']);
        $this->db->bind(':packaging_date', $data['m_p_date']);
        $this->db->bind(':expiry_date', $data['m_e_date']);
        $this->db->bind(':short_dec', $data['m_short_dec']);
        $this->db->bind(':long_dec', $data['m_description']);
        $this->db->bind(':stock', $data['m_stock']);
        $this->db->bind(':date', date('Y-m-d h:i:s', time()));
        
        if($this->db->execute())
            return true;
        else
            return false;
    }




}