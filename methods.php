<?php 

    include "connection.php";

    class Methods {

        public $db;
        public function __construct() {

            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
            }

            else {

                echo "success";
            }

        }

        public function registerUser($username, $email, $pw1, $pw2) {

            //$hashpassword = md5($pw1);
     
            $query = "SELECT * FROM `usersinfo` WHERE username = '$_POST[$username]' OR email = '$_POST[$email]'";

            $result = $this->db->query($query);
            $count = $result->num_rows;

            if ($count == 0){
            
                $insert = "INSERT IGNORE INTO `usersinfo`(`username`, `email`, `password`) 
                VALUES ('$_POST[username]','$_POST[email]','$_POST[pw1]')";

                $result = mysqli_query($this->db,$insert) or die(mysqli_connect_errno()."Data cannot inserted");

                return $result;

            }

            else { 

                echo "already exists";
            }

        }
                
     
        }


?>