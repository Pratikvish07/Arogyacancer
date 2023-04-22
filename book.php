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