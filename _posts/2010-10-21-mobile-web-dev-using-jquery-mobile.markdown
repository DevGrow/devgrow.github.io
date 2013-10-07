---
author: Monji Dolon
comments: true
date: 2010-10-21 18:53:53+00:00
layout: post
slug: mobile-web-dev-using-jquery-mobile
title: 'Mobile Web Development Part 2: Creating a Simple App Using jQuery Mobile'
wordpress_id: 1924
categories:
- Tutorials
tags:
- jquery
- jquery mobile
- mobile
- mobile development
- programming
- web development
---

I've released an update to my jQuery Mobile PHP MVC Framework, check out the [blog post](http://devgrow.com/updated-jquery-mobile-php-mvc-framework/) for details and to download it!

This past weekend, John Resig (creator of jQuery) announced the release of the alpha version of [jQuery Mobile](http://jquerymobile.com/), a simple and lightweight JavaScript framework for mobile web development.  In this article, we'll take a look at how easy it is to create a simple mobile website using framework, complete with dynamic (AJAX) page loading, iOS-style design and slick page transitions.

## Download

<div class="download">
  <a href="http://devgrow.s3.amazonaws.com/assets/files/jquerymobile.zip" class="primary">Download</a>
  <a href="http://demos.devgrow.com/jquerymobile/" class="secondary">Preview</a>
</div>

[![](http://devgrow.s3.amazonaws.com/assets/images/mobile-dev2-screenshot.png)](http://demos.devgrow.com/jquerymobile/)

## How to Use jQuery Mobile

jQuery Mobile is incredibly easy to use, just include the jQuery Mobile files in your header and add a few `data` attributes to your markup and you're set.  All of the styling is handled by jQuery and the included CSS file, so you can literally create a complete mobile webpage in minutes.  In the example below, we'll create a simple page that loads internal links using a variety of transition effects.  The first few steps will outline the generic usage of jQuery Mobile while the rest will take a look at the specific elements used in the demo.

##### Step 1. Include the jQuery Mobile Files in Header

This step is pretty self-explanatory: just include the framework files.  You can download them from the jQuery Mobile site or load the files directly from their site/CDN, which will reduce bandwidth costs and keep your website speedy.

{% highlight html linenos=table %}
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
{% endhighlight %}

##### Step 2. Use data attribute in HTML markup


Apply `data` attribute tags to your HTML, where _n_ is the available feature you want to set, for example:

{% highlight html linenos=table %}
<div data-role="page" data-theme="b">
  <div data-role="header" data-theme="b">
    <h1>My Site</h1>
  </div>
  <div data-role="content">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
      <li data-role="list-divider">Transition Effects</li>
      <li><a href="effects.php?id=slide" data-transition="slide">Slide</a></li>
      <li><a href="effects.php?id=slideup" data-transition="slideup">Slide Up</a></li>
      <li><a href="effects.php?id=slidedown" data-transition="slidedown">Slide Down</a></li>
      <li><a href="effects.php?id=pop" data-transition="pop">Pop</a></li>
      <li><a href="effects.php?id=flip" data-transition="flip">Flip</a></li>
      <li><a href="effects.php?id=fade" data-transition="fade">Fade</a></li>
    </ul>
    <br /><br />
    <ul data-role="listview" data-dividertheme="e">
      <li data-role="list-divider">Seamless List (margin-less)</li>
      <li><a href="#" data-transition="slide">Example Item 1</a></li>
      <li><a href="#" data-transition="slide">Example Item 2</a></li>
      <li><a href="#" data-transition="slide">Example Item 3</a></li>
    </ul>
  </div>
  <div data-role="footer" data-position="fixed">
    <h1>&copy; Copyright Info or Site URL</h1>
  </div>
</div>
{% endhighlight %}

The `data-role` element specifies which DIV/block should be used for the header, footer and content, all of which are inside the main _page_ wrapper.  Here are the `data` attributes used in this example:

  * **data-role** - specifies the nature of the wrapper element, can be set to: _page_, _header_, _content_, _footer_.  Two other settings were used in the example to indicate list elements and list dividers, for which the attribute was set to: _listview_ for the main list element and _list-divider_ for the list divider.  There are a few other available settings, including _collapsible_, which creates a collapsible/show-hide block ([more info](http://jquerymobile.com/demos/1.0a1/#docs/content/content-collapsible.html)).
  * **data-position** - specifies whether the element should be _fixed_, in which case it will render at the top (for header) or bottom (for footer)
  * **data-inset** - specifies whether element should be within content margins or outside of it (flush or with margin) - set to _true_ or _false_
  * **data-transition** - specifies which transition to use when loading new pages, can be set to: _slide_, _slideup_, _slidedown_, _pop_, _flip_ or _fade_
  * **data-theme** - specifies which design theme to use for elements within container, can be set to: _a_, _b_, _c_, _d_, _e_
  * **data-dividertheme** - specifies the theme for the list dividers using same options as **data-theme**

##### Step 3. Add content and publish online!

Using the above example, the [template found on jQueryMobile.com](http://jquerymobile.com/demos/1.0a1/#docs/pages/docs-pages.html) or creating your own layout, populate the blocks with your own content and upload the files.  Currently, jQuery Mobile renders the pages the same on mobile and desktop browsers, so you don't necessarily need a smartphone to test it out (though having one can help ironing out bugs).

## Accessibility and Precautions

Right now, the alpha version of jQuery Mobile (the only one currently available) is compatible with all versions of Safari for iOS and for most browsers on Android.  BlackBerry is partially supported and Windows Mobile is sketchy at best, but rest assured that compatibility will only get better with time, as that is the main goal of jQuery Mobile - creating a widely compatible mobile JavaScript framework.  You can view the [compatibility chart](http://jquerymobile.com/gbs/) on the official site but should also [follow their blog](http://jquerymobile.com/blog/) to get the latest updates too.

That said, is it worth investing the time and energy to use jQuery Mobile over the other available mobile frameworks, even though it's in the alpha development phase right now?  I would say **yes, absolutely** - this is a framework that has huge momentum behind it right now and will only get better with time.  As long as you're staying on top of updates and changes, you should definitely start getting familiar with this framework if you're planning on doing some mobile-friendly web development.

An additional benefit of jQuery Mobile is that it makes loading pages using AJAX automatic.  Add an [iPhone home screen icon](http://www.askdavetaylor.com/how_to_create_custom_apple_iphone_website_icon.html) to your application and iOS will cleverly hide Safari controls, mimicking native applications.

## About the Example

The downloadable example above includes is split into a header and footer file for the sake of convenience, feel free to use whatever coding method you prefer.  I may end up creating a simple MVC framework using jQuery Mobile that makes it easier to develop a dynamic mobile app, in which case I'll be sure to post it on this blog.  If you'd be interested in something like that, leave a comment below and I'll try to bump up it's priority on my huge list of to-dos.

The first iteration of the [jQuery Mobile PHP/MVC Framework](http://devgrow.com/jquery-mobile-php-mvc-framework/) is complete.

## Conclusion

That wraps it up for part 2 of the Mobile Web Development series.  Be sure to check out part 1, an [Introduction to Mobile Web Development](http://devgrow.com/intro-to-mobile-web-dev/), if you missed it earlier.  In the next part, we'll take a look at the various other mobile web frameworks out there, so stay tuned!

**Also a reminder:** the [AppSumo giveaway contest](http://devgrow.com/appsumo-giveaway/) ends tomorrow - be sure to [check out the details](http://devgrow.com/appsumo-giveaway/) and enter (it takes 30 seconds and is free), you could win nearly $400 worth of support products.

And as always, [subscribe to our RSS feed](http://feeds.feedburner.com/devgrow) and [follow us on Twitter](http://twitter.com/ThinkDevGrow) if you haven't already!