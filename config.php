<?php
/* Finding the path to the wp-admin folder */
$iswin = preg_match('/:\\\/', dirname(__file__));
$slash = ($iswin) ? "\\" : "/";
$wp_path = preg_split('/(?=((\\\|\/)wp-content)).*/', dirname(__file__));
$wp_path = (isset($wp_path[0]) && $wp_path[0] != "") ? $wp_path[0] : $_SERVER["DOCUMENT_ROOT"];
/** Load WordPress Administration Bootstrap */
require_once($wp_path . $slash . 'wp-load.php');
require_once($wp_path . $slash . 'wp-admin' . $slash . 'admin.php'); 
$title = "Stream Video";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php do_action('admin_xml_ns'); ?> <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
<title><?php bloginfo('name') ?> &rsaquo; <?php echo wp_specialchars( $title ); ?> &#8212; WordPress</title>
<?php
// styles
wp_admin_css( 'css/global' );
wp_admin_css();
wp_admin_css( 'css/colors' );
wp_admin_css( 'css/ie' );
$hook_suffix = '';
if ( isset($page_hook) )
	$hook_suffix = "$page_hook";
else if ( isset($plugin_page) )
	$hook_suffix = "$plugin_page";
else if ( isset($pagenow) )
	$hook_suffix = "$pagenow";
do_action("admin_print_styles-$hook_suffix");
do_action('admin_print_styles');
do_action("admin_print_scripts-$hook_suffix");
do_action('admin_print_scripts');
do_action("admin_head-$hook_suffix");
do_action('admin_head');

// load defaults
$def_options = get_option('StreamVideoSettings');

?>
<link rel="stylesheet" href="<?php echo plugins_url('/stream-video-player/button/generator.css'); ?>?ver=<?php echo $StreamVideoVersion; ?>" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="<?php echo plugins_url('/stream-video-player/button/svb.js'); ?>?ver=<?php echo $StreamVideoVersion; ?>" type="text/javascript" charset="utf-8"></script>
</head>
<body class="<?php echo apply_filters( 'admin_body_class', '' ); ?>">
	<div class="wrap">
	
		<h2><?php echo $title; ?></h2> 
 <div class="note"><?php _e('Learn how to encode &quot;stream-ready&quot; videos with multi-platform free-tools and<br />how to use this plug-in by ', 'stream-video-player'); ?><a href="http://www.rodrigopolo.com/about/wp-stream-video/how-to" target="_blank"><?php _e('clicking here', 'stream-video-player'); ?></a>.</div> 
		<div class="note"><?php _e('(<span class="req">*</span>) indicates required field', 'stream-video-player'); ?></div> 
		<fieldset> 
			<legend><?php _e('Stream Player Tag Atributes', 'stream-video-player'); ?></legend> 
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your file', 'stream-video-player'); ?>" for="flv"><?php _e('Video for Player:', 'stream-video-player'); ?></label> <span class="req">*</span> 
				</div>
				<div class="col2"> 
					<input type="text" size="18" value="injected.flv" name="flv" id="flv"/> 
				</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('Width &times; height in pixels', 'stream-video-player'); ?>"><?php _e('Dimensions:', 'stream-video-player'); ?></label> <span class="req">*</span> 
				</div>
				<div class="col2"> 
					<input type="text" maxlength="5" size="5" value="<?php echo $def_options[1][0]['v']; ?>" name="width" id="width"/> 
					&times;
					<input type="text" maxlength="5" size="5" value="<?php echo $def_options[1][1]['v']; ?>" name="height" id="height"/> 
				</div>
                <div class="clear">&nbsp;</div> 
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your image preview', 'stream-video-player'); ?>" for="img"><?php _e('Image Preview (.jpg):', 'stream-video-player'); ?></label> <span class="req">*</span> 
				</div>
				<div class="col2"> 
					<input type="text" size="18" value="image-preview.jpg" name="img" id="img"/> 
				</div>
				<div class="col1"> 
					<label title="<?php _e('Set the desired bandwidth for cache and site bandwidth control', 'stream-video-player'); ?>" class="info" for="bw"><?php _e('Bandwidth:', 'stream-video-player'); ?></label><span class="req">*</span>
				</div>
				<div class="col4"> 
                    <select name="bandwidth" id="bandwidth"> 
                    	<?php
						// to load defaults
						foreach ($def_options[3][0]['op'] as $value) {
							$sel = ($def_options[3][0]['v']==$value)?' selected="selected"':'';
							echo '<option value="'.$value.'"'.$sel.'>'.ucfirst($value).'</option>';
						}
                        ?>
                    </select> 
				</div>
                <div class="clear">&nbsp;</div> 
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your MP4 video (for iPhone)', 'stream-video-player'); ?>" for="mp4"><?php _e('Video for iPhone (.mp4):', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="mp4" id="mp4"/> 
				</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your HD video', 'stream-video-player'); ?>" for="hd"><?php _e('HD Video for Player:', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="hd" id="hd"/> 
				</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your XML captions file', 'stream-video-player'); ?>" for="captions"><?php _e('Captions (.xml):', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="captions" id="captions"/> 
				</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('Your video title', 'stream-video-player'); ?>" for="title"><?php _e('Title:', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="title" id="title"/> 
				</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('Your video volume, from 0 to 100, if empty takes the default value on the plug-in settings', 'stream-video-player'); ?>" for="volume"><?php _e('Volume:', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="volume" id="volume"/> 
				</div>
                
				<div class="col1"> 
					<label class="info" title="<?php _e('Show the Dock for this player', 'stream-video-player'); ?>" for="dock"><?php _e('Dock:', 'stream-video-player'); ?></label>
				</div>
				<div class="col4">
                    <select name="dock" id="dock"> 
                    	<?php
						// to load defaults
						foreach ($def_options[1][5]['op'] as $value) {
							$sel = ($def_options[1][5]['v']==$value)?' selected="selected"':'';
							echo '<option value="'.$value.'"'.$sel.'>'.ucfirst($value).'</option>';
						}
                        ?>
                    </select> 
				</div>
                <div class="clear">&nbsp;</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('Set the Control Bar position and visibility', 'stream-video-player'); ?>" for="controlbar"><?php _e('Control Bar:', 'stream-video-player'); ?></label>
				</div>
				<div class="col4">
                    <select name="controlbar" id="controlbar"> 
                    	<?php
						// to load defaults
						foreach ($def_options[1][4]['op'] as $value) {
							$sel = ($def_options[1][4]['v']==$value)?' selected="selected"':'';
							echo '<option value="'.$value.'"'.$sel.'>'.$value.'</option>';
						}
                        ?>
                    </select> 
				</div>
                <div class="clear">&nbsp;</div>
                
				<div class="col1"> 
					<label class="info" title="<?php _e('Set the media provider, &quot;http&quot; is for pseudo-streming and is enable by default, choose &quot;video&quot; for progressively downloaded FLV, MP4, and AAC audio, choose &quot;sound&quot; for progressively downloaded MP3 files, choose &quot;image&quot; for JPG/GIF/PNG images, choose &quot;youtube&quot; for videos from Youtube and &quot;rtmp&quot; for FLV/MP4/MP3 files played from an RTMP server.', 'stream-video-player'); ?>" for="provider"><?php _e('Media provider:', 'stream-video-player'); ?></label>
				</div>
				<div class="col4">
                    <select name="provider" id="provider"> 
                    	<?php
						// to load defaults
						foreach ($def_options[3][4]['op'] as $value) {
							$sel = ($def_options[3][4]['v']==$value)?' selected="selected"':'';
							$vname = ($value=='http')?$value.' : pseudo-streaming':$value;
							echo '<option value="'.$value.'"'.$sel.'>'.$vname.'</option>';
						}
                        ?>
                    </select> 
				</div>
                <div class="clear">&nbsp;</div>
                
                
				<div class="col1"> 
					<label class="info" title="<?php _e('To use another pseudo streaming script on other server, if is empty it takes the default value on the plug-in settings.', 'stream-video-player'); ?>" for="streamer"><?php _e('Streamer:', 'stream-video-player'); ?></label> 
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="streamer" id="streamer"/> 
				</div>
                
                
				<div class="col1"> 
					<label class="info" title="<?php _e('Skin for this player', 'stream-video-player'); ?>" for="skin"><?php _e('Skin:', 'stream-video-player'); ?></label>
				</div>
				<div class="col4">
                    <select name="skin" id="skin"> 
                    	<?php
						// to load defaults
						foreach (StreamVideoReadSkins() as $value) {
							$sel = ($def_options[1][2]['v']==$value)?' selected="selected"':'';
							echo '<option value="'.$value.'"'.$sel.'>'.ucfirst($value).'</option>';
						}
                        ?>
                    </select> 
				</div>
                <div class="clear">&nbsp;</div>
				<div class="col1"> 
					<label class="info" title="<?php _e('The absolute path to your video player logo, if empty takes the default value on the plug-in settings', 'stream-video-player'); ?>" for="logo"><?php _e('Logo (.jpg, .png, .flv):', 'stream-video-player'); ?></label>
				</div>
				<div class="col2"> 
					<input type="text" size="18" name="logo" id="logo"/> 
				</div>
                
				<div class="col1"> 
					<label title="<?php _e('Auto Start the video with the Stream Player', 'stream-video-player'); ?>" class="info" for="autostart"><?php _e('Auto Start:', 'stream-video-player'); ?></label> 
				</div>
				<div class="col4">
                    <select name="autostart" id="autostart"> 
                        <option value="false">False</option> 
                        <option value="true"<?php echo ($def_options[2][0]['v']=='true')?' selected="selected"':'';?>>True</option> 
                    </select> 
				</div>
                <div class="clear">&nbsp;</div> 
				<div class="col1"> 
					<label title="<?php _e('Enable embed the player in other sites', 'stream-video-player'); ?>" class="info" for="embed"><?php _e('Enable Embed:', 'stream-video-player'); ?></label> 
				</div>
				<div class="col4"> 
                    <select name="embed" id="embed"> 
                        <option value="true">True</option>
                        <option value="false"<?php echo ($def_options[2][3]['v']=='false')?' selected="selected"':'';?>>False</option> 
                    </select> 
				</div>
                <div class="clear">&nbsp;</div> 
				<div class="col1"> 
					<label title="<?php _e('Enable the sharing of the URL of the post where the video is inserted', 'stream-video-player'); ?>" class="info" for="share"><?php _e('Enable URL Share:', 'stream-video-player'); ?></label> 
				</div>
				<div class="col4"> 
                    <select name="share" id="share">
                        <option value="true">True</option>
                        <option value="false"<?php echo ($def_options[2][2]['v']=='false')?' selected="selected"':'';?>>False</option> 
                    </select> 
				</div>
                <div class="clear">&nbsp;</div>
		</fieldset> 
		
		<div class="col1"> 
			<input type="button" class="button" id="generate" name="generate" value="<?php _e('Generate', 'stream-video-player'); ?>" />
		</div> 
		
	</div>
	
	<script type="text/javascript" charset="utf-8">
		// <![CDATA[
		jQuery(document).ready(function(){
			try {
				RodrigoPolo.Tag.Generator.initialize();
			} catch (e) {
				throw "<?php _e("Stream Video: This tag generator isn't going to put the stream video tag in your code.", 'stream-video-player'); ?>";
			}
		});
		// ]]>
	</script>
</body>
</html>