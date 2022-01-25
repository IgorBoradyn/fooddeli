<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Nowe zamówienie</title>
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

<div style="  display: flex; align-items: center; justify-content: center; min-height: 500px;">
	<div class="row">
	  	<div class="col">
	  		<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Masz nowe zamówienie. Chcesz je zaakceptować?</h2>
	  	</div>
	  	<div class="w-100"></div>
	  	<div class="col text-center">
	  		<div class="btn-group" role="group" aria-label="Basic example">
				<button type="button" class="btn btn-success border bordercolor shadow-none mr-3 rounded" onclick="location.href='index_delivery_3.php'" style="width: 125px">Zaakceptuj</button>
				<button type="button" class="btn btn-danger border bordercolor shadow-none ml-3 rounded" onclick="location.href='index_delivery_1.php'" style="width: 125px">Odrzuć</button>
			</div>
	  	</div>
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
