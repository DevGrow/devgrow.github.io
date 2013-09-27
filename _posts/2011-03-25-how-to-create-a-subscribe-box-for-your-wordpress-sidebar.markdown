---
author: Monji Dolon
comments: true
date: 2011-03-25 18:53:56+00:00
layout: post
slug: how-to-create-a-subscribe-box-for-your-wordpress-sidebar
title: How To Create a Subscribe Box For Your WordPress Sidebar
wordpress_id: 2344
categories:
- Tutorials
tags:
- email subscriptions
- feedburner
- how-to
- sidebar
- Tutorials
- widgets
- WordPress
---

A few users have asked me how I've created the Subscribe box in the sidebar and some have even called for a WordPress plugin that helps automate it.  In reality, it's just simple HTML/CSS paired with the [Feedburner subscribe code](http://feedburner.google.com/fb/a/emailsyndication) and can be replicated very easily.  Let's take a look at the code used to create it:

<div class="download">
  <a href="http://devgrow.s3.amazonaws.com/assets/files/subscribe.zip" class="primary">Download at Github</a>
  <a href="http://demos.devgrow.com/subscribe/" class="secondary">View Example</a>
</div>

[![](http://devgrow.s3.amazonaws.com/assets/images/subscribe-big.gif)](http://demos.devgrow.com/subscribe/)

### The HTML

{% highlight html linenos=table %}
<div class="widget subscribe">
    <ul class="social">
        <li><a href="http://feeds.feedburner.com/devgrow" class="rss">RSS</a></li>
        <li><a href="http://www.facebook.com/DevGrow" class="facebook">Facebook</a></li>
        <li><a href="http://twitter.com/ThinkDevGrow" class="twitter">Twitter</a></li>
    </ul>
    <h3>Subscribe</h3>
    <p>Join over 2,800 readers and get the latest posts delivered straight to your inbox.</p>
    <form id="feedburner-subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=[YourAccount]', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <input type="text" name="email" value="E-mail Address" class="left textfield" />
        <input type="hidden" value="[YourAccount]" name="uri"/>
        <input type="hidden" name="loc" value="en_US"/>
        <input type="submit" value="Subscribe" class="right button submit" />
    </form>
</div>
{% endhighlight %}

The HTML is pretty straightforward, the only thing out of the norm is the [Feedburner e-mail widget](http://feedburner.google.com/fb/a/emailsyndication), which is taken directly from their site.  You can use any service there instead of Feedburner, or use a separate WordPress plugin to handle your subscriptions if you choose.


### The CSS


{% highlight css linenos=table %}
	.widget {
		margin-bottom: 40px;
		overflow: hidden;
		}
	.widget h3 {
		font-size: 22px;
		margin: 0 0 15px;
		}
	.widget.subscribe h3 {
		font-size: 20px;
		font-weight: 600;
		color: #4a7aa3;
		}
	.subscribe {
		background: #f0f8ff;
		padding: 13px;
		border: 2px solid #d5e7ee;
		}
	.subscribe form {
		margin: 15px 0 0;
		}
	.subscribe input.textfield {
		border: 2px solid #e4e9ef;
		}
	.subscribe input {
		font-size: 13px;
		padding: 4px;
		}
	.subscribe input.submit.button {
		font-size: 13px;
		border: 2px solid #3C6F8F;
		background: #3675A5;
		padding: 3px 5px;
		color: white;
		cursor: pointer;
		font-size: 15px;
		font-weight: 700;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		}
	.subscribe input.submit.button:hover {
		background: #488abc;
		}
	.subscribe p {
		color: #385c7c;
		font-size: 13px;
		line-height: 20px;
		margin: 0 0 5px;
		}
	.social {
		float: right;
		}
	.social li {
		float: left;
		margin: 0 0 0 5px;
		}
	.social li a {
		background: url(icons.gif) no-repeat;
		display: block;
		height: 26px;
		text-indent: -999em;
		width: 26px;
		}
	.social li a.facebook {
		background-position: 0 -30px;
		}
	.social li a.rss {
		background-position: 0 0;
		}
	.social li a.twitter {
		background-position: 0 -59px;
		}
	.social li a:hover {
		position: relative;
		top: -1px;
		}
{% endhighlight %}

Please be aware that you need to download the **[icons.gif](http://demos.devgrow.com/subscribe/icons.gif)** file if you want to use the social media links.  I've made it into a sprite for faster loading and convenience and if your subscribe box is wider, you can easily fit a lot of other services there as well.

### Thoughts? Feedback?


I know this is absurdly simple for a lot of you out there but I've had multiple requests to make the Subscribe box into a separate plugin.  Let me know if the above code is good enough or if you guys really do want me to make it into a plugin, and perhaps to make things uber convenient, I may just do so.