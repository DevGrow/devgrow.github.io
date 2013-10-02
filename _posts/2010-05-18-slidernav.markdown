---
author: Monji Dolon
comments: false
date: 2010-05-18 00:24:42+00:00
layout: post
slug: slidernav
title: 'SliderNav: iPhone Style Contact Lists Using jQuery and CSS'
wordpress_id: 1025
categories:
- General
- Tutorials
tags:
- apple
- iphone
- iphone-style
- jquery
- jquery plugin
- plugins
- slidernav
- widgets
- WordPress
---

This effect is actually from [Techi.com](http://techi.com/), a new blog launched by the guys at [WebDesignerDepot](http://webdesignerdepot.com/), where they use it to display their popular tags in the sidebar.  I wanted to see how easy (or hard) it was to recreate using JQuery and CSS, and it turns out that it's pretty simple to do.  I've packed it into a neat little plugin so you hopefully you can make some use of it!

<div class="note">
    <strong>Updated May 25:</strong> I've just added a new option that displays arrows above and below the SliderNav object.  This is used to navigate longer sections for users that do not have a mouse wheel (or those who are on a mobile browser).
</div>

<iframe width="600" height="310" src="http://devgrow.com/slidernav-jquery-plugin/embed.html" style="border:none;" frameborder="0" marginheight="0" marginwidth="0"></iframe>

**SliderNav** is a JQuery plugin that lets you add dynamic, sliding content using a vertical navigation bar (index).  It is made mainly for alphabetical listings but can be used with anything, though longer words can look a bit awkward.  The plugin automatically adds the navigation and sets the height for the object based on how tall the navigation is, in order to make sure users have access to the entire list.  I also used the _overflow: auto;_ property for the actual content so you can **use your mousewheel to scroll through the content as well**.

The plugin has been tested (and works fine) on Firefox 3, Chrome 5, IE7, Safari 4 and Opera 10.


## Download

You can download the [full source](http://devgrow.com/slidernav-jquery-plugin/slidernav.js), [minified version](http://devgrow.com/slidernav-jquery-plugin/slidernav-min.js), [css file](http://devgrow.com/slidernav-jquery-plugin/slidernav.css), or [view the example online](http://devgrow.com/slidernav-jquery-plugin).

<div class="download">
  <a href="http://devgrow.com/slidernav-jquery-plugin/slidernav.zip" class="primary">Download</a>
  <a href="http://devgrow.com/slidernav-jquery-plugin" class="secondary">Preview</a>
</div>


## Usage Instructions

SliderNav is super easy to use, but first you have to load JQuery, the plugin and the relevant CSS file in order to use it:

{% highlight html linenos=table %}
<link rel="stylesheet" type="text/css" href="slidernav.css" media="screen, projection" />
<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script type="text/javascript" src="slidernav.js"></script>
{% endhighlight %}

After you've done that, create the section content in HTML using the following structure (you can name your element anything):

{% highlight html linenos=table %}
<div id="slider">
  <div class="slider-content">
    <ul>
      <li id="a"><a name="a" class="title">A</a>
        <ul>
          <li><a href="/">Adam</a></li>
          <li><a href="/">Alex</a></li>
          <li><a href="/">Ali</a></li>
          <li><a href="/">Apple</a></li>
          <li><a href="/">Arthur</a></li>
          <li><a href="/">Ashley</a></li>
        </ul>
      </li>
      <li id="b"><a name="b" class="title">B</a>
        <ul>
          <li><a href="/">Barry</a></li>
          <li><a href="/">Becky</a></li>
          <li><a href="/">Biff</a></li>
          <li><a href="/">Billy</a></li>
          <li><a href="/">Bozarking</a></li>
          <li><a href="/">Bryan</a></li>
        </ul>
      </li>
      etc...
    </ul>
  </div>
</div>
{% endhighlight %}

Once you've set the HTML, it's simply a matter of calling the sliderNav function for the element you've just created:

{% highlight html linenos=table %}
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider').sliderNav();
  });
</script>
{% endhighlight %}


#### Custom Options

The first of the configurations is **height** - set this to a pixel value if you wish to override the automatic detection based on the vertical navigation (you may need to change the min-height in the CSS too).  Also by default, the plugin will generate an alphabetical navigation that uses all 26 letters of the English alphabet, however you can also use custom **items** using the following code:

{% highlight javascript linenos=table %}
    $('#slider').sliderNav({items:['item1','item2','item3'], height:'200'});
{% endhighlight %}

You can also set **arrows** to true (default) or false, which displays arrows above and below the slider object to allow scrolling longer sections.  Click on an arrow will scroll the object by it's height - I used this method to keep code to the minimum, as anything smoother/nicer-looking required a lot more code.  The last customizable option is **debug**, which can either be _true_ or _false_.  This adds a little bit of text on the bottom of the slider that shows how many pixels the current offset is (was useful during early development, probably not anymore).


## Possible Use Cases

I believe this navigation can be useful in certain circumstances, mainly where you're trying to show a lot of information that has been organized alphabetically (or by date) in a small area.  For instance, it could be used to create a WordPress widget that lists all posts alphabetically or better yet, a widget for complete archives categorized by date.  I'm not sure how much better it would be than traditional means of navigation but it's certainly worth trying out.


## Conclusion

As usual, please leave any feedback if you have it.  I'm still very new to the JQuery plugin scene so there may be bugs or mistakes - if you find one, please mention it in the comments.

If you haven't yet, please [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) and [follow us on Twitter](http://twitter.com/devgrowblog) for more plugins and other useful bits!