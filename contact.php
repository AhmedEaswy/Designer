<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>contact</title>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/contact.css" />
		<link rel="icon" href="img/logo.png" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
 	</head>
	<body>
		<!-- start navbar -->
		<?php include 'layouts/navbar.html' ?>
		<!-- end navbar -->
		<!-- start header -->
		<header class="back-img">
			<div class="header-overlay">
				<div class="container table">
					<div class="row-display">
						<div class="cell">
							<div class="head-underline">
								<h1><span class="line">co</span>ntact us</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<!-- start contact -->
		<section class="contact">
			<div class="container">
				<div class="head-underline">
					<h2><span class="line">co</span>ntact Us</h2>
				</div>
				<div class="content">
					<div class="content-box box1">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores culpa, minus animi obcaecati soluta reprehenderit accusantium, sapiente ipsam, repudiandae, hic eos. Dicta, at doloremque nihil! Dolorum sit animi voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores culpa, minus animi obcaecati soluta reprehenderit accusantium, sapiente ipsam, repudiandae, hic eos. Dicta, at doloremque nihil! Dolorum sit animi voluptate.</p>
					</div>
					<div class="content-box box2">
						<div class="cw">
							<i class="fa fa-map hw"></i>
							<div>Lorem ipsum dolor sit amet</div>
						</div>
						<div class="cw">
							<i class="fa fa-envelope"></i>
							<div>info@example.com</div>
						</div>
						<div class="cw">
							<i class="fa fa-phone"></i>
							<div>0100 000 000</div>
						</div>
					</div>
				</div>
				<form>
					<div class="boxs">
						<div class="box1">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email" />
							<input type="text" placeholder="Phone" />
						</div>
						<div class="box2">
							<input type="text" placeholder="Subject" />
							<textarea placeholder="Message"></textarea>
						</div>
					</div>
					<button class="btn">Send</button>
				</form>
			</div>
		</section>
		<!-- end contact -->
		<!-- start map -->
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6824.428095842515!2d31.354816989354298!3d31.21479869238821!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1532131253810" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<!-- end map -->
		<!-- start footer -->
		<?php include 'layouts/footer.html' ?>
		<!-- end footer -->
		<i class="fa fa-chevron-circle-up totop"></i>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/global.js"></script>
	</body>
</html>