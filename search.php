<?php get_header(); ?>
    <?php if (have_posts()) {
            if (is_search()) { ?>
              <section class="container results">
                <div class="flex-row pad">
                  <div class="post-title six columns offset-by-three tacenter">
                    <p>Results for</p>
                    <h1><?php the_search_query()?></h1>
                  </div>
                </div>
              </section>
              <section class="posts">
                <div class="container">
                  <?php } while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'components/blog-item' ); ?>
                  <?php endwhile; ?>
                </div>
              </section>
            <?php } else {
            if (is_search()) { ?>
              <section class="container">
                <div class="flex-row pad">
                  <div class="post-title six columns offset-by-three tacenter">
                    <p>Sorry, we couldn´t find any result for</p>
                    <h1><?php the_search_query()?></h1>
                    <h3>Click the search icon above to search again.</h3>
                </div>
              </section>
            <?php } else {
                                                            echo '<p>¡Oh oh! Parece que lo que buscas todavía no lo tenemos por aquí. Pero no worries! Puedes volver a intentarlo con otro término.</p>';
                                                  }
                        	    } ?>

<?php get_footer(); ?>



<?php get_footer(); ?>
