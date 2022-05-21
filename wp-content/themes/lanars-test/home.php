<?php
/**
 * Template Name: Home
 * Template Post Type: page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lanars-test
 */

get_header();
?>

<main class="container">
    <div class="main-text">
        <?php
        echo get_the_content();
        ?>
    </div>
<!--    <p>-->
<!--        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu felis sit amet tortor faucibus pellentesque vitae quis nulla. Mauris commodo, arcu id aliquam laoreet, nunc augue pellentesque magna, ut pharetra justo quam a diam. Vestibulum a lectus lorem. Pellentesque nec egestas nisi, vitae pretium turpis. Morbi sit amet fringilla tortor. Nunc sagittis felis ut arcu pellentesque pellentesque. Sed lacinia libero imperdiet enim dignissim, sed iaculis risus pellentesque. Ut sodales lectus vitae tellus gravida ornare.-->
<!--    </p>-->
<!---->
<!--    <div class="comments-list">-->
    <?php echo do_shortcode("[comments_shortcode]"); ?>
<!--    </div>-->
</main>

<?php

get_footer();
