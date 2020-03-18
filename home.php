<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/superslides.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

	<link rel="stylesheet" type="text/css" href="css/style.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<div class="loader">
		<div class="inner"></div>
	</div>

	<div id="slides">

		<div class="overlay"></div>

		<div class="slides-container">
		    <img src="img/slide1.jpg" alt="">
		    <img src="img/slide2.jpeg" alt="">
		    <img src="img/slide3.jpeg" alt="">
		</div>

		<div class="titleMessage">
			<div class="heading">
				<p class="main">FAISAL MALIK</p>
				<p class="sub typed"></p>
			</div>
		</div>


		<nav class="slides-navigation">
		    <a href="#" class="next"></a>
		    <a href="#" class="prev"></a>
		</nav>


	</div>


	<nav id="navigation" class="navbar navbar-expand-lg">
	  <a class="navbar-brand" href="index.html">Faisal Malik</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#skills">Skills</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#stats">Stats</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#contact">Contact</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#portfolio">Portfolio</a>
	      </li>
	    </ul>
	  </div>

	</nav>




	<div id="about" class="section">

		<div class="container">

			<div class="row">

				<div class="col-md-5">
					<img class="aboutImage" src="img/faisal.jpg">
				</div>

				<div class="col-md-7">


					<h4>My name is Faisal Malik</h4>

					<p>Hi there! I'm Faisal Malik from Lahore, Pakistan. I currently work as a Web Developer at Kitsoul. I have two years experience creating websites for both myself, and for clients. I have experience programming in PHP and Objective-C, however some of my favourite projects involve working in PHP(Codeigniter) for Web Development. I have experience Graphic Designing in PHOTOSHOP.</p>
					<p>I graduated from university of Lahore, Pakistan with second class in Computer Science. </p>

				</div>

			</div>

		</div>

	</div>



	<div id="skills" class="skillsSection section">

		<div class="container">

			<div class="row">

				<div class="col-md-12 text-center">
					<h2>TECHNICAL SKILLS</h2>
					<p>My proficiency in each skill (drag to scroll)</p>
				</div>


				<div class="owl-carousel owl-theme">
				    
				    <div class="skill">
				    	<span class="chart" data-percent="85">
				    		<span class="percent">85</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>PHP</h4>
				    	<p>Used in most of my web based projects</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="90">
				    		<span class="percent">90</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>CODEIGNITER</h4>
				    	<p>Developed almost all websites using Codeigniter</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="95">
				    		<span class="percent">95</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>PHOTOSHOP</h4>
				    	<p>Designed logo for clients</p>
				    </div>


				    <div class="skill">
				    	<span class="chart" data-percent="100">
				    		<span class="percent">100</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>HTML</h4>
				    	<p>Used in most of my web based projects</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="90">
				    		<span class="percent">90</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>LARAVEL</h4>
				    	<p>A new skill I am learning</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="60">
				    		<span class="percent">60</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>JAVASCRIPT</h4>
				    	<p>Used in all of my web based projects</p>
				    </div>

				    <div class="skill">
				    	<span class="chart" data-percent="95">
				    		<span class="percent">95</span>
				    		<canvas height="152" width="152"></canvas>
				    	</span>
				    	<h4>MySQL</h4>
				    	<p>Used in most of my web based projects</p>
				    </div>


				</div>

				

			</div>

		</div>

	</div>



	<div id="stats" class="statsSection section">

		<div class="container">

			<div class="row">

				
				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-clock"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">2</h2>
                                <h3>Years Experience</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-user"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">9</h2>
                                <h3>Clients</h3>
                            </div>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-cloud"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">20</h2>
                                <h3>Websites Made</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fa fa-bolt"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">18</h2>
                                <h3>iOS Apps</h3>
                            </div>
						</div>
					</div>
				</div>


			</div>

		</div>

	</div>

	<div id="contact" class="contactSection section">

		<div class="col-md-12 text-center">

			<p class="subHeading">Like what you see?</p>
			<h2>I'd love to hear from you!</h2>
			<a href="faisallmalick@gmail.com" class="contactButton">GET IN TOUCH!</a>

		</div>

	</div>



	<div id="portfolio" class="section">

		<div class="container">

			<div class="row">

				<div class="heading">
					<h2>PORTFOLIO</h2>
				</div>

				<div class="filter">

					<ul id="filters">

						<li><a href="#" data-filter="*" class="current">ALL</a></li>
						<li><a href="#" data-filter=".apps">Apps</a></li>
						<li><a href="#" data-filter=".me">Me</a></li>
						<li><a href="#" data-filter=".websites">Websites</a></li>

					</ul>

				</div>


				<div class="itemsContainer">

					<ul class="items">

						<li class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/templatefor.jpg">


								<div class="icons">
									<a href="img/portfolio/templatefor.jpg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="https://templatefor.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>


					<!-- 	<li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="https://templatefor.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li> -->

						<li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="https://templatefor.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<!-- <div class="imageOverlay"></div> -->

							</div>


						</li>

						<li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="https://templatefor.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="apps col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>


						<li class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="https://templatefor.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>


						<li class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

						<li class="me col-xs-6 col-sm-4 col-md-3 col-lg-3">


							<div class="item">

								<img src="img/portfolio/thumbnails/dog-square.jpeg">


								<div class="icons">
									<a href="img/portfolio/dog.jpeg" title="View image" class="openButton" data-fancybox data-caption="This is a cute dog">
										<i class="fa fa-search"></i>
									</a>

									<a href="http://reecekenney.com" target="_blank" class="projectLink">
										<i class="fa fa-link"></i>
									</a>
								</div>

								<div class="imageOverlay"></div>

							</div>


						</li>

					</ul>

				</div>






			</div>

		</div>

	</div>


	<div class="copyrightSection">

		<div class="col-md-12 text-center">
			<p>&copy; Copyright Reece Kenney 2018</p>
		</div>

	</div>








	<script src="js/countUp.js"></script>
	<script src="js/countUp-jquery.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/typed.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.5/dist/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	<script src="js/script.js"></script>

</body>
</html>