<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>
CodeBurrow
<?php $this->stop() ?>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>

			<a href="#home">
				<div id="logo" class="smoothScroll navbar-brand"></div>
			</a>
			<!--			<a href="#home" class="smoothScroll navbar-brand">CodeBurrow</a>-->

		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">

				<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
<!--ToDo: enable smoothScroll class-->
				<li><a href="#work" class="">WORK</a></li>
				<li><a href="#about" class="">ABOUT</a></li>
<!--				<li><a href="#team" class="smoothScroll">TEAM</a></li>-->
				<li><a href="#portfolio" class="">GALLERY</a></li>
<!--				<li><a href="http://www.codeburrow.com/blog" class="smoothScroll">BLOG</a></li>-->
				<li><a href="#contact" class="">CONTACT</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider">
		<ul class="bxslider">
			<li>
				<img src="images/slider/img1.jpg" alt="slider image 1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-caption">
								<h2>CodeBurrow</h2>
								<p class="color-white">Welcome. Feel free to look around.</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="images/slider/img2.png" alt="slider image 2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-caption">
								<h2>Reliable Software</h2>
								<p class="color-white">We trust our code and we offer 1 year free maintenance!</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="images/slider/img3.jpg" style="opacity: 0.5;" alt="slider image 3">
				<div class="container caption-wrapper">
					<div class="slider-caption">
						<h2>Mobile Apps</h2>
						<p class="color-white">Got an idea for the next big Android/iOS app? We can help.</p>
					</div>
				</div>
			</li>
			<li>
				<img src="images/slider/img4.jpg" style="opacity: 0.6;" alt="slider image 4">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-caption">
								<h2>Web Apps</h2>
								<p class="color-white"> We love the web. You'll get responsiveness, design, scalability,
									and extensibility. </p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="images/slider/img5.jpg" style="opacity: 0.5;" alt="slider image 5">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-caption">
								<h2>Teamwork</h2>
								<p class="color-white">
									It's all about collaboration.
									<br>
									Bring the business perspective and we'll bring the technical know-how.
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul> <!-- /.bxslider -->
		<div class="bx-thumbnail-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="bx-pager">
							<a data-slide-index="0" href=""><img src="images/slider/thumb_img1.jpg" alt="thumbnail 1"/></a>
							<a data-slide-index="1" href=""><img src="images/slider/thumb_img2.jpg" alt="thumbnail 2"/></a>
							<a data-slide-index="2" href=""><img src="images/slider/thumb_img3.jpg" alt="thumbnail 3"/></a>
							<a data-slide-index="3" href=""><img src="images/slider/thumb_img4.jpg" alt="thumbnail 4"/></a>
							<a data-slide-index="4" href=""><img src="images/slider/thumb_img5.jpg" alt="thumbnail 5"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /.site-slider -->
</div>


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">THE WHY</h5>
					<h1 class="heading">OUR VISION</h1>
					<hr>
					<p>We believe in the power of extraordinary ideas coupled with innovative technology. </p>
					<p>Enthusiastic entrepreneurs need support in their journey to change the world. </p>
				</div>
			</div>


			<!-- Work Owl Carousel section
			================================================== -->
			<div id="owl-work" class="owl-carousel">

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-tools medium-icon"></i>
					<h3>Technical Expertise</h3>
					<hr>
					<p>It is impossible for one to know all. We bring the technical know-how and you bring the business
						perspective.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<i class="icon-profile-male medium-icon"></i><i class="icon-profile-female medium-icon"></i>
					<h3>Teamwork</h3>
					<hr>
					<p>We value teamwork most of all. You'll find us open to new suggestions and we'll make sure to
						offer ours.</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-lightbulb medium-icon"></i>
					<h3>Business Insight</h3>
					<hr>
					<p>Always researching, we know the trends and you can benefit from our sector-specific
						recommendations.</p>
				</div>

			</div>

		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">THE HOW</h5>
					<h1 class="heading color-white">ACTIVE PEOPLE</h1>
					<hr>
					<p class="color-white">Our work is our passion. We love it. It makes us happy and gives us purpose
						in life. That's how we have fun!</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<h3 class="color-white">OUR STORY</h3>
				<h2>CodeBurrow</h2>
				<p class="color-white">Lucky enough to meet each other, our team was born out of our friendship. A
					passion for programming and entrepreneurship as well as a strong sense of trust binds us together in
					our own bubble of fortune and optimism.</p>
				<p class="color-white">Who we are, we are together. Teamwork and collaboration is the center of our
					work. We support and learn from each other every day.</p>
			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top"> WHAT WE OFFER </h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
								   aria-expanded="true" aria-controls="collapseOne">
									HIGH QUALITY TEAM
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
						     aria-labelledby="headingOne">
							<div class="panel-body">
								<p>From web platforms to mobile applications to enterprise solutions, our team employs a
									wide range of technological expertise. We love new challenges and we make it our
									obligation to keep up with the latest trends.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
								   aria-expanded="true" aria-controls="collapseTwo">
									ENTREPRENEURIAL SPIRIT
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
						     aria-labelledby="headingTwo">
							<div class="panel-body">
								<p>Our experience with startups and our sector-specific research allows us to offer
									strategic advice on marketing techniques and revenue tactics as well as insight on
									business implementations of various technologies. </p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
								   aria-expanded="true" aria-controls="collapseThree">
									Again. Teamwork.
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
						     aria-labelledby="headingThree">
							<div class="panel-body">
								<p>We choose our clients carefully because we stay with them for the long run. We deeply
									appreciate honesty, straight-forwardness, and constructive criticism.</p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!--			<div class="col-md-3 col-sm-3 col-xs-6">-->
			<!--				<div class="about-fact border-right">-->
			<!--					<span>32</span>-->
			<!--					<h4>TOURS</h4>-->
			<!--				</div>-->
			<!--			</div>-->
			<!---->
			<!--			<div class="col-md-3 col-sm-3 col-xs-6">-->
			<!--				<div class="about-fact border-right">-->
			<!--					<span>16</span>-->
			<!--					<h4>AWARDS</h4>-->
			<!--				</div>-->
			<!--			</div>-->
			<!---->
			<!--			<div class="col-md-3 col-sm-3 col-xs-6">-->
			<!--				<div class="about-fact border-right">-->
			<!--					<span>128</span>-->
			<!--					<h4>TRIPS</h4>-->
			<!--				</div>-->
			<!--			</div>-->
			<!---->
			<!--			<div class="col-md-3 col-sm-3 col-xs-6">-->
			<!--				<div class="about-fact">-->
			<!--					<span>24</span>-->
			<!--					<h4>PLANS</h4>-->
			<!--				</div>-->
			<!--			</div>-->

		</div>
	</div>
</section>


<!-- team section
================================================== -->
<!--<section id="team" class="parallax-section">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!---->
<!--			<!-- Section title-->
<!--			================================================== -->-->
<!--			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">-->
<!--				<div class="section-title">-->
<!--					<h5 class="wow bounceIn">THE WHO</h5>-->
<!--					<h1 class="heading">OUR TEAM</h1>-->
<!--					<hr>-->
<!--					<p>Individually we're good.</p>-->
<!--					<p>Together we're great.</p>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--				<div class="team-wrapper">-->
<!--					<img src="img/shot_George_cb.jpg" class="img-responsive" alt="George img">-->
<!--					<div class="team-des">-->
<!--						<h4>George Spiridakis</h4>-->
<!--						<h3>Android Developer</h3>-->
<!--						<ul class="social-icon">-->
<!--							<li><a href="https://github.com/george-sp" class="fa fa-github wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--							<li><a href="https://www.linkedin.com/in/spiridakis" class="fa fa-linkedin wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--                <div class="team-wrapper">-->
<!--                    <img src="img/shot_Antony_cb.jpg" class="img-responsive" alt="Antony img">-->
<!--                    <div class="team-des">-->
<!--                        <h4>Antony Kalogeropoulos</h4>-->
<!--                        <h3>Founder</h3>-->
<!--                        <ul class="social-icon">-->
<!--                            <li><a href="https://github.com/PadawanTony" class="fa fa-github wow fadeIn"-->
<!--                                   data-wow-delay="0.4s"></a></li>-->
<!--                            <li><a href="https://www.linkedin.com/in/antonykal" class="fa fa-linkedin wow fadeIn"-->
<!--                                   data-wow-delay="0.4s"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--				<div class="team-wrapper">-->
<!--					<img src="img/shot_Nourhan_cb.jpg" class="img-responsive" alt="Nourhan img">-->
<!--					<div class="team-des">-->
<!--						<h4>Nourhan Elshenawi</h4>-->
<!--						<h3>Web Developer</h3>-->
<!--						<ul class="social-icon">-->
<!--							<li><a href="https://github.com/NourhanElshenawi" class="fa fa-github wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--							<li><a href="https://www.linkedin.com/in/nshenawi" class="fa fa-linkedin wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--                <div class="team-wrapper">-->
<!--                    <img src="img/shot_Riz_cb.jpg" class="img-responsive" alt="George img">-->
<!--                    <div class="team-des">-->
<!--                        <h4>Rizart Dokollart</h4>-->
<!--                        <h3>Full Stack Developer</h3>-->
<!--                        <ul class="social-icon">-->
<!--                            <li><a href="https://github.com/rdok" class="fa fa-github wow fadeIn"-->
<!--                                   data-wow-delay="0.4s"></a></li>-->
<!--                            <li><a href="https://www.linkedin.com/in/rizart-dokollari-a3643360" class="fa fa-linkedin wow fadeIn"-->
<!--                                   data-wow-delay="0.4s"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--				<div class="team-wrapper">-->
<!--					<img src="img/shot_Lut.jpg" class="img-responsive" alt="Antony img">-->
<!--					<div class="team-des">-->
<!--						<h4>Constantine Lutas</h4>-->
<!--						<h3>iOS Developer</h3>-->
<!--						<ul class="social-icon">-->
<!--							<li><a href="https://github.com/CLutas" class="fa fa-github wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--							<li><a href="https://www.linkedin.com/in/constantine-lutas-55666229" class="fa fa-linkedin wow fadeIn"-->
<!--							       data-wow-delay="0.4s"></a></li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--                <div class="team-wrapper">-->
<!--                    <img src="img/shot_Angie_cb.jpg" class="img-responsive" alt="Angie img">-->
<!--                    <div class="team-des">-->
<!--                        <h4>Angie Manolopoulou</h4>-->
<!--                        <h3>Graphic Designer</h3>-->
<!--                        <ul class="social-icon">-->
<!--                            <!--							<li><a href="https://github.com/rdok" class="fa fa-github wow fadeIn"-->-->
<!--                            <!--							       data-wow-delay="0.4s"></a></li>-->-->
<!--                            <li><a href="https://www.linkedin.com/in/amanolopoulou"-->
<!--                                   class="fa fa-linkedin wow fadeIn" data-wow-delay="0.4s"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->


<!-- Portfolio section
================================================== -->
<section id="portfolio" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">THE WHAT</h5>
					<h1 class="heading">SAMPLE OF WORK</h1>
					<hr>
					<p>Take a taste. We hope you love it.</p>
				</div>
			</div>
<!--ToDo: Add NogaDesigns-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <figure class="effect-zoe">
                        <a href="http://www.athens-night.gr/map" data-lightbox-gallery="portfolio-gallery">
                            <img src="img/athens_night.png" alt="portfolio img"/>
                            <figcaption>
                                <h2> Interactive map with Athens' night events</h2>
                                <p class="icon-links">
                                    <span class="icon icon-attachment"></span>
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <figure class="effect-zoe">
                        <a href="http://fabgraphics.gr/" data-lightbox-gallery="portfolio-gallery">
                            <img src="img/fab3.png" alt="portfolio img"/>
                            <figcaption>
                                <h2>Portfolio - Graphic Designer</h2>
                                <p class="icon-links">
								<span
                                        class="icon icon-attachment"></span>
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <figure class="effect-zoe">
                        <a href="img/ambassadors_register.png" data-lightbox-gallery="portfolio-gallery">
                            <img src="img/ambassadors.jpg" alt="portfolio img"/>
                            <figcaption>
                                <h2>Event Planning Mobile App</h2>
                                <p class="icon-links">
								<span
                                        class="icon icon-attachment"></span>
                                </p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>

			<div class="col-md-4 col-sm-6">
				<div class="grid">
					<figure class="effect-zoe">
						<a href="img/bustracker_mobile.png" data-lightbox-gallery="portfolio-gallery">
							<img src="img/bustracker_web.png" alt="portfolio img"/>
							<figcaption>
								<h2> Real-Time Tracking for Vehicles </h2>
								<p class="icon-links">
									<span class="icon icon-attachment"></span>
								</p>
							</figcaption>
						</a>
					</figure>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="grid">
					<figure class="effect-zoe">
						<a href="http://hubit-gazette.herokuapp.com/" data-lightbox-gallery="portfolio-gallery">
							<img src="img/gazette.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>E-Magazine</h2>
								<p class="icon-links">
								<span
									class="icon icon-attachment"></span>
								</p>
							</figcaption>
						</a>
					</figure>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="grid">
					<figure class="effect-zoe">
						<a href="https://deree-judge.herokuapp.com/professor/Maira-Kotsovoulou" data-lightbox-gallery="portfolio-gallery">
							<img src="img/judge.png" alt="portfolio img"/>
							<figcaption>
								<h2>DEREE Judge</h2>
								<p class="icon-links">
								<span
									class="icon icon-attachment"></span>
								</p>
							</figcaption>
						</a>
					</figure>
				</div>
			</div>

<!--			<div class="col-md-4 col-sm-6">-->
<!--				<div class="grid">-->
<!--					<figure class="effect-zoe">-->
<!--						<a href="http://itpedia.apphb.com/" data-lightbox-gallery="portfolio-gallery">-->
<!--							<img src="img/itpedia.jpg" alt="portfolio img"/>-->
<!--							<figcaption>-->
<!--								<h2>ITpedia</h2>-->
<!--								<p class="icon-links">-->
<!--								<span-->
<!--									class="icon icon-attachment"></span>-->
<!--								</p>-->
<!--							</figcaption>-->
<!--						</a>-->
<!--					</figure>-->
<!--				</div>-->
<!--			</div>-->





			<!-- Portfolio bottom section
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="portfolio-bottom">
					<h2>INTERESTED?</h2>
					<p>We are happy to discuss your ideas and spend some time together even for fun.</p>
					<a href="#contact" class="smoothScroll btn btn-default">Contact Us</a>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Plan section
================================================== -->
<!--<section id="plan" class="parallax-section">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!---->
<!--			<!-- Section title-->
<!--			================================================== -->
<!--			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">-->
<!--				<div class="section-title">-->
<!--					<h5 class="wow bounceIn">UNIQUE ADVENTURES</h5>-->
<!--					<h1 class="heading color-white">TRIP PLANS</h1>-->
<!--					<hr>-->
<!--					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">-->
<!--				<div class="plan">-->
<!--					<h2 class="plan-title">Villager</h2>-->
<!--					<div class="plan-price">-->
<!--						<h1 class="plan-price-title">$500 / <small>trip</small></h1>-->
<!--					</div>-->
<!--					<ul class="plan-list">-->
<!--						<li>4 days 3 nights</li>-->
<!--						<li>Explore Forest</li>-->
<!--						<li>Visit Waterfalls</li>-->
<!--						<li>Group of 10 people</li>-->
<!--					</ul>-->
<!--					<div class="plan-button">-->
<!--						<button class="btn btn-default">CHOOSE PLAN</button>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">-->
<!--				<div class="plan">-->
<!--					<h2 class="plan-title">Tourer</h2>-->
<!--					<div class="plan-price">-->
<!--						<h1 class="plan-price-title">$800 / <small>trip</small></h1>-->
<!--					</div>-->
<!--					<ul class="plan-list">-->
<!--						<li>8 days 7 nights</li>-->
<!--						<li>Explore Mountains</li>-->
<!--						<li>Touring Villages</li>-->
<!--						<li>Group of 15 people</li>-->
<!--					</ul>-->
<!--					<div class="plan-button">-->
<!--						<button class="btn btn-default">CHOOSE PLAN</button>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">-->
<!--				<div class="plan">-->
<!--					<h2 class="plan-title">Explorer</h2>-->
<!--					<div class="plan-price">-->
<!--						<h1 class="plan-price-title">$1,400 / <small>trip</small></h1>-->
<!--					</div>-->
<!--					<ul class="plan-list">-->
<!--						<li>12 days 11 nights</li>-->
<!--						<li>Multiple Cities</li>-->
<!--						<li>Unique Experiences</li>-->
<!--						<li>Group of 20 people</li>-->
<!--					</ul>-->
<!--					<div class="plan-button">-->
<!--						<button class="btn btn-default">CHOOSE PLAN</button>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<?php if (isset($messageSuccess)) { ?>
						<h2 style="color: forestgreen;">
							<?php echo $messageSuccess; ?>
						</h2>
					<?php } elseif (isset($messageError)) { ?>
						<h2 style="color: tomato;">
							<?php echo $messageError; ?>
						</h2>
					<?php } else { ?>
						<h5 class="wow bounceIn">THE FIRST STEP</h5>
						<h1 class="heading">CONTACT US</h1>
						<hr>
						<p>We promise to get back to you in less than a day.</p>
						<p>(Except if it's Sunday <i class="fa fa-smile-o" aria-hidden="true"></i> )</p>
					<?php } ?>
				</div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<form action="/#contact" method="POST" class="wow fadeInUp" data-wow-delay="0.4s">
					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="SHOOT MESSAGE">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>support@codeburrow.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="tel:+306949464934">
						<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> MOBILE </h3>
						<p>+30 694 94 64 934</p>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>

