<?php
/**
 * The sidebar containing the main widget area
 *
 * @package EULTheme
 */

?>

<div id="sidebar" class="widget-area" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar-1' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        <div class="alert help">
            <p>Please activate some Widgets.</p>
        </div>

    <?php endif; ?>
</div>