<?php
/*
* Template Name: single
*/
?>
<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post article">
        <h1 class="text-center my-5">
          <?php the_title(); ?>
        </h1>
        <div class="article-management ">
          <?php the_post_thumbnail(); ?>
          <div class="mt-1">
            Publié le <?php the_date(); ?>
          </div>
        </div>
        <div class="post__content article-management-content">
            <?php the_content(); ?>
        </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>