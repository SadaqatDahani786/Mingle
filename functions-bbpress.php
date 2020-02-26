<?php

add_action('bbp_theme_before_forum_title','mingle_theme_before_forum_title');
function mingle_theme_before_forum_title(){
    echo '<div class="flex justify-evenly"><div class="forum-thumbnail px-24">';
    the_post_thumbnail('small');
    echo '</div><div class="flex-grow flex flex-col justify-evenly">';
}

add_action('bbp_theme_after_forum_description','mingle_theme_after_forum_description');
function mingle_theme_after_forum_description(){
    echo '</div></div>';
}


?>
