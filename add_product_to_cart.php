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

            $userID = $_SESSION['userID'];
            $restaurantID = $_POST['restID'];
            $productID = $_POST['productID'];

            $cart = $connect->query("SELECT * FROM shopping_cart WHERE ID_client = '$userID' AND ID_restaurant='$restaurantID'");
            $num_rows = $cart->num_rows;
            if($num_rows > 0){
                $cart = $cart->fetch_assoc();
                if(is_null($cart['ID_products_list'])){
                    $productsListID = $connect->query("SELECT ID FROM products_list ORDER BY ID DESC LIMIT 0, 1")->fetch_assoc();
                    $productsListID = $productsListID['ID'];
                    $productsListID++;

                    $connect->query("INSERT INTO products_list(ID, ID_product, amount) VALUES ('$productsListID', '$productID', '1')");
                    $connect->query("UPDATE shopping_cart SET ID_products_list = '$productsListID' WHERE ID_client = '$userID' AND ID_restaurant='$restaurantID'");
                }
                else{
                    $productsListID = $cart['ID_products_list'];
                    $amount = $connect->query("SELECT amount FROM products_list WHERE ID='$productsListID' AND ID_product = '$productID'")->fetch_assoc();
                    $amount = $amount['amount'];
                    $amount++;

                    if($amount > 1)
                        $connect->query("UPDATE products_list SET amount = '$amount' WHERE ID = '$productsListID' AND ID_product = '$productID'");
                    else
                        $connect->query("INSERT INTO products_list(ID, ID_product, amount) VALUES ('$productsListID', '$productID', '$amount')");
                }
            }
            else{
                $productsListID = $connect->query("SELECT ID FROM products_list ORDER BY ID DESC LIMIT 0, 1")->fetch_assoc();
                $productsListID = $productsListID['ID'];
                $productsListID++;

                $connect->query("INSERT INTO products_list(ID, ID_product, amount) VALUES ('$productsListID', '$productID', '1')");
                $connect->query("INSERT INTO shopping_cart(ID_client, ID_restaurant, ID_products_list) VALUES ('$userID', '$restaurantID', '$productsListID')");
            }
        }
	}
    else header('Location: index.php');
?>