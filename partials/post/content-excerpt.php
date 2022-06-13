<a href="<?php the_permalink(); ?>">
  <h2><?php the_title(); ?></h2>
</a>

<?php if ( has_post_thumbnail() ) : ?>

  <div>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'medium_large' ); ?>
    </a>  
  </div>

<?php endif; ?>


<p class="post-details">
  <span>By: 
    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
      <?php the_author(); ?>
    </a>  
  </span>

  <?php // Don't use the_date() function, use get_the_date() ?>
  <span>
    <?php echo get_the_date(); ?>
  </span>

  <span>
    <?php comments_number(); ?>
  </span>
</p>

<p><strong>Categories: </strong> <?php the_category( ' ' ); ?></p>

<p><?php the_excerpt(); ?></p>

<hr>