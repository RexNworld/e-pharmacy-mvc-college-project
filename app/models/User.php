<?php
class User{
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getUsers(){
        $this->db->query("SELECT * FROM `users`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function register($data){
        $sql = "INSERT INTO `e_users` (name,mobile,email,user_name,user_secret_id,password,user_register_datetime) VALUES(:name,:mobile,:email,:user_name,:user_secret_id,:pass,:date)";
        $this->db->query($sql);
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':mobile', ltrim($data['mobile'],'0'));
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':date', date('Y-m-d h:i:s', time()));
        $this->db->bind(':user_name', strstr($data['email'],'@', true));
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
?>