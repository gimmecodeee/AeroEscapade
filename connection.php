<?php

    $connection = new mysqli('localhost', 'root', '', 'aero_escapade');
    
    if ($connection->connect_error) {
        die ("Connection Failed" . $connection->connect_error);
    }
?>
