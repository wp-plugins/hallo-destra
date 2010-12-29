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
echo'<font color="#666666" face="Georgia"><p>';
echo'<font face="Georgia"><h2>Home page Images Carousel Setting</h2></font>';
echo'You can display animated a simple picture on the front page of the blog / website. Add Scripts below on the theme you are using, Customize the appearance of the theme. <br>';
echo'<center><code>&lt;?php if ( function_exists(&quot;olah_gambar&quot;) ){ olah_gambar(); } ?&gt;</code></center>';
echo'<br><br>';
echo'And you can also add a <b>shortcode</b> <code>[gambar_carousel]</code> to view on a post or page. As a portfolio if desired.';
echo'<br>';
echo'Nine images can you enter to beautify your website. Perform the settings below and Save!<br><br>';
echo '<form method="post" action="options.php">';
    wp_nonce_field('update-options');	
echo 'URL Images 1 : <input type="text" name="img_gambar1" value="' . get_option('img_gambar1') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar1" value="' . get_option('judul_img_gambar1') . '" /><br/>';
echo 'URL Images 2 : <input type="text" name="img_gambar2" value="' . get_option('img_gambar2') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar2" value="' . get_option('judul_img_gambar2') . '" /><br/>';
echo 'URL Images 3 : <input type="text" name="img_gambar3" value="' . get_option('img_gambar3') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar3" value="' . get_option('judul_img_gambar3') . '" /><br/>';
echo 'URL Images 4 : <input type="text" name="img_gambar4" value="' . get_option('img_gambar4') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar4" value="' . get_option('judul_img_gambar4') . '" /><br/>';
echo 'URL Images 5 : <input type="text" name="img_gambar5" value="' . get_option('img_gambar5') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar5" value="' . get_option('judul_img_gambar5') . '" /><br/>';
echo 'URL Images 6 : <input type="text" name="img_gambar6" value="' . get_option('img_gambar6') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar6" value="' . get_option('judul_img_gambar6') . '" /><br/>';
echo 'URL Images 7 : <input type="text" name="img_gambar7" value="' . get_option('img_gambar7') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar7" value="' . get_option('judul_img_gambar7') . '" /><br/>';
echo 'URL Images 8 : <input type="text" name="img_gambar8" value="' . get_option('img_gambar8') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar8" value="' . get_option('judul_img_gambar8') . '" /><br/>';
echo 'URL Images 9 : <input type="text" name="img_gambar9" value="' . get_option('img_gambar9') . '" />&nbsp;&nbsp;Title : <input type="text" name="judul_img_gambar9" value="' . get_option('judul_img_gambar9') . '" /><br/>';
echo '<input type="hidden" name="action" value="update" />';
echo '<input type="hidden" name="page_options" value="img_gambar1,img_gambar2,img_gambar3,img_gambar4,img_gambar5,img_gambar6,img_gambar7,img_gambar8,img_gambar9,judul_img_gambar1,judul_img_gambar2,judul_img_gambar3,judul_img_gambar4,judul_img_gambar5,judul_img_gambar6,judul_img_gambar7,judul_img_gambar8,judul_img_gambar9" />';
echo '<p class="submit">
<input type="submit" name="Submit" value="Save Changes" />
</p>';
echo'<font color="#FF0000">CAUTION!</font>
<font color="#CCCCCC">If you take a picture of the URL exsternal, Note the use of your Bandwidth!</font>';
echo'<h2>Support us</h2>';
echo'If you have questions or difficulties in making arrangements, please contact us at: <a href="http://www.papadestra.com/" target="_blank">http://www.papadestra.com/</a><br>';
echo'We hope you are willing to support our project by giving your <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H9PUAV7KT2HFY" target="_blank"><b>Donation</b></a>.&nbsp;Backlinks automatically will go to your website. <br>we are waiting for your response!';
echo'</p>';
echo'</font>';
?>