<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
    <ul id="sidebar">
        <?php echo dynamic_sidebar('main-sidebar'); ?>
    </ul>
<?php } ?>