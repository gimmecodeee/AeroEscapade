<?php 

    include 'connection.php';

    session_start();

    if(isset($_POST['login'])) {
        $check = "SELECT * FROM `login-admin` WHERE adname = '$_POST[username]' 
                AND ademail = '$_POST[email]' AND adpassword = '$_POST[password]'";
        
        $result = mysqli_query($connection, $check);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['adminID'] = $_POST['username'];
            header('location: adminpage.php');
        }

        else if (mysqli_num_rows($result) == 0) {
            $check = "SELECT * FROM `login-user` WHERE email = '$_POST[email]'
                AND password = '$_POST[password]'";

            $result = mysqli_query($connection, $check);

            if (mysqli_num_rows($result) == 1) {
                header('location: userpage.php');
        }

        else {
            echo '<script> alert("Incorrect Login Details") </script>';
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
    <title>Aero Escapade | LOGIN</title>
</head>

<body>

    <form action="" method="POST">

            <input type="text" placeholder="Username" name="username">
            <br><br>
    
            <input type="email" placeholder="Email Address" name="email">
            <br><br>

            <input id="pw" type="password" placeholder="Password" name="password">
            <br><br>

            <button id="login" type="submit" name="login">LOG IN</button>

            <h4>Don't have an account? <a href="usersignup.php">Register Now</a></h4>

    </form>
    
</body>
</html>
