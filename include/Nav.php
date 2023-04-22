<nav class="fixed ">
				<div class="logo  "><h1><a href="index.php" class=" text-none">Arogya Cancer Unit</a></h1></div>

				<div class="navbar">
					<ul class="nav-menu">
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item dropdown "><a href="service.php" class="nav-link dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<li class="dropdown-item" type="button"><a href="cancerdia.php" class="text-none">Cancer Diagnosis</a></li>
								<li class="dropdown-item" type="button"><a href="biospy.php" class="text-none"> Biopsy</a></li>
								<li class="dropdown-item" type="button"><a href="cancertreat.php" class="text-none">Cancer Treatment</a></li>
								<li class="dropdown-item" type="button"><a href="patient.php" class="text-none">Patient Consultant </a></li>
								
							  </ul>

						
						</li>
						
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