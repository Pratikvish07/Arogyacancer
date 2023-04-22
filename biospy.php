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
					<div class="p-2 mt-5">
					<p class="text-justify">A biopsy is a medical test commonly performed by a surgeon, interventional radiologist, or an interventional cardiologist. The process involves extraction of sample cells or tissues for examination to determine the presence or extent of a disease. The tissue is then fixed, dehydrated, embedded, sectioned, stained and mounted before it is generally examined under a microscope by a pathologist; it may also be analyzed chemically. When an entire lump or suspicious area is removed, the procedure is called an excisional biopsy. An incisional biopsy or core biopsy samples a portion of the abnormal tissue without attempting to remove the entire lesion or tumor. When a sample of tissue or fluid is removed with a needle in such a way that cells are removed without preserving the histological architecture of the tissue cells, the procedure is called a needle aspiration biopsy. Biopsies are most commonly performed for insight into possible cancerous or inflammatory conditions.</p>
					<h5 class=" mt-3">Cancer</h5>
					<p class="text-justify">When cancer is suspected, a variety of biopsy techniques can be applied. An excisional biopsy is an attempt to remove an entire lesion. When the specimen is evaluated, in addition to diagnosis, the amount of uninvolved tissue around the lesion, the surgical margin of the specimen is examined to see if the disease has spread beyond the area biopsied. "Clear margins" or "negative margins" means that no disease was found at the edges of the biopsy specimen. "Positive margins" means that disease was found, and a wider excision may be needed, depending on the diagnosis.</p>
					<p class="text-justify">When intact removal is not indicated for a variety of reasons, a wedge of tissue may be taken in an incisional biopsy. In some cases, a sample can be collected by devices that "bite" a sample. A variety of sizes of needle can collect tissue in the lumen (core biopsy). Smaller diameter needles collect cells and cell clusters, fine needle aspiration biopsy.</p>
					<p class="text-justify"><strong>Bone marrow </strong>is a semi-solid tissue found within the spongy (also known as cancellous) portions of bones. In birds and mammals, bone marrow is the primary site of new blood cell production (or haematopoiesis). It is composed of hematopoietic cells, marrow adipose tissue, and supportive stromal cells. In adult humans, bone marrow is primarily located in the ribs, vertebrae, sternum, and bones of the pelvis. Bone marrow comprises approximately 5% of total body mass in healthy adult humans, such that a man weighing 73 kg (161 lbs) will have around 3.7 kg (8 lbs) of bone marrow.</p>
					</div>
					<img src="img/biospy.jpg" alt="" class="w-100 d-block">
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