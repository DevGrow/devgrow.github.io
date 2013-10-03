---
author: Monji Dolon
comments: true
date: 2010-08-05 17:37:59+00:00
layout: post
slug: perfect-css3-buttons
title: Creating the Perfect CSS3 Buttons
wordpress_id: 1645
categories:
- Tutorials
tags:
- buttons
- css
- css buttons
- css3
- html
- Tutorials
---

The sweet looking buttons in this tutorial are created using only HTML and CSS3 - no JavaScript or images required!  The buttons are easy to make and are pretty extensible but don't take my word for it, check out the demo instead:

<iframe width="600" height="170" src="http://demos.devgrow.com/css3buttons/embed.html" style="border:none;" frameborder="0" marginheight="0" marginwidth="0" style="margin: 30px 0 0;"></iframe>

## Download

The zip file below contains the CSS and HTML to create all of the elements in the above example, as well as the image file used.

<div class="download top">
  <a href="http://demos.devgrow.com/css3buttons/css3buttons.zip" class="primary">Download</a>
  <a href="http://demos.devgrow.com/css3buttons/" class="secondary">Preview</a>
</div>

## The Code

To achieve the shadow and lighting effects we're going for, I'm using wrapping the actual link text in `<span>` tags.  Some might think this is tedious or extra work but in my opinion the results are worth the effort.  You could also just write 1 line of JQuery code to automatically add the `<span>` tags to your links, making life even easier.

##### HTML

{% highlight html linenos=table %}
<a href='#' class='button blue'><span>Blue</span></a>
{% endhighlight %}

The only things required are the button class and the span tag inside the anchor.  Change the color to whatever you set in the CSS or leave it blank to use the default color.

##### CSS

The CSS is a bit more intense - it makes use of several CSS3 properties including [box shadows](http://www.css3.info/preview/box-shadow/), [text shadows](http://www.css3.info/preview/text-shadow/) and [background gradients](http://css-tricks.com/css3-gradients/):

{% highlight css linenos=table %}
/* Overall Button Style */
.button {
	background: #777;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 1px 2px 1px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 1px 2px 1px rgba(0, 0, 0, 0.1);
	box-shadow: 1px 2px 1px rgba(0, 0, 0, 0.1);
	cursor: pointer;
	display: inline-block;
	overflow: hidden;
	padding: 1px;
	vertical-align: middle;
	}
.button span {
	border-top: 1px solid rgba(255, 255, 255, 0.25);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	color: #fff;
	display: block;
	font: bold 12px 'Arial', sans-serif;
	padding: 6px 12px;
	text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	}

/* Button States */
.button:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, transparent), color-stop(1, rgba(0, 0, 0, 0.1)));
	background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.1));
	text-decoration: none;
	}
.button:active {
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, transparent), color-stop(1, rgba(0, 0, 0, 0.2)));
	background-image: -moz-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.2));
	}
.button:active span {
	border-top-color: rgba(0, 0, 0, 0.2);
	}

/* Colors and Sizes */
.button.black { background-color: #252a2a; }
.button.blue { background-color: #3792c6; }
.button.red { background-color: #cc2222; }
.button.green { background-color: #69a846; }
.button.brown { background-color: #b6761a; }
.button.selected { background-color: #569334; }
.button.large span { font-size: 16px;  padding: 6px 14px; }
.button.small span { font-size: 11px;  padding: 4px 8px; }
{% endhighlight %}

## Improving Compatibility

While the buttons work perfectly in the latest versions of Chrome, Safari and Firefox, any other browser will have difficulty with the CSS3 gradient property, which means the hover and active states of the button are hard to tell apart.  To fix this, we can add a fallback background image that is shown only to browsers that don't support the required CSS3 properties, like such:

{% highlight css linenos=table %}
/* Button States */
.button:hover {
	background-image: url(button.png); /* fallback image */
	background-position: top;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, transparent), color-stop(1, rgba(0, 0, 0, 0.1)));
	background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.1));
	text-decoration: none;
	}
.button:active {
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	background-image: url(button.png); /* fallback image */
	background-position: bottom;
	background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, transparent), color-stop(1, rgba(0, 0, 0, 0.2)));
	background-image: -moz-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.2));
	}
{% endhighlight %}

I've included the **button.png** gradient image in the downloadable zip file so feel free to use that if you'd like.

## Taking it Further

I've seen the articles by [Zurb](http://www.zurb.com/) on [CSS3 buttons](http://www.zurb.com/blog_uploads/0000/0617/buttons-03.html), however I thought I'd try taking a slightly different approach in mine.  I also like the way these behave on the active and hover states better than the Zurb examples.  While I like the way these buttons look in most browsers, they still look a little weird in IE, as the top-border renders as a solid white bar.  The next step will be to explore options that will allow it to degrade even more gracefully in older browsers, perhaps using another image overlay for the top border itself.

Feedback is a must so let me know what you think!  As always, [follow me on Twitter](http://twitter.com/ThinkDevGrow) and [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) for more posts like this!