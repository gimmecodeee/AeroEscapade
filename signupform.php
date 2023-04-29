<?php 

    include 'methods.php';

    $methods = new Methods();

    if (isset($_POST['signup'])){
        
        $register = $methods->registerUser($username, $email, $pw1, $pw2);
        
         if ($register) {
        
         echo 'Registration successful <a href="home.php">Click here</a> to login';
        
         } else {

         echo 'Registration failed. Email or Username already exits please try again';
        }

        }
        

    /*$registration = new Registration();

    if (isset($_POST['signup'])) {

        $result = $registration->registerUser($_POST['username'], $_POST['email'], $_POST['pw1'], $_POST['pw2']);

        if ($result == 1) {

            "<script> alert('Welcome, Dear Traveler!') </script>";
        }

        else if ($result == 10) {

            "<script> alert('Username or Email Address already taken!') </script>";
        }

        else if ($result == 100) {

            "<script> alert('Passwords do not match!') </script>"; 
        }

        else {

            
            
        }
    }*/

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