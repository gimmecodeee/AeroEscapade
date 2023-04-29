<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'testing');


/*$connection = new mysqli('localhost', 'root', '', 'aero_escapade');

if ($connection->connect_error) {
    die ("failed" . $connection->connect_error);
}*/

    /*class Connection {

        public $server = "localhost";
        public $uname = "root";
        public $password = "";
        public $database = "testing";
        public $connect;
        
        public function __construct() {

            $this->connect = mysqli_connect($this->server, $this->uname, $this->password, $this->database);
        }

    }

    class Registration extends Connection {

        public function registerUser($username, $email, $pw1, $pw2) {

            $query = mysqli_query($this->connect, "SELECT * FROM `users` WHERE username = '$username' OR email = '$email'");

            if (mysqli_num_rows($query) == 1) {

                return 10;
            }

            else if ($pw1 == $pw2) {
                
                session_start();

                $insert = "INSERT IGNORE INTO `users`(`username`, `email`, `password`) 
                VALUES ('$_POST[username]','$_POST[email]','$_POST[pw1]')";

                mysqli_query($this->connect, $insert);

                if (mysqli_query($this->connect, $insert)) {
                    
                    $_SESSION['userID'] = $_POST['username'];
                    header('location: home.php');

                return 1;
            }

            /*else if (trim($_POST['pw1']) == '' || trim($_POST['pw2']) == '' || trim($_POST['username']) == '' || trim($_POST['email']) == '') {

                return 100;
            }

            else {

                return 100;
                }
            }
        }
    }*/

?>