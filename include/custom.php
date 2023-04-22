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



var foot=document.querySelector("#footer");

foot.innerHTML=`
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="f-about">
					<h3>About Us</h3>
					<img src="img/55.jpg">
					<p>DR PUSHKAL DWIVEDI is the MD of this unit . Arogya Hospital Cancer Unit is an advanced centre in Multispecility Health Care. We have more than 20 years experience in medical care field.</p>
					<p>We provide all types of Cancer Treatment including Medical and Surgical Oncology . All type of Cancer Surgery & Chemotherapy facility is available with a very experienced Oncologist (Dr.Pushkal Dwivedi) and his team.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="f-link">
					<h3>Useful Links</h3>
					<ul class="list-unstyled">
						<li><a href="#index" ><i class="fa fa-chevron-right"></i>&nbsp;Home</a></li>
						<li><a href=" #about"><i class="fa fa-chevron-right"></i>&nbsp;About</a></li>
						<li><a href="#service"><i class="fa fa-chevron-right"></i>&nbsp;Services</a></li>
						<li><a href="#gallery"><i class="fa fa-chevron-right"></i>&nbsp;Gallery</a></li>
						<li><a href="#contact"><i class="fa fa-chevron-right"></i>&nbsp;Contact Us</a></li>
						
					</ul>
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="f-service">
					<h3>Our Services</h3>
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
					<h3>Contact Us</h3
					<p><i class="fa fa-map-marker"></i>&nbsp;Nehru Nagar,Ring Road 02,Bilaspur,(C.G) Pin - 495001</p>
					<a href="tel:8103881278" class="text-none color-white"><p><i class="fa fa-phone"></i>&nbsp;8103881278</p></a>
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
`;



$(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+9109220580" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });
