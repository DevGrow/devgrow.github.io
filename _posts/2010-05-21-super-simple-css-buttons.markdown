---
author: Monji Dolon
comments: true
date: 2010-05-21 23:47:28+00:00
layout: post
slug: super-simple-css-buttons
title: Super Simple CSS Buttons
wordpress_id: 1080
categories:
- Tutorials
tags:
- buttons
- css
- design
- html
- simple css
- web design
---

While playing around with a few button designs for my latest project, I came up with a simple CSS-only button system that is both lightweight and compatible with nearly all major browsers.  Check it out and let me know what you think!

## Download

The zip file below contains the CSS and HTML to create all of the elements in the above example, as well as the image file used.

<div class="download">
  <a href="http://demos.devgrow.com/cssbuttons/cssbuttons.zip" class="primary">Download</a>
  <a href="http://demos.devgrow.com/cssbuttons/" class="secondary">Preview</a>
</div>


## The HTML

I wanted to keep it dead simple to use, enough so that a single class could be added to any element to create a button.  The HTML I used in the example is as follows:

{% highlight html linenos=table %}
<a href='http://google.com/' class='button'>Google</a>
<a href='http://bing.com/' class='button red'>Bing</a>
<a href='http://devgrow.com/' class='button large green'>DevGrow</a>
{% endhighlight %}


## The CSS

In order to add a subtle gradient effect, I decided to use a single [image file](http://demos.devgrow.com/cssbuttons/button.png).  If you really want, you can leave that out and the buttons should still work fine.  To give you an idea of how it can be customized, I created styles for 7 additional colors and 3 different sizes.

{% highlight css linenos=table %}
.button {
	padding: 5px 10px;
	display: inline;
	background: #777 url(button.png) repeat-x bottom;
	border: none;
	color: #fff;
	cursor: pointer;
	font-weight: bold;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px #666;
	}
.button:hover {
	background-position: 0 -48px;
	}
.button:active {
	background-position: 0 top;
	position: relative;
	top: 1px;
	padding: 6px 10px 4px;
	}
.button.red { background-color: #e50000; }
.button.purple { background-color: #9400bf; }
.button.green { background-color: #58aa00; }
.button.orange { background-color: #ff9c00; }
.button.blue { background-color: #2c6da0; }
.button.black { background-color: #333; }
.button.white { background-color: #fff; color: #000; text-shadow: 1px 1px #fff; }
.button.small { font-size: 75%; padding: 3px 7px; }
.button.small:hover { background-position: 0 -50px; }
.button.small:active { padding: 4px 7px 2px; background-position: 0 top; }
.button.large { font-size: 125%; padding: 7px 12px; }
.button.large:hover { background-position: 0 -35px; }
.button.large:active { padding: 8px 12px 6px; background-position: 0 top; }
{% endhighlight %}

The CSS is pretty self-explanatory, however an interesting point is that I change the padding in the active state (_.button:active_) while shifting the element up by 1 pixel - this creates a pseudo-3D effect of physically pushing down on it.


## Compatibility and Final Remarks

While the buttons themselves do work on all major browsers (FF, Safari, Opera, Chrome, IE7+), certain effects may not be available on all browsers.  For instance, IE and Opera will not render rounded corners.

Play with it and let me know what you guys think!  I'm sure most of you designers already have your own button code - if you'd like to share it, please post it in the comments (directly or as a link) so the other readers can check it out!

Also, if you haven't already, please consider [subscribing to the RSS feed](http://feeds.feedburner.com/devgrow) or [following us on Twitter](http://twitter.com/ThinkDevGrow).