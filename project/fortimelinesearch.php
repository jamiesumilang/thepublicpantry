<?php

	var_dump($_POST);
	// Use Post method to retrieve data onto users table
	$id = $_POST["id"];
	$userid = $_POST["userid"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$gender = $_POST["gender"];
	$e_mail = $_POST["e_mail"];
	$pass= $_POST["pass"];
	$confirm_pass = $_POST["confirm_pass"];
	
    $host = "localhost";
    $user_name = "root";
    $pass_word = "";
	$data_base = "mypantry_db";

	// Create connection to database 
    $connection = new mysqli($host, $user_name, $pass_word, $data_base);

	// If error display 
    if ($connection->connect_error) {
        die ("Failure connecting: ".$connection->connect_error);
    }
	// Insert variables into users database table 
	$sql = "INSERT INTO users (id, userid, first_name, last_name, gender, e_mail, pass, confirm_pass) VALUES ('0','0','$first_name', '$last_name','$gender', '$e_mail', '$pass', '$confirm_pass')";
	
	
    if($connection->query($sql) === true) {
		echo "Successfully";
		if ($user_count > 0) {
			
		}
		if ($user_count > 0) {
            echo "User $username exists";
        } else {
            echo "User not found.";
        }
    }
    else {
        echo "Error: ".$sql."<br>".$connection->error;
    }

    echo "connected";
	
    $connection->close();
?>
<!--Written by Ameera Sanaullah-->