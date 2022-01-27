<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "connect.php";
        
        $connect = @new mysqli($host, $db_user, $db_password, $db_name);
        
        $connect->set_charset('utf8');
        
        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else {
            session_start();

            $email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$phone = htmlspecialchars($_POST['phone']);
			$street = htmlspecialchars($_POST['street']);
			$streetNumber = htmlspecialchars($_POST['street_number']);
			$flatNumber = htmlspecialchars($_POST['flat_number']);
			$city = htmlspecialchars($_POST['city']);
			$postcode = htmlspecialchars($_POST['postcode']);
			
			$first_last_name = explode(" ", htmlspecialchars($_POST['first_last_name']));
            $firstName = $first_last_name[0];
            $lastName = $first_last_name[1];

			$rows_login = $connect->query("SELECT ID FROM user WHERE email='$email'")->num_rows;
			
			if ($rows_login>=1){
                $_SESSION['acc_taken'] = true;
                header('Location: register_user.php');
            }
			else{
				$connect->query("INSERT INTO users(email, password, first_name, last_name) VALUES ('$email', '$password', '$firstName', '$lastName')");
                $userID = $connect->insert_id;
				$connect->query("INSERT INTO clients(ID, phone, street, street_number, flat_number, city, postcode) VALUES ('$userID', '$phone', '$street', '$streetNumber', '$flatNumber', '$city', '$postcode')");
                
                $_SESSION['acc_taken'] = false;
                header('Location: register_user.php');
            }
        }
    }
    else header('Location: index.php');
?>