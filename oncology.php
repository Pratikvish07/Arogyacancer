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
			 
			<section class="onco-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="text-center ">
								<img src="img/advance.jpeg" class="onco-width mt-3">
							</div>
						</div>
						<div class="col-md-9">
							<div class="mt-5">
								<h3>Oncology</h3>
								<p class="color-white">A specialist area of medicine known as oncology is concerned with the detection, administration, and treatment of different cancers and tumours.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<article>
				<div class="container">
					<div class="p-2">
						<h3 class="text-justify">Oncology Treatment in Bilaspur</h3>
						<p class="text-justify">A specialist area of medicine known as oncology is concerned with the detection, administration, and treatment of different cancers and tumours. An oncologist is a medical professional who oversees a patient’s cancer treatment and practises oncology.</p>
						<h5 class="text-justify">The Department of Oncology at Arogya Cancer Unit Hospital</h5>
						<p class="text-justify">Our cancer treatment choices, clinical services, and oncology research meet international standards. Arogya Cancer Unit Hospital is regarded as one of the top cancer hospitals in Chhattisgarh due to our dedication to treating patients and defeating cancer.</p>
						<h5 class="tetx-justify"> Oncology Treatment</h5>
						<span class="border-onco"><strong>Diagnosis</strong></span>
						<p> Our department of oncologists usually suggests a biopsy, endoscopy, X-ray, CT scan, MRI, PET scan, ultrasound, or other radiological techniques to identify cancer. We will also need information from the patient on his/her medical history, family history, any drugs you may be taking at the time, daily routine, allergies, etc.</p>
						<span class="border-onco"><strong>Chemotherapy</strong></span>
						<p>Chemotherapy, a popular cancer treatment, uses a variety of specialist anticancer medications to slow or block the growth of the body’s rapidly proliferating cancer cells. Chemotherapy is a therapeutic option for a variety of cancers.
						</p>
						<span class="border-onco"><strong>Immunotherapy</strong></span>
						<p>Cancer immunotherapy commonly referred to as immuno-oncology, is a type of cancer treatment that takes advantage of the immune system’s capacity to stop, manage, and eradicate cancer. It is also possible to increase the efficacy of several immunotherapy medicines for cancer prevention, management, or treatment by combining them with targeted therapies, surgery, chemotherapy, or radiation.
					</p>
					</div>
				</div>
			</article>
			<section>
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