<?= $this->layout('layouts/master'); ?>

<?php $this->start('title') ?>

Blog

<?php $this->stop() ?>

<!-- Navigation section
================================================== -->
<section style="background-color: indianred;" class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>

			<a href="http://www.codeburrow.com">
				<div id="logo" class="smoothScroll navbar-brand"></div>
				<span class="smoothScroll navbar-brand" style="border-radius: 5%;">HOME</span>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#top" class="smoothScroll">TOP</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>

	</div>
</section>


<div style="margin-bottom: 150px;" id="top" class="parallax-section">
</div>

<!-- Articles section
================================================== -->
<section style="margin-top: 150px;" id="articles" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-sm-12">
				<div class="section-title">
					<h5 class="wow bounceIn">Antony Kalogeropoulos</h5>
					<h1 class="heading">Startup Success: VCS - Your Clients Will Never See Your Software Crash</h1>
					<hr>
					<p>All software has bugs.
						Be it your company website or the new cool application for your startup, there is a high chance it will have a bug that may cost you customers, if not dealt with quickly and effectively.

						As soon as you realize the existence of a bug, you have two choices:

						Re-deploy all your resources into fixing that bug, which means that your developers have to stop what they are currently working on, and get the new release back in the market asap so that your customers are not (completely) dissatisfied.
						Announce that the bug will be fixed in the next release of the application (which won't be soon enough) and risk losing some customers now.

						Of course, none of the above choices offer an efficient solution. But fear not, for there is VCS. Version Control System (VCS) is a tool that lets you record the development process of your software and, consequently, roll back to a working version whenever you find a bug; your clients will notice no difference in your website/application and you will have the time to deal with the bug and allocate your resources optimally.

						To give you a metaphor, imagine that you are cooking an omelet; you absentmindedly broke four eggs into the bowl while you only needed 3. If you had used VCS, you would be able to rewind that 4th egg back to its shell!

						The best part with VCS is that it's free; the most popular one called 'Git'.

						To sum up, if you are collaborating with software developers, make sure that they use Version Control System and let your clients enjoy a bug-free life.

						---

						'Startup Success' is a series of recommendations for startup entrepreneurs on how to run a successful business. Let me know your thoughts and if this helps.</p>
				</div>
			</div>


		</div>
	</div>
</section>

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
				<form action="/#contact" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
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
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> CEO PHONE</h3>
					<p>+30 694 94 64 934</p>
				</div>
			</div>

		</div>
	</div>
</section>

