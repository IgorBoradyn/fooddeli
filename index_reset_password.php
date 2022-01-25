<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Resetuj hasło</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Resetuj hasło</h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='index_login.php'" style="margin-top: -95px; width: 90px" >Powrót</button>
			</div>
    	</div>
  	</div>
</div>


<div class="container-fluid bg-light">
	<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
  		<div class="col">
			<form class="needs-validation" novalidate>
				<div class="form-row" style="width: 40%; margin-left: auto; margin-right: auto;">
			    	<div class="col placeholder">
			      		<label for="validationCustom01">E-mail</label>
			      		<input type="email" class="form-control" id="validationCustom01" placeholder="E-mail" required>
			      		<div class="invalid-feedback">Należy podać adres e-mail</div>
			    	</div>
			    	<div class="w-100" style="padding-top: 30px"></div>
			    	<div class="col">    	
			    		<div class="col text-center pt-4 pb-5">
				      		<div class="bg-light text-center" style="height: 0px;">
								<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" style="background: rgb(234, 236, 239);">Wyślij</button>
				    		</div>
			  			</div>
			  		</div>
			</form>
  		</div>
  		<div class="container"></div>
	</div>
</div>

<footer class="page-footer fixed-bottom font-small bg-light"><div class=​"row" style=​"width:​ 85%;​ margin-left:​ auto;​ margin-right:​ auto;​">​
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
</script>

</body>
</html>
