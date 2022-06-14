<?php get_header(); ?>

<section class="content">

  <div class="main">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ): 
          the_post(  );
          // Looks for...
          // 1 content-excerpt.php
          // 2 content.php
          get_template_part( 'partials/post/content', 'excerpt' );
        endwhile;
      endif;
    ?>


    <div class="pagination-links">
    <span>
      <?php next_post_link( '%link', 'Newer posts' ); ?>
    </span>  
    <span>
      <?php previous_post_link( '%link', 'Older posts' ); ?>
    </span>
    </div>
  </div>


<?php get_sidebar(); ?>
  
</section>

<?php get_footer(); ?>
