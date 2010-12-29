<?
/*
    *   Waiver  — Any of the above conditions can be waived if you get permission from the copyright holder.
    * Public Domain — Where the work or any of its elements is in the public domain under applicable law, that status is in no way affected by the license.
    * Other Rights — In no way are any of the following rights affected by the license:
          o Your fair dealing or fair use rights, or other applicable copyright exceptions and limitations;
          o The author's moral rights;
          o Rights other persons may have either in the work itself or in how the work is used, such as publicity or privacy rights.
    * Notice — For any reuse or distribution, you must make clear to others the license terms of this work. The best way to do this is with a link to this web page.

*/
?>
<?php // Mulai teko kene
remove_action('wp_head', 'wp_generator');
add_action('wp_head', 'verification_satune_fungsi');
add_filter('login_errors',create_function('$a', "return null;"));
// BAR ko kene 
