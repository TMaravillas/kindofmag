<div class="four columns article-column">
  <article id="article" class="article equal">
    <div class="table">
      <div class="table__cell table__cell--bottom">
      <!-- <?php $featimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '800w' ); ?> -->
      <!-- <div class="background-image" style="background-image: url(<?= $featimg[0]; ?>);"></div> -->
      <a class="animsition-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
      </a>
      <p class="cat"><?php the_category( '  |  ' ); ?></p>
      <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
      </div>
    </div>
  </article>
</div>
