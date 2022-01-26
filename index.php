<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>
<body>

<header></header>

<div class="text-center bg-light" id='box'>
	<img src="wall.JPEG" class="img-fluid" alt="Responsive image">
	<button class = "btn btn-light" type="button" id='button' onclick="location.href='restaurant_list.php'">Lista restauracji</button>
</div>

<div class="container-fluid bg-light" style="margin-top: -21%; padding: 20px;">
	<div class="row g-2" style="width: 85%; margin-left: auto; margin-right: auto;">
  		<div class="col-4">
      		<div class="p-3 border text-center bg-custom-icon bordercolor">
				<i class="fas fa-map iconcss"></i>
			</div>
    	</div>
    	<div class="col-4">
     		<div class="p-3 border text-center bg-custom-icon bordercolor">
     			<i class="fas fa-utensils iconcss"></i>
     		</div>
    	</div>
    	<div class="col-4">
     		<div class="p-3 border text-center bg-custom-icon bordercolor">
     			<i class="far fa-smile iconcss"></i>
     		</div>
    	</div>
    	<div class="col-4">
      		<div class="p-3 border bg-custom-text bordercolor" style="color:black;">
    			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet, orci nec mattis lobortis, risus neque mollis risus, id imperdiet risus justo ut ligula. Nulla cursus, lacus ut placerat malesuada, justo lacus gravida diam, pellentesque pellentesque nisi nisl id odio. Mauris tortor neque, cursus at dapibus eget, euismod vel nibh.
  			</div>
    	</div>
    	<div class="col-4">
      		<div class="p-3 border bg-custom-text bordercolor" style="color:black;">
      			Nulla hendrerit ante nunc, sit amet vestibulum risus finibus sit amet. Proin eget erat eget leo fringilla sollicitudin. Duis elit eros, feugiat non elit nec, volutpat ultricies nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean pulvinar lectus sit amet felis accumsan pharetra.
  			</div>
    	</div>
    	<div class="col-4">
      		<div class="p-3 border bg-custom-text bordercolor" style="color:black;">
      			Suspendisse luctus enim nec ex eleifend consectetur. Fusce placerat tempor felis, nec vehicula nibh venenatis egestas. Quisque maximus laoreet nibh, in pharetra lectus fermentum quis. Aliquam non vestibulum velit, eget ullamcorper est. Vestibulum diam felis, malesuada vel lorem in, tincidunt venenatis est.
  			</div>
    	</div>
  	</div>
</div>

<footer class="page-footer fixed-bottom font-small bg-light">
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
</script>

</body>
</html>