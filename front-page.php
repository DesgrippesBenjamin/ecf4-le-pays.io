<?php
/*
* Template Name: front-page
*/
?>
<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<?php the_content(); ?>

<?php endwhile; endif; ?>



<div class="container">
    <?php $news = array(
        'posts_per_page' => 1,
        'order' => 'DESC'
    ); ?>

    <?php $args = array(
        'posts_per_page' => 6,
        'order' => 'DESC'
    ); ?>

    <?php $lastNews = array(
        'posts_per_page' => 4,
        'order' => 'DESC'
    ); ?>

    <?php $lastEvent = array(
            'posts_per_page' => 4,
            'post_type' => 'tribe_events',
            'orderby' => 'date',
            'start_date',
            'order' => 'DESC'
    ); ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <?php $rp = new WP_Query( $news ); ?>
                <?php if($rp->have_posts()) : while($rp->have_posts()) : $rp->the_post(); ?>
                <div class="news">
                    <h1 class="my-4">
                        <?php the_title(); ?>
                    </h1>
                    <a href="<?php the_permalink(); ?>" class="post__link">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <?php echo substr(get_the_excerpt(), 0, 150) . "…"; ?>
                </div>
                <?php endwhile;?>
                <?php   wp_reset_postdata(); endif; ?>
            </div>

            <div class=" col d-flex flex-column ">
                <table class="table-news border border-dark mb-5 mx-auto">
                    <thead class="border border-dark">
                        <tr class="text-center">
                            <th>Les gros titres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rp = new WP_Query( $args ); ?>
                        <?php if($rp->have_posts()) : while($rp->have_posts()) : $rp->the_post(); ?>
                        <tr class="border border-dark">
                            <td class="d-flex ">
                                <a href="<?php the_permalink(); ?>" class=" d-flex post__link">
                                    <div class="d-flex align-content-center flex-wrap table-contenair-info">
                                        &nbsp;
                                        <i class="far fa-clock"></i>
                                        &nbsp;
                                        <small><?php the_time( get_option( 'date_format' ) ); ?></small>
                                    </div>
                                    <div class="">
                                        <?php echo substr(get_the_excerpt(), 0, 80) . "…"; ?>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                        <?php   wp_reset_postdata();
                        endif; ?>
                    </tbody>
                </table>

                <table class=" table-news border border-dark pt-5  mx-auto">
                    <thead class="border border-dark">
                        <tr class="text-center">
                            <th>Les Evenements avenir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $rp = new WP_Query( $lastEvent ); ?>
                        <?php if($rp->have_posts()) : while($rp->have_posts()) : $rp->the_post(); ?>
                        <tr class="border border-dark">
                            <td class="d-flex ">
                                <a href="<?php the_permalink(); ?>" class=" d-flex post__link">
                                    <div class="d-flex justify-content-center flex-column table-contenair-info">
                                        <div class="mx-auto">
                                            <?php  $post_id = get_the_ID();  
                                                    $size = apply_filters( 'tribe_event_featured_image_size', 'event-news-image', $post_id );
                                                    echo tribe_event_featured_image( $post_id ,  $size ); 
                                            ?>
                                        </div>
                                        <div>
                                            &nbsp;
                                            <i class="far fa-calendar-alt"></i>
                                            &nbsp;
                                            <?php $date_with_year_format  = tribe_get_date_format( true ); ?>
                                        </div>
                                    </div>
                                    <div class="news-text">
                                        <?php echo substr(get_the_excerpt(), 0, 150) . "…"; ?>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                        <?php   wp_reset_postdata();
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php $rp = new WP_Query( $lastNews ); ?>
            <?php if($rp->have_posts()) : while($rp->have_posts()) : $rp->the_post(); ?>
            <div class="col-md-6 col-lg-3 mb-3 mx-auto">
                <div class="article-card  mx-auto">
                    <a href="<?php the_permalink(); ?>" class="post__link">
                        <div class="article-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <span class="info">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span>
                        <span class="info">par <?php the_author(); ?></span>
                        <h5>
                            <?php the_title(); ?>
                        </h5>
                    </a>
                </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>