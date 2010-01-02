=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://www.rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.2.2
Tested up to: 2.9.0
Stable tag: 1.0.1

Stream Video Player for WordPress its one stop solution for high quality video publishing for web or iPhone.

== Description ==

Stream Video Player for WordPress is the complete solution for video publishing on blogs, most public sites for video publishing have some limits on the video size or time, with this plug-in the only limit it's your host capacity, you can seek in any place and the video start in that position without having to load the entire video thanks to the pseudo-streaming technique.

Important Links:

* <a href="http://www.rodrigopolo.com/about/wp-stream-video" title="Demonstration and Info">Demonstration and info.</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/how-to" title="Full guide on how to use the plug-in and encode video">How to use the plug-in and encode video</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux" title="Video Encoder Installer">Video Encoder for Mac, Win, Linux</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/known-issues-and-to-do-list" title="Known issues and To-do list">Known issues and To-do list</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/faq" title="Stream Video Player FAQ">FAQ</a>

= Features =
* Random access to any position on the video thanks to the pseudo streaming technique
* Embed code generator for any video.
* Captions (subtitles) capable.
* Social sharing and video URL sharing.
* iPhone, WPTouch, MobilePress and feeds compatible.
* Skins capable thanks to JW Media Player it can load SWF and XML-PNG custom skins.
* Multi-Language (Currently English, Spanish, French and Russian)
* Based on a very fine tuned custom build of the JW Media Player Version 5 Build 764.
* Only open source software needed for video encoding.
* JW Media Player plug-ins supported
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

IMPORTANT: This plug-in use a fine tuned custom build of the JW Player
The JW Player is free to use in non-commercial websites, for commercial 
websites you need to buy a license, for more 
information check https://www.longtailvideo.com/players/order/license/ 

== Installation ==

1. Download and unzip the current version of the Stream Video Player plugin.
2. Transfer the entire 'stream-video-player' directory to your '/wp-content/plugins/' directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. That's it! You're done. You can now generate the "stream video tag" by using the tag generator from the post editor.

== Frequently Asked Questions ==

= What's new in the latest version? =

* Now using a very custom and fine tuned build of the JW Player version 5 SVN 764, Legacy GNU Player in the next release, bugs and known issue on the JW Player can be checked here: http://developer.longtailvideo.com/trac/report/
* New! Captions capable player, now you can add text captions to your videos, information on how to make your captions.xml available soon on the plug-in page.
* New! URL Sharing option - Use "share=true" and the URL is Generated automatically.
* New! Embed option - Use "embed=true" and the embed code is Generated automatically AND it is persistent in other sites that use you’re embed code, IMPORTANT In order to share your video player you need to place the included file crossdomain.xml in your domain root directory, more information at: http://kb2.adobe.com/cps/142/tn_14213.html
* Added French translation by Stéphane Benoit, because this is a major release some parts can be not well translated but will be updated.
* Pseudo-streaming now optional, you can choose you can choose whether or not to use the streaming by selecting other provider. 
* Pseudo streaming script can be placed on other domains.
* Update on streamer.php to show URL errors and hide PHP warnings.
* New! YouTube and other formats supported. Now you can load many other media using the "provider" parameter in the stream tag, the current supported media is the same supported by JW Player, "video" for progressively downloaded FLV / MP4 video, but also AAC audio, "sound" for progressively downloaded MP3 files, "image" for JPG/GIF/PNG images, "youtube" for videos from Youtube, "http" for FLV/MP4 videos played as http pseudo-streaming, "rtmp" for FLV/MP4/MP3 files played from an RTMP server.
* Fix in embed code, "wmode" param set to "opaque" by default to prevent HTML overlapping.
* COMING SOON: Server side encoding, Media Library Integration and a Multi-Platform Desktop Graphic Application to encode and upload your videos directly to your WordPress blog.
* IMPORTANT NOTE: After several tests I have decided to use FLVMeta as the metadata injection utility for FLV Videos, is extremely faster, very very very low footprint on CPU and RAM and of course, can handle very large videos, can inject the “with” and “height” and is multi-platform, download at http://code.google.com/p/flvmeta/ (BinKit release coming soon: http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux ).


= I have activated the plugin, but don't see the video player. What do I do? =

Check and make sure that you have the appropriate hook in your template file for the header: '<?php wp_head(); ?>'

= I receive video a red error message on the player. What can be wrong? =

Check and make sure that you are using absolute urls like "http://yourblog.com/yourvideo.flv" and not relative urls like "../video.flv"
AND BE CERTAIN to have all videos in your site and on the same domain

Important Note: This plug-in requires PHP 5 to work correctly

= I can't scroll (or scrub) the video. What can be wrong? =
In order to use the random access feature, your videos must be injected with flv metadata.
You will need "FLVMeta" for this, you can download and install it from here: http://code.google.com/p/flvmeta/ or use the installer I on this site.
FLVMeta runs on Windows, Mac OS X and Linux and it's extremely faster, low footprint on CPU and RAM, easy to use and free open source.

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

= 1.0.1 =
Minor problem with streamer.php fixed.

= 1.0.0 = 
* Now using a very custom and fine tuned build of the JW Player version 5 SVN 764, Legacy GNU Player in the next release, bugs and known issue on the JW Player can be checked here: http://developer.longtailvideo.com/trac/report/
* New! Captions capable player, now you can add text captions to your videos, information on how to make your captions.xml available soon on the plug-in page.
* New! URL Sharing option - Use "share=true" and the URL is Generated automatically.
* New! Embed option - Use "embed=true" and the embed code is Generated automatically AND it is persistent in other sites that use you’re embed code, IMPORTANT In order to share your video player you need to place the included file crossdomain.xml in your domain root directory, more information at: http://kb2.adobe.com/cps/142/tn_14213.html
* Added French translation by Stéphane Benoit, because this is a major release some parts can be not well translated but will be updated.
* Pseudo-streaming now optional, you can choose you can choose whether or not to use the streaming by selecting other provider. 
* Pseudo streaming script can be placed on other domains.
* Update on streamer.php to show URL errors and hide PHP warnings.
* New! YouTube and other formats supported. Now you can load many other media using the "provider" parameter in the stream tag, the current supported media is the same supported by JW Player, "video" for progressively downloaded FLV / MP4 video, but also AAC audio, "sound" for progressively downloaded MP3 files, "image" for JPG/GIF/PNG images, "youtube" for videos from Youtube, "http" for FLV/MP4 videos played as http pseudo-streaming, "rtmp" for FLV/MP4/MP3 files played from an RTMP server.
* Fix in embed code, "wmode" param set to "opaque" by default to prevent HTML overlapping.
* COMING SOON: Server side encoding, Media Library Integration and a Multi-Platform Desktop Graphic Application to encode and upload your videos directly to your WordPress blog.
* IMPORTANT NOTE: After several tests I have decided to use FLVMeta as the metadata injection utility for FLV Videos, is extremely faster, very very very low footprint on CPU and RAM and of course, can handle very large videos, can inject the “with” and “height” and is multi-platform, download at http://code.google.com/p/flvmeta/ (BinKit release coming soon: http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux ).

= 0.7.9 = 
* Fix in the option "Show player only on single pages" to work on single posts AND pages

= 0.7.8 = 
* Added the option to choose to show the player only on single pages, this is because "the_excerpt" function strips the HTML from the player.
* Added the "ru_Ru" translation file thanks to [Fat Cow](http://fatcow.com).
* A huge fix to the way the language loads in the settings page

= 0.7.7 = 
* A time position tooltip (balloontip) added to the player.
* Now you can click on the bar to go to any place in the video, TAKE NOTE: The stream goes to the closest key frame to the place you clicked, NOT the exactly place where you clicked.
* A Bug in the way the plug-in include the SWFObject fixed (thanks to Korin Unka advice).
* A bug generated in v0.7.6 with the title fixed (thanks to Bastiaan Bergman advice).
* The conditional comments issue revisited, if you have problems with those, use PHP5 (thanks to Walter suggestion).
* The HD button now enables or disables the HD option AND you can see which option is with the button transparency (thanks to Bastiaan Bergman suggestion).


= 0.7.6 = 
* Now the video shows not only in single pages, as requested.
* Fixed the HD button initialization, so you can check the FLA and change your skin in Flash.
* An issue with the skins URL fixed.
* An issue with the logo options fixed.


= 0.7.5 = 
* Fix to de wmode in the Flash Embed.
* Changes to prepare the EMBED option.
* Adding the crossdomain.xml to prepare for the EMBED option.


== Screenshots ==

1. Stream Video Player GUI.
2. Tag Generator Button.
3. Tag Generator Panel.
4. Plugin Settings.
