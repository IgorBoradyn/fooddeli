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

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Cudowne Manowce Restaurant</h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='index2.php'" style="margin-top: -95px; width: 90px" >Powrót</button>
			</div>
    	</div>
    	<div class="col-8">
    	
    	</div>
    	<div class="col-2 text-center">
     		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='index5.php'" style="margin-top: -95px; width: 90px" >
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
						    		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9431.199034800073!2d20.4768723!3d53.775252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x723fbb647fb17c03!2sCudne%20Manowce%20Restauracja!5e0!3m2!1spl!2spl!4v1642758316583!5m2!1spl!2spl" class="border" width="100%" height="350px" allowfullscreen="" loading="lazy"></iframe>
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
											<div class="col text-left pl-4 lead" style="font-size: 16px;">Poniedziałek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Wtorek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Środa</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Czwartek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Piątek</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Sobota</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
										  	<div class="w-100"></div>
										  	<div class="col text-left pl-4 lead" style="font-size: 16px;">Niedziela</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">11:00 - 22:30</div>
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
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">Brak</div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;">Koszty dostawy</div>
										  	<div class="col text-right pr-4 lead" style="font-size: 16px;">10 zł</div>
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
							    			<div class="col text-left pl-4 lead text-nowrap" style="font-size: 16px;">Cudowne Manowce Restaurant</div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;">Bolesława Chrobrego 4A</div>
										  	<div class="w-100"></div>
											<div class="col text-left pl-4 lead" style="font-size: 16px;">10-033 Olsztyn</div>
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
							    <a class="col text-right pr-4 lead" style="font-size: 16px; color: #212529;" href="mailto:sample@mail.com">sample@mail.com</a>
								<div class="w-100"></div>
								<div class="col text-left pl-4 lead" style="font-size: 16px;">Numer telefonu</div>
								<a class="col text-right pr-4 lead" style="font-size: 16px; color: #212529;" href="tel:+48123456789">+123456789</a>
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
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='index4.php'">Informacje ogólne</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='index4.php'">Moje konto</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='index4.php'">Zamówienia</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='index4.php'">Płatności</button>
				 			<button id="active_help" class="list-group-item bg-light" onclick="location.href='index4.php'">Dostawa</button>
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
   					<option selected>Najpopularniejsze</option>
    				<option value="1">Opinie</option>
    				<option value="2">Liczba opini</option>
  				</select>
  			</div>
    	</div>
  	</div>
</div>

<div class="container-fluid bg-light">
	<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="index.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
		  					<div class="w-100"></div>
		  					<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
		  					<div class="w-100"></div>
		  					<div class="col text-right lead" style="padding-bottom: 15px; padding-right: 10%; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (30)&emsp;
		 						<i class="fas fa-money-bill-wave-alt" style="color: #fd7e14"></i>
		 							39,00 zł
		 					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
  			<div class="input-group-vertical p-auto ml-3">
				<span class="input-group-btn bg-light">
			    	<button class="btn btn-pluss border bordercolor rounded-0 border-bottom-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-plus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			  	<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
			  	<span class="input-group-btn">
			    	<button class="btn btn-minuse border bordercolor rounded-0 border-top-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-minus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			</div>
			<button id="btn_plus" class="btn ml-2">
				<i class="fas fa-plus"></i>
			</button>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="index.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
		  					<div class="w-100"></div>
		  					<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
		  					<div class="w-100"></div>
		  					<div class="col text-right lead" style="padding-bottom: 15px; padding-right: 10%; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (30)&emsp;
		 						<i class="fas fa-money-bill-wave-alt" style="color: #fd7e14"></i>
		 							39,00 zł
		 					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
  			<div class="input-group-vertical p-auto ml-3">
				<span class="input-group-btn bg-light">
			    	<button class="btn btn-pluss border bordercolor rounded-0 border-bottom-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-plus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			  	<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
			  	<span class="input-group-btn">
			    	<button class="btn btn-minuse border bordercolor rounded-0 border-top-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-minus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			</div>
			<button id="btn_plus" class="btn ml-2">
				<i class="fas fa-plus"></i>
			</button>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="index.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
		  					<div class="w-100"></div>
		  					<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
		  					<div class="w-100"></div>
		  					<div class="col text-right lead" style="padding-bottom: 15px; padding-right: 10%; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (30)&emsp;
		 						<i class="fas fa-money-bill-wave-alt" style="color: #fd7e14"></i>
		 							39,00 zł
		 					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
  			<div class="input-group-vertical p-auto ml-3">
				<span class="input-group-btn bg-light">
			    	<button class="btn btn-pluss border bordercolor rounded-0 border-bottom-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-plus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			  	<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
			  	<span class="input-group-btn">
			    	<button class="btn btn-minuse border bordercolor rounded-0 border-top-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-minus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			</div>
			<button id="btn_plus" class="btn ml-2">
				<i class="fas fa-plus"></i>
			</button>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="resto col border bordercolor" style="background: rgb(234, 236, 239);">
  			<a href="index.php" style="color: black; text-decoration: none;">
				<div class="row">
					<div class="col-2 p-0 border bordercolor">
						<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
					</div>
					<div class="col-10">
						<div class="row" style="min-height: 100%;">
		  					<div class="col h-50" style="padding-top: 15px; padding-left: 7%; font-size: 22px;">Kubełek 30 Hot Wings</div>
		  					<div class="w-100"></div>
		  					<div class="col h-50 lead" style="padding-left: 10%; font-size: 16px;">30 Hot Wings (pikantne skrzydełka), 2x frytki 40g</div>
		  					<div class="w-100"></div>
		  					<div class="col text-right lead" style="padding-bottom: 15px; padding-right: 10%; font-size: 22px;">
		  						<i class="fas fa-star" style="color: #fd7e14"></i> 
		  							4.5 (30)&emsp;
		 						<i class="fas fa-money-bill-wave-alt" style="color: #fd7e14"></i>
		 							39,00 zł
		 					</div>
						</div>
					</div>
				</div>
			</a>
  		</div>
  		<div class="col-1" style="display: flex; justify-content: center; align-items: center;">
  			<div class="input-group-vertical p-auto ml-3">
				<span class="input-group-btn bg-light">
			    	<button class="btn btn-pluss border bordercolor rounded-0 border-bottom-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-plus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			  	<input type="text" class="form-control no-padding add-color text-center height-25 border bordercolor rounded-0" maxlength="2" value="0" style="width: 35px; color: black;"disabled>
			  	<span class="input-group-btn">
			    	<button class="btn btn-minuse border bordercolor rounded-0 border-top-0 p-2" type="button" style="width: 35px; display: flex justify-content: center; align-items: center; color: #fd7e14">
			    		<i class="fas fa-minus" style="width: 17px; height: 17px;"></i>
			    	</button>
			  	</span>
			</div>
			<button id="btn_plus" class="btn ml-2">
				<i class="fas fa-plus"></i>
			</button>
  		</div>
	</div>
</div>

<footer class="page-footer font-small bg-light"><div class=​"row" style=​"width:​ 85%;​ margin-left:​ auto;​ margin-right:​ auto;​">​
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
</script>

</body>
</html>

<script type="text/javascript">
	$('.btn-minuse').on('click', function(){        
		$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
})

	$('.btn-pluss').on('click', function(){         
		$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
})
</script>