<?php
    $server_name = "localhost";
    $db_name = "treehouse_registrations";
    $user_name = "root";
    $db_pswd = "123456";
    $link = mysqli_connect($server_name, $user_name, $db_pswd, $db_name);
    
	if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>