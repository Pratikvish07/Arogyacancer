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
			<nav class="fixed">
				<div class="logo "><a href="index.php" class="color-white text-none">Arogya Cancer Unit</a></div>

				<div class="navbar">
					<ul class="nav-menu">
						<li class="nav-item"><a href="about.php"  target="_blank"class="nav-link">About</a></li>
						<li class="nav-item dropdown "><a href="service.php" class="nav-link dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<li class="dropdown-item" type="button">CANCER DIAGNOSIS</li>
								<li class="dropdown-item" type="button"> BIOPSY</li>
								<li class="dropdown-item" type="button">Something else here</li>
								<li class="dropdown-item" type="button">Another action</li>
								<li class="dropdown-item" type="button">Something else here</li>
								<li class="dropdown-item" type="button">Another action</li>
								<li class="dropdown-item" type="button">Something else here</li>
							  </ul>

						
						</li>
						<li class="nav-item"><a href="facilities.php" class="nav-link">Facilities</a></li>
						<li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<button class="bg-yellow border-radius p-2"><a href="book.php" class="nav-link color-yellow">Book Appointment</a></button>
					</ul>
				</div>

				<div class="hamburger">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
				<?php
				?>
				<script type="text/javascript">
				const hamburger = document.querySelector(".hamburger");
				const navMenu = document.querySelector(".nav-menu");

				hamburger.addEventListener("click", () => {
				hamburger.classList.toggle("active");
				navMenu.classList.toggle("active");
				});

				document.querySelectorAll(".nav-link").forEach((link) =>
				link.addEventListener("click", () => {
				hamburger.classList.remove("active");
				navMenu.classList.remove("active");
				})
				);
				</script>
				
			</nav>
						<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="f-about">
									<h3  class="color-blue">About Us</h3>
									<img src="img/logo.jpg" >
									<p class="color-black text-justify">DR PUSHKAL DWIVEDI is the MD of this unit . Arogya Hospital Cancer Unit is an advanced centre in Multispecility Health Care. We have more than 20 years experience in medical care field.</p>
									<p class="color-black text-justify">We provide all types of Cancer Treatment including Medical and Surgical Oncology . All type of Cancer Surgery & Chemotherapy facility is available with a very experienced Oncologist (Dr.Pushkal Dwivedi) and his team.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="f-link">
									<h3 class="color-blue">Useful Links</h3>
									<ul class="list-unstyled">
										<li><a href="#index" class="color-black"><i class="fa fa-chevron-right"></i>&nbsp;Home</a></li>
										<li><a href=" #about" class="color-black"><i class="fa fa-chevron-right"></i>&nbsp;About</a></li>
										<li><a href="#service" class="color-black"><i class="fa fa-chevron-right"></i>&nbsp;Services</a></li>
										<li><a href="#gallery" class="color-black"><i class="fa fa-chevron-right"></i>&nbsp;Gallery</a></li>
										<li><a href="#contact" class="color-black"><i class="fa fa-chevron-right"></i>&nbsp;Contact Us</a></li>
										
									</ul>
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="f-service">
									<h3  class="color-blue">Our Services</h3>
									<ul class="list-unstyled">
										<li><a href="#opensurgery" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Open Surgery</a></li>
										<li><a href="#laparoscopic" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Laparoscopic Surgery</a></li>
										<li><a href="#bospy" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Biopsy</a></li>
										<li><a href="#chemo" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;ChemoTherapy</li>
										<li><a href="%targeted" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Targeted Therapy</a></li>
										<li><a href="#immuno" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Immuno Therapy</a></li>
										<li><a href="#endoscopy" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Endoscopy</a></li>
										<li><a href="#colposcopy" class="text-none color-white"><i class="fa fa-chevron-right"></i>&nbsp;Colposcopy</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="f-contact">
									<h3 class="color-blue">Contact Us</h3>
									<p class="color-black"><i class="fa fa-map-marker"></i>&nbsp;Nehru Nagar,Ring Road 02,Bilaspur,(C.G) Pin - 495001</p>
									<a href="tel:8103881278" class="text-none color-white"><p class="color-black"><i class="fa fa-phone"></i>&nbsp;8103881278</p></a>
									<ul class="list-unstyled">
										<li class="d-inline-block">
											<a href="https://www.facebook.com" class="color-white fs-25"><i class="fa fa-facebook-square " aria-hidden="true" ></i></a>
										</li>
										<li class="d-inline-block">
											<a href="https://www.instagram.com"class="color-white fs-25"><i class="fa fa-instagram"></i></a>
										</li>
										<li class="d-inline-block">
											<a href="https://www.twitter.com"class="color-white fs-25"><i class="fa fa-twitter-square " aria-hidden="true" ></i></a>
										</li>
										<li class="d-inline-block">
											<a href="https://www.whatsapp.com"class="color-white fs-25"><i class="fa fa-whatsapp " aria-hidden="true" ></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</footer>
		</main>
	</body>
</html>