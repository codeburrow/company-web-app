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
