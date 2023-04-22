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
			 
			 
			<article>
				<div class="container">
					<div class="row">
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/camp3.jpg"   alt="Unloaded Image" >
									<div class="transparent-box">
										<div class="caption">
											<p >Cancer Camp 01</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/banner.jpg"   alt="Unloaded Image" >
									<div class="transparent-box">
										<div class="caption">
											<p>Cancer Camp 02</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/camp1.jpg"   alt="Unloaded Image" class="w-100 h-100">
									<div class="transparent-box">
										<div class="caption">
											<p>Cancer Camp 03</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/certificate00.jpg"   alt="Unloaded Image">
									<div class="transparent-box">
										<div class="caption">
											<p>Centre Of Excellence 01</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/certificate01.jpg"   alt="Unloaded Image" >
									<div class="transparent-box">
										<div class="caption">
											<p> Centre Of Excellence 02</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/confrence01.jpg"   alt="Unloaded Image">
									<div class="transparent-box">
										<div class="caption">
											<p>Confrence 01</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/confrence01.jpg" alt="" />
									<div class="transparent-box">
										<div class="caption">
											<p>Confrence 02</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/33.jpg" alt="" />
									<div class="transparent-box">
										<div class="caption">
											<p>Team</p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<div class="gallery-image">
								<div class="img-box">
									<img src="img/34.jpg" alt="" />
									<div class="transparent-box">
										<div class="caption">
											<p>Doctors & Team </p>
											<p class="opacity-low"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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