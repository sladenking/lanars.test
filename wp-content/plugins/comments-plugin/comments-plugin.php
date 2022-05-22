<?php
/**
 * Comments Plugin
 *
 * Plugin Name: Comments Plugin
 * Plugin URI: https://github.com/sladenking/lanars.test
 *
 * Description: Comments Plugin that serves a shortcode for displaying the post with the most comments - the title, short description, picture, publication date and the actual number of comments must be displayed.
 *
 * Version: 1.0
 *
 * Author: Viacheslav Denysko
 * Author URI: https://www.linkedin.com/in/viacheslav-denysko/
 */


if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request.' );
}


function comments_plugin ($content) {
    ob_start();
    $args = array(
        'post_type'=> 'post',
        'orderby'    => 'comment_count',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1
    );

    $result = new WP_Query( $args );

    if ( $result-> have_posts() ) : ?>
    <div class="comments-wrapper">
        <ul class="list">
            <?php while ( $result->have_posts() ) : $result->the_post();
                if (get_comments_number() > 0) :
                    ?>
                    <li class="list-item">
                        <div class="list-item__main">
                            <div class="list-item__img">
                                <img src="<?php the_post_thumbnail_url(array(200, 100))  ?>" alt="<?php the_title(); ?>" width="200" height="100">
                            </div>
                            <div class="list-item__box">
                                <a class="list-item__title" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="list-item__info">
                            <div class="list-item__desc"><?php the_content();  ?></div>
                            <div class="list-item__additional">
                                <span class="list-item__date"><?php echo get_the_date() ?></span>
                                <span class="list-item__comments"><?php comments_number(); ?></span>
                            </div>
                        </div>
                    </li>
                <?php
                endif;
            endwhile; ?>
        </ul>
        <a href="<?php echo get_term_link( 1 ); ?>" class="catalog-link">Просмотреть все записи</a>
    </div>
    <?php endif; wp_reset_postdata();
    return ob_get_clean();

}

add_shortcode('comments_list', 'comments_plugin');
