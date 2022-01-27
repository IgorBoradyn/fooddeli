<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "connect.php";

		$connect = @new mysqli($host, $db_user, $db_password, $db_name);

		$connect->set_charset('utf8');

		if ($connect->connect_errno!=0) {
			echo "Error: ".$connect->connect_errno;
		}
		else {
            session_start();

            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['password']);
            $users = $connect->query("SELECT * FROM users WHERE email='$email'");

            $rows_num = $users->num_rows;
            if ($rows_num<1){
                $_SESSION['login_err'] = true;
                header('Location: login.php');
            }

            $user = $users->fetch_assoc();

            if ($user['password'] == $pass) {
                $userID = $user['ID'];
                $_SESSION['logged'] = true;
                $_SESSION['userID'] = $userID;
                $_SESSION['email'] = $user['email'];
                $_SESSION['firstName'] = $user['first_name'];
                $_SESSION['lastName'] = $user['last_name'];
                
                $couriers = $connect->query("SELECT * FROM couriers WHERE ID='$uID'");
                
                $rows_num = $couriers->num_rows;
                if($rows_num >= 1){
                    $courier = $couriers->fetch_assoc();
                    $connect->query("UPDATE couriers SET status = 'avaible' WHERE ID = '$uID'");
                    $_SESSION['isCourier'] = true;
                }
                else{
                    $client = $connect->query("SELECT * FROM clients WHERE ID='$uID'")->fetch_assoc();
                    $_SESSION['phone'] = $client['phone'];
                    $_SESSION['street'] = $client['street'];
                    $_SESSION['streetNumber'] = $client['street_number'];
                    $_SESSION['flatNumber'] = $client['flat_number'];
                    $_SESSION['city'] = $client['city'];
                    $_SESSION['postcode'] = $client['postcode'];
                }

                header('Location: index.php');
            }
            $_SESSION['login_err'] = true;
            header('Location: login.php');
		}
	}
    else header('Location: index.php');
?>