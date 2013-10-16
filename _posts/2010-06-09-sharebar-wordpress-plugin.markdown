---
author: mdolon
comments: false
date: 2010-06-09 20:50:14+00:00
layout: post
slug: sharebar-wordpress-plugin
title: Sharebar WordPress Plugin
wordpress_id: 1167
categories:
- Freebies
- Resources
tags:
- plugins
- sharebar
- WordPress
---

My first ever WordPress plugin!  **Sharebar** adds a dynamic and fully customizable vertical box to the left of a blog post that contains links/buttons to popular social networking sites.  For wide blogs, a vertical bar with popular sharing icons appears on the left of your post.  If the page is resized, the vertical bar disappears and a horizontal sharebar appears under the post title.

This Sharebar isn't a new idea at all, in fact the plugin is meant to mimic [Mashable's bar](http://mashable.com/2010/06/08/feather-report/) almost exactly.  I most recently saw the effect on [Inc. Magazine](http://www.inc.com/) and after trying to find a plugin for it without success, I decided to make one myself.  As with all of my plugins, I tried to keep things simple but customizable, so some effects were sacrificed for performance gains.


## Download

You can view the [plugin details](http://wordpress.org/extend/plugins/sharebar/) at [WordPress.org](http://www.wordpress.org/).

<div class="download">
  <a href="http://wordpress.org/extend/plugins/sharebar/" class="button primary">Download</a>
</div>


## Usage Instructions

WordPress makes the process pretty painless: download the plugin, upload it to your plugins directory and activate it in the WordPress admin panel.  The plugin is enabled automatically when you activate it so that's really all there is to it.


## Settings and Customization

You can change nearly everything about the plugin from the Sharebar settings page (in the WordPress admin under Settings).  The main page displays all of the active plugins - from here you can change their order, edit the button code or delete them.  You can also add new buttons or reset them to the default configuration, which features TweetMeme, Facebook, Google Buzz, Digg and a standard e-mail button.

![](http://devgrow.s3.amazonaws.com/assets/images/settings1.png)

The Settings page allows you to disable the plugin from automatically adding the sharebars - this is useful if you'd like to position them somewhere other than before the post content.  You might need to do this if your template or theme uses the overflow CSS position, as that may sometimes prevent the Sharebar from being visible outside of it's container element.  You can also disable the horizontal share bar that appears beneath the post title, change the location of the main vertical Sharebar (left or right) or adjust the offset/margin of the Sharebar element.

![](http://devgrow.s3.amazonaws.com/assets/images/settings2.png)

Lastly, you can also change the way the Sharebar element itself looks by modifying the CSS file found in the plugin folder.  The design of the bar is meant to generic, feel free to customize it to fit your needs.


## Compatability

I've tested the plugin on Firefox 3, IE7, Safari, Chrome and Opera - it seems to work fine in all of them.  How it looks on your blog can depend on your theme and CSS files, however, so check those files first to identify the problem (the overflow:hidden; CSS declaration can hide the bar at times).


## Final Remarks

Since this is my first WordPress plugin, please let me know what you think and if it's useful to you.  I'd love to hear suggestions on how to improve it.  This is my first public foray into WordPress development but I've also been making a lot of progress on my custom themes framework, I think a lot of you will like them once they're released as well.  Also, all of the files are on Github, so feel free to fork away!

As always, please [subscribe to RSS feed](http://feeds.feedburner.com/devgrow) or [follow me on Twitter](http://twitter.com/ThinkDevGrow) for more posts and goodies like this.