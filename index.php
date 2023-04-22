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
				
					<!-- Carousel -->
						<div id="demo" class="carousel slide" data-bs-ride="carousel">
					<!-- Indicators/dots -->
					
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
						<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
					</div>
  
					<!-- The slideshow/carousel -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/accident.png" alt="" class="d-block" style="width:100%">
						</div>
						<div class="carousel-item">
							<img src="img/slider5.jpg" alt="" class="d-block" style="width:100%">
						</div>
						<div class="carousel-item">
							<img src="img/slider6.jpeg" alt="" class="d-block" style="width:100%">
						</div>
					</div>
  
					  <!-- Left and right controls/icons -->
					  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </button>
					</div>
					
					
					

				
			</section>
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
			<section class="bg-blue mt-5 p-50">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div ><p class="color-yellow text-justify">Get expert oncology care right from the start to win over cancer</p> 
							<h3 class="color-yellow text-justify">Advanced Cancer Care in Bilaspur</h3>
							<p class="color-yellow mt-3 text-justify">Our cancer treatment choices, clinical services, and oncology research meet international standards. Arogya Cancer Unit Hospital are regarded as one of the top cancer hospitals in Chhattisgarh due to our dedication to treating patients and defeating cancer.</p>
							<button class="border-radius p-2"><a href="oncology.php" target="_blank" >Read More</a></button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-center ">
								<img src="img/advance.jpeg" class="advance text-center">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="bg-blue mt-5 p-50">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div ><p class="color-yellow text-justify">Get to Know More</p> 
							<h3 class="color-yellow text-justify">Pradhan Mantri Jan Arogya Yojana (PM-JAY)</h3>
							<p class="color-yellow mt-3 text-justify">

							Ayushman Bharat PM-JAY is the largest health assurance scheme in the world which aims at providing a health cover of Rs. 5 lakhs per family per year for secondary and tertiary care hospitalization to over 10.74 crores poor and vulnerable families (approximately 50 crore beneficiaries) that form the bottom 40% of the Indian population. </p>
							<button class="border-radius p-2"><a href="https://mera.pmjay.gov.in/search/login" target="_blank" >Know More</a></button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-center ">
								<img src="img/pmjay.jpg" class="advance text-center">
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<article class="mt-5">
				<div class="container">
					<div class="row bg-yellow">
						<h3 class="text-center">Book Appointment</h3>
						<form action="#" method="post">
							<div>
								
								<input type="text" required name="Name" placeholder="Name" class="w-100 p-2 mt-2">
							</div>
							
							<div>
								
								<input type="text" required name="Email" placeholder="Email" class="w-100 p-2  mt-2">
							</div>
						
								<div>
							
									<input type="text" name="Phone" required placeholder="Phone" class="w-100 p-2  mt-2">
								</div>
								
								<div>
									<input type="submit" name="Login" class="w-100 p-2 text-center mt-3" value="Submit"/>
								</div>
						</form>
						<?php

							$servername="localhost";
							$username="root";
							$pass="";
							$db="arogyacancerunit";
							$con=mysqli_connect($servername,$username,$pass,$db);
							
							
							
							if(isset($_POST['Login'])){
								
								$name=$_POST['Name'];
								$email=$_POST['Email'];
								$phone=$_POST['Phone'];
								  if($con){
									$ins="insert into cancer_table(name,email,phone) values('$name','$email','$phone')";
									$query=mysqli_query($con,$ins);
									
									  if($query){
										  echo("Submitted Successfully:");
										  
									  }
									  else{
											echo("Not Inserted Successfully:");
									  }
									 
								 }
								
								
							}
							
							
						 ?>
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