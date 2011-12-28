=== Stream Video Player ===
Contributors: Rodrigo Polo
Donate link: http://rodrigopolo.com/about/wp-stream-video/donate
Tags: stream, video, flv, mp4, flash, swf, iphone, player, wordpress, plugin, media
Requires at least: 2.8.0
Tested up to: 3.2.1
Stable tag: 1.3.4

Stream Video Player for WordPress its one stop solution for high quality video publishing for web or iPhone.

== Description ==

Stream Video Player for WordPress is by far the best and most complete video-audio player plug-in for WordPress with XML Playlist support and subtitles, Easy to use with a tag generator in the editor, support for viewing on the iPad, iPhone and iPod touch, support for YouTube and Pseudo-Streaming so you can randomly seek any place of your videos without having to load the entire video before.

=Special note=

Because many many users ask for more capabilities I decided to use (instead of the original swf video player I made) a custom build of the JW Player which uses license CC-NC-SA 3.0 which is a non-GPL compatible license and because that It can't be included on the WordPress directory.

From version 1.3.1 the player.swf and all the swf files are being removed and loaded externally from other server to comply with the requirements WordPress directory asks.

If you want to download a full version with all files included and without dependency on any other sites but yours the version 1.3.3 cand do this and is available on my site:

[http://rodrigopolo.com/about/wp-stream-video](http://rodrigopolo.com/about/wp-stream-video)

I'll look forward on how to finally solve this crazy issue and have a better solution for everyone in the meantime, sorry for the inconvenience but you know closed minded GPL guys are.

= Translators =
* Afrikaans (af_AF) - [Schalk Burger](http://schalkburger.za.net)
* Brazilian Portuguese (pt_BR) - [Caciano Gabriel](http://gn10.com.br)
* Chinese, Traditional (zh_TW) - [James Wu](http://jameswublog.com)
* Danish (da_DK) - [GeorgWP](http://wordpress.blogos.dk)
* Dutch (nl_NL) - [Martin Hein](http://split-a-pixel.nl)
* French (fr_FR) - [Maître Mô](http://maitremo.fr), [Stéphane Benoit](http://caracteremultimedia.com)
* Georgian (ka_GE) - [Nodar Rocko Davituri](http://omedia.ge)
* German (de_DE) - Michael Helfberend
* Hebrew (he_IL) - [Yaron Ofer - GadgetGuru.co.il](http://gadgetguru.co.il)
* Italian (it_IT) - [Bruno Salzano](http://brunosalzano.com)
* Lithuanian (lt_LT) - [Ernestas Kardzys](http://ernestas.info)
* Polish (pl_PL) - [Zbigniew Czernik](http://zibik.jogger.pl)
* Russian (ru_RU) - [Andrey K.](http://andrey.eto-ya.com), Roman Kireev
* Spanish (es_ES) - [Jordi Sancho](http://qasolutions.net)
* Spanish (es_MX) - [Rodrigo Polo](http://rodrigopolo.com)
* Turkish (tr_TR) - [Emin Buğra SARAL](http://www.rahmetli.info)
* Ukrainian (uk_UA) - [Andrey K.](http://andrey.eto-ya.com)
* Portuguese (pt_PT) - [PedroDM](http://development.mowster.net)


Important Links:

* <a href="http://rodrigopolo.com/about/wp-stream-video" title="Demonstration and Info">Demonstration and info.</a>
* <a href="http://rodrigopolo.com/about/wp-stream-video/faq" title="Stream Video Player FAQ">FAQ</a>
* <a href="http://rodrigopolo.com/about/wp-stream-video/how-to" title="Full guide on how to use the plug-in and encode video">How to use the plug-in and encode video</a>
* <a href="http://rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux" title="Video Encoder Installer">Video Encoder for Mac, Win, Linux</a>
* <a href="http://rodrigopolo.com/about/wp-stream-video/known-issues-and-to-do-list" title="Known issues and To-do list">Known issues and To-do list</a>

= Features =
* iPad, iPhone, iPod Touch, WPTouch, MobilePress, YouTube and feeds compatible.
* Embed code generator for any video.
* Captions (subtitles) capable.
* XML Playlist.
* Social sharing and video URL sharing.
* Random access to any position on the video thanks to the pseudo streaming technique
* Skins capable thanks to JW Media Player it can load SWF and XML-PNG custom skins.
* Based on a very fine tuned custom build (fork) of the JW Media Player Version 5.3.
* Only open source software needed for video encoding.
* JW Media Player plug-ins supported.
* 100% Standard XHTML code.


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
4. That's it! You're done. You can now generate the "stream video tag" by using the quick tag generator from the post editor.
5. RECOMMENDED, copy the included "crossdomain.xml" to your site root (http://example.com/crossdomain.xml) in order to share video in other sites.

== Frequently Asked Questions ==

= What's new in the latest version? =
* NEW! Playlist support out of the box.
* NEW! Possibility to use a custom config.xml with all JW Player options so you can have a shorter embed code.
* UPDATE! JW Player (player.swf) updated to 5.3.1397 version, custom build.
* Better look with custom design.
* Display HH:MM:SS on time instead of MMM:SS
* Load local plug-ins first, if not found then load the JW Player repository plug-ins.
* Can load any JW Player Plug-in.
* Fixed bug to handle well anamorphic video on streaming and on video mode.
* Fixed bug to handle playlist thumbnails.
* Fixed bug to handle playlist next item when using pseudo-streaming.
* Can load custom logo (original JW Player version can't).
* Custom Sharing Plug-in build to handle "self-share" always, modified design.
* Custom HD Plug-in build to fit the players design.
* Custom Captions Plug-in build to have the margin flashvar param.
* FIX! Character encoding on media library.


= Where I can get help and support? =
* [READ How to use the plug-in and encode video](http://rodrigopolo.com/about/wp-stream-video/how-to)
* [CHECK the Frequently Asked Questions (F.A.Q.)](http://rodrigopolo.com/about/wp-stream-video/faq)
* [ASK in the Official Forum](http://rodrigopolo.com/support/forum/stream-video-player)


== Changelog ==  

= 1.3.4 =
* URL for the player.swf changet from rod.gs to rodrigopolo.com because [Google malware detection sucks](http://rodrigopolo.com/opinion/rod-gs-its-100-malware-free-but-google-didnt-care.html). but it is extremly recomended you use the stand alone version available on [http://rodrigopolo.com/about/wp-stream-video](http://rodrigopolo.com/about/wp-stream-video).

= 1.3.2 =
* UPDATE! link to JW Player (player.swf) updated from 5.3.1397 version to 5.7.1896 custom build. but recomended to download the standalone version 1.3.3 from my site.

= 1.3.1 =
* BAD! Removed SWF included files to comply with the GLP rules of WordPress directory. [You can still use the full version 1.3.0 downloading it from my site](http://rodrigopolo.com/about/wp-stream-video)

= 1.3.0 =
* NEW! Playlist support out of the box.
* NEW! Possibility to use a custom config.xml with all JW Player options so you can have a shorter embed code.
* NEW! Skins for the player.
* UPDATE! JW Player (player.swf) updated to 5.3.1397 version, custom build.
* Better look with custom design.
* Display HH:MM:SS on time instead of MMM:SS
* Load local plug-ins first, if not found then load the JW Player repository plug-ins.
* Can load any JW Player Plug-in.
* Fixed bug to handle well anamorphic video on streaming and on video mode.
* Fixed bug to handle playlist thumbnails.
* Fixed bug to handle playlist next item when using pseudo-streaming.
* Can load custom logo (original JW Player version can't).
* Custom Sharing Plug-in build to handle "self-share" always, modified design.
* Custom HD Plug-in build to fit the players design.
* Custom Captions Plug-in build to have the margin flashvar param.
* FIX! Character encoding on media library.


= 1.2.1 =
* FIX! A WWW issue fixed Thanks to Stephen Marcus - marcus AT onearth DOT net
* FIX! Duplicated text removed, thanks to PedroDM
* NEW! Portuguese (pt_PT) and Danish (da_DK) added
* FIX! A "Security" fix thanks to [Julio from Boiteaweb.fr](http://www.boiteaweb.fr/)

= 1.2.0 =
* NEW! Compatibility with WordPress MU.
* NEW! The "ad code" is by default on the settings page.
* FIX! An issue with WWW and no WWW.
* FIX! An issue with YouTube image previews.
* SOON: I'm making some tools to encode video and translate SRT subtitles to XML subtitles, stay tuned to http://tools.rodrigopolo.com/

= 1.1.4 =
* Fix! The Media Library button was not working in some installations because different versions of ThickBox
* TESTED and working on WordPress 3.0-RC1-15112

= 1.1.3 =
* Fix! A copuple of fixes for users who are having issues with PHP Short Tags.
* More translations added

= 1.1.2 =
A fix to the QuickTag Generator, it's working great now, thanks again to Paul Landers.

= 1.1.1 =
As a typical major release there is always a chance to mess up the code, and on version 1.1.0 was made a little mistake that it's fixed on this release, many thanks to Paul Landers and Rick Maisano for reporting the bug.

* Fix! A general bug on the plug-in fixed.
* NEW! Turkish, Lithuanian, Georgian and Italian translations added, many thanks to the wonderful people who contribute to the translations.
* NEW! Now YouTube videos can be seen on mobile devices if the device supports YouTube video.

= 1.1.0 =
* NEW! Widget capable!
* NEW! Media Library integration, browse for your file instead of copy-paste URLs.
* NEW! YouTube videos get the image preview and provider automatically on the tag generator by just pasting the YouTube URL.
* Upgrade: Watching the video on any mobile device works better, showing the right video dimensions, better compatibility with WPTouch or MobilePress plug-ins.
* NEW! Detection of the crossdomain.xml on the tag generator.
* NEW! Automatic URL change to prevent issues using OR NOT using WWW in the URLs.
* Upgrade! A work around for "the_excerpt" to prevent bad markup issues.
* Upgrade! Better internationalization (i18n), so you can translate the plug-in on any language.
* Fix! FireFox dotted border around the video removed, [more about this issue.](http://code.google.com/p/swfobject/wiki/faq#15._Why_do_I_see_a_dotted_border_around_my_SWF_when_using_Firefo)
* Upgrade! A complete overhaul to the way the Tag Generator and the Media Library load WordPress dependencies, so no more issues with other plug-ins.
* Fix! Aspect Ratio work the way it is supposed to in the Player.swf for "video" or "stream" provider, another fix to the JW Player original code.
* Small fix to the tag generator to give support to the "adscode" attribute.

= 1.0.6 =
* Added support for iPad
* FIX: Tag generator issues with bad implementation of contact-form-7 fixed.

= 1.0.5 =
* Added the LongTail Ads plug-in

= 1.0.4 =
* Update: JW Player now can load the logo image and follow the URL.
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
* French and Spanish Translation updated, still waiting for someone from Russia to update the Russian translation.
* FIXED! wmode=opaque ONLY applied if the video tag include the parameter "opfix=true".
* Dotted frame in FireFox because the "wmode=opaque" removed with CSS, check http://rod.gs/dT for more information.
* Updated! The order of the field in the tag generator are more easy to use now.

= 1.0.1 =
* Minor problem with streamer.php fixed.

= 1.0.0 = 
* Now using a very custom and fine-tuned build of the JW Player version 5 SVN 764, Legacy GNU Player in the next release, bugs and known issue on the JW Player can be checked here: http://developer.longtailvideo.com/trac/report/
* New! Captions capable player, now you can add text captions to your videos, information on how to make your captions.xml available soon on the plug-in page.
* New! URL Sharing option - Use "share=true" and the URL is Generated automatically.
* New! Embed option - Use "embed=true" and the embed code is Generated automatically AND it is persistent in other sites that use you're embed code, IMPORTANT In order to share your video player you need to place the included file crossdomain.xml in your domain root directory, more information at: http://kb2.adobe.com/cps/142/tn_14213.html
* Added French translation by Stéphane Benoit, because this is a major release some parts can be not well translated but will be updated.
* Pseudo-streaming now optional, you can choose you can choose whether or not to use the streaming by selecting other provider. 
* Pseudo streaming script can be placed on other domains.
* Update on streamer.php to show URL errors and hide PHP warnings.
* New! YouTube and other formats supported. Now you can load many other media using the "provider" parameter in the stream tag, the current supported media is the same supported by JW Player, "video" for progressively downloaded FLV / MP4 video, but also AAC audio, "sound" for progressively downloaded MP3 files, "image" for JPG/GIF/PNG images, "youtube" for videos from Youtube, "http" for FLV/MP4 videos played as http pseudo-streaming, "rtmp" for FLV/MP4/MP3 files played from an RTMP server.
* Fix in embed code, "wmode" param set to "opaque" by default to prevent HTML overlapping.
* COMING SOON: Server side encoding, Media Library Integration and a Multi-Platform Desktop Graphic Application to encode and upload your videos directly to your WordPress blog.
* IMPORTANT NOTE: After several tests I have decided to use FLVMeta as the metadata injection utility for FLV Videos, is extremely faster, very very very low footprint on CPU and RAM and of course, can handle very large videos, can inject the "with" and "height" and is multi-platform, download at http://code.google.com/p/flvmeta/ (BinKit release coming soon: http://rodrigopolo.com/about/wp-stream-video/ffmpeg-binary-installers-for-win-mac-and-linux ).


== Upgrade Notice ==

= 1.3.4 =
* URL for the player.swf changet from rod.gs to rodrigopolo.com because [Google malware detection sucks](http://rodrigopolo.com/opinion/rod-gs-its-100-malware-free-but-google-didnt-care.html). but it is extremly recomended you use the stand alone version available on [http://rodrigopolo.com/about/wp-stream-video](http://rodrigopolo.com/about/wp-stream-video).

= 1.3.2 =
* UPDATE! link to JW Player (player.swf) updated from 5.3.1397 version to 5.7.1896 custom build. but recomended to download the standalone version 1.3.3 from my site.

= 1.3.0 =
New JW Player version fixing many bugs, XML Playlist support with options in the tag generator, custom config.xml file support, some bugs fixed.

TESTED and working on WordPress 3.2.1!


== Screenshots ==

1. Stream Video Player Default Skin.
2. Tag Generator Button on Editor.
3. Tag Generator Panel showing a warning.
4. Media Library File Selection.
5. Stream Video Player Widget.
6. Plug-in Settings.
7. Stream Video Player Using Playlists.
8. Player on iPhone using WPtouch.
9. Player on iPhone using MobilePress with YouTube Video.
