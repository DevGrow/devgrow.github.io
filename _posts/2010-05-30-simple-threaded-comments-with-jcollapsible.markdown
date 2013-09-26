---
author: Monji Dolon
comments: true
date: 2010-05-30 20:27:25+00:00
layout: post
slug: simple-threaded-comments-with-jcollapsible
title: Simple Threaded Comments with jCollapsible (new jQuery Plugin)
wordpress_id: 1127
categories:
- Resources
- Tutorials
tags:
- collapsible
- jquery
- plugins
- programming
- threaded
---

**jCollapisble** is a JQuery plugin that takes any nested list (OL or UL that have children) and coverts it into collapsible threads.  This is especially useful to create simple threaded comments on a blog or forum without having to modify the backend code.  I've tried to keep the plugin as simple and bare-bones as possible, so right now there are no fancy slide or fade effects.  The only thing required is the plugin JS file itself - CSS and images are completely optional.
The plugin has been tested (and works fine) on Firefox 3, Chrome 5, IE7+, Safari 4 and Opera 10.  It should work on older browsers too though the CSS may need to be fiddled with.



## Example


This page actually has the plugin enabled - you can see it in action on the following list or in the [comments section](http://devgrow.com/simple-threaded-comments-with-jcollapsible/#comments)!




  * Test Parent


    * Test Child


    * Test Child 2



  * Test Parent 2 (childless)


  * Test Parent 3


    * Test Child


      * Child Level 3





    * Test Child 2






## Download


You can download the [full source](http://devgrow.com/plugins/jcollapsible/jCollapsible.js), [minified version](http://devgrow.com/plugins/jcollapsible/jCollapsible.min.js)  or [view the example online](http://devgrow.com/plugins/jcollapsible).
[jCollapsible Plugin (zip)](http://devgrow.com/plugins/jcollapsible/jcollapsible.zip)[View Demo](http://devgrow.com/plugins/jcollapsible)



## Usage Instructions


SliderNav is super easy to use, but first you have to load JQuery, the plugin and the relevant CSS file in order to use it:
[cc lang="javascript"]



[/cc]
Simple enough - just include JQuery (1.3.2 and up), the jCollapsible file and then call the function with your settings.


## Customize the Icon or Use Images Instead


While I did try to keep the plugin lightweight, I also wanted to make it somewhat extensible by adding a few different options, including:




  * **defaulthide** - hide all children by default (default: true)


  * **symbolhide** - symbol to hide child elements (default: -)


  * **symbolshow** - symbol to show child elements (default: +)


  * **imagehide** - image to hide child elements (default: null)


  * **imageshow** - image to show child elements (default: null)


  * **xoffset** - amount pixels to move symbol/image horizontally (default: -15)


  * **yoffset** - amount pixels to move symbol/image vertically (default: 0)


Please note that the image values are null by default (using symbol instead) and the offset values are there to fine-tune the location of the image/symbol.


## The Code


For those who are curious, here is the source for the code:
[cc lang="javascript"]
$.fn.collapsible = function(options) {
	var defaults = {defaulthide: true, symbolhide: '-', symbolshow: '+', imagehide: null, imageshow: null, xoffset: '-15', yoffset: '0'};
	var opts = $.extend(defaults, options); var o = $.meta ? $.extend({}, opts, $$.data()) : opts; var obj = $(this);
	if(o.imageshow) o.symbolshow = '![]('+o.imageshow+')';
	if(o.imagehide) o.symbolhide = '![]('+o.imagehide+')';
	var startsymbol = o.symbolshow;
	$('li', obj).each(function(index) {
		if($('>ul, >ol',this).size() > 0){
			if(o.defaulthide) $('>ul, >ol',this).hide(); else startsymbol = o.symbolhide;
			$(this).prepend('['+startsymbol+']()').css('position','relative');
		}
	});
	$('.jcollapsible', obj).click(function(){
		var parent = $(this).parent();
		$('>ul, >ol',parent).toggle();
		$(this).html($(this).html() == o.symbolshow ? o.symbolhide : o.symbolshow);
		return false;
	});
};
[/cc]
I wasn't exaggerating when I said this plugin was simple!  It first few lines initialize the plugin/function and set the default values.  The [cci]each[/cci] function creates the actual expand/collapse icons and the last function ([cci]click[/cci]) just toggles the child elements.


## Final Thoughts


This plugin actually comes from a function I wrote for one of my personal projects, I just thought some of you guys may find it useful so I've wrapped it up as a plugin.  If you do use it (or like it), please leave some feedback, good or bad - it's highly appreciated and helps me produce better work.

As always, [subscribe to the feed](http://feeds.feedburner.com/devgrow) if you haven't and [follow me on Twitter](http://twitter.com/thinkdevgrow)!
