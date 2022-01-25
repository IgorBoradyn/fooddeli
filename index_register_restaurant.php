<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Zostańmy partnerami</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
</head>
<body>

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zostańmy partnerami</h2>

<div class="container-fluid bg-light">
	<div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
  		<div class="col">
			<div class="row" style="text-indent: 5%;">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis viverra eget sem nec euismod. Nam egestas vehicula arcu eget pulvinar. Nunc vitae egestas lorem. Phasellus vel auctor justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis convallis venenatis. Sed ac massa massa. Ut a magna velit. Mauris at lacus diam. In varius sapien arcu, in commodo justo condimentum eget. Morbi hendrerit quam sed turpis elementum, id malesuada est molestie. Fusce ullamcorper ultricies lectus, vitae pellentesque mi. Maecenas facilisis turpis vel odio finibus feugiat. Maecenas lacinia, lacus placerat laoreet vehicula, risus lectus efficitur turpis, vel pulvinar felis diam a tortor. In hac habitasse platea dictumst. Nam tincidunt augue arcu, et lobortis turpis eleifend at.

				Phasellus sit amet nisl non diam bibendum bibendum et vel augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquet tempor dapibus. Morbi vel mi ac arcu fermentum convallis sed eu dolor. Fusce hendrerit enim eu nisi pulvinar, sed ultrices mi molestie. Aenean pellentesque, mi sit amet ornare fermentum, augue sem placerat mi, vitae cursus nibh tortor ac dolor. Pellentesque facilisis dignissim lorem, id porttitor tortor sollicitudin vitae. Donec ac nisi et dolor iaculis varius. Fusce nibh velit, dictum sed augue viverra, tincidunt suscipit magna. Ut eu fringilla lorem, eget feugiat mi. Suspendisse vel suscipit dolor, non rutrum tortor. Morbi molestie dolor convallis urna elementum, quis volutpat leo rhoncus. Vivamus tempor diam quis diam porta iaculis. In vel luctus odio.

				Sed finibus libero at feugiat ultrices. Nullam sagittis porta sem. Sed volutpat nisl turpis, nec consequat diam dignissim ac. Praesent condimentum purus eu bibendum cursus. Ut iaculis tempor neque a ultrices. Donec mollis sapien in mauris lacinia, in suscipit ante gravida. Sed sed condimentum diam.
			</div>
  		</div>
  		<div class="w-100" style="padding-top: 30px"></div>
  		<div class="col">
			<form class="needs-validation" novalidate>
				<div class="form-row" style="width: 40%; margin-left: auto; margin-right: auto;">
			    	<div class="col placeholder">
			      		<label for="validationCustom01">Adres mailowy</label>
			      		<input type="email" class="form-control" id="validationCustom01" placeholder="adresmailowy@mail.com" required>
			      		<div class="invalid-feedback">Należy podać adres e-mail</div>
			    	</div>
			    	<div class="w-100" style="padding-top: 30px"></div>
			    	<div class="col">    	
			    		<div class="col text-center pt-4 pb-5">
				      		<div class="bg-light text-center" style="height: 0px;">
								<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" style="background: rgb(234, 236, 239);">Dołącz do nas</button>
				    		</div>
			  			</div>
			  		</div>
			</form>
  		</div>
  		<div class="container"></div>
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

<script>
(function() {
	'use strict';
  	window.addEventListener('load', function() {
    	var forms = document.getElementsByClassName('needs-validation');
    	var validation = Array.prototype.filter.call(forms, function(form) {
      		form.addEventListener('submit', function(event) {
        		if (form.checkValidity() === false) {
          			event.preventDefault();
          			event.stopPropagation();
        		}
        		form.classList.add('was-validated');
     		}, false);
    	});
  	}, false);
})();
</script>