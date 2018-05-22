<?php get_header(); ?>
<?php get_template_part('inc-edit');?>

<section class="blog-nav--section section light">
	<div class="container tacenter heading">
		<h1 class="blog-nav--title"><?php  single_cat_title() ?></h1>
		<!-- <ul class="blog-nav--list">
			<?php wp_list_categories(array(
				'hide_title_if_empty' => true,
				'title_li' => '',
				'show_option_all' => 'All'
			)); ?>
		</ul> -->
		<?php $this_category = get_queried_object();
			$categories = get_categories();

			foreach( $categories as $position => $cat ) :
			    if( $this_category->term_id == $cat->term_id ) :
			        $next_cat = $position + 1;
			        $prev_cat = $position - 1;
			        break;
			    endif;
			endforeach;

			$next_cat = $next_cat == count($categories) ? 0 : $next_cat;
			$prev_cat = $prev_cat < 0 ? count($categories) - 1 : $prev_cat;

			echo '<span class="prev_cat"><a href="'.get_term_link( $categories[$prev_cat] ).'">previous category</a></span>';
			echo '<span class="next_cat"><a href="'.get_term_link( $categories[$next_cat] ).'">next category</a></span>';
			?>
	</div>
</section>

<section class="posts">
	<div class="container">


		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'components/blog-item' ); ?>
		<?php endwhile; // End the loop. Whew. ?>
	</div>
</section>

<section class="section light">
  <div class="container">
		<?php numeric_posts_nav(); ?>
  </div>
</section>

<?php get_footer(); ?>
