---
author: Monji Dolon
comments: true
date: 2010-03-26 18:29:42+00:00
layout: post
slug: iphone-style-switches
title: iPhone Style Radio and Checkbox Switches using jQuery and CSS
wordpress_id: 402
categories:
- Freebies
- Tutorials
tags:
- css
- design
- forms
- iphone
- jquery
- tutorial
- web design
---

For my latest project, I created a great interface for an administration panel, complete with great looking forms and buttons.  The one thing that stuck out like a sore thumb, however, were the ugly radio buttons and checkboxes I had to use repeatedly throughout the panel, so I decided to fix them.  I found [a](http://blog.pengoworks.com/index.cfm/2009/9/3/Create-iPhonestyle-buttons-with-the-iButton-jQuery-Plugin) [few](http://tdreyno.github.com/iphone-style-checkboxes/) [plugins](http://awardwinningfjords.com/2009/06/16/iphone-style-checkboxes.html) that achieved what I wanted, however they were all pretty hefty in file size.  My version doesn't look _as_ cool but makes up for it in file size, weighing less than 3kb and using only one image.

<div class="download">
  <a href="http://devgrow.s3.amazonaws.com/assets/images/iphone-style-switches.zip" class="primary">Download</a>
  <a href="http://demos.devgrow.com/switch/index.html" class="secondary">Preview</a>
</div>


#### The Effect in Action:

<iframe width="400" height="100" src="http://demos.devgrow.com/switch/index.html" style="border:none; margin: 15px 0 5px 150px;"></iframe>

This is in an iframe, however you can also [view the page](http://demos.devgrow.com/switch/index.html) itself.  In my example, I left the actual input fields visible, in a real world use you should hide them using CSS.  Feel free to reuse the source code, or follow the steps below:


#### Prerequisites

You need just two things for this to work correctly: [JQuery 1.3.2+](http://jquery.com/) and the [switch.gif](http://devgrow.s3.amazonaws.com/assets/images/switch.gif) image file used for the backgrounds (both included in the zip file).  After you have those two files, follow the steps below:


### Step 1 The HTML

{% highlight html linenos=table %}
<p class="field switch">
    <input type="radio" id="radio1" name="field"  checked />
    <input type="radio" id="radio2" name="field" />
    <label for="radio1" class="cb-enable selected"><span>Enable</span></label>
    <label for="radio2" class="cb-disable"><span>Disable</span></label>
</p>
<p class="field switch">
    <label class="cb-enable"><span>On</span></label>
    <label class="cb-disable selected"><span>Off</span></label>
    <input type="checkbox" id="checkbox" class="checkbox" name="field2" />
</p>
{% endhighlight %}


### Step 2 The Javascript

{% highlight javascript linenos=table %}
$(document).ready( function(){
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', true);
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', false);
	});
});
{% endhighlight %}


### Step 3 The CSS

{% highlight css linenos=table %}
.cb-enable, .cb-disable, .cb-enable span, .cb-disable span { background: url(switch.gif) repeat-x; display: block; float: left; }
.cb-enable span, .cb-disable span { line-height: 30px; display: block; background-repeat: no-repeat; font-weight: bold; }
.cb-enable span { background-position: left -90px; padding: 0 10px; }
.cb-disable span { background-position: right -180px;padding: 0 10px; }
.cb-disable.selected { background-position: 0 -30px; }
.cb-disable.selected span { background-position: right -210px; color: #fff; }
.cb-enable.selected { background-position: 0 -60px; }
.cb-enable.selected span { background-position: left -150px; color: #fff; }
.switch label { cursor: pointer; }
.switch input { display: none; }
{% endhighlight %}

Alternatively, you could use a single hidden input field and change the value of it using JQuery.  I used this method mainly to illustrate the effect works, as you can actually see the form values changing (to make sure it works).

I know it doesn't have the fancy animation effects of the alternatives but give it a shot and let me know what you guys think!

<div class="note">
	<strong>Edit:</strong> If you look back a few posts, I mentioned that the new JQuery UI includes this functionality.  While I considered it for this project, I didn't need any of the other features offered by JQuery UI, so I opted to create my own simpler version (and save 30-40kb in file size).
</div>