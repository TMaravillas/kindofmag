<?php
/*
Template Name: About
*/
get_header(); ?>
<?php get_template_part('inc-edit'); ?>
<!--  Intro section begins-->
<section class="intro pad">
<div class="container">
		<div class="wrap">
		<div class="offset-by-one seven columns text">
			<h1 class="tlt"><?php the_field('intro'); ?> </h1>
		</div>
		<div class="columns two">
			<p></p>
		</div>
	</div>

</section>
<!--  Intro section ends-->
<section class="pad details">
  <div class="container">
    <div class="wrap">
      <div class="columns six left">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mountain.jpg" alt="<?php bloginfo('name'); ?> "/>
      </div>

      <div class="columns three">
        <h4>FOUNDER & EXECUTIVE CREATIVE DIRECTOR</h4>
        <p>Mario López & Teresa Dulin</p>
        <h4>Editor</h4>
        <p>Mario López</p>
				<h4>Photography</h4>
        <p>Mario López & Teresa Dulin</p>
        <h4>brand & design director</h4>
        <p>Teresa Dulin</p>
      </div>
      <div class="columns three">
        <h4>Follow us</h4>
        <span class=" social "> <a href="http://instagram.com/kindofmag"><i class="fa fa-instagram" aria-hidden="true"></i>Ig</a> </span>
        <span class="social "> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Fa</a> </span>
        <h4>general enquiries</h4>
        <p><a href="mailto:hello@kindofmagazine.com">hello@kindofmagazine.com</a></p>
      </div>
    </div>
</section>
<section class="about-section">
  <div class="container">
    <div class="wrap">
      <div class="columns six offset-by-two">
        <h4>About</h4>
        <p><?php the_field('description'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
