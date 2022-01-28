<?php
	session_start();
	if(!(isset($_SESSION['logged']) && $_SESSION['logged']))
		header("Location: index.php");
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
	<title>FoodDeli - Opłacono zamówienie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>
<body>

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Opłacono zamówienie</h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='index.php'" style="margin-top: -95px; width: 90px" >Powrót</button>
			</div>
    	</div>
  	</div>
</div>

<div class="containe bg-light">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-5 pb-3" style="border-right: 1px solid #dee2e6;">
			<div class="row">
				<div class="col">
					<h3 class='fluid bg-light text-center mb-0 pt-3 pb-4 lead'>Dane adresowe</h3>
				</div>
				<div class="w-100"></div>
				<div class="col pl-5">
					<form class="needs-validation" novalidate>
  						<div class="form-row">
  							<div class="col-10 pb-1">
      							<label for="validationCustom07">Imię i nazwisko</label>
      							<input type="text" class="form-control" id="validationCustom07" placeholder="<?php echo $_SESSION['firstName']." ".$_SESSION['lastName'] ?>" disabled>
    						</div>
    						<div class="w-100"></div>
    						<div class="col-10 pb-1 pt-1">
      							<label for="validationCustom01">Ulica</label>
      							<input type="text" class="form-control" id="validationCustom01" placeholder="<?php echo $_SESSION['street'] ?>" disabled>
    						</div>
    						<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
							    <label for="validationCustom02">Numer budynku</label>
							    <input type="text" class="form-control" id="validationCustom02" placeholder="<?php echo $_SESSION['streetNumber'] ?>" disabled>
							    <div class="valid-feedback">Looks good!</div>
						    </div>
   							<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
							    <label for="validationCustom03">Numer mieszkania</label>
							    <input type="text" class="form-control" id="validationCustom03" placeholder="<?php echo $_SESSION['flatNumber'] ?>" disabled>
						    </div>
							<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
						      	<label for="validationCustom04">Numer telefonu</label>
						      	<input type="tel" class="form-control" id="validationCustom04" placeholder="<?php echo $_SESSION['phone'] ?>" disabled>
						    </div>							
						    <div class="w-100"></div>
						    <div class="col-3 pb-1 pt-1">
      							<label for="validationCustom05">Kod pocztowy</label>
								<input type="text" class="form-control" id="validationCustom05" placeholder="<?php echo $_SESSION['postcode'] ?>" disabled>
    						</div>
						    <div class="col-7 pb-1 pt-1">
						      	<label for="validationCustom06">Miasto</label>
						      	<input type="text" class="form-control" id="validationCustom06" placeholder="<?php echo $_SESSION['city'] ?>" disabled>
						    </div>
  						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-5" style="border-left: 1px solid #dee2e6;">
			<div class="row">
				<div class="col">
					<h3 class='fluid bg-light text-center mb-0 pt-3 pb-2 lead'>Aktualna pozycja kuriera</h3>
				</div>
				<div class="w-100"></div>
				<div class="col">
					<div class="modal-body bg-light pb-0">
      					<div class="container">
							<div class="col p-0">
								<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d18868.94759922866!2d20.44679828148648!3d53.76067677433483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x46e27ed424138d23%3A0x723fbb647fb17c03!2sCudne%20Manowce%20Restauracja%2C%20Boles%C5%82awa%20Chrobrego%2C%20Olsztyn!3m2!1d53.775251999999995!2d20.4768723!4m5!1s0x46e27f4da93ae01d%3A0xea956f263f7cf90!2sWMiI%20UWM%2C%20S%C5%82oneczna%2C%20Olsztyn!3m2!1d53.7436448!2d20.4561526!5e0!3m2!1spl!2spl!4v1643056273292!5m2!1spl!2spl" class="border" width="100%" height="350px" allowfullscreen="" loading="lazy"></iframe>
						    </div>
						 </div>
					</div>
      			</div>
      			<div class="w-100"></div>
      			<div class="col pt-3 pb-2">
					<p class="fluid bg-light text-center mb-0 pt-3 pb-2 lead">Oczekiwany czas dostawy: <a style="color: #fd7e14">45 minut</a></p>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
</div>

<footer class="page-footer font-small bg-light"><div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
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