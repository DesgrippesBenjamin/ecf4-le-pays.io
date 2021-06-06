<?php get_header(); ?>
 	<h1 class="text-center">News</h1>

	<div class="row d-flex justify-content-evenly ">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
				<div class="mb-3 article-card ">
					<a href="<?php the_permalink(); ?>" class="post__link">
					<div class="article-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<span class="info">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span>
					<span class="info">par <?php the_author(); ?></span>
						<h6>
							<?php the_title(); ?>
						</h6>
					</a>
				</div>
			
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>