<header>
	<div class="container">
		<div class="row">
		  <?php
				$logo="Arogya Cancer Unit";
				$arr=array("About","Service","Facilities","Gallery","Contact");
		  ?>
			<div class="col-md-6">
				<div class="logo">
					<h1>
						<a href="index.php">
							<?php 
								echo($logo);
							?>
						</a>
					</h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="navbar">
					<ul class="nav-menu">
						<li class="nav-item">
							<a href="about.php" class="nav-link">
								<?php
									echo($arr[0]);
								?>
							</a>
						</li>
						<li class="nav-item">
							<a href="service.php" class="nav-link"><?php
									echo($arr[1]);
								?></a>
						</li>
						<li class="nav-item" >
							<a href="facilities.php" class="nav-link"><?php
									echo($arr[2]);
								?></a>
						</li>
						<li class="nav-item">
							<a href="gallery.php" class="nav-link"><?php
									echo($arr[3]);
								?></a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link"><?php
									echo($arr[4]);
								?></a>
						</li>
						<button class="bg-yellow border-radius p-2"><a href="book.php" class="nav-link color-yellow">Book Appointment</a></button>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>