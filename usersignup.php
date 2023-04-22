<?php 

    include 'connection.php';

    if (isset($_POST['signup'])) {

        if (trim($_POST['pw1']) == '' || trim($_POST['pw2']) == '' || trim($_POST['username']) == '' || trim($_POST['email']) == '') {
            echo '<script> alert("All fields are required!") </script>';
        }
        
        else if ($_POST['pw1'] != $_POST['pw2']) {
            echo '<script> alert("Passwords do not match!") </script>';
        }

        else {
            $check = "SELECT * FROM `login-user` WHERE username = '$_POST[username]' AND email = '$_POST[email]'";

            $result = mysqli_query($connection, $check);

            if (mysqli_num_rows($result) == 1) {
                echo '<script> alert("Username or Email Address already taken!") </script>';
            }

            else if (mysqli_num_rows($result) == 0) {

                $insert = "INSERT INTO `login-user`(`username`, `email`, `password`) 
                            VALUES ('$_POST[username]','$_POST[email]','$_POST[pw1]')";

                if (mysqli_query($connection, $insert)) {
                    session_start();
                    
                    $_SESSION['userID'] = $_POST['username'];
                    header('location: home.php');

                    echo '<script> alert("Welcome, Dear Traveler!") </script>';
                } 
            }
        }       
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aero Escapade | SIGN UP</title>
</head>

<body>

    <form action="" method="POST">
    
        <input type="text" placeholder="Username" name="username">
        <br><br>

        <input type="email" placeholder="Email Address" name="email">
        <br><br>

        <input type="password" placeholder="Password" name="pw1">
        <br><br>

        <input type="password" placeholder="Retype Password" name="pw2">
        <br><br>

        <button id="signup" type="submit" name="signup">SIGN UP</button>

    </form>

</body>
</html>