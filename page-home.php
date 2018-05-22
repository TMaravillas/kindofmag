<?php
/*
Template Name: Home page
*/
get_header(); ?>
<?php get_template_part('inc-edit'); ?>
<!--  Intro section begins-->
<section id="intro" class="intro container">
	<div class="row">
		<div class="offset-by-one eight columns text">
			<h1 class="tlt" data-in-effect="fadeInUp"><?php the_field('intro'); ?></h1>
		</div>
		<div class="columns two">
			<p></p>
		</div>
	</div>
</section>
<section class="scroll-down container">
	<div class="row">
		<div class="one columns offset-by-one text">
		<span id="arrow" class="down" href="#">
			<i class="intro__mouse mouse">
				<i class="mouse__wheel"></i>
			</i>
		<!-- <p  class="scroll-arrow"></p> -->
	</span>
	</div>
	<div class="columns eleven">
		<p></p>
	</div>
	</div>
</section>
<!--  Intro section ends-->

<!--  latest post section begins-->
<section id="posts" class="posts">
<div class="container">
	<div class="row">


<?php $the_query = new WP_Query( 'posts_per_page=7' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<?php if ($count <= 0) : ?>
			<div class="six columns article-column">
				<?php if ( has_post_thumbnail() ) : ?>
					<article id="article" class="article equal">
						<div class="table">
							<div class="table__cell table__cell--bottom">
								<a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						       <div class="lazyloaded" data-aos="fade-in" data-aos-delay="300">
						       	<?php the_post_thumbnail(); ?>
						       </div>
						    </a>
							</div>
						</div>
					</article>
				<?php endif; ?>
				<div class="post-title">
					<p class="cat"><?php the_category( '  |  ' ); ?></p>
					<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<!-- <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p> -->
				</div>
			</div>
		<?php elseif ($count <= 1) : ?>

	<div class="six columns article-column">
		<?php if ( has_post_thumbnail() ) : ?>
			<article id="article" class="article equal">
				<div class="table">
					<div class="table__cell table__cell--bottom">
						<a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				       <div class="lazyloaded" data-aos="fade-in" data-aos-delay="300">
				       	<?php the_post_thumbnail(); ?>
				       </div>
				    </a>
					</div>
				</div>
			</article>
		<?php endif; ?>
		<div class="post-title">
			<p class="cat"><?php the_category( '  |  ' ); ?></p>
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
			<!-- <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p> -->
		</div>
	</div>
<?php elseif ($count <= 4) : ?>
			<div class="four columns article-column scnd-row">
				<?php if ( has_post_thumbnail() ) : ?>
					<article id="article" class="article equal">
						<div class="table">
							<div class="table__cell table__cell--bottom">
								<a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						       <div class="lazyloaded" data-aos="fade-in" data-aos-delay="300">
						       	<?php the_post_thumbnail(); ?>
						       </div>
						    </a>
							</div>
						</div>
					</article>
				<?php endif; ?>
				<div class="post-title">
					<p class="cat"><?php the_category( '  |  ' ); ?></p>
					<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<!-- <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p> -->
				</div>
			</div>
		<?php elseif ($count <= 6) : ?>
				<div class="six columns article-column">
					<?php if ( has_post_thumbnail() ) : ?>
						<article id="article" class="article equal">
							<div class="table">
								<div class="table__cell table__cell--bottom">
									<a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							       <div class="lazyloaded" data-aos="fade-in" data-aos-delay="300">
							       	<?php the_post_thumbnail(); ?>
							       </div>
							    </a>
								</div>
							</div>
						</article>
					<?php endif; ?>
					<div class="post-title">
						<p class="cat"><?php the_category( '  |  ' ); ?></p>
						<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
						<!-- <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p> -->
					</div>
				</div>
				<?php endelseif; ?>
				<?php endif; $count++; ?>
<?php
endwhile;
wp_reset_postdata();
?>
</div>
</div>
</section>
<!--  latest post section ends -->
<!--  popular post section starts-->
<!-- <section class="popular pad container-fluid">
	<div class="row">
		<div class="columns six featured-image" style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/sunset-byron.jpg') no-repeat">

		</div>
		<div class="columns six">
			<h3>Most popular</h3>
			<div class="row">
				<?php rewind_posts(); ?>
				<?php $the_query = new WP_Query( 'posts_per_page=7' ); ?>

				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="columns six">
    			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</div>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
	</div>
</section> -->
<!--  popular post section ends-->
<!--  Instagram starts-->
<section class="instagram pad container">
	<div class="row">
		<div class="columns twelve heading">
			<h2>Instagram</h2>
			<h5><a href="instagram.com/kindofmag">@kindofmag</a> </h5>
		</div>
	</div>
	<div class="row">

			<div id="instafeed" class="flex-row instagram-feed"></div>

			</div>
	</div>
</section>
<section>

</section>
<!--  Instagram ends-->
<?php get_footer(); ?>
