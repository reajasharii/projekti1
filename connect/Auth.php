<?php 

include 'autoload.php';

class Auth {
    private $email;
    private $username;
    private $password;
    private $role;
    private $mysqli;

    public function __construct($email,$username, $password, $role) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;

        $this->mysqli = (Database::getInstance())->getConnection();
    }   

    public function login() {
        if($this->validate_username($this->username) && $this->validate_password($this->password)) {
            $sql = "SELECT * FROM `users` WHERE `username` = '$this->username'";
            $result = $this->mysqli->query($sql);
            if($result->num_rows) {
                $row = $result->fetch_assoc();

                if(password_verify($this->password,$row['password'])) 
                    return $row;
                else 
                    return false;
            }
        }

        return false;
    }

    public function register() {
        if(!$this->validate_email($this->email) ||!$this->validate_username($this->username) || !$this->validate_password($this->password) || !$this->validate_role()) 
            return false;


        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users` (`email`,`username`, `password`, `is_admin`) VALUES ('".$this->email."','".$this->username."', '".$this->password."', '".$this->role."')";


        
        if($this->mysqli->query($sql))
            return $this->mysqli->insert_id;
        else
            return 0;
    }

    private function validate_email() {
        return preg_match('/[\w\.\-\_]+\@\w+\.[a-zA-Z]{2,5}/i', $this->email);
    }
    private function validate_username(){
       return preg_match('/^[a-zA-Z0-9_]+$/', $this->username);
    }

    private function validate_password() {
        return (strlen($this->password) >= 8);
    }

    private function validate_role() {
        return ($this->role == 0 || $this->role == 1);
    }
}
//testimi a funksionon
/*$u = new Auth("reajashari@gmail.com","reaa","rea123456",0);
if($u->register()){
    echo "yes";
}else{
    echo "no";
}*/
?>