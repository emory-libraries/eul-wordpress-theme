<?php
/**
 * The template for displaying single posts
 *
 * @package EULTheme
 */

?>
<?php get_header(); ?>

        <div id="content">
            <div id="main" role="main">
                <?php while( have_posts() ) : the_post(); ?>

                <?php //TODO: add previous next posts link? ?>

                <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;  // end of hte loop?>

                <?php comments_template('', true); ?>

            </div><!-- /#main -->

            <?php get_sidebar(); ?>

            <div class="clearfix"></div>
        </div><!-- /#content -->

<?php get_footer(); ?>