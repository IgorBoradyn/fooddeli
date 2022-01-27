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

            $oldPassword = $_POST['old_password'];
            $newPassword = htmlspecialchars($_POST['new_password']);
            $userID = $_SESSION['userID'];

            $client = $connect->query("SELECT password FROM users WHERE ID='$userID'")->fetch_assoc();
            $clientPassword = $client['password'];

            echo $oldPassword." ".$clientPassword;

            if ($oldPassword !== $clientPassword){
                $_SESSION['change_err'] = true;
            }
            else{
                $connect->query("UPDATE users SET password = '$newPassword' WHERE ID = '$userID'");
                $_SESSION['change_err'] = false;
            }
            header('Location: change_password.php');
		}
	}
    else header('Location: index.php');
?>