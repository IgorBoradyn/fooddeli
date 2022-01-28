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

            $newEmail = htmlspecialchars($_POST['new_email']);

            $rows_num = $connect->query("SELECT * FROM users WHERE email='$newEmail'")->num_rows;
            if ($rows_num>0){
                $_SESSION['change_err'] = true;
            }
            else{
                $userID=$_SESSION['userID'];
                $connect->query("UPDATE users SET email = '$newEmail' WHERE ID = '$userID'");
                $_SESSION['email'] = $newEmail;
                $_SESSION['change_err'] = false;
            }
            header('Location: change_email.php');
		}
	}
    else header('Location: index.php');
?>