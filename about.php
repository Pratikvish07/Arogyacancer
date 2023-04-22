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
			 			 
			<article class=" mt-5 " >
				<div class="container">
					<div class="row ">
						<div class="col-md-6">
							<div class="mt-3 text-center">
								<img src="img/dr2.png" alt="" class=" w-75 text-center">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mt-5">
								<p class="fs-20 p-3 text-justify"><strong>DR PUSHKAL DWIVEDI</strong> is the MD of this unit . <strong>Arogya Hospital Cancer Unit</strong> is an advanced centre in Multispecility Health Care. We have more than 20 years experience in medical care field.We provide all types of Cancer Treatment including Medical and <strong>Surgical Oncology</strong> . All type of <strong> Cancer Surgery & Chemotherapy facility is available with a very experienced Oncologist (Dr.Pushkal Dwivedi) and his team.</strong></p>
								<p class="fs-20 p-3 text-justify"><strong>General Surgery, Maxillofacial, Gaynecological Surgery , Intensive Care facility also available.</strong></p>
							</div>
						</div>	
					</div>
				</div>
			<article>
			<div class="mt-4">
				<h3 class="text-center">Certificates</h3>
				<div class="container">
					<div class="row mt-4">
						<div class="col-md-3">
							<div>
								<img src="img/c1.jpeg" alt="" class="w-100">
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<img src="img/c2.jpeg" alt="" class="w-100">
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<img src="img/c3.jpeg" alt="" class="w-100">
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<img src="img/c4.jpeg" alt="" class="w-100">
							</div>
						</div>
					</div>
				</div>
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