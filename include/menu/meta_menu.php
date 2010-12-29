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

<?php
echo'<font color="#666666" face="Georgia">';
echo'<h2>Verification Setting</h2>';
// form
echo '<form method="post" action="options.php">';
    wp_nonce_field('update-options');
echo 'Yahoo <a href="https://login.yahoo.com/config/login_verify2?.src=siteexplorer&.intl=us&.done=https%3A%2F%2Fsiteexplorer.search.yahoo.com%2Fmysites%3Fei%3DUTF-8" target="_blank" title="Yahoo Verification">Verification</a>  : <input type="text" name="yahoo_verification" value="' . get_option('yahoo_verification') . '"><br/>';
echo 'Google <a href="https://www.google.com/webmasters/tools/home?hl=en" target="_blank" title="Google Verification">Verification</a> : <input type="text" name="google_verification" value="' . get_option('google_verification') . '" /><br/><br/>';
// End 
echo '<input type="hidden" name="action" value="update" />';
echo '<input type="hidden" name="page_options" value="yahoo_verification,google_verification" />';
echo '<p class="submit">
<input type="submit" name="Submit" value="Save Changes" />
</p>';
echo'</font>';

