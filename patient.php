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
					<h3 class="text-center">Patient Consultant Time</h3>
					<table class="table table-bordered">
									<thead class="primary-bg white-color">
										<tr>
											<th>Day</th>
											<th>Morning</th>
											<th>Evening</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Monday</td>
											<td>11:00 am – 2:00 pm</td>
											<td>	6:00 pm – 8:00 pm</td>
										</tr>
										<tr>
											<td>Tuesday</td>
											<td>11:00 am – 2:00 pm</td>
											<td>	6:00 pm – 8:00 pm</td>
										</tr>
										<tr>
											<td>Wednesday</td>
											<td>11:00 am – 2:00 pm</td>
											<td>	6:00 pm – 8:00 pm</td>
										</tr>
										<tr>
											<td> Thrusday</td>
											<td>11:00 am – 2:00 pm</td>
											<td>	6:00 pm – 8:00 pm</td>
										</tr>
										<tr>
											<td> Friday</td>
											<td>11:00 am – 2:00 pm</td>
											<td>	6:00 pm – 8:00 pm</td>
										</tr>
										<tr>
											<td> Saturday</td>
											<td>11:00 am – 4:00 pm</td>
											
										</tr>
										<tr class="text-danger">
											<td>Sunday</td>
											<td>Only Emergency Services on Prior Appointment</td>
											<td></td>
										</tr>
									</tbody>
								</table>
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