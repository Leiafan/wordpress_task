<div class="">
    <?php
    $wpb_all_query = new WP_Query(array(
        'post_type'=>'articles',
        'post_status'=>'publish',
        'posts_per_page'=>-1
    ));

    if ( $wpb_all_query->have_posts() ) : ?>

        <ul>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata();

    else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif;

    ?>
</div>