=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://www.rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.2.2
Tested up to: 2.8.1
Stable tag: 0.7

Stream Video Player for WordPress it's one stop solution for high quality video publishing for web or iPhone.

== Description ==

Stream Video Player for WordPress is the complete solution for video publishing on blogs, most public sites for video publishing have some limits on the video size or time, with this plug-in the only limit it’s your host capacity.

Important Links:

* <a href="http://www.rodrigopolo.com/about/wp-stream-video" title="Demonstration and Info">Demonstration and info. about encoding</a>
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

= I have activated the plugin, but don't see the video player. What do I do? =

Check and make sure that you have the appropriate hook in your template file for the header: '<?php wp_head(); ?>'

= I recieve video a red error message on the player. What can be wrong? =

Check and make sure that you are using absolute urls like "http://yourblog.com/yourvideo.flv" and not relative urls like "../video.flv"
AND BE CERTAIN to have all videos in your site and on the same domain

= I can't scroll (or scrub) the video. What can be wrong? =
In order to use the random access feature, your videos must be injected with flv metadata
You will need "Yamdi" for this, you can download and install it from here: http://yamdi.sourceforge.net/
Yamdi runs on Windows, Mac OS X and Linux and it's the faster free open source injection tool.

= How can I get help? =

* [Stream Video Player information](http://www.rodrigopolo.com/about/wp-stream-video)
* [Stream Video Player Frequently Asked Questions (F.A.Q.)](http://www.rodrigopolo.com/about/wp-stream-video/faq)
* [FFmpeg Video Encoder Installs](http://www.rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux)

= What's new in the latest version? =

* A little problem with the use of WWW on the FLV URL Fixed
* PHP Pseudo Streamer URL fixed
* Future options disabled to prevent confusion

== Screenshots ==

1. Tag generator button
2. Tag generator panel
3. Settings


