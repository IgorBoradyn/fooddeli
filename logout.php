<?php
	session_start();
	if($_SESSION['isCourier']){
		require_once "connect.php";

		$connect = @new mysqli($host, $db_user, $db_password, $db_name);

		$connect->set_charset('utf8');

		if ($connect->connect_errno!=0) {
			echo "Error: ".$connect->connect_errno;
		}
		else {
			$userID = $_SESSION['userID'];
			$connect->query("UPDATE couriers SET status = 'not_working' WHERE ID = '$userID'");
		}
	}
	session_destroy();
	header('Location: index.php')
?>