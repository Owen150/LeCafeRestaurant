<?php

    include_once './account.php';
    class User implements Account {
        //properties 
        private $email;
        private $password;
        private $fullName;
        private $city;
        //class constructor 
        public function __construct(){
        } 
        public function setFullName ($name){
            $this->fullName = $name;
        }
        public function getFullName (){
            echo $this->fullName."<br/>";
        }
        public function setEmail($em){
            $this->email = $em;
        }
        public function getEmail(){
            echo $this->email."<br/>";
        }
        public function setPassword($password){
            $this->password = $pass;
        }
        public function getPassword(){
            echo $this->password."<br/>";
        }
        public function setCity($cty){
            $this->cty = $city;
        }
        public function getCity(){
            echo $this->city."<br/>";
        }


        public function register ($pdo){
            $hashedPassword = password_hash($this->getPassword(),PASSWORD_DEFAULT);
            try {
                $stmt = $pdo->prepare ('INSERT INTO user (fullName,email,password,city) VALUES(?,?,?,?)');
                $stmt->execute([$this->getFullName(),$this->getEmail(),$hashedPassword, $this->getCity()]);
                return "Registration was successful";
            } catch (PDOException $ex) {
                return $ex->getMessage(); //In production return a generic message i.e "An error occurred" but log the specific message
            }            
        }
        /**
        * Check if a user entered a correct email and password
        * @param Object PDO Database connection handle
        * @return String success or failure message
        */
        public function login ($pdo){
            try {
                $stmt = $pdo->prepare("SELECT password FROM user WHERE email=?");
                $stmt->execute([$this->email]);
                $row = $stmt->fetch();
                if($row == null){
                    return "This account does not exist";
                }
                if (password_verify($this->password,$row['password'])){
                    return "Correct blah blah....";
                }
                return "Your email or password is not correct";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function changePassword($pdo){
            try{
                $stmt = $pdo->prepare("UPDATE user SET user_password = ? AND user_password = ?");
                $stmt->execute([$this->newPass, $_SESSION['user_id'], $this->userPass]);
                $result = $stmt->fetch();
                $stmt = null;
                return "User Password has been changed";
            } catch (PDOException $e){
                return $e->getMessage();
            }
        }
        public function logout($pdo){
            session_destroy();
        }
    }
?>