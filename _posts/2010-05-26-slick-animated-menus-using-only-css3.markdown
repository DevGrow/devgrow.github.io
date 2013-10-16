---
author: mdolon
comments: true
date: 2010-05-26 18:30:27+00:00
layout: post
slug: slick-animated-menus-using-only-css3
title: Slick Animated Menus Using Only CSS3
wordpress_id: 1109
categories:
- Tutorials
tags:
- animations
- css3
- design
- transitions
- web design
---

I'm always looking for ways to create neat looking effects with minimal code, so today we'll take a look at a couple of slick  animated menus made with CSS3 goodness.  I was inspired by the menu system on [Mashable](http://www.mashable.com/) for the first example, while the second one is popular on many [tutorial](http://tutorialzine.com/2009/09/stylish-navigation-menu-jquery/) [sites](http://www.jqueryglobe.com/article/animated-menu) (they use JQuery though).


## Download


The zip file below contains the CSS and HTML to create all of the elements in the above example, as well as the image file used.

<div class="download">
  <a href="http://demos.devgrow.com/slickmenus/slickmenus.zip" class="button primary">Download</a>
  <a href="http://demos.devgrow.com/slickmenus/" class="button secondary">Preview</a>
</div>


## Example 1


This is probably the more practical example, as it uses the standard/conventional menu markup that you are probably already using.  Applying it only requires adding the necessary class to your UL/OL element.

{% highlight html linenos=table %}
<ul class="nav">
  <li class="selected"><a href="/">Home</a></li>
  <li><a href="/">About Us</a></li>
  <li><a href="/">Portfolio</a></li>
  <li><a href="/">Services</a></li>
</ul>
{% endhighlight %}

The CSS for Example 1 is as follows:

{% highlight css linenos=table %}
.nav { list-style: none; }
.nav li { float: left; }
.nav a {
	position: relative;
	display: block;
	padding: 4px 8px;
	border-bottom: 2px solid #ccc;
	background: #f4f4f4;
	color: #999;
	-webkit-transition: all 200ms ease-out;
	-moz-transition: all 200ms ease-out;
	-o-transition: all 200ms ease-out;
	transition: all 200ms ease-out;
	}
.nav a:hover {
	color: #000;
	background: #fff;
	border-color: #000;
	padding: 8px;
	top: -4px;
	}
.nav .selected a, .nav .selected a:hover {
	background: #444;
	color: #fff;
	border-color: #000;
	}
{% endhighlight %}

The code is pretty self-explanatory but the key part to make note of are the **transition** properties applied to the _.nav a_ selector - they produce the animation effect on CSS3 compatible browsers.  The first value is which effect the transition animation should apply to and in our example, it's set to all (which will animate any and all changes possible).  The second is the duration of the animation, which in this case is 200 milliseconds.  The third is whether you want the animation to _ease-in_, _ease-out_ or a combination of both - _ease-in-out_. Feel free to play with these settings as well as the actual changes in the element, including padding, border widths, height, etc. to get a feel of how the transition property works.


## Example 2

While this animation arguably looks cooler, it requires a bit more effort when we're not using Javascript.  Here is the HTML for example 2:

{% highlight html linenos=table %}
<ul class="nav2">
  <li><a href="/"><strong>Home</strong><em>Home</em></a></li>
  <li><a href="/"><strong>About Us</strong><em>About Us</em></a></li>
  <li><a href="/"><strong>Portfolio</strong><em>Portfolio</em></a></li>
  <li><a href="/"><strong>Services</strong><em>Services</em></a></li>
</ul>
{% endhighlight %}

The way it works is that two blocks are created, the first being the text in the **strong** element and the second being the **em** element.  The elements are stacked on top of each other with only one being visible at any given time (the other is hidden as the parent element has a fixed height and overflow set to hidden).  The transition property is applied to both objects and on mouseover, both objects shift up, producing the desired effect.

The CSS for Example 2:

{% highlight css linenos=table %}
.nav2 { list-style: none; }
.nav2 li { float: left; position: relative; }
.nav2 a {
	display: block;
	float: left;
	border: none;
	position: relative;
	height: 22px;
	overflow: hidden;
	}
.nav2 a strong, .nav2 a em {
	cursor: pointer;
	padding: 4px 8px;
	font-weight: bold;
	font-style: normal;
	display: block;
	-webkit-transition: all 200ms ease-out;
	-moz-transition: all 200ms ease-out;
	-o-transition: all 200ms ease-out;
	transition: all 200ms ease-out;
	}
.nav2 a strong {
	position: relative;
	top: 0;
	left: 0;
	color: #000;
	background: #fff;
	}
.nav2 em {
	position: absolute;
	top: 100%;
	background: #000;
	color: #fff;
	}
.nav2 a:hover strong {
	top: -100%;
	}
.nav2 a:hover em {
	top: 0;
	}
{% endhighlight %}


## Browser Compatibility

The examples only work on browsers that support the CSS3 transition property, which right now include Safari, Chrome and Firefox 3.7.  I believe the latest build of Opera should support it as well, though I haven't tested it yet.  For all other browsers, they will degrade to standard CSS rollovers.


## Final Remarks

This tutorial is meant to be more instructional than practical.  If I were attempting to produce the effect from the second example in the real world, chances are I would probably use JQuery to do it.  If you have any feedback on this technique, please leave a comment!

And as usual, please [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) if you haven't yet and [follow us on Twitter](http://twitter.com/ThinkDevGrow)!