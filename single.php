<?php get_header(); ?>
<?php get_template_part('inc-edit');?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php $featimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '1800w' ); ?>

  <!-- <section class="single-post--header-image relative">
    <!-- <div class="background-image" style="background-image: url(<?= $featimg[0]; ?>);"></div> -->
  </section>

  <!-- <div class="single-post--back-btn container skinny">
    <a class="single-post--back-btn--btn" href="<?php echo get_post_type_archive_link('post'); ?>"><i class="fa fa-angle-left"></i> BACK</a>
  </div> -->
  <div class="social-fixed fade">
    <?php get_template_part( 'components/share' ); ?>
  </div>
  <section class="container post-content" style="-webkit-overflow-scrolling: touch;">
    <div class="flex-row">
      <div class="post-title eight columns offset-by-two center">
        <div class="single-post--meta--category">
          <?php the_category( '  |  ' ); ?></div>
          <!-- <div class="single-post--meta--date"><?php the_date(); ?></div> -->
        <h1 class="title tlt"><?php the_title(); ?></h1>
      </div>
    </div>

  <div class="row">
    <div class="left columns seven">
      <div class="row">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('images') ):

       	// loop through the rows of data
          while ( have_rows('images') ) : the_row();
          // vars
          $one_column = get_sub_field('full_width');
          $two_column = get_sub_field('half_width');

           ?>
          <?php if( $one_column ): ?>
          <div data-aos="fade-in" data-aos-delay="300" class="one_column columns twelve">
            <img class="logo" src="<?php echo $one_column['sizes']['large'] ?>" alt="<?php echo $one_column[alt]; ?>" />
          </div>
          <?php endif; ?>
          <?php if( $two_column ): ?>
            <?php if( have_rows('half_width') ): ?>
              <?php while( have_rows('half_width') ): the_row();
              $left = get_sub_field('left');
              $right = get_sub_field('right');
               ?>
                <?php if( $left ): ?>
                  <div data-aos="fade-in" data-aos-delay="300" class="left_column columns six">
                    <img src="<?php echo $left['sizes']['large'] ?>" alt="<?php echo $left[alt]; ?>" />
                  </div>
                <?php endif; ?>
                <?php if( $right ): ?>
                  <div data-aos="fade-in" data-aos-delay="300" class="right_column columns six">
                    <img src="<?php echo $right['sizes']['large'] ?>" alt="<?php echo $right[alt]; ?>" />
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif;
          endif;
          endwhile;

      else :

          // no rows found

      endif;

      ?>
      </div>
    </div>
    <div class="single-post-right columns five">

        <?php the_content();?>
          <div class="credits">
            <div class="row">
              <div class="columns six">
                <h5>Photography</h5>
                <p><?php the_field('author'); ?></p>
              </div>
              <div class="columns six words">
                <h5>Words</h5>
                <p><?php the_field('writer'); ?></p>
              </div>
            </div>

          </div>
    </div>
  </div>

  </section>

<section>
    <div id="cooler-nav" class="navigation">
      <div class="c-pagination c-pagination--prev">
        <div class="c-pagination__flag nav-box flex-row">
          <?php $prevPost = get_previous_post(true);
          if($prevPost) {?>
          <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
          <div class="six columns">
            <?php previous_post_link('%link',"$prevthumbnail", $taxonomy, TRUE); ?>

          </div>
          <div class="six columns">
            <?php previous_post_link('%link',"<h4>%title</h4>", $taxonomy, TRUE); ?>
            <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p>
          </div>

        </div>
        <div class="c-pagination__anchor">
          Previous post
        </div>
      </div>


      <div class="c-pagination c-pagination--next">
        <div class="c-pagination__flag nav-box flex-row">
          <?php } $nextPost = get_next_post(true);
          if($nextPost) { ?>
          <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); } ?>
          <div class="six columns">
            <?php next_post_link('%link',"$nextthumbnail", $taxonomy, TRUE); ?>
          </div>
          <div class="six columns">
            <?php next_post_link('%link',"<h4>%title</h4>", $taxonomy, TRUE); ?>
            <p> <?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?></p>
          </div>
        </div>
        <div class="c-pagination__anchor">
          Next Post
        </div>
      </div>
    </div>
</section>
  <!-- <section class="section light relative">
    <div class="container skinny">
      <div class="pagination">
        <span class="pagination--button pagination--button--previous">
          <?php previous_post_link( '%link', '<i class="fa fa-2x fa-angle-left"></i> Prev Post'); ?>
        </span>
        <span class="pagination--button pagination--button--next"><?php next_post_link( '%link', 'Next Post <i class="fa fa-2x fa-angle-right"></i>'); ?></span>
      </div>
    </div>
  </section> -->

  <!-- Related posts starts -->
  <!-- <section class="relatedposts pad">
    <div class="container">
      <div class=" row">
        <div class="columns four">
          <h3>Related posts</h3>
        </div>
        <div class="columns eight">
          <div class="row">


          <?php
            // Default arguments
            $args = array(
            	'posts_per_page' => 6, // How many items to display
            	'post__not_in'   => array( get_the_ID() ), // Exclude current post
            	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
            );

            // Check for current post category and add tax_query to the query arguments
            $cats = wp_get_post_terms( get_the_ID(), 'category' );
            $cats_ids = array();
            foreach( $cats as $wpex_related_cat ) {
            	$cats_ids[] = $wpex_related_cat->term_id;
            }
            if ( ! empty( $cats_ids ) ) {
            	$args['category__in'] = $cats_ids;
            }

            // Query posts
            $wpex_query = new wp_query( $args );

            // Loop through posts
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
            <div class="columns six related-post">
              <article class="">
                <a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>">
                  <div class="columns five">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="image" style="background-image: url('<?php echo $url ; ?>')">

                    </div>
                  </div>
                  <div class="columns seven">
                    <div class="related-title">
                      <h4><?php the_title(); ?></h4>
                      <p><?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?>
                      </p>
                    </div>

                  </div>
                </a>
              </article>
            </div>

            <?php
            // End loop
            endforeach;

            // Reset post data
            wp_reset_postdata(); ?>
            </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Related posts ends -->
  <section class="relatedposts pad">
    <div class="container">
      <div class=" row">
        <div class="columns twelve tacenter">
          <h2>Related posts</h2>
        </div>
      </div>
      <div class="row">
        <div class="columns ten offset-by-one">
          <div class="row main-carousel">
            <?php
              // Default arguments
              $args = array(
              	'posts_per_page' => 6, // How many items to display
              	'post__not_in'   => array( get_the_ID() ), // Exclude current post
              	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
              );

              // Check for current post category and add tax_query to the query arguments
              $cats = wp_get_post_terms( get_the_ID(), 'category' );
              $cats_ids = array();
              foreach( $cats as $wpex_related_cat ) {
              	$cats_ids[] = $wpex_related_cat->term_id;
              }
              if ( ! empty( $cats_ids ) ) {
              	$args['category__in'] = $cats_ids;
              }

              // Query posts
              $wpex_query = new wp_query( $args );

              // Loop through posts
              foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
              <div class="columns five related-post">
                <article id="article" class="article equal">
                  <div class="table">
                    <div class="table__cell table__cell--bottom">
                      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                      <?php the_post_thumbnail(); ?>
                      </div>
                    </div>
                </article>
                      <a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>">
                      <div class="related-title">
                        <h4><?php the_title(); ?></h4>
                        <p><?php setup_postdata( $nextPost ); echo get_the_excerpt(15); wp_reset_postdata(); ?>
                        </p>
                      </div>
                      </a>
              </div>
              <?php
              // End loop
              endforeach;

              // Reset post data
              wp_reset_postdata(); ?>
          </div>
      </div>
  </section>

<?php endwhile; // End the loop. Whew. ?>

<?php get_footer(); ?>
