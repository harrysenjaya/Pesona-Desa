<?php
    require_once "Controller/services/mysqlDB.php";

    class UserController{
        protected $db;

        public function __construct(){
            $this->db = new MySQLDB ("localhost", "root", "", "pesonadesa");
        }

        public function login(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $email = $this->db->escapeString($email);
            $password = md5($this->db->escapeString($password));
            $query = "SELECT FirstName FROM user WHERE email='$email' AND password='$password' ";
            $query_result = $this->db->executeSelectQuery($query);
            if($query_result!=NULL){
                $_SESSION['name'] = $query_result[0]['name'];
                header('Location: home');
            }
            else{
                echo "<script type='text/javascript'>alert('Invalid Username or Password.');window.location.href='home';</script>";
            }
        }
    }
?>