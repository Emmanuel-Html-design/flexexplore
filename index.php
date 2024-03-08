<?php include 'admin/conn.php';

?><!DOCTYPE html>
<html>
<head>
	<title>LIBERTY SURE CHAMBER</title>
	<meta name="viewport" content="width-device-width, initial-scale= 1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="icon"  href="images/IMG_20240119_132656_1_-removebg-preview.png">
</head>
<body id="animate">

	<header id="the-header">
		<div class="header-1">
			<div class="header-1-social">
				<div class="header-social">
					<div class="header-social-icon">
						<div class="header-social-facebook">
							<a href="https://www.facebook.com/atulegwuagu?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
						</div>
						<div class="header-social-twiter">
							<a href="https://twitter.com/IamCharlesAgu1?t=3RZczbn1SQxISgN2EhVolw&s=08"><i class="fab fa-twitter"></i></a>
						</div>
						<div class="header-social-instagram">
							<a href="https://www.instagram.com/iamcharlesagu?igsh=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="header-1-faq">
				<div class="header-faq">
					<nav class="privacy">
						<a href="privacy.php">Privacy Policy</a>
					</nav>
					<nav class="request">
						<a href="request.php">Request Quote</a>
					</nav>
					<nav class="faq">
						<a href="faq.php">FAQ</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="header-2" id="myheader">
			<div class="head-logo">
				<div class="head-logo1">
				<a href="index.php"><img src="images/IMG_20240119_132656_1_-removebg-preview.png"></a>&nbsp;<a href="index.php"><h3>LIBERTY SURE CHAMBER</h3></a>
				</div>

				<div class="menu" onclick="mobile()"><i class="fas fa-bars"></i></div>
			</div>


			<div class="head-nav">

				<nav class="head-home" id="home">
					<a href="index.php"><span class="pro">Home</span></a>
				</nav>

				<nav class="head-about" id="about">
					<a href="about.php"><span class="pro">About</span></a>
				</nav>

				<nav class="head-services" id="services">
					<a href="services.php"><span class="pro">Services</span></a>
				</nav>

				<nav class="head-who" id="who">
					<a href="who.php"><span class="pro">Who we are</span></a>
				</nav>

				<nav class="head-contact" id="contact">
					<a href="contact.php"><span class="pro">Contact</span></a>
				</nav>
			</div>

			<div class="head-need">
				<div class="head-icon">
					<i class="fas fa-phone-volume"></i>
				</div>
				<div class="head-connect">
					<div class="head-connect1">
						<span>Need Help?</span>
					</div>
					<div class="head-connect2">
						<span>+234 701 3755 418</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<script type="text/javascript">
		var k=0
		function mobile(){
			k++
			if (k==3) {k=1}

			if (k==1) {
				
				document.getElementsByClassName("head-nav")[0].style.height="300px";
			}

			if (k==2) {
				
				document.getElementsByClassName("head-nav")[0].style.height="0px";
			}
		}
	</script>

	<main style="overflow: hidden;">
		<section id="row-1">
			<div class="transparent-div">
				<div id="transparent-1">
					<h3>Need Any Help?</h3>
				</div>
				<div id="transparent-2">
					<h1>We Fight For Right</h1>
				</div>
				<div id="transparent-3">
					<h4>Providing legal representation and counsel to safeguard your rights.<br> Navigate complex lega challenges, and pursue justice <br>with unwavering dedication.</h4>
				</div>
				<div class="transparent-4">
					<a href="reuest.php"><button>contact us</button></a>
				</div>
			</div>
		</section>
		<section class="row-2">
			<div class="row-2a">
				<div class="row-2ai">
					<h2>Contact us today! Get consultation for your case</h2>
				</div>
				<div class="row-2aii">
					<a href="consultation.php">MAKE APPOINTMENT</a>
				</div>
			</div>
			<div class="row-2b">
				<div class="row-2bi">
					<div class="row-2bi-welcome">
						<h3>WELCOME</h3>
					</div>
					<div class="row-2bi-company">
						<h1>FIRM LAW HOUSE <br><span>________</span></h1>
					</div>
				</div>
				<div class="row-2bii">
					<p>Firm law house is corporate, commercial, arbitration, litigation, company secreterial and legal advisory practice registered under the companies and alied matter Act in the year 2018, established by seasoned legal practitioner with varied interest and areas of expertise. With good number of years of legal practice and exposure to high profiles cases within and out of court, Firm Law House solicitors are sure to bring meet and exceed legal needs in good time.</p>
				</div>
			</div>
		</section>

		<section class="row-3">
			<div class="row-3a">
				<div class="row-3ai">
					<div class="transparent-row3a">
						<div class="transparent-row3ai">
							<i class="fas fa-braille"></i>&nbsp;&nbsp;&nbsp;&nbsp; <h3>Our Vision</h3>
						</div>
						<div class="transparent-row3aii">
							<p>Exceeding Expectations with Excellent Services.</p>
						</div>
						<div class="transparent-row3aiii">
							<a href="readmore.php"><button>READ MORE</button></a>
						</div>
					</div>
				</div>

			</div>
			<div class="row-3b">
				<div class="row-3bi">
					<div class="transparent-row3b">
						<div class="transparent-row3bi">
							<i class="fas fa-spa"></i>&nbsp;&nbsp;&nbsp; <h3>Our Mission</h3>
						</div>
						<div class="transparent-row3bii">
							<p>Always Communicating Global Excellence in Our Legal Services to Clients and Humanity</p>
						</div>
						<div class="transparent-row3biii">
							<a href="readmoreb"><button>READ MORE</button></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row-3c">
				<div class="row-3ci">
					<div class="transparent-row3c">
						<div class="transparent-row3ci">
							<i class="fas fa-hands-helping"></i>&nbsp;&nbsp;&nbsp;<h3>Our Values</h3>
						</div>
						<div class="transparent-row3cii">
							<ul>
								<li>Our Clients</li>
								<li>Uncompromised Services</li>
								<li>Excellence</li>
								<li>Integrity</li>
							</ul>
						</div>
						<div class="transparent-row3ciii">
							<a href="readmorec.php"><button>READ MORE</button></a>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section class="row-4">
			<div class="row-4a"></div>
			<div class="row-4b">
				<div class="row-4bi">
					<h4>EXPERIENCES</h4>
				</div>
				<div class="row-4bii">
					<h1>Let Our Experience<br>be Your Guide</h1>
				</div>
				<div class="row-4biii">
					<button id="botton-1" onclick="comin()">Our Attorneys</button>
					<button id="botton-2" onclick="putin()">Our Expertise</button>
					<button id="botton-3" onclick="takein()">Our Firm</button>
				</div>
				<div id="row-4biv">
					<p>Our attorneys are always available to attend to your cases; thereby advicing and representing clients in criminal or civil proceedings and in other legal matters. They also communicate with clients, colleagues, judges, and others involved in a case. Conducting researches and analysis of legal issues, interpret laws, rulings, and regulations for our clients.</p>
				</div>
			</div>
		</section>

		<section class="row-5">
			<div class="row-5a">
				<h1>Our Services</h1>
			</div>
			<div class="row-5b">
				<div class="row-5bi">
					<span>_________</span>
				</div>
				<div class="row-5bii">
					<span>For more information or to request an appointment, please <a href="contact.php" class="link">Contact Us</a> </span>
				</div>
			</div>

			<div class="row-5c">
				<div class="row-5ci">
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
					&nbsp;&nbsp;&nbsp;
					<i class="fab fa-xbox"></i>
				</div>
				<div class="row-5cii">
				<ul>
					<li>Corporate, commercial and transactional practice</li><br>
					<li>Litigation, arbitration and alternative dispute desolutions</li><br>
					<li>Shipping, maritime and logistics practice</li><br>
					<li>Labour, competition and immigration practice</li><br>
					<li>Property management practice, Intellectual property and entertainment</li><br>
					<li>Banking insurance, Tax & Capital practice</li><br>
					<li>Company, Organizations & individual retainer services</li>
				</ul>
				</div>
			</div>
		</section>


		<section class="row-6">
			<div class="row-6a">
				<div class="row-6ai">
					<h1>Our Clients</h1>
				</div>
				<div class="row-6aii">
					<span>______</span>
				</div>
			</div>
			<div class="row-6b">
				<div class="row-6b-grid">
					<div class="row-6b-gridi">
						<div class="row-6bi">
							<div class="row-6bi-icon">
								<i class="fas fa-user-tie"></i>
							</div>

							<div class="row-6bi-name">
							<h2>Henzy Navidatioal Ventures Limited</h2>
							</div>
						</div>
						<div class="row-6bii">
							<div class="row-6bii-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bii-name">
								<h2>Sure Word Investment And Credit Limited</h2>
							</div>
						</div>
						<div class="row-6biii">
							<div class="row-6bbiii-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bbiii-name">
								<h2>Aguasa Nigeria <br>Limited</h2>
							</div>
						</div>
						<div class="row-6biv">
							<div class="row-6biv-icon">
									<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6biv-name">
								<h2>Lit Oil Limited</h2>
							</div>
						</div>
					</div>
					<div class="row-6b-gridii">
						<div class="row-6bbi">
							<div class="row-6bbi-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bbi-name">
								<h2>Hajibot Nigeria <br>Limited</h2>
							</div>
						</div>
						<div class="row-6bbii">
							<div class="row-6bbii-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bbii-name">
								<h2>Jaef Pharmarcy <br>Limited</h2>
							</div>
						</div>
						<div class="row-6bbiii">
							<div class="row-6bbiii-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bbiii-name">
								<h2>Fitters Senior Staff Association Of Nigeria (FISSAN)</h2>
							</div>
						</div>
						<div class="row-6bbiv">
							<div class="row-6bbiv-icon">
								<i class="fas fa-user-tie"></i>
							</div>
							<div class="row-6bbiv-name">
								<h2>Sake Nigeria Limited</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<a href="#the-header"><button id="take-up"  style="width: 35px;height: 35px;position: fixed;top: 600px;left: 96.5%;background: orange;color: white;border:0px;outline: none;cursor: pointer;"><i class="fas fa-chevron-up"></i></button></a>
		<a href="#the-header"><button class="up-go"><i class="fas fa-chevron-up"></i></button></a>

		<div class="empty"></div>


		<section class="fetch-record">
			<div class="fetch-record-head">
				<h1>Firm Law House Available properties</h1>
			</div>
			<div class="fetch-record-body">
				<div class="fetch-record-body-div">
					
					<?php

					$sel=mysqli_query($conn, "select *from post order by id desc");
					while($fetch=mysqli_fetch_array($sel)){

					$title=$fetch['title'];
					$des=$fetch['description'];
					$idx=$fetch['id'];
					
					
					if(strlen($des)>30){
					 	$des=substr($des, 0,30);
					 }
				

					

					?>
					
					  <div class="fetch-record1" onclick="window.location.href='single.php?postid=<?php echo $idx; ?>'">
						<div class="fetch-record1-img">

							<?php
							$img=mysqli_query($conn, "select * from image where uniqueid='$idx' limit 1");
							$all=mysqli_fetch_array($img);
								$filename=$all['images'];
								echo "<img src='admin/files/$filename'>";
							

							?>

							
						</div>
						<div class="fetch-record1-title">
							<p style="color:blue;font-weight:bold;"><?php echo $title;?></p>
						</div>
						<div class="fetch-record1-des">
							<p><?php echo $des; ?></p>
						</div>
					</div> 
				<?php
}
					?>


				</div>
			</div>
		</section>

		<div class="empty"></div>


	</main>





	<footer class="foot">
		<div class="foot-1">
			<div class="foot-a">
				<div class="foot-ai">
					<a href="index.php"><img src="images/IMG_20240119_132656_1_-removebg-preview.png"></a>&nbsp;<a href="index.php"><h3>LIBERTY SURE CHAMBER</h3></a>
				</div>
				<div class="foot-aii">
					<p><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp; Suite 9 Mary Housing, Inko Taria Housing <span class="shift">Estate,</span> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rumuogba, Port Harcourt, Rivers State.</p><br>

					<p><i class="fas fa-phone-volume"></i> &nbsp;&nbsp; +234 806 8834 315, +234 701 3755 418</p><br>
					<p><i class="far fa-envelope"></i> &nbsp;&nbsp;&nbsp;<a href="mailto:firmlawhouse2022@gmail.com">E-mail: firmlawhouse2022@gmail.com</a></p>
				</div>
			</div>
			<div class="foot-b">
				<div class="foot-bi">
					<h3>About Us</h3>
				</div>
				<div class="foot-bii">
					<i class="fab fa-xbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">About Us</a><br>
					<br>
					<i class="fab fa-xbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">Our Leadership</a><br>
					<br>
					<i class="fab fa-xbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">Our Clients</a><br>
					<br>
					<i class="fab fa-xbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact Us</a>			
				</div>
			</div>
			<div class="foot-c">
				<div class="foot-ci">
					<h3>Our Services</h3>
				</div>
				<div class="foot-cii">
				<div class="foot-cii1">
					<i class="fab fa-xbox"></i><br>
					<br>
					<i class="fab fa-xbox"></i><br>
					<br>
					<i class="fab fa-xbox"></i><br>
					<br>
					<i class="fab fa-xbox"></i><br>
					<br>
					<i class="fab fa-xbox"></i><br>
					<br>
					<i class="fab fa-xbox"></i>
				</div>
				<div class="foot-cii2">
					<a href="services.php">Corporate, commercial and transactional practice</a><br>
					<br>
					<a href="services.php">Litigation, arbitration and alternative dispute desolutions</a><br>
					<br>
					<a href="services.php">Shipping, maritime and logistics practice</a><br>
					<br>
					<a href="services.php">Labour, competition and immigration practice</a><br>
					<br>
					<a href="services.php">Property management practice</a><br>
					<br>
					<a href="services.php">Banking insurance, Tax & Capital practice</a>
				<br>
				</div>
				</div>
			</div>
		</div>
		<div class="foot-2">
			<p>&copy; Copywrite <?php echo date("Y"); ?> - Liberty Sure Chamber by <em>Flex-explore</em></p>
		</div>


	</footer>


		<footer class="foot11">
			<div class="foot11a">
				<a href="about.php">About Us</a>
			</div>
			<div class="foot11b">
				<a href="services.php">Our Services</a>
			</div>
			<div class="foot11c">
				<a href="who.php">Who we Are</a>
			</div>
			<div class="foot11d">
				<a href="contact.php">Contact Us</a>
			</div>
			<div class="foot11e">
				<p>&copy; Copywrite <?php echo date("Y"); ?> &nbsp;<p>Libertysurechamber</p>
			</div>
			<div class="foot11f">
				<div class="foot11fa">
					<a href="https://www.facebook.com/atulegwuagu?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/IamCharlesAgu1?t=3RZczbn1SQxISgN2EhVolw&s=08"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/iamcharlesagu?igsh=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</footer>

	

	












	<script type="text/javascript">
		
		window.onscroll=function(){myfunction()};

		var head=document.getElementById("myheader");

		var sticky=head.offsetTop;

		function myfunction(){
			if (window.pageYOffset > sticky) {
				head.classList.add("sticky");
			}
			else{head.classList.remove("sticky");}
		}


</script>

<script type="text/javascript">
	
var t=0

function change(){
	t++
	if (t==4) {t=1;}

	if (t==1) {
		document.getElementById("transparent-1").innerHTML="<h3>Law And Property Specialist</h3>";
		document.getElementById("transparent-2").innerHTML="<h1>Quality Properties Available</h1>";
		document.getElementById("transparent-3").innerHTML="<h4>We provide quality and available properties both for sale and lease, ensuring satisfactions for our clients and security from scams.</h4>";
		document.getElementById("row-1").style.background="url(images/lawandproperty.jpg)";
		document.getElementById("row-1").style.backgroundSize="cover";
		document.getElementById("row-1").style.backgroundPosition="center";
		document.getElementById("row-1").style.background.transitionDuration="1s";
	}

	if (t==2) {
		document.getElementById("transparent-1").innerHTML="<h3>Shipping, maritime And logistics practice</h3>";
		document.getElementById("transparent-2").innerHTML="<h1>Quality logistics Services</h1>";
		document.getElementById("transparent-3").innerHTML="<h4>We provide quality and available logistics services to get your products to you from and to any part of the world.</h4>";
		document.getElementById("row-1").style.background="url(images/shippingandlogistics.jpg)";
		document.getElementById("row-1").style.backgroundSize="cover";
		document.getElementById("row-1").style.backgroundPosition="center";
		document.getElementById("row-1").style.background.transitionDuration="1s";
	}

	if (t==3) {
		document.getElementById("transparent-1").innerHTML="<h3>Need Any Help?</h3>";
		document.getElementById("transparent-2").innerHTML="<h1>We Fight For Right</h1>";
		document.getElementById("transparent-3").innerHTML="<h4>Providing legal representation and counsel to safeguard your rights.<br> Navigate complex lega challenges, and pursue justice <br>with unwavering dedication.</h4>";
		document.getElementById("row-1").style.background="url(images/frontimages.jpg)";
		document.getElementById("row-1").style.backgroundSize="cover";
		document.getElementById("row-1").style.backgroundPosition="center";
		document.getElementById("row-1").style.background.transitionDuration="1s";
	}

}

setInterval(change,7000)

</script>


<script type="text/javascript">
	
	function putin(){
		document.getElementById("row-4biv").innerHTML="<p>Our experts are enthusiastic, committed, flexible and commercially minded.</p>";
		document.getElementById("botton-1").style.background="transparent";
		document.getElementById("botton-3").style.background="transparent";
		document.getElementById("botton-2").style.background="darkorange";
	}


	function takein(){
		document.getElementById("row-4biv").innerHTML="<p>Firm law house is corporate, commercial, arbitration, litigation, company secreterial and legal advisory practice registered under the companies and alied matter Act in the year 2018, established by seasoned legal practitioner with varied interest and areas of expertise. With good number of years of legal practice and exposure to high profiles cases within and out of court, Firm Law House solicitors are sure to bring meet and exceed legal needs in good time.</p>";
		document.getElementById("botton-2").style.background="transparent";
		document.getElementById("botton-1").style.background="transparent"
		document.getElementById("botton-3").style.background="darkorange";
	}


	function comin(){
		document.getElementById("row-4biv").innerHTML="<p>Our attorneys are always available to attend to your cases; thereby advicing and representing clients in criminal or civil proceedings and in other legal matters. They also communicate with clients, colleagues, judges, and others involved in a case. Conducting researches and analysis of legal issues, interpret laws, rulings, and regulations for our clients.</p>";
		document.getElementById("botton-3").style.background="transparent";
		document.getElementById("botton-2").style.background="transparent"
		document.getElementById("botton-1").style.background="darkorange";
	}


</script>




</body>
</html>



