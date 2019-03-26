<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Works</title>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<link rel="stylesheet" href="css/work.css" />
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
								<h1><span class="line">Ou</span>r Works</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<!-- start works -->
		<section class="works">
			<div class="container">
				<div class="head-underline">
					<h2><span class="line">We</span>b developemnt</h2>
				</div>
				<div class="works-slider">
					<div>
						<img src="img/project01.jpg" />
					</div>
					<div>
						<img src="img/project02.jpg" />
					</div>
					<div>
						<img src="img/project03.jpg" />
					</div>
				</div>
			</div>
		</section>

		<section class="works">
			<div class="container">
				<div class="head-underline">
					<h2><span class="line">lo</span>go designe</h2>
				</div>
				<div class="works-slider">
					<div>
						<img src="img/app01.jpg" />
					</div>
					<div>
						<img src="img/app02.jpg" />
					</div>
					<div>
						<img src="img/app03.jpg" />
					</div>
				</div>
			</div>
		</section>
		<!-- end works -->
		<!-- start clients -->
		<section class="our-clients">
			<div class="container">
				<div class="head-underline">
					<h2><span class="line">cl</span>ients Say</h2>
				</div>
			</div>
			<?php include 'layouts/clients.html' ?>
		</section>
		<!-- end clients -->
		<!-- start footer -->
		<?php include 'layouts/footer.html' ?>
		<!-- end footer -->
		<i class="fa fa-chevron-circle-up totop"></i>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/global.js"></script>
		<script src="js/work.js"></script>
	</body>
</html>