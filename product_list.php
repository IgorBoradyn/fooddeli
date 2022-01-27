<?php
	session_start();
	require_once "connect.php";

	$connect = @new mysqli($host, $db_user, $db_password, $db_name);

	$connect->set_charset('utf8');

	if($connect->connect_errno!=0){
		echo "Error: ".$connect->connect_errno;
	}
	else{
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Cudowne Manowce Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>
<body>

<header></header>

<?php
	$restaurantID = $_GET['id'];
	$restaurant = $connect->query("SELECT * FROM restaurants WHERE ID='$restaurantID'")->fetch_assoc();
?>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'><?php echo $restaurant['name']; ?></h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='restaurant_list.php'" style="margin-top: -95px; width: 90px">Powrót</button>
			</div>
    	</div>
    	<div class="col-8">
    	
    	</div>
    	<div class="col-2 text-center">
     		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='shopping_cart.php?id=<?php echo $restaurantID; ?>'" style="margin-top: -95px; width: 90px" >
					<i class="fas fa-shopping-cart"></i>
				</button>
			</div>
    	</div>
  	</div>
</div>


<div class="bg-light text-center">
	<div class="btn-group" role="group" aria-label="Basic example" style="margin-left: auto; margin-right:auto;">
  		<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#exampleModal" style="background: rgb(234, 236, 239);">O restauracji</button>
		<div class="modal fade rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header bg-light">
        				<h5 class="modal-title" id="exampleModalLabel">O restauracji</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body bg-light pb-0">
      					<div class="container">
						 	<div class="row">
						 		<div class="col border border-bottom-0 pb-1 pl-2 pt-1 rounded-top text-left lead" style="font-size: 16px; background: #fd7e14; color: white;">Lokalizacja</div>
    							<div class="w-100"></div>
						    	<div class="col p-0">
						    		<?php echo $restaurant['location']; ?>
						    	</div>
						 	</div>
						</div>
      				</div>
      				<div class="modal-body bg-light pb-0">
      					<div class="container">
						 	<div class="row">
						 		<div class="col border border-bottom-0 pb-1 pl-2 pt-1 rounded-top text-left lead" style="font-size: 16px; background: #fd7e14; color: white;">
						 			<i class="far fa-clock pl-2 pr-1"></i>
						 			Godziny dostawy
						 		</div>
    							<div class="w-100"></div>
						    	<div class="col p-0">
						    		<div class="container">
							    		<div class="row">
											<?php $open_hours = json_decode($restaurant['open_hours'], true);?>
											<div class="col text-left pl-4 lead" style="font-size: 16px;">Poniedziałek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Monday"]["open"]." - ".$open_hours["Monday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Wtorek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Thuesday"]["open"]." - ".$open_hours["Thuesday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Środa</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Wednesday"]["open"]." - ".$open_hours["Wednesday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Czwartek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Thursday"]["open"]." - ".$open_hours["Thursday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Piątek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Friday"]["open"]." - ".$open_hours["Friday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Sobota</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Saturday"]["open"]." - ".$open_hours["Saturday"]["close"]; ?></div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Niedziela</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo $open_hours["Sunday"]["open"]." - ".$open_hours["Sunday"]["close"]; ?></div>
										</div>
									</div>
						    	</div>
						 	</div>
						</div>
      				</div>
      				<div class="modal-body bg-light pb-0">
      					<div class="container">
						 	<div class="row">
						 		<div class="col border border-bottom-0 pb-1 pl-2 pt-1 rounded-top text-left lead" style="font-size: 16px; background: #fd7e14; color: white;">
						 			<i class="fas fa-bicycle pl-1 pr-1" style="color: #white"></i>
						 			Koszty dostawy
						 		</div>
    							<div class="w-100"></div>
						    	<div class="col p-0">
						    		<div class="container">
							    		<div class="row">
							    			<div class="col text-left pl-4 lead text-nowrap" style="font-size: 16px;">Minimalna kwota zamówienia</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo number_format($restaurant['min_delivery_value'], 2)." zł"; ?></div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;">Koszty dostawy</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;"><?php echo number_format($restaurant['delivery_cost'], 2)." zł"; ?></div>
										</div>
									</div>
						    	</div>
						 	</div>
						</div>
      				</div>
      				<div class="modal-body bg-light rounded">
      					<div class="container">
						 	<div class="row">
						 		<div class="col border border-bottom-0 pb-1 pl-2 pt-1 rounded-top text-left lead" style="font-size: 16px; background: #fd7e14; color: white;">
						 			<i class="fas fa-building pl-2 pr-1" style="color: #white"></i>
						 			Informacje prawne
						 		</div>
    							<div class="w-100"></div>
						    	<div class="col p-0">
						    		<div class="container">
							    		<div class="row">
							    			<div class="col text-left pl-4 lead text-nowrap" style="font-size: 16px;"><?php echo $restaurant['name']; ?></div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;"><?php echo $restaurant['adress']; ?></div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;"><?php echo $restaurant['postcode']." ".$restaurant['city']; ?></div>
										</div>
									</div>
						    	</div>
						 	</div>
						</div>
      				</div>
    			</div>
  			</div>
		</div>
  		<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#modal_contact" style="background: rgb(234, 236, 239);">Kontakt</button>
  		<div class="modal fade" id="modal_contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header bg-light">
        				<h5 class="modal-title" id="exampleModalLabel">Kontakt</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body bg-light rounded">
      					<div class="container">
							<div class="row">
							    <div class="col text-left pl-4 lead text-nowrap" style="font-size: 16px;">Adres email</div>
							    <a class="col text-right pr-4 lead" style="font-size: 16px; color: #212529;" href="mailto:<?php echo $restaurant['email']; ?>"><?php echo $restaurant['email']; ?></a>
								<div class="w-100"></div>
								<div class="col text-left pl-4 lead" style="font-size: 16px;">Numer telefonu</div>
								<a class="col text-right pr-4 lead" style="font-size: 16px; color: #212529;" href="tel:<?php echo $restaurant['phone']; ?>"><?php echo $restaurant['phone']; ?></a>
							</div>
						</div>
      				</div>
    			</div>
  			</div>
		</div>
		<button type="button" class="btn border bordercolor resto shadow-none rounded-right" data-toggle="modal" data-target="#modal_help" style="background: rgb(234, 236, 239);">Pomoc</button>
		<div class="modal fade" id="modal_help" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header bg-light">
        				<h5 class="modal-title" id="exampleModalLabel">Jak możemy Ci pomóc?</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body bg-light rounded">
			      		<ul class="list-group list-group-flush">
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='help.php#nav-home'">Informacje ogólne</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='help.php#nav-profile'">Moje konto</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='help.php#nav-contact'">Zamówienia</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='help.php#nav-payment'">Płatności</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='help.php#nav-delivery'">Dostawa</button>
						</ul>
      				</div>
    			</div>
  			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-light">
	<div class="row" style="padding: 16px;">
    	<div class="col text-center">
     		<div class="input-group m-2" style="max-width: 100%; vertical-align: middle; padding-left: 7%;">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1">
    					<i class="fas fa-search" style="color: #fd7e14"></i>
    				</span>
  				</div>
  				<input type="text" class="form-control" placeholder="Wyszukaj" aria-label="Wyszukaj" aria-describedby="basic-addon1">
			</div>
    	</div>
    	<div class="col text-center">
      		<div class="input-group m-2" style="vertical-align: middle; padding-right: 7%">
  				<div class="input-group-prepend">
    				<label class="input-group-text" for="inputGroupSelect01" style="color: #fd7e14">Sortuj według</label>
  				</div>
  				<select class="custom-select" id="inputGroupSelect01">
   					<option selected>Najlepsze dopasowanie</option>
    				<option value="1">Cena</option>
  				</select>
  			</div>
    	</div>
  	</div>
</div>

<div class="container-fluid bg-light">
	<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
	<?php

		$rows = $connect->query("SELECT * FROM products WHERE ID_restaurant = '$restaurantID'");
		$num_rows = $rows->num_rows;
		for($i = 0; $i < $num_rows; $i++){
			$product = $rows->fetch_assoc();
			$productID = $product['ID'];
			$img = $product['photo'];
			$name = $product['name'];
			$desc = $product['description'];
			$price = number_format($product['price'], 2);
echo<<<EOT
  		<div id="{$productID}" class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php?id={$restaurantID}#{$productID}" class="product-add" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="{$img}" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">{$name}</div>
		  					<div class="w-100"></div>
		  					<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">{$desc}</div>
		  					<div class="w-100"></div>
		  					<div class="col text-right lead" style="padding-bottom: 15px; padding-right: 10%; font-size: 22px;">
		 						<i class="fas fa-money-bill-wave-alt" style="color: #fd7e14"></i>
		 							{$price} zł
		 					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
EOT;
		}
	?>
	</div>
</div>

<footer class="page-footer font-small bg-light"><div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
	
	$(".product-add").click(function(event){
		event.preventDefault();

		var href = this.href;
		var productID = href.split('#').pop();

		$.post('add_product_to_cart.php',{
			restID: <?php echo $restaurantID ?>,
			productID: productID
		}, function(){
			window.location = href;
		});

	});
</script>

</body>
</html>
<?php } ?>