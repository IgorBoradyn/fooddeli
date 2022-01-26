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
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Cudne Manowce Restaurant</div>
		  					<div class="w-100"></div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (111)
		  					</div>
		 					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		 						<i class="fas fa-clock" style="color: #fd7e14"></i>
		 							60-75 min
		 					</div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-bicycle" style="color: #fd7e14"></i>
		  							10 zł

		  					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Cudne Manowce Restaurant</div>
		  					<div class="w-100"></div>
		  					<div class="w-100"></div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (111)
		  					</div>
		 					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		 						<i class="fas fa-clock" style="color: #fd7e14"></i>
		 							60-75 min
		 					</div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-bicycle" style="color: #fd7e14"></i>
		  							10 zł

		  					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Cudne Manowce Restaurant</div>
		  					<div class="w-100"></div>
		  					<div class="w-100"></div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (111)
		  					</div>
		 					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		 						<i class="fas fa-clock" style="color: #fd7e14"></i>
		 							60-75 min
		 					</div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-bicycle" style="color: #fd7e14"></i>
		  							10 zł

		  					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="product_list.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Cudne Manowce Restaurant</div>
		  					<div class="w-100"></div>
		  					<div class="w-100"></div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (111)
		  					</div>
		 					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		 						<i class="fas fa-clock" style="color: #fd7e14"></i>
		 							60-75 min
		 					</div>
		  					<div class="col text-center" style="padding-bottom: 15px; font-size: 22px;">
		  						<i class="fas fa-bicycle" style="color: #fd7e14"></i>
		  							10 zł

		  					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
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