=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://www.rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.2.2
Tested up to: 2.8.4
Stable tag: 0.7.8

Stream Video Player for WordPress it's one stop solution for high quality video publishing for web or iPhone.

== Description ==

Stream Video Player for WordPress is the complete solution for video publishing on blogs, most public sites for video publishing have some limits on the video size or time, with this plug-in the only limit it's your host capacity, you can seek in any place and the video start in that position without having to load the entire video.

Important Links:

* <a href="http://www.rodrigopolo.com/about/wp-stream-video" title="Demonstration and Info">Demonstration and info.</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/how-to" title="Full guide on how to use the plug-in and encode video">How to use the plug-in and encode video</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux" title="Video Encoder Installer">Video Encoder for Mac, Win, Linux</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/known-issues-and-to-do-list" title="Known issues and To-do list">Known issues and To-do list</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/faq" title="Stream Video Player FAQ">FAQ</a>

= Features =

* Timeless videos, you can upload more than 24hrs videos if you want.
* Random access to any position on the video thanks to the pseudo streaming technique
* iPhone, WPTouch, MobilePress and feeds compatible.
* Only open source software needed for video encoding
* Multi-Language (Currently English and Spanish)
* I made every component of this player, so the source code of the Flash file will be available in the mean time (First I need to clean up the code a little).
* The player is made thinking about customization, so it has already a full skin capability, and you can make your own skin very easily with the Flash IDE.
* 100% Standard code


== Credits ==

Copyright 2009 by RodrigoPolo.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

== Installation ==

1. Download and unzip the current version of the Stream Video Player plugin.
2. Transfer the entire 'stream-video-player' directory to your '/wp-content/plugins/' directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. That's it! You're done. You can now generate the "stream video tag" by using the tag generator from the post editor.

== Frequently Asked Questions ==

= What's new in the latest version? =

* There was a problem with the IE conditional comments that affect some FireFox versions, fixed.
* The streamer.php has some issues with some older PHP versions, Fixed but PHP5 IT'S RECOMENDED.
* Some fixes to the SWF Player.
* Some fixes to the default values in the tag generator.
* An experimental BUT NOT FINAL FLA skin for your tests it's now included.
* New screencasts online to learn how to use it, English and Spanish.


= I have activated the plugin, but don't see the video player. What do I do? =

Check and make sure that you have the appropriate hook in your template file for the header: '<?php wp_head(); ?>'

= I recieve video a red error message on the player. What can be wrong? =

Check and make sure that you are using absolute urls like "http://yourblog.com/yourvideo.flv" and not relative urls like "../video.flv"
AND BE CERTAIN to have all videos in your site and on the same domain

Important Note: This plug-in requires PHP 5 to work correctly

= I can't scroll (or scrub) the video. What can be wrong? =
In order to use the random access feature, your videos must be injected with flv metadata.
You will need "Yamdi" for this, you can download and install it from here: http://yamdi.sourceforge.net/ or use the intaller I on this site.
Yamdi runs on Windows, Mac OS X and Linux and it's the faster free open source injection tool.

= How can I get help? =

* [How to use the plug-in and encode video](http://www.rodrigopolo.com/about/wp-stream-video/how-to)
* [Stream Video Player information](http://www.rodrigopolo.com/about/wp-stream-video)
* [Stream Video Player Frequently Asked Questions (F.A.Q.)](http://www.rodrigopolo.com/about/wp-stream-video/faq)
* [FFmpeg Video Encoder Installs](http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux)


= To-Do =

* Coding the "embed" option.
* Work on the skin engine.
* Cleaning up the FLA Player and release the source.

== Changelog ==  

= 0.7.8 = 
* Added the option to to choose to show the player only on single pages, this is because "the_excerpt" function strips the HTML from the player.
* Added the "ru_Ru" translation file thanks to [Fat Cow](http://fatcow.com).
* A huge fix to the way the language loads in the settings page

= 0.7.7 = 
* A time position tooltip (balloontip) added to the player.
* Now you can click on the bar to go to any place in the video, TAKE NOTE: The stream goes to the closest key frame to the place you clicked, NOT the exactly place where you clicked.
* A Bug in the way the plug-in include the SWFObject fixed (thanks to Korin Unka advice).
* A bug generated in v0.7.6 with the title fixed (thanks to Bastiaan Bergman advice).
* The conditional comments issue revisited, if you have problems with those, use PHP5 (thanks to Walter sugestion).
* The HD button now enables or disables the HD option AND you can see which option is with the button transparency (thanks to Bastiaan Bergman sugestion).


= 0.7.6 = 
* Now the video shows not only in single pages, as requested.
* Fixed the HD button initialization, so you can check the FLA and change your skin in Flash.
* An issue with the skins URL fixed.
* An issue with the logo options fixed.


= 0.7.5 = 
* Fix to de wmode in the Flash Embed.
* Changes to prepare the EMBED option.
* Adding the crossdomain.xml to prepere for the EMBED option.

= 0.7.4 = 
* Conditional comments fix.
* streamer.php Fixed but PHP5 IT'S RECOMENDED.
* Some fixes to the SWF Player.
* Some fixes to the default values in the tag generator.
* An experimental FLA skin for tests it's included.
* New screencasts online to learn how to use it, English and Spanish.

= 0.7.3 =  
* An upgrade to fix a compatibility with other plug-ins.

= 0.7.2 =  
* The HD option it's completed and working.
* Some optimizations on the SWF.
* The PHP Class it's working with older PHP versions. (Syntax fixed).
   
= 0.7 =  
* A little problem with the use of WWW on the FLV URL Fixed.
* PHP Pseudo Streamer URL fixed.
* Future options disabled to prevent confusion.
   
= 0.6 =  
* First beta release.

== Screenshots ==

1. Stream Video Player GUI.
2. Tag Generator Button.
3. Tag Generator Panel.
4. Plugin Settings.
5. Stream Video Player Time Tooltip.