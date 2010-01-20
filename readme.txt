=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://www.rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.2.2
Tested up to: 2.9.1
Stable tag: 1.0.5

Stream Video Player for WordPress its one stop solution for high quality video publishing for web or iPhone.

== Description ==

Stream Video Player for WordPress is by far the best and most complete video-audio player plug-in for WordPress, Easy to use with a tag generator in the editor, support for viewing on the iPhone and iPod touch, support for YouTube and Pseudo-Streaming so you can randomly seek any place of your videos without having to load the entire video before.

Important Links:

* <a href="http://www.rodrigopolo.com/about/wp-stream-video" title="Demonstration and Info">Demonstration and info.</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/how-to" title="Full guide on how to use the plug-in and encode video">How to use the plug-in and encode video</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux" title="Video Encoder Installer">Video Encoder for Mac, Win, Linux</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/known-issues-and-to-do-list" title="Known issues and To-do list">Known issues and To-do list</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/faq" title="Stream Video Player FAQ">FAQ</a>

= Features =
* Embed code generator for any video.
* Captions (subtitles) capable.
* Social sharing and video URL sharing.
* Random access to any position on the video thanks to the pseudo streaming technique
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
* Added the LongTail Ads plug-in
* Update: JW Player now can load the logo image and follow the URL, BUT YOU HAVE TO BUY THE LICENSE for that.
* Fix: A small fix to the tag edition to handle spaces and YouTube links.
* Known issue: Video "Title" Currently not implemented by the JW Player: [Check the supported Flash Vars](http://developer.longtailvideo.com/trac/wiki/Player5FlashVars)

= Where I can get help and support? =
* [You can contact me on my website](http://www.rodrigopolo.com/contact)
* [Or you can follow me on Twitter](http://twitter.com/rodrigopolo)
* [How to use the plug-in and encode video](http://www.rodrigopolo.com/about/wp-stream-video/how-to)
* [Stream Video Player information](http://www.rodrigopolo.com/about/wp-stream-video)
* [Stream Video Player Frequently Asked Questions (F.A.Q.)](http://www.rodrigopolo.com/about/wp-stream-video/faq)
* [FFmpeg Video Encoder Installs](http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux)


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


= To-Do =
* File navigator to select your videos from your WordPres upload directory
* Make the video tag accept line breaks to improve readability

== Changelog ==  

= 1.0.5 =
* Added the LongTail Ads plug-in

= 1.0.4 =
* Update: JW Player now can load the logo image and follow the URL, BUT YOU HAVE TO BUY THE LICENSE for that.
* Fix: A small fix to the tag edition to handle spaces and YouTube links.
* Known issue: Video "Title" Currently not implemented by the JW Player: [Check the supported Flash Vars](http://developer.longtailvideo.com/trac/wiki/Player5FlashVars)

= 1.0.3 =
* NEW! Now you can edit your video tags by selecting them and pressing the "tag generator" button.
* Fix! There was some problem with the "contact-form-7" plug-in that runs an undefined PHP function called "wpcf7_add_tag_generator", temporally fixed.

= 1.0.2 =
* NEW! Added the "base" URL parameter into the video tag to save writing over and over again the full URL for the tags flv, img, mp4, hd and captions.
* FIXED! HD, Share and Captions Plug-Ins included.
* Lulu.zip and Stormtrooper.zip skins uncluded.
* Fix: YouTube Video working.
* French and Spanish Translation updated, still wating for some one from Russia tu update the russian translation.
* FIXED! wmode=opque ONLY applied if the video tag include the parameter "opfix=true".
* Dotted frame in FireFox because the "wmode=opaque" removed with CSS, check http://rod.gs/dT for more information.
* Updated! The order of the field in the tag generater are more easy to use now.

= 1.0.1 =
* Minor problem with streamer.php fixed.

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
* IMPORTANT NOTE: After several tests I have decided to use FLVMeta as the metadata injection utility for FLV Videos, is extremely faster, very very very low footprint on CPU and RAM and of course, can handle very large videos, can inject the "with" and "height" and is multi-platform, download at http://code.google.com/p/flvmeta/ (BinKit release coming soon: http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux ).

= 0.7.9 = 
* Fix in the option "Show player only on single pages" to work on single posts AND pages

= 0.7.8 = 
* Added the option to choose to show the player only on single pages, this is because "the_excerpt" function strips the HTML from the player.
* Added the "ru_Ru" translation file thanks to [Fat Cow](http://fatcow.com).
* A huge fix to the way the language loads in the settings page

== Upgrade Notice ==
* There was some problem with the "contact-form-7" plug-in that runs an undefined PHP function called "wpcf7_add_tag_generator", temporally fixed.
* Now you can edit your video tags by selecting them and pressing the "tag generator" button.
As you can see in the "Changelog" section for version 1.0.0 and 1.0.2, there is a lot of new futures, Now the plug-in is using a custom build of the JW Player and custom build of the HD, Captions and Share plug-ins for the JW Player that enables you a full modern player that can have captions (subtitles), persistent Embed code in other sites, URL Share and share with Twitter, Facebook and MySpace.


== Screenshots ==

1. Stream Video Player GUI.
2. Tag Generator Button.
3. Tag Generator Panel.
4. Plugin Settings.
