<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Lista zamówień</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="delivery1.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zamówienia aktywne</h2>

<div class="text-center">
	<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#exampleModalCenter1" style="min-width: 210px;">Zamówienie #1111111</button>
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="col-12 modal-title text-center" id="exampleModalLongTitle">Zamówienie #1111111</h5>
      			</div>
      			<div class="modal-content">
      				<div class="container-fluid bg-light pt-3">
						<div class="row" style="width: 90%; margin-left: auto; margin-right: auto;">
  							<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
								<div class="row">
									<div class="col-2 p-0 border bordercolor">
										<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
									</div>
									<div class="col-10">
										<div class="row" style="min-height: 100%;">
			  								<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
			  								<div class="w-100"></div>
			  								<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
										</div>
									</div>
								</div>
  							</div>
  							<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
								<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
  							</div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Płatność: <h2 class="col ml-2" style="color: #fd7e14">Gotówka</h2></div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Do zapłaty: <h2 class="col ml-2" style="color: #fd7e14">156 zł</h2></div>
  						</div>
					</div>
					<div class="container fluid bg-light pb-3">
  						<div class="row" style="width: 90%; margin-left: auto; margin-right: auto;">
  							<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
								<div class="row">
									<div class="col-2 p-0 border bordercolor">
										<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
									</div>
									<div class="col-10">
										<div class="row" style="min-height: 100%;">
			  								<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Adam</div>
			  								<div class="w-100"></div>
			  								<div class="col h-50 lead" style="font-size: 22px;">Kod obdioru: 567</div>
										</div>
									</div>
								</div>
  							</div>
  						</div>
					</div>
      			</div>
	      		<div class="modal-footer">
					<div class="container">
  						<div class="row">
    						<div class="col pt-4 pb-4">
								<button type="button" class="btn btn-success px-5 py-2">Zmień status na wydane</button>
							</div>
  						</div>
					</div>
	      		</div>
    		</div>
  		</div>
	</div>
</div>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zamówienia oczekujące na kuriera</h2>

<div class="text-center">
	<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#exampleModalCenter2" style="min-width: 210px;">Zamówienie #2222222</button>
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="col-12 modal-title text-center" id="exampleModalLongTitle">Poszukiwanie kuriera</h5>
      			</div>
      			<div class="modal-content bg-light rounded-0">
      				<div class="container pt-5">
						<div class="row">
      						<div class="col-12 pb-5">
        						<div class="snippet" data-title=".dot-spin">
          							<div class="stage">
            							<div class="dot-spin ml-auto mr-auto"></div>
         							</div>
        						</div>
     			 			</div>
      						<div class="w-100"></div>
      						<div class="col-12">
				      			<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Oczekiwanie na potwierdzenie ze strony kuriera...</h2>
      						</div>
    					</div>
 					</div>
      			</div>
    		</div>
  		</div>
	</div>
</div>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zamówienia w kolecje</h2>

<div class="text-center pb-5">
	<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#exampleModalCenter3" style="min-width: 210px;">Zamówienie #3333333</button>
	<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="col-12 modal-title text-center" id="exampleModalLongTitle">Nowe zamówienie</h5>
      			</div>
      			<div class="modal-content">
      				<div class="container-fluid bg-light">
						<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
  							<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
								<div class="row">
									<div class="col-2 p-0 border bordercolor">
										<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
									</div>
									<div class="col-10">
										<div class="row" style="min-height: 100%;">
			  								<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
			  								<div class="w-100"></div>
			  								<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
										</div>
									</div>
								</div>
  							</div>
  							<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
								<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
  							</div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Płatność: <h2 class="col ml-2" style="color: #fd7e14">Gotówka</h2></div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Do zapłaty: <h2 class="col ml-2" style="color: #fd7e14">156 zł</h2></div>
  						</div>
					</div>
      			</div>
	      		<div class="modal-footer">
					<div class="container">
  						<div class="row">
    						<div class="col pt-4 pb-4">
								<button type="button" class="btn btn-success px-5 py-2" onclick="location.href='index_delivery_1.php'">Zaakceptuj</button>
							</div>
    						<div class="col pt-4 pb-4">
								<button type="button" class="btn btn-danger px-5 py-2" data-dismiss="modal">Odrzuć</button>
    						</div>
  						</div>
					</div>
	      		</div>
    		</div>
  		</div>
	</div>
</div>

<div class="text-center pb-5">
	<button type="button" class="btn border bordercolor resto shadow-none" data-toggle="modal" data-target="#exampleModalCenter4" style="min-width: 210px;">Zamówienie #4444444</button>
	<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="col-12 modal-title text-center" id="exampleModalLongTitle">Nowe zamówienie</h5>
      			</div>
      			<div class="modal-content">
      				<div class="container-fluid bg-light">
						<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
  							<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
								<div class="row">
									<div class="col-2 p-0 border bordercolor">
										<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
									</div>
									<div class="col-10">
										<div class="row" style="min-height: 100%;">
			  								<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
			  								<div class="w-100"></div>
			  								<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
										</div>
									</div>
								</div>
  							</div>
  							<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
								<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
  							</div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Płatność: <h2 class="col ml-2" style="color: #fd7e14">Gotówka</h2></div>
  							<div class="w-100"></div>
  							<div class="col h-50" style="font-size: 22px;">Do zapłaty: <h2 class="col ml-2" style="color: #fd7e14">156 zł</h2></div>
  						</div>
					</div>
      			</div>
	      		<div class="modal-footer">
					<div class="container">
  						<div class="row">
    						<div class="col pt-4 pb-4">
								<button type="button" class="btn btn-success px-5 py-2" onclick="location.href='index_delivery_1.php'">Zaakceptuj</button>
							</div>
    						<div class="col pt-4 pb-4">
								<button type="button" class="btn btn-danger px-5 py-2" data-dismiss="modal">Odrzuć</button>
    						</div>
  						</div>
					</div>
	      		</div>
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
