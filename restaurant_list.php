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
	<title>FoodDeli - Lista restauracji</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>
<body>

<header></header>

<div class="container-fluid bg-light">
	<div class="row" style="padding: 40px;">
    	<div class="col text-center">
     		<div class="input-group m-2" style="max-width: 100%; vertical-align: middle; padding-left: 7%;">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1">
    					<i class="fas fa-search" style="color: #fd7e14"></i>
    				</span>
  				</div>
  				<input type="text" class="form-control" placeholder="Wyszukaj restauracje" aria-label="Wyszukaj restauracje" aria-describedby="basic-addon1">
			</div>
    	</div>
    	<div class="col text-center">
      		<div class="input-group m-2" style="vertical-align: middle; padding-right: 7%">
  				<div class="input-group-prepend">
    				<label class="input-group-text" for="inputGroupSelect01" style="color: #fd7e14">Sortuj według</label>
  				</div>
  				<select class="custom-select" id="inputGroupSelect01">
   					<option value="1" selected>Najlepsze dopasowanie</option>
    				<option value="2">Najpopularniejsze</option>
    				<option value="3">Opinie</option>
   					<option value="4">Czas dostawy</option>
   					<option value="5">Koszt dostawy</option>

  				</select>
  			</div>
    	</div>
  	</div>
</div>

<div class="container-fluid bg-light">
	<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
	<?php
		$rows = $connect->query("SELECT * FROM restaurants");
		$num_rows = $rows->num_rows;
		for($i = 0; $i < $num_rows; $i++){
			$restaurant = $rows->fetch_assoc();
			$ID = $restaurant['ID'];
			$img = $restaurant['photo'];
			$name = $restaurant['name'];

			$opinions_count = $connect->query("SELECT * FROM opinions WHERE restaurant_ID = '$ID'")->num_rows;
			$opinions_avg = $connect->query("SELECT AVG(rating) AS avg FROM opinions WHERE restaurant_ID = '$ID'")->fetch_assoc();
			$opinions_avg = $opinions_avg['avg'];

			$delivery_time = "dostawy wstrzymane";
			$delivery_cost = number_format($restaurant['delivery_cost'], 2);

echo<<<EOT
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php?id={$ID}" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="{$img}" class="img-fluid" style="width: 100%;" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">{$name}</div>
		  					<div class="w-100"></div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
								  	{$opinions_avg} ({$opinions_count})
		  					</div>
		 					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		 						<i class="fas fa-clock" style="color: #fd7e14"></i>
		 							{$delivery_time}
		 					</div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-bicycle" style="color: #fd7e14"></i>
								  	{$delivery_cost} zł

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

<footer class="page-footer font-small bg-light">
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
</script>

</body>
</html>
<?php } ?>