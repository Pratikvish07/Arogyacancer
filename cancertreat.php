<html>
	<head>
		<title>
			<?php 
				echo("Arogya Cancer Hostpital");
			?>
		</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/style.css" />
			
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
	</head>
	<body>
		<main>
			<?php 
				include('include/Nav.php');
			?>
			 
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center ">
							<span class="mt-5 cancertreatmentrelative"><h3>Cancer Treatment</h3></span>
					</div>
				</div>
			</section>
			<article>
				<div class="container">
					<div class="mt-5 text-center">
						<img src="img/cancertreatment.jpg" class="w-50  " alt="">
					</div>
				</div>
			</article>
			<section >
			<?php 
					include("include/WhatsAppChat.php");
				?>
			</section>
			
		   <?php 
				include("include/Footer.php");
			?>
			
		
		</main>
		
	</body>
	
</html>