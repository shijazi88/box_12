<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon.png">
		<title>Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/line-awesome.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>		
		<!-- loader -->
		<div class="loader">
				<div class="loading">
					<div class="spinner-grow aloader" role="status">
						<span class="sr-only"></span>
				</div>
			</div>
		</div>
		<!-- end loader -->

		<!-- navbar -->
		<div id="navbar" class="navbar navbar-expand-lg justify-content-center align-items-center">
			<div class="container">
				 <a href="#" class="navbar-brand"><img src="img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <i class="la la-bars"></i>
			    </button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav nav">
						<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
						<li class="nav-item"><a class="nav-link" href="#membership">Membership</a></li>

						<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					</ul>
			    </div>
			   
			    <ul class="button-navbar">
			    	<li><button class="button">Join Now</button></li>
			    </ul>
			</div>	
		</div>
		<!-- end navbar -->
		
		<!-- Hero Section -->
		<section id="hero" class="algin-items-center hero">
			<div class="container-fluid bg-image-section d-flex">
				<div class="text-center justify-content-center align-items-center flex-column d-flex mx-auto hero-text">
						<h2 class="fw-light mb-0 lh-1">A functional fitness and boxing workout</h2>
						<h2>USING THE LATEST TECHNOLOGY TO OPTIMISE YOUR TRAINING</h2>
					</div>
			</div>
		</section>
		<!-- end hero -->

		<!-- What is Box12? -->
		<section id="box12" class="services section-bg">
      <div class="container">
        <div class="content-box mx-auto">
					<div class="section-title text-center">
						<h2>WHAT IS BOX12?</h2>          
					</div>

					<div class="row">
						<div class="col-xl-4 col-md-4 d-flex align-items-stretch aos-init aos-animate" >
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="las la-clock bronze-color"></i></div> 
								<p>
									BOX12 is a 36-minute workout consisting of 12, 3 minute rounds that combine boxing and functional fitness exercises.
								</p>
							</div>
						</div>

						<div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" >
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="las la-stopwatch bronze-color"></i></div>								
								<p>
									A new round starts every 3 minutes, there’s no need to rely on anyone else, just turn up when you want and start on round 1.
								</p>
							</div>
						</div>

						<div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate">
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="las la-users bronze-color"></i></div>								
								<p>
									You will be guided by our helpful and knowledgeable staff who will inspire you to achieve and learn the basics of fitness boxing combined with functional exercises.									
								</p>
							</div>
						</div>						
					</div>

					<div class="row">
						<div class="col-xl-4 col-md-4 d-flex align-items-stretch aos-init aos-animate" >
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="lab la-markdown bronze-color"></i></div> 
								<p>
									Your workout will be tailored to your fitness level using integrated and wearable Myzone technology, providing real-time feedback.
								</p>
							</div>
						</div>

						<div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" >
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="las la-heartbeat bronze-color"></i></div>								
								<p>
									A BOX12 workout will see you working at around 80-90% of your physical capacity and burning anywhere between 500 and 700 calories.
								</p>
							</div>
						</div>

						<div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate">
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon"><i class="las la-comment-dots bronze-color"></i></div>								
								<p>
									“Literally the best workout I’ve ever tried. So much fun, staff are friendly and motivating. Week 5 and absolutely loving it!”
								</p>
							</div>
						</div>						
					</div>
				</div>
      </div>
    </section>
		<!-- end box12 -->


		<!-- video section -->
		<section id="video" class="video bg-white-color pb-60">
			<div class="container">
				<div class="row">
					<div class="col-md-8 mx-auto">
						<div class="ratio ratio-16x9 content-box">
							<video class="w-100" src="<?php echo asset('video')?>/test.mp4" controls autoplay loop></video>
						</div>
					</div>
				</div>
			</div>
		</section>
  <!-- end video -->
	
	<!-- Book A Free Workout Section -->
	<section id="book_free" class="algin-items-center book_free pb-60">
		<div class="container-fluid d-flex">
			<div class="text-center justify-content-center align-items-center flex-column d-flex mx-auto book-description">
					<h2 class="fw-light lh-1 heading-title book-title mb-20">BOOK A FREE WORKOUT</h2>
					<h3 class="book-font mb-20">Be inspired by the BOX12 experience. We’d like to invite you to come and experience a workout for FREE!</h3>
					<a href="#" class="btn-learn-more text-uppercase text-center btn_book">Book Now</a>
				</div>
		</div>
	</section>	
	<!-- end Book A Free Workout section -->

	<!-- Box12 Experience section -->
	<section id="box12_experience" class="bg-white-color pt-60 pb-60">
		<div class="container">
			<div class="content-box mx-auto pt-60 pb-60">
				<div class="section-title text-center">
					<h2 class="custom-font34 custon-weight400">HERE'S WHAT THEY SAY ABOUT THE BOX12 EXPERIENCE...</h2>          
				</div>
				<div class="row text-center">
						<div class="col-12">
							<div class="swiper box12_expe_swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">												
												“I’ve done fitness all my life and can honestly say that BOX12 hits all the boxes “pardon the pun”, hits cardio, strength, conditioning. If you put the work in you’ll get the results, I burnt over 900 calories in the 36 min workout, do that in a gym and see how long that takes you. The team at BOX12 are friendly, welcoming and are there to encourage.”
											</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Stuart Pope</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">Since being at BOX12 from January I can honestly say it is incredible! From the exercise to the staff. I never understood what it was like to fall in love with exercise before BOX12! I can see constant changes in my body and my strength every week.</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Emma Louise</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">“It trains all your body and you get a proper cardio workout. The trainers were very knowledgable, professional and lovely.”</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Donna Simpson</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">“It’s the best workout you will get in my opinion. Equipment is top quality and the staff are amazing. Get yourself down there, you won’t be disappointed. Thanks, had an amazing session today.”		</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Paul Green</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">“Great workout! Takes a bit getting used to throwing punches, but you soon get into the swing of things. The live heart rate feedback is awesome and really shows you how hard you’re working. Highly recommend!”		</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Geriant Hughes</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">“Thoroughly enjoyed my first ever workout today at Box12, I was extremely nervous as I have no experience of boxing 🥊 but the staff were lovely and gave a quick but thorough induction, I can honestly say that was one of the best workouts for only 36 mins I’ve ever done! Can highly recommend anyone to try.” 		</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Helen Bradbury</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">I love BOX12 so much! The trainers are so supportive and make sure you really understand every exercise so that you can get the full benefit of the workout.</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Jess Appleby</h5>
												<span class="custom-color1 custom-font14">via Google</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">I love BOX12 so much! The trainers are so supportive and make sure you really understand every exercise so that you can get the full benefit of the workout.</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Jess Appleby</h5>
												<span class="custom-color1 custom-font14">via Google</span>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<p class="custom-color1 custom-font20">“Went for the free class and wow what an experience. You get a full workout and there is someone there to show you what to do. Loved it.”		</p>
											<div class="text">
												<h5 class="custom-color2 custom-font18 fw-bold">Kerry Nelson</h5>
												<span class="custom-color1 custom-font14">via Facebook</span>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-prev prev-slide"><i class="las la-angle-left"></i></div>
									<div class="swiper-button-next next-slide"><i class="las la-angle-right"></i></div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end Box12 Experience section -->

	<!-- OUR WORKOUTS section -->
	<section id="our_workouts" class="pt-60 pb-60 bg-image-workouts position-relative">
		<div class="our_workouts-overlay"></div>
		<div class="our_worksouts_container mx-auto d-flex position-relative ">
				<div class="d-flex d-md-block p-10 align-items-center ">
					<div class="row pt-90">
						<div class="col-md-4 col-lg-6 d-none d-md-block"></div>
						<div class="col-12 col-sm-12 col-md-8 col-lg-6">
							<h2 class="custom-color2 text-uppercase custom-font36">Our workouts</h2>
							<p class="text-white">
								Each day the pre-set workout will keep you engaged and always challenge you. Our state of the art technology will provide real time feedback to optimise the intensity of your workout ensuring it is specific to you. You’ll feel part of the team while pursuing your own personal journey.
							</p>
							<a class="btn_findout" href="#why-box">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Find out more</span>
								</span>
							</a>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!-- end OUR WORKOUTS section -->

	<!-- Why BOX12 section -->
	<section id="why_box12" class="pt-60 pb-60 bg-image-whybox12 position-relative d-flex">
		<div class="why_box12-overlay"></div>
		<div class="container position-relative ">
			<div class="mx-auto pt-60">
				<div class="section-title text-center">
					<h2 class="text-white custom-font50">WHY BOX12?</h2>          
				</div>
				<div class="row d-flex">
					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch aos-init aos-animate" >
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M89.3,60.6L78.1,45.1c-0.5-0.6-1.2-1-2-1s-1.5,0.4-1.9,1L62.7,60.9c-0.5,0.7-0.6,1.7-0.2,2.5c0.4,0.8,1.2,1.3,2.1,1.3h4.9  c-4.7,7-12.9,11.2-21.6,10.4c-5.5-0.5-10.6-2.8-14.5-6.7c-1.9-1.9-5-1.8-6.8,0.1c-1.9,1.9-1.8,5,0.1,6.8c5.5,5.4,12.8,8.7,20.5,9.4  c0.9,0.1,1.9,0.1,2.8,0.1c13.3,0,25.3-8,30.5-20.2h7.1l0,0c1.3,0,2.4-1.1,2.4-2.4C90,61.6,89.7,61,89.3,60.6"></path>
									<path d="M25.8,54.9l11.5-15.8c0.5-0.7,0.6-1.7,0.2-2.5c-0.4-0.8-1.2-1.3-2.1-1.3h-5c4.6-7,12.8-11.2,21.6-10.4  c5.5,0.5,10.7,2.9,14.6,6.7c1.9,1.9,4.9,1.9,6.8,0c1.9-1.9,1.9-4.9,0-6.8c-5.5-5.5-12.8-8.8-20.6-9.5c-14.5-1.2-27.8,7-33.4,20h-7 c-0.9,0-1.7,0.5-2.1,1.3c-0.4,0.8-0.3,1.8,0.2,2.5L22,54.9c0.5,0.6,1.2,1,2,1C24.6,55.9,25.4,55.5,25.8,54.9"></path>
								</svg>
							</div> 
							<p class="text-white custom-font20">
								Workout variety. A new workout designed for everyday of the week.
							</p>
						</div>
					</div>

					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" >
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M50,83.5c-14.4,0-26.1-11.7-26.1-26.1S35.6,31.3,50,31.3S76.1,43,76.1,57.4S64.4,83.5,50,83.5 M72.7,34.1c2,0,2.1,0,2.2,0  c0.3-0.1,0.7-0.2,0.9-0.5l4.4-4.4c0.3-0.3,0.4-0.6,0.5-0.9c0.1-0.4,0-0.8-0.3-1.1L75.2,22c-0.2-0.2-0.5-0.4-0.9-0.4h-0.2  c-0.3,0.1-0.7,0.2-0.9,0.5l-4.4,4.4c-0.3,0.3-0.4,0.6-0.5,0.9c0,0.1,0,0.2,0,3c-3.9-2.6-8.2-4.4-12.8-5.1V20h1.9  c0.4,0,0.7-0.1,1-0.3c0.4-0.3,0.6-0.6,0.6-1v-7.3c0-0.4-0.2-0.8-0.6-1c-0.3-0.2-0.6-0.3-1-0.3H42.7c-0.4,0-0.7,0.1-1,0.3  c-0.4,0.3-0.6,0.6-0.6,1v7.3c0,0.4,0.2,0.8,0.6,1c0.3,0.2,0.6,0.3,1,0.3h1.9v5.3C29,27.9,17.4,41.6,17.4,57.4C17.4,75.4,32,90,50,90  s32.6-14.6,32.6-32.6C82.6,48.6,79,40.2,72.7,34.1 M42.7,75.2L52,59.7c0.8-1.3,0.4-3-0.9-3.8c-0.6-0.4-1.4-0.5-2.1-0.3  c-0.7,0.2-1.3,0.6-1.7,1.2L38,72.3c-0.8,1.3-0.4,3,0.9,3.7C40.3,76.8,42,76.4,42.7,75.2"></path>
								</svg>	
							</div>								
							<p class="text-white">
								Structured, time effective workouts. Just turn up with a positive, focused attitude and finish every workout feeling empowered and confident.
							</p>
						</div>
					</div>

					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M54,88.3c-1.6,0-2.9-1.1-3.3-2.6L38.2,29.5l-7.5,29.3c-0.4,1.5-1.7,2.5-3.3,2.5h-14c-1.9,0-3.4-1.5-3.4-3.4s1.5-3.4,3.4-3.4  h11.5l10.3-40.4c0.4-1.5,1.7-2.6,3.3-2.5c1.6,0,2.9,1.1,3.2,2.6l12.1,54.4L60,37.8c0.3-1.4,1.4-2.5,2.9-2.7c1.4-0.2,2.8,0.6,3.4,1.9  l7.4,15.4h12.9c1.9,0,3.4,1.5,3.4,3.4s-1.5,3.4-3.4,3.4h-15c-1.3,0-2.5-0.7-3-1.9l-4-8.2l-7.3,36.7C57,87.2,55.6,88.3,54,88.3  L54,88.3z"></path></svg>
							</div>								
							<p class="text-white">
								Our state of the art technology will provide real time feedback to optimise the intensity of your workout.	
							</p>
						</div>
					</div>	
					
					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M31,35.7c-0.6-0.1-1.1-0.1-1.7-0.1h-0.8c-0.6,0-1.1,0-1.7,0.1L29,30L31,35.7z M39.4,48.2v29.1c0,5.6-4.6,10.2-10.1,10.2  h-0.8c-5.6,0-10.1-4.6-10.1-10.2V48.2C18.4,42.6,23,38,28.5,38h1C34.9,38,39.4,42.6,39.4,48.2 M44.8,52.8c1.8-1.7,4.5-1.3,4.6-1.3  h0.5c1.9,1,4.5,1.6,6.3,1.7c0.6,0,1.2-0.5,1.2-1.2s-0.5-1.2-1.2-1.2c-3-0.1-6.8-1.8-7.3-3c0-0.1-0.1-0.2,0.4-0.7  c5.2-4.7,17,2.9,21.8,6.6v13.2c0,0.4,0,0.7,0.1,1c-8.7,4.8-16.4,3.7-16.6,3.7h-0.1C44.7,71,43,62.8,43,62.6  C42.3,57.9,43,54.5,44.8,52.8 M73.3,53c0-0.5,0.5-1,1-1h6.2c0.5,0,1,0.5,1,1v13.8c0,1.2-1,2.3-2.3,2.3h-3.6c-1.2,0-2.3-1-2.3-2.3  L73.3,53L73.3,53z M28.9,10c-0.7,0-1.2,0.5-1.2,1.2v15.3L24,36.4v0.1c-4.7,1.8-8,6.4-8,11.7v29.1c0,6.9,5.7,12.6,12.6,12.6h0.8  c6.9,0,12.6-5.7,12.6-12.6V66.7c1.7,3.1,5.2,7.1,12.3,7.5c4.5,0.6,11.6-0.5,18-4c0.8,1,2.1,1.6,3.5,1.6h3.6c2.5,0,4.7-2.1,4.7-4.7  V53c0-1.8-1.6-3.4-3.4-3.4h-6.2c-1.1,0-2.1,0.6-2.8,1.5c-4.2-3.1-17.2-12.1-24-5.8c-1.5,1.3-1.2,2.7-1,3.3c0.1,0.2,0.2,0.5,0.4,0.6  c-1.2,0.2-2.5,0.7-3.7,1.8c-0.5,0.5-1,1.1-1.3,1.7v-4.6c0-5.3-3.3-9.8-8-11.7v-0.1l-3.7-9.9V11.2C30.1,10.5,29.6,10,28.9,10   M27.4,79.8c-0.6,0.1-1.2,0.6-1.1,1.3c0.1,0.6,0.6,1.2,1.3,1.1c1.3-0.1,4.5,0.7,7-1.9c2.7-2.7,2.3-7.6,2.3-7.7v-23  c0-0.7-0.5-1.2-1.2-1.2s-1.2,0.5-1.2,1.2v23.1c0.1,1.1,0,4.4-1.6,5.9C31.1,80.5,29.2,79.7,27.4,79.8 M55.7,70.1h0.2  c0.6,0,1.1-0.4,1.2-1c0.1-0.6-0.2-1.3-1-1.5c-9.4-1.8-8.9-8.6-8.9-8.9c0.1-0.6-0.4-1.2-1.1-1.3c-0.7-0.1-1.2,0.4-1.3,1.1  C44.8,58.7,44,67.8,55.7,70.1"></path>
								</svg>
							</div>								
							<p class="text-white">
								Our welcoming training environment will encourage you to learn the basics of fitness boxing combined with functional exercises. 
							</p>
						</div>
					</div>
				</div>

				<div class="row d-flex justify-content-evenly">
					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch aos-init aos-animate" >
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M57,54.3l5.9,9.4h4.9l-8.4-13.2L57,54.3z M45.6,36.3L52.3,47l2.4-3.9l-4.3-6.8H45.6z M61.4,36.3L55.9,45l0,0l-4.7,7.5l0,0  l-7.1,11.2h4.5l7.1-11.3v0l2.4-3.8l0,0L66,36.3H61.4z M35.8,51.9l1.1-2.5c0.5-1.2,1-2.9,1-3c0,0.2,0.5,1.9,1,3l1.1,2.5H35.8z   M30.4,57h3.3l0.9-2.3h6.5L42,57h3.6L38,40.2h-0.3L30.4,57z M10,57h3.3v-6.3c0-1.1-0.1-2.9-0.1-2.9s1,1.5,1.8,2.4l3.3,3.7h0.3  l3.3-3.7c0.8-0.9,1.8-2.4,1.8-2.4s-0.1,1.8-0.1,2.9V57h3.3V40.2h-0.3l-8.1,9l-8.2-9H10V57z M77.3,57h12.6v-3h-4.6  c-0.6,0-1.4,0.1-1.4,0.1s0.7-0.5,1.2-1l2.1-2.2c1.9-2,2.8-3.7,2.8-5.5c0-3.1-2.2-5.3-5.7-5.3c-3.6,0-5.8,2.2-6.5,5.2l3.5,0.7  c0.5-1.6,1.5-2.7,3-2.7c1.5,0,2.2,1,2.2,2.2c0,1.1-0.5,2.2-2.3,4.1l-6.9,7.2V57z M70.7,57h3.5V40.4h-6.4v3.1h3V57z"></path>
								</svg>
							</div> 
							<p class="text-white">
								MAX12 small group training sessions provides close instruction from our highly skilled coaches. These workouts will enhance your boxing technique while testing you physically.
							</p>
						</div>
					</div>

					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" >
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M76.1,40.4C84,41.7,90,49,90,57.9c0,8.6-5.6,15.8-13.2,17.3v7c0,1.1-0.7,2.1-1.7,2.5c-0.3,0.1-0.7,0.2-1,0.2  c-0.7,0-1.4-0.3-2-0.8l-8.2-8.5h-4.1c-6,0-11.3-3.5-14.2-8.8l0.8-0.8h4.2c12.7,0,23.4-9.8,25.3-23.2C76,41.9,76.1,41.2,76.1,40.4   M72.3,38.6c0,1.1-0.1,2.3-0.3,3.6C70.3,53.7,61.3,62,50.5,62h-5.8L33.4,73.8c-0.6,0.6-1.4,1-2.3,1c-0.4,0-0.8-0.1-1.2-0.2  c-1.2-0.5-2-1.7-2-3v-9.9c-10.3-1.9-18-11.5-18-23.1c0-12.9,9.8-23.5,21.7-23.5h18.8C62.5,15.1,72.3,25.6,72.3,38.6z M45.6,44.9  c0-0.9-0.7-1.6-1.6-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6H44C44.9,46.5,45.6,45.8,45.6,44.9z M57.8,32.9  c0-0.9-0.7-1.6-1.5-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6h30.6C57.1,34.6,57.8,33.8,57.8,32.9z"></path>
							  </svg>
							</div>								
							<p class="text-white">
								BOX12’s welcoming and motivating atmosphere along with our helpful and knowledgeable staff, will inspire you to achieve.								
							</p>
						</div>
					</div>

					<div class="col-12 col-xl-3 col-md-3 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon flex mx-auto mb-20">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
									<path d="M78.1,21.1c0.5,0.5,0.8,1.2,0.8,3.1v28h-5.4V25.9h-9c-0.9,0-1.6-0.7-1.6-1.6v-8.9H26.8v36.7h-5.4V13.8  c0-2.6,1.2-3.8,2.7-3.8h41.6c0.7,0,1.4,0.3,1.9,0.8L78.1,21.1 M34.2,45.2h32.2c0.6,0,1.1-0.5,1.1-1.1S67,43,66.4,43H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,44.7,33.7,45.2,34.2,45.2 M34.2,35.1h32.2c0.6,0,1.1-0.5,1.1-1.1s-0.5-1.1-1.1-1.1H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,34.6,33.7,35.1,34.2,35.1 M35.8,68.6h-6.4c-0.9,0-1.7,0.8-1.7,1.7v6.3c0,0.9,0.8,1.7,1.7,1.7h6.4  c0.9,0,1.7-0.8,1.7-1.7v-6.3C37.5,69.4,36.8,68.6,35.8,68.6 M76.5,67.2h-7.6c-0.9,0-1.7,0.8-1.7,1.7v7.4c0,0.9,0.8,1.7,1.7,1.7h7.6  c0.9,0,1.7-0.8,1.7-1.7v-7.4C78.2,67.9,77.4,67.2,76.5,67.2 M60.8,76.2h-4.2c-0.9,0-1.7,0.8-1.7,1.7V82c0,0.9,0.8,1.7,1.7,1.7h4.2  c0.9,0,1.7-0.8,1.7-1.7v-4.1C62.5,77,61.7,76.2,60.8,76.2 M27,63.8c0.9,0,1.7-0.8,1.7-1.7V58c0-0.9-0.8-1.7-1.7-1.7h-4.2  c-0.9,0-1.7,0.8-1.7,1.7v4.1c0,0.9,0.8,1.7,1.7,1.7H27z M76.9,55.6h-1.7c-0.9,0-1.7,0.8-1.7,1.7V59c0,0.9,0.8,1.7,1.7,1.7h1.7  c0.9,0,1.7-0.8,1.7-1.7v-1.6C78.6,56.4,77.8,55.6,76.9,55.6 M71.4,84h-2.5c-0.9,0-1.7,0.8-1.7,1.7v2.5c0,0.9,0.8,1.7,1.7,1.7h2.5  c0.9,0,1.7-0.8,1.7-1.7v-2.5C73.1,84.8,72.3,84,71.4,84 M25.8,84.8H24c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C27.5,85.6,26.7,84.8,25.8,84.8 M47.5,80h-1.8c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C49.2,80.7,48.4,80,47.5,80 M67.2,55.6c0-0.9-0.8-1.7-1.7-1.7H61c-0.9,0-1.7,0.8-1.7,1.7v4.5  c0,0.9,0.8,1.7,1.7,1.7h4.6c0.9,0,1.7-0.8,1.7-1.7L67.2,55.6L67.2,55.6z M52.9,58.7h-10c-0.9,0-1.7,0.8-1.7,1.7v9.8  c0,0.9,0.8,1.7,1.7,1.7h10c0.9,0,1.7-0.8,1.7-1.7v-9.8C54.5,59.5,53.8,58.7,52.9,58.7"></path>
								</svg>
							</div>								
							<p class="text-white">
									We provide flexible joining options and don’t ask you to commit to lengthy contracts. We do however ask that you commit to trying your best on every visit!								
							</p>
						</div>
					</div>						
				</div>
			</div>
		</div>	
	</section>
	<!-- end Why BOX12 section -->

	<!-- contact -->
	<div id="contact" class="contact">
		<div class="container">
			<div class="content-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059353029!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sKota%20New%20York%2C%20New%20York%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1639286790548!5m2!1sid!2sid" height="510" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
	<!-- end contact -->	
		
	<!-- Main footer section -->
		<section id="main-footer" class="main-footer pt-60">
			<div class="container">
				<div class="row mb-20">
					<div class="col-8 col-sm-2">
						<div class="d-flex flex-wrap">
							<img src="https://box12fitness.co.uk/wp-content/uploads/elementor/thumbs/BOX12-White-Gold-1-oclrddlwiuhffmxn4q4syrbmwys5j44azw161xqnsw.png" 
									class="flex-shrink-1" alt="BOX12"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-4 text-sm-left text-md-left">
						<p class="text-white ">
							BOX12<br>Higherland<br>Newcastle-Under-Lyme<br>Staffordshire<br>ST5 2HN
						</p>
						<p class="text-white">
							<strong class="text-white">T</strong> 01782 694222<br><strong>E</strong> 
							<a href="mailto:info@box12fitness.co.uk">info@box12fitness.co.uk</a>
						</p>
					</div>
					<div class="col-12 col-sm-4 d-flex flex-column align-items-sm-left">
						<div class="elementor-widget-container text-sm-left">
							<p class="opening_info">Follow us on social media</p>						
						</div>
						<ul class="d-inline-flex social-link gap-2 ">
							<li><a href=""><i class="la la-instagram text-white"></i></a></li>
							<li><a href=""><i class="la la-facebook text-white"></i></a></li>							
						</ul>
					</div>
					<div class="col-12 col-sm-4">
							<div class="elementor-widget-container">
								<p class="opening_info">Opening hours</p>
							</div>
							<div class="elementor-widget-container">
							<div>
								<strong>Monday </strong>06:30–10:30, 16:00–20:00
							</div>
							<div>
								<strong>Tuesday </strong>07:30–10:30, 16:00–20:00</div>
							<div>
								<strong>Wednesday</strong> 
								<span style="font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight ); font-size: 1rem;">16:00–20:00</span>
							</div>
							<div>
								<strong>Thursday</strong> 06:30–10:30,&nbsp;<span style="font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight ); font-size: 1rem;">16:00–20:00</span>
							</div>
							<div>
								<strong>Friday </strong>07:30–10:30, <span style="font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight ); font-size: 1rem;">16:00–19:00</span>
							</div>
							<div>
								<strong>Saturday </strong>08:00–12:00
							</div>
							<div>
								<strong>Sunday </strong>08:00–12:00
							</div>
							</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Main footer section -->

	<!-- footer -->
	<footer>
		<div class="container">				
			<div class="row">
				<div class="col-md col-sm-6">
					<ul>
						<li><a href=""><i class="la la-facebook"></i></a></li>
						<li><a href=""><i class="la la-twitter"></i></a></li>
						<li><a href=""><i class="la la-instagram"></i></a></li>
						<li><a href=""><i class="la la-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md col-sm-6">
					<div class="cp">
						<span> Copyright © All Right Reserved </span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

		<!-- script -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.filterizr.min.js"></script>
		<script src="js/magnific-popup.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/main.js"></script>
		
		
	</body>
</html>