<?php
/*
Plugin Name: Stream Video Player
Version: 0.7.8
Plugin URI: http://www.rodrigopolo.com/about/wp-stream-video
Description: The best way to include Stream Video to your blog, iPhone and HD video compatible. (SWFObject by Geoff Stearns)
Author: Rodrigo Polo
Author URI: http://www.rodrigopolo.com

Copyright (C) 2009  Rodrigo J. Polo
  
 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 any later version.
  
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
  
 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
 1) Includes Geoff Stearns' SWFObject Javascript Library v2.1 (MIT License) 
 Website: http://code.google.com/p/swfobject/
 License: http://www.opensource.org/licenses/mit-license.php
 
 2) Portions of this code are based on the Flash Video Player Plugin 
 for WordPress by Joshua Eldridge Website: http://www.mac-dev.net
		
*/

// The class to generate players
class rp_splayer {
	
	// Public vars
	var $swf, $flv, $mp4, $id, $name, $width, $height, $image, $wrapper;
	var $message='<div style="background-color:#ff9;padding:10px;">You need to install or upgrade Flash Player to view this content, install or upgrade here:<br /><a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>';
	
	// Private vars, params and flashvars
	var $params;
	var $flashvars;
	var $mobile = false;
		
	// Set an object param
	function setParam($name,$val){
		$this->params[$name]=$val;
	}
	
	// Return a string with all params
	function getParams(){
		if(count($this->params)>0){
			foreach ($this->params as $key => $value){
				$para[]= '<param name="'.$key.'" value="'.$value.'" />';
			}
			return implode("\n",$para);
		}
	}
	
	// Set a Flash Var
	function setFv($name,$val){
		$this->flashvars[$name]=$val;
	}
	
	// Return a string with all Flash vars
	function getFv(){
		foreach ($this->flashvars as $key => $value){
			$flva[]=htmlspecialchars($key).'='.htmlspecialchars($value);
		}
		return implode('&amp;',$flva);
	}
	

	// Return a string with all the text of the code
	function getHTML($single){
		
		// Mobile detector
		$container = $_SERVER['HTTP_USER_AGENT'];
		$useragents = array("iphone", "ipod", "aspen", "dream", "incognito", "webmate");
		foreach ($useragents as $useragent) {
			if (eregi($useragent, $container)) {
				$this->mobile = true;
			}
		}
		
		if(!empty($this->wrapper)){
			$vwrp = $this->wrapper;
			$to = strrpos($vwrp, "</");
			$wrp_a = substr($vwrp,0,$to);
			$wrp_b = substr($vwrp,$to,strlen($vwrp));
		}else{
			$wrp_a = '';
			$wrp_b = '';
		}
		
		
		
		// If a function is not empty returns it's html
		$swf = (empty($this->swf))?'':' data="'.$this->swf.'"';
		$swf_param = (empty($this->swf))?'':'<param name="movie" value="'.$this->swf.'" />';
		$width = (empty($this->width))?'':' width="'.$this->width.'"';
		$height = (empty($this->height))?'':' height="'.$this->height.'"';
		$id = (empty($this->id))?'':' id="'.$this->id.'"';
		$name = (empty($this->name))?'':' name="'.$this->name.'"';
		
		// If MP4 is declared it creates the nested object
		if(empty($this->mp4)){
			if(!$this->mobile){
				$last_object = $this->message;
			}else{
				$last_object = '(video)';
			}
		}else{
			$image_obj = (empty($this->image))?'':' data="'.$this->image.'"';
			$image_param = (empty($this->image))?'':'<param name="src" value="'.$this->image.'"/>';
			$last_object='<!--[if !IE]>--><object type="video/mp4"'.$image_obj.$width.$height.'>'."\n".
				'<param name="controller" value="false"/>'."\n".
				'<param name="target" value="myself"/>'."\n".
				'<param name="href" value="'.$this->mp4.'"/>'."\n".
				$image_param."\n".
				'<!--<![endif]-->';
				if(!$this->mobile){
					$last_object .= $this->message;
				}else{
					$last_object .= '(video)';
				}
				$last_object .= '<!--[if !IE]>-->'.
				'</object>'.
				'<!--<![endif]-->'.
				"\n";
		}
		
		// Set the default params
		$this->setParam('quality','high');
		$this->setParam('allowfullscreen','true');
		$this->setParam('allowscriptaccess','always');
		
		// Set the FLV parm for the player
		if(!empty($this->flv)){
			$this->setFv('s_flv',$this->flv);
		}
		
		// Set the param with all the flashvars
		$this->setParam('flashvars',$this->getFv());
		
		// Get all the params nitro a string
		$params = $this->getParams();
		
		// start generating all the HTML object
		
		$html=$wrp_a.'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'.$width.$height.$id.$name.'>'."\n".
		$swf_param."\n".
		$params."\n".
		'<!--[if !IE]>-->'."\n".
		'<object type="application/x-shockwave-flash"'.$swf.$width.$height.$name.'>'."\n".
		$params."\n".
		'<!--<![endif]-->'."\n".
		$last_object."\n".
		'<!--[if !IE]>-->'."\n".
		'</object>'."\n".
		'<!--<![endif]-->'."\n".
		'</object>'."\n";
		
		// For the SWFObject registrations
		if(!$this->mobile){
			$html .= '<script type="text/javascript">'."\n<!--\n".'swfobject.registerObject("'.$this->id.'", "9.0.115");'."\n//-->\n".'</script>';
		}
		
		
		// To show the result ONLY if it is ingle
		if($single){
			if(is_single()){
				return $html.$wrp_b;
			}else{
				return '(Video)';
			}
		}else{
			return $html.$wrp_b;
		}
		

	}
	
	// Restart the class
	function restart(){
		$this->swf=$this->flv=$this->mp4=$this->id=$this->name=$this->width=$this->height=$this->image=$this->wrapper='';
		$this->flashvars=$this->params = array();
		$this->message='<div style="background-color:#ff9;padding:10px;">You need to install or upgrade Flash Player to view this video, install or upgrade here:<br />'.
		'<a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>';
	}
	
}

// To clean up some texts
function StreamVideo_trim($str){ 
	return trim(preg_replace('/^(\xc2|\xa0|\x20|\x09|\x0a|\x0d|\x00|\x0B)|(\xc2|\xa0|\x20|\x09|\x0a|\x0d|\x00|\x0B)$/', '', $str)); 
}
// To handle version on JS files
$StreamVideoVersion = '0.7.8';

// To handle ids
$videoid = 0;

// To handle the site url
$site_url = get_option('siteurl');

// New player object
$player = new rp_splayer();

// Load the language packs
load_plugin_textdomain( 'stream-video-player', FALSE, 'stream-video-player/langs/');

// function to parse and edit the content
function StreamVideo_ViewPost($content){
	// finds the [stream /] tag and calls StreamVideo_ViewRender to parse.
	$content = preg_replace_callback("/\[stream ([^]]*)\/\]/i", "StreamVideo_ViewRender", $content);
	return $content;
}

// Replace x:/ with http:// for edition
function StreamVideo_ViewRender($matches){
	return  '[stream '.str_replace("x:/", "http://", $matches[1]).'/]';
}

// function to parse and save the content
function StreamVideo_SavePost($content){
	// finds the [stream /] tag and calls StreamVideo_SaveRender to parse.
	$content = preg_replace_callback("/\[stream ([^]]*)\/\]/i", "StreamVideo_SaveRender", $content);
	return $content;
}

// Replace http:// with x:/ to prevent issues with the rss feeds
function StreamVideo_SaveRender($matches){
	return  '[stream '.str_replace("http://", "x:/", $matches[1]).'/]';
}

// Parse the content to replace the tags with the player
function StreamVideo_Parse($content){
	global $StreamVideoSingle;
	// To show only on single pages
	$options = get_option('StreamVideoSettings');
	$StreamVideoSingle = ($options[3][3]['v']=='true');
	
	// finds the [stream /] tag and calls StreamVideo_Render to parse.
	$content = preg_replace_callback("/\[stream ([^]]*)\/\]/i", "StreamVideo_Render", $content);
	return $content;
}

// Render each player instance
function StreamVideo_Render($matches){
	global $videoid, $site_url, $player, $StreamVideoVersion, $StreamVideoSingle;
	
	$cmd = $matches[1];
	
	$cmd = str_replace("x:/", "http://", $cmd);
	$cmd = str_replace('"', '', $cmd);
	$cmd = str_replace(array('&#8221;','&#8243;'), '', $cmd);
	preg_match_all('/(\w*)=(.*?) /i', $cmd, $attributes);
	
	
	// A dirty temporary fix for the bad regex to support multiple spaces (ex: title=this is a title)
	$arguments = array();
	$tmp1=explode(' ',$cmd);
	foreach($tmp1 as $val){
		$tmp2 = explode('=',$val);
		if(count($tmp2)==2){
			$arguments[$tmp2[0]]=str_replace('"', '', $tmp2[1]);
			$last_key = $tmp2[0];
		}else if(count($tmp2)==1){
			$arguments[$last_key].=' '.str_replace('"', '', $tmp2[0]);
		}
	}
	
	// Display an error on the post if the FLV parameter is missing
	if (!array_key_exists('flv', $arguments)){
		return '<div style="background-color:#ff9;padding:10px;"><p>Error: Required parameter "flv" is missing!</p></div>';
		exit;
	}
	
	// Read the default options
	$options = get_option('StreamVideoSettings');

	/**
	 * Override default parameters 
	 **/
	
	// Width
	if (array_key_exists('width', $arguments)){
		$options[1][0]['v'] = $arguments['width'];
	}
	// Height
	if (array_key_exists('height', $arguments)){
		$options[1][1]['v'] = $arguments['height'];
	}
	// Image, check if has ben defined
	if (array_key_exists('img', $arguments)){
		$img_fqt = $arguments['img'];
	} else {
		// if not defined and not set in settings, use default
		if ($options[0][1]['v'] == ''){
			$img_fqt = $site_url.'/'.'wp-content/plugins/stream-video-player/default.gif';
		} else {
			$img_fqt = $options[0][1]['v'];
		}
	}
	
	// Generate and Return the RSS output if needed
	if(is_feed()){
		// Generate RSS HTML
		$rss_output = '<a href="'.get_permalink($post->ID).'"><img src="'.$img_fqt.'" width="'.$options[1][0]['v'].'" height="'.$options[1][1]['v'].'" alt="video" /></a>';
		// Check if is Full Text or Summary option, if Summary just say (Video)
		$rss_output = (!get_option('rss_use_excerpt'))?$rss_output:'(Video)';
		// A hack for RSS Feed to display images
		$rss_output = (strpos($_SERVER['REQUEST_URI'],'/feed/rss') !== false)?htmlspecialchars($rss_output):$rss_output;
		// To control the object id
		$videoid++;
		return ($rss_output);
	}

	// Restart the HTML Player Generator
	$player->restart();
	
	// Set all the settings acording to the specified arguments and default options
	$player->wrapper=$options[3][1]['v'];
	$player->swf=$site_url.'/wp-content/plugins/stream-video-player/streamplayer.swf?ver='.$StreamVideoVersion;
	$player->flv=StreamVideo_trim($arguments['flv']);
	if(!empty($arguments['mp4'])){
		$player->mp4=StreamVideo_trim($arguments['mp4']);
	}
	$player->id='svdo_'.$videoid;
	$player->name='svdo_'.$videoid;
	$player->width=$options[1][0]['v'];
	$player->height=$options[1][1]['v'];
	$player->image=StreamVideo_trim($img_fqt); $player->setFv('s_streamer', $site_url.'/wp-content/plugins/stream-video-player/streamer.php');
	
	// set the HD
	if(!empty($arguments['hd'])){
		$player->setFv('s_hd', StreamVideo_trim($arguments['hd']));
	}
	
	// set the embed
	if($arguments['embed']=='true'){
		$player->setFv('s_embed', 'true');
	}
	
	for ($i=0; $i<count($options);$i++){
		// Override all default parameters with the specified arguments
		foreach ((array) $options[$i] as $key=>$value){
			if (array_key_exists($value['on'], $arguments) && $value['on']){
				$value['v'] = $arguments[$value['on']];
			}
			if ($value['v'] != ''){
				$tvar = $value['on'];
				
				if($tvar == 'skin'){
					// If it's a "skin"
					if(StreamVideo_trim($value['v'])!='default'){
						// for custom skins
						$player->setFv('s_'.$tvar,$site_url.'/wp-content/plugins/stream-video-player/skins/'.StreamVideo_trim($value['v']).'.swf?ver='.$StreamVideoVersion);
					}
				}else if($tvar != 'skin' && $tvar != 'width' && $tvar != 'height' && $tvar != 'useobjswf' && $tvar != 'wrapper'){
					// set the rest of parameters but not if they are skin, width, height, useobjswf or wrapper
					$player->setFv('s_'.$tvar,StreamVideo_trim($value['v']));
				}		
			}
		}
	}
	
	// To control the object id
	$videoid++;
	
	// Generate and return the HTML
	return $player->getHTML($StreamVideoSingle);
	
}

// Add page on settings for level 8 (admins)
function StreamVideoAddPage(){
	add_options_page('Stream Video Player', 'Stream Video Player', '8', 'stream-video-player.php', 'StreamVideoOptions');
}

// To read the skin directory
function StreamVideoReadSkins(){
	// Get the skin directory (a better aproach!)
	$skins_dir = dirname(__FILE__).'/skins/';
	$skins = array();
	
	//echo "<pre>";
	//echo print_r($options);
	//echo "</pre>";
	
	// Pull the swf's listed in the skins folder to generate the dropdown list with valid skin files
	chdir($skins_dir);
	if ($handle = opendir($skins_dir)){
		while (false !== ($file = readdir($handle))){
			if ($file != "." && $file != ".."){
				$ext = strrchr($file, '.');
				if($ext == '.swf'){
					$skins[] = substr($file, 0, -strlen($ext));
				}
			}
		}
		closedir($handle);
	}
	chdir(dirname(__FILE__));
	// Add the default value onto the beginning of the skins array
	array_unshift($skins, 'default');
	
	return $skins;
}

// Plug-in options
function StreamVideoOptions(){
	global $site_url;
	$message = '';	
	$g = array(0=>__('Video Properties', 'stream-video-player'), 1=>__('Layout', 'stream-video-player'), 2=>__('Behavior', 'stream-video-player'), 3=>__('System', 'stream-video-player'));

	$options = get_option('StreamVideoSettings');
	$options_lang = StreamVideoLoadDefaults();
	// Process form submission
	if ($_POST){
		for($i=0; $i<count($options);$i++){
			foreach((array) $options[$i] as $key=>$value){
				// Handle Checkboxes that don't send a value in the POST
				if($value['t'] == 'cb' && !isset($_POST[$options[$i][$key]['on']])){
					$options[$i][$key]['v'] = 'false';
				}
				if($value['t'] == 'cb' && isset($_POST[$options[$i][$key]['on']])){
					$options[$i][$key]['v'] = 'true';
				}
				// Handle all other changed values
				if(isset($_POST[$options[$i][$key]['on']]) && $value['t'] != 'cb'){
					
					// Fix for quotes 
					$spval = $_POST[$options[$i][$key]['on']];
					if(get_magic_quotes_gpc()){
						$spval =  stripslashes($spval);
					}
					
					$options[$i][$key]['v'] = $spval;
				}
			}
		}
		update_option('StreamVideoSettings', $options);
		$message = '<div class="updated"><p><strong>'.__('Options saved.', 'stream-video-player').'</strong></p></div>';	
	}

	echo '<div class="wrap">';
	echo '<h2>'.__('Stream Video Options', 'stream-video-player').'</h2>';
	echo $message;
	echo '<form method="post" action="options-general.php?page=stream-video-player.php">';
	echo "<p>".__('Here you can set some default global options for all your videos, if you need help or more information on how to encode and prepare your video to be a pseudo stream compliant check out the <a href="http://www.rodrigopolo.com/about/wp-stream-video/faq" target="_blank">Player FAQs</a> where you can find a lot of free and open resources to encode your video.', 'stream-video-player')."</p>";

	// For tests:
	//echo "<pre>";
	//echo print_r($options);
	//echo "</pre>";

	$options[1][2]['op'] = StreamVideoReadSkins();
	
	// Generate the admin HTML based on the options
	foreach((array) $options as $key=>$value){
		echo '<h3>'.$g[$key].'</h3>'."\n";
		echo '<table class="form-table">'."\n";
		foreach((array) $value as $sk => $setting){
			echo '<tr><th scope="row">'.$options_lang[$key][$sk]['dn'].'</th><td>'."\n";
			switch ($setting['t']){
				case 'tx':
					echo '<input type="text" name="'.$setting['on'].'" value="'.htmlentities($setting['v']).'" />';
					break;
				case 'dd':
					echo '<select name="'.$setting['on'].'">';
					foreach((array) $setting['op'] as $v){
						$selected = '';
						if($v == $setting['v']){
							$selected = ' selected';
						}
						echo '<option value="'.$v.'"'.$selected.'>'.($v).'</option>'; // remove ucfirst
					}
					echo '</select>';
					break;
				case 'cb':
					echo '<input type="checkbox" class="check" name="'.$setting['on'].'" ';
					if($setting['v'] == 'true'){
						echo 'checked="checked"';
					}
					echo ' />';
					break;
				}
				echo '</td></tr>'."\n";
			}
			echo '</table>'."\n";
		}
	echo '<p class="submit"><input class="button-primary" type="submit" method="post" value="'.__('Update Options', 'stream-video-player').'"></p>';
	echo '</form>';
	echo '</div>';
}

// Include the SWFObject
add_action((preg_match("/(\/\?feed=|\/feed)/i",$_SERVER['REQUEST_URI'])) ? 'template_redirect' : 'plugins_loaded', 'StreamVideoSWFObj');

// Function to include the SWF Object
function StreamVideoSWFObj(){
	$options = get_option('StreamVideoSettings');
	// add JS If is set.
	if($options[3][2]['v']=='true'){
		wp_enqueue_script( 'swfobject', plugins_url('/stream-video-player/swfobject.js'), array(), '2.1' );
	}
}

// Function to load the defaults
function StreamVideoLoadDefaults(){
	$f = array();

	/*
	  Array Legend:
	  on = Option Name
	  dn = Display Name
	  t = Type
	  v = Default Value
	*/
	
	//Video Properties
	
	$f[0][0]['on'] = 'title';
	$f[0][0]['dn'] = __('Title', 'stream-video-player');
	$f[0][0]['t'] = 'tx';
	$f[0][0]['v'] = '';
	
	$f[0][1]['on'] = 'img';
	$f[0][1]['dn'] = __('Preview Image', 'stream-video-player');
	$f[0][1]['t'] = 'tx';
	$f[0][1]['v'] = '';
		
	//Layout
	
	$f[1][0]['on'] = 'width';
	$f[1][0]['dn'] = __('Player Width', 'stream-video-player');
	$f[1][0]['t'] = 'tx';
	$f[1][0]['v'] = '400';

	$f[1][1]['on'] = 'height';
	$f[1][1]['dn'] = __('Player Height', 'stream-video-player');
	$f[1][1]['t'] = 'tx';
	$f[1][1]['v'] = '224';

	$f[1][2]['on'] = 'skin';
	$f[1][2]['dn'] = __('Skin', 'stream-video-player');
	$f[1][2]['t'] = 'dd';
	$f[1][2]['v'] = 'default';
	$f[1][2]['op'] = array('default', 'iTube', 'iMeo', 'iMeta');
	
	$f[1][3]['on'] = 'logo';
	$f[1][3]['dn'] = __('Logo', 'stream-video-player');
	$f[1][3]['t'] = 'tx';
	$f[1][3]['v'] = '';

	//Behavior

	$f[2][0]['on'] = 'autostart';
	$f[2][0]['dn'] = __('Auto Start', 'stream-video-player');
	$f[2][0]['t'] = 'cb';
	$f[2][0]['v'] = 'false';
	
	$f[2][1]['on'] = 'volume';
	$f[2][1]['dn'] = __('Startup Volume', 'stream-video-player');
	$f[2][1]['t'] = 'dd';
	$f[2][1]['v'] = '90';
	$f[2][1]['op'] = array('0', '10', '20', '30', '40', '50', '60', '70', '80', '90', '100');
	
	// System

	$f[3][0]['on'] = 'bandwidth';
	$f[3][0]['dn'] = __('Bandwidth', 'stream-video-player');
	$f[3][0]['t'] = 'dd';
	$f[3][0]['v'] = 'med';
	$f[3][0]['op'] = array('low', 'med', 'high', 'off');

	$f[3][1]['on'] = 'wrapper';
	$f[3][1]['dn'] = __('HTML Wrapper', 'stream-video-player');
	$f[3][1]['t'] = 'tx';
	$f[3][1]['v'] = '';

	$f[3][2]['on'] = 'useobjswf';
	$f[3][2]['dn'] = __('Use SWFObject.js', 'stream-video-player');
	$f[3][2]['t'] = 'cb';
	$f[3][2]['v'] = 'true';
	
	$f[3][3]['on'] = 'onlyonsingle';
	$f[3][3]['dn'] = __('Show player only on single pages', 'stream-video-player');
	$f[3][3]['t'] = 'cb';
	$f[3][3]['v'] = 'false';

	return $f;
}

// Function for activation
function StreamVideo_activate(){
	update_option('StreamVideoSettings', StreamVideoLoadDefaults());
}

// Set the activation
register_activation_hook(__FILE__,'StreamVideo_activate');

// Function for deactivation
function StreamVideo_deactivate(){
	delete_option('StreamVideoSettings');
}

// Set the deactivation function
register_deactivation_hook(__FILE__,'StreamVideo_deactivate');

// Set the content filter for Content and for RSS
add_filter('the_content', 'StreamVideo_Parse',100);

// For editing
add_filter('content_edit_pre', 'StreamVideo_ViewPost');

// For writing
add_filter('content_save_pre', 'StreamVideo_SavePost');

// Add options menu
add_action('admin_menu', 'StreamVideoAddPage');

// Adding button to the MCE toolbar (Visual Mode) 
add_action('init', 'StreamVideo_addbuttons');

// Add button hooks to the Tiny MCE 
function StreamVideo_addbuttons() {
	
	global $StreamVideoVersion;
	
	if (!current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
	}
	if ( get_user_option('rich_editing') == 'true') {
		add_filter( 'tiny_mce_version', 'StreamVideo_tiny_mce_version', 0 );
		add_filter( 'mce_external_plugins', 'StreamVideo_plugin', 0 );
		add_filter( 'mce_buttons', 'StreamVideo_button', 0);
	}


	// Register Hooks
	if (is_admin()) {
		
		// Add Quicktag
		add_action( 'edit_form_advanced', 'add_quicktags' );
		add_action( 'edit_page_form', 'add_quicktags' );

		// Queue Embed JS
		add_action( 'admin_head', 'set_admin_js_vars');
		wp_enqueue_script( 'streamvideoqt', plugins_url('/stream-video-player/button/svb.js'), array(), $StreamVideoVersion );
		
	}
	
}

// Break the browser cache of TinyMCE
function StreamVideo_tiny_mce_version( $ver ) {
	global $StreamVideoVersion;
	return $ver . '-svb' . $StreamVideoVersion;
}

// Load the custom TinyMCE plugin
function StreamVideo_plugin( $plugins ) {
	$plugins['streamvideoqt'] = plugins_url('/stream-video-player/button/tinymce3/editor_plugin.js');
	return $plugins;
}

// Add the buttons: separator, custom
function StreamVideo_button( $buttons ) {
	array_push( $buttons, 'separator', 'StreamVideo' );
	return $buttons;
}

// Add a button to the quicktag view (HTML Mode) >>>
function add_quicktags(){
?>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
(function(){
	if (typeof jQuery === 'undefined') {
		return;
	}
	jQuery(document).ready(function(){
		// Add the buttons to the HTML view
		jQuery("#ed_toolbar").append('<input type="button" class="ed_button" onclick="RodrigoPolo.Tag.embed.apply(RodrigoPolo.Tag); return false;" title="Insert Stream Video Tag" value="Stream Video" />');
	});
}());
// ]]>
</script>
<?php	
}

// Set URL for the settings page
function set_admin_js_vars(){
?>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
	if (typeof RodrigoPolo !== 'undefined' && typeof RodrigoPolo.Tag !== 'undefined') {
		RodrigoPolo.Tag.configUrl = "<?php echo plugins_url('/stream-video-player/config.php'); ?>";
	}
// ]]>	
</script>
<?php
}
?>