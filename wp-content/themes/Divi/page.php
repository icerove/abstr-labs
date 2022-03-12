<?php

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>


<section id="aboutus">
	<div class="wrapper">
		<h4 class="smalltitle">WHAT ARE WE DOING</h4>
		<h2 class="largetitle">We focus on a result-driven approach from the highest quality of services</h2>
		
		<div class="wrapper-flex">
			<div class="about-us-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.svg" alt="" title="" class="image-about-us">
				<h3 class="largesubtitle">Real decentralized applications</h3>
				<p class="main-p">We make ZKP applications, which are DApps running on blockchain to prove our tech.</p>
			</div><!-- about-us-item -->
			
			<div class="about-us-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image3.svg" alt="" title="" class="image-about-us">
				<h3 class="largesubtitle">Zero-Knowledge proof</h3>
				<p class="main-p">ZKP provide a way to verify some calculation of private, or expensive, or both, has happened.</p>
			</div><!-- about-us-item -->
			
			<div class="about-us-item">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image4.svg" alt="" title="" class="image-about-us">
				<h3 class="largesubtitle">Development tool kits</h3>
				<p class="main-p">We build different toolkits including SDK and CLI for ZKP to different users and protocols.</p>
			</div><!-- about-us-item -->
		</div><!-- wrapper-flex -->
	</div><!-- wrapper -->
</section><!-- aboutus -->

<section id="how-we-work">
	<div class="wrapper wrapper-flex-work">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image5.svg" alt="" title="" />
		
		<div class="how-we-work-text">
			<h4 class="smalltitle">HOW WE WORK</h4>
			<h2 class="largetitle white-title">We are math people, we trust proof and make proof to work.</h2>
			<p class="white-p">Abstr Labs is a place full of ambitious people: we have a lot of freedom but also a very strong result-first mindset — what matters is getting things done. We value purposefulness, creativity, directness, minimalism, initiative and less is more.</p>
		</div><!-- how-wwork-text -->
	</div><!-- wrapper -->
</section><!-- how-we-work -->

<section id="hiring">
	<div class="wrapper">
		<h4 class="smalltitle">WANT TO JOIN US?</h4>
		<h2 class="largetitle">Are you ready for new challenges?</h2>
		<p class="black-p">We're looking for exceptional talent to join. Check out our open positions, or just reach out if our mission, challenges and culture resonate with you. Please come to post page or Angel List website to search.</p>
	</div><!-- wrapper -->
</section><!-- hiring -->

<section id="partners">
	<div class="wrapper">
		<h4 class="smalltitle">OUR PARTNERS</h4>
		<h2 class="largetitle white-title">Check our trusted associates</h2>
		
		<div class="wrapper-flex">
			<a href="https://algomint.io/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/algomint.png" alt="" title="" /></a>
			<a href="https://www.algopulse.io/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/algopulse.png" alt="" title="" /></a>
			<a href="https://www.meld.ventures/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/meldventures.png" alt="" title="" /></a>
			<a href="https://move-capital.com/en/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/move.png" alt="" title="" /></a>
			<a href="https://polygon.technology/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/polygon.png" alt="" title="" /></a>
			<a href="https://algorand.foundation/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/algorand.png" alt="" title="" /></a>
		</div><!-- wrapper-flex -->
	</div><!-- wrapper -->
</section><!-- partners -->

<section id="contact">
	<div class="wrapper">
		<h4 class="smalltitle">CONTACT US</h4>
		<h2 class="largetitle">Let’s work together</h2>
		
		<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]') ?>
	</div><!-- wrapper -->
</section><!-- contact -->

<?php

get_footer();
