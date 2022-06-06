<?php
class User{
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getUsers(){
        $this->db->query("SELECT * FROM `e_users`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getUser($id){
        $this->db->query("SELECT * FROM `e_users` WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

    public function addUser(){
        return false;
    }

    public function editUser($data){
        $sql = "UPDATE `e_users` SET name = :name, mobile = :mobile, email = :email, user_type = :user_type, user_img = :user_img, status = :status, password = :pass WHERE id = :user_id";

        $this->db->query($sql);
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':mobile', $data['mobile']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':user_type', $data['user_type']);
        $this->db->bind(':user_img', $data['image']);
        $this->db->bind(':status', $data['status']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':user_id', $data['user_id']);

        if($this->db->execute())
            return true;
        else
            return false;
    }
    
    public function deleteUser($data){
        $this->db->query("DELETE FROM `e_users` WHERE id = :id");
        $this->db->bind(':id', $data);

        if($this->db->execute())
            return true;
        else
            return false;
    }

    public function register($data){
        $sql = "INSERT INTO `e_users` (name,mobile,email,user_name,user_img,user_secret_id,password,user_register_datetime) VALUES(:name,:mobile,:email,:user_name,:user_img,:user_secret_id,:pass,:date)";
        $this->db->query($sql);
        
        $isImage = (empty($data['image'])) ? '' : $data['image']; 
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':mobile', ltrim($data['mobile'],'0'));
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':date', date('Y-m-d h:i:s', time()));
        $this->db->bind(':user_name', strstr($data['email'],'@', true));
        $this->db->bind(':user_img', $isImage);
        $this->db->bind(':user_secret_id', sha1($data['email']));
        $this->db->bind(':pass', $data['pass']);

        if($this->db->execute())
            return true;
        else
            return false;
    }

    
    public function login($username, $password){
        // if(strpos($username))
        $isUsername = '';
        if(strpos($username, '@') != false){
            $sql = "SELECT * FROM `e_users` WHERE user_name = :username";
            $isUsername = strstr($username,'@', true);
        }
        else{
            $sql = "SELECT * FROM `e_users` WHERE mobile = :username";
            $isUsername = $username;
        }

        $this->db->query($sql);

        $this->db->bind(':username', $isUsername);
        
        $row = $this->db->single();
        if($row){
            $hashPassword = $row->password; 
        }
        else
            $hashPassword = ''; 

        if($hashPassword === sha1($password)){
            return $row;
        }
        else{
            return false;
        }
    }

    public function saveLoginData(){
        $sql = "UPDATE `e_users` SET last_login_datetime = :date WHERE id = :user_id";

        $this->db->query($sql);
        $this->db->bind(':date', date('Y-m-d h:i:s', time()));
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->execute();
    }


    

    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM `e_users` WHERE email = :email");
        $this->db->bind(':email', $email);
        // echo $this->db->rowCount();
        if($this->db->rowCount() != 0){
            return true;
        }
        else
            return false;
    }

    public function findUserbyMobile($mobile){
        $this->db->query("SELECT * FROM `e_users` WHERE mobile = :mobile");
        $this->db->bind(':mobile', $mobile);

        if($this->db->rowCount() != 0)
            return true;    
        else
            return false;
    }
}