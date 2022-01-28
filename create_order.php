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

            $restaurantID = htmlspecialchars($_POST['restID']);
			$phone = htmlspecialchars($_POST['phone']);
			$street = htmlspecialchars($_POST['street']);
			$streetNumber = htmlspecialchars($_POST['street_number']);
			$flatNumber = htmlspecialchars($_POST['flat_number']);
			$city = htmlspecialchars($_POST['city']);
			$postcode = htmlspecialchars($_POST['postcode']);
            $paymentType = htmlspecialchars($_POST['payment_type']);
			
			$first_last_name = explode(" ", htmlspecialchars($_POST['first_last_name']));
            $firstName = $first_last_name[0];
            $lastName = $first_last_name[1];

            $cart = $connect->query("SELECT * FROM shopping_cart WHERE ID_client = '$userID' AND ID_restaurant='$restaurantID'")->fetch_assoc();
            $productsListID = $cart['ID_products_list'];

            $rows = $connect->query("SELECT ID_product, amount FROM products_list INNER JOIN shopping_cart ON shopping_cart.ID_products_list = products_list.ID WHERE ID_client = '$userID' AND shopping_cart.ID_restaurant = '$restaurantID';");
            $num_rows = $rows->num_rows;
            $sum = 0;
            for($i = 0; $i < $num_rows; $i++){
                $position = $rows->fetch_assoc();
                $productID = $position['ID_product'];
                $amount = $position['amount'];
    
                $product = $connect->query("SELECT price FROM products WHERE ID = '$productID'")->fetch_assoc();
                $sum += $product['price']*$amount;
            }

            $digits = 3;
            $collectionCode = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
            
            $connect->query("INSERT INTO orders(`ID`, `ID_client`, `ID_restaurant`, `ID_products_list`, `ID_courier`, `city`, `postcode`, `street`, `street_number`, `flat_number`, `price`, `payment_type`, `status`, `collection_code`) VALUES (NULL, '$userID', '$restaurantID', '$productsListID', 'NULL', '$city', '$postcode', '$street', '$streetNumber', '$flatNumber', '$sum', '$paymentType', 'Nieopłacone', '$collectionCode')");
            $connect->query("DELETE FROM shopping_cart WHERE ID_client = '$userID' AND ID_restaurant = '$restaurantID'");
            header('Location: delivery_status.php');
        }
	}
    else header('Location: index.php');
?>