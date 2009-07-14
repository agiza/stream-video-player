=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://www.rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.2.2
Tested up to: 2.8.1
Stable tag: trunk

Stream Video Player for WordPress it's one stop solution for high quality video publishing for web or iPhone.

== Description ==

The Stream Video Plugin for WordPress allows the addition of PHP Pseudo Stream Flash Video to a WordPress website using and web standards-compliant markup with the leading open source software (Geoff Stearns' SWFObject Javascript Library). it's WPTouch, MobilePress and iPhone compatible and has a full options menu for customization. Installation is quick and easy, and no additional setup/coding/php knowledge is required. uninstalling cleanly. full support for skinning the player (fla files will be included on future version).

Important Links:

* <a href="http://www.rodrigopolo.com/about/wp-stream-video" title="Demonstration page">Demonstration</a>
* <a href="http://www.rodrigopolo.com/about/wp-stream-video/faq" title="NextGEN Gallery FAQ">Stream Video Player FAQ</a>

= Features =

* This player uses PHP Pseudo streaming so you can access random to any place on the video.
* I made every component of this player, so the source code of the Flash file will be available in the mean time (First I need to clean up the code a little).
* The player is made thinking about customization, so it has already a full skin capability, and you can make your own skin very easily with the Flash IDE.
* I'm currently working on the documentation and FAQ so you will have a full guide for coding high quality videos with very low bitrates.
* I use only open source free (gratis) and multi-platform software for the encoding, so doesn't matter if you have Windows, Linux or Macintosh, you will be enable to encode your videos.
* The actual version of the player is iPhone capable, MobilePress and WPTouch compatible, so you don't have to worry about it, It has also support to output the right content on feeds depending on your configuration.

== Credits ==

Copyright 2007-2009 by RodrigoPolo.com

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

* [Flash Player Download Site (Current Version)](http://www.rodrigopolo.com/about/wp-stream-video)
* [Flash Player Frequently Asked Questions (F.A.Q.)](http://www.rodrigopolo.com/about/wp-stream-video/faq)
* [Flash Player Complete Options](http://www.rodrigopolo.com/about/wp-stream-video/options)

== Screenshots ==

1. Tag generator button
2. Tag generator panel
3. Settings


