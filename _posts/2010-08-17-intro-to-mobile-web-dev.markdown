---
author: Monji Dolon
comments: true
date: 2010-08-17 18:41:52+00:00
layout: post
slug: intro-to-mobile-web-dev
title: An Introduction to Mobile Web Development
wordpress_id: 1665
categories:
- Resources
tags:
- jqtouch
- jquery
- mobile
- WordPress
- wordpress plugins
---

Facebook, the second largest site on the internet, [reports](http://www.facebook.com/press/info.php?statistics) that over 30% of it's active users access the site from their mobile devices, and that mobile users are twice as active as non-mobile users.  As cell phones become more and more prevalent in our digital society, the need for a mobile-friendly website is a must for many businesses.

## When to Create a Mobile Site

Having a mobile-friendly website can be absolutely critical for businesses in certain markets.  Sites that feature a stream of user-generated content are likely targets by their mobile-savvy users.  An e-commerce business can increase sales and conversions by making sure their storefront is mobile-friendly.  Even a web design studio or graphic designer can benefit from a mobile site, as it can provide an easy way to show off your portfolio to a potential client in impromptu situations.

That said, the majority of websites can probably still get by without a mobile version of their site.  Just like how you should **[cater your website to your audience](http://devgrow.com/using-google-analytics-to-refine-your-website/)**, until the percentage of mobile traffic for your site nears 2-10%, depending on number of visitors, it's probably not worth investing the time and resources to create a mobile version of it yet.  You should still keep it on your list of website to-dos, just don't prioritize it over more critical tasks until it's worthwhile to do so.

**If any of the following are true, you should probably consider making a mobile version of your site:**

  * at least 5-10% of the visitors are coming from mobile devices
  * you sell a product that users might buy when they're on the go (tickets, music, games, etc)
  * your site is powered by user generated content (why not let them produce content from anywhere?)
  * your site relates to the mobile industry in any way, shape or form

The last one seems pretty obvious but I've come across many iPhone app review sites and even mobile app developer sites that look terrible (or require years of scrolling) in mobile browsers.

## Technologies Available

Fortunately for web developers, there are a lot of tools and technologies available to help you create a mobile-friendly version of your site.  The easiest solution is to use a [custom stylesheet for mobile browsers](http://www.alistapart.com/articles/return-of-the-mobile-stylesheet), however that may be a hit or miss depending on which OS and browser the visitor is actually using.  Personally, I prefer using the a [bit of PHP code](http://detectmobilebrowsers.mobi/) to determine if the visitor is using a mobile browser and if so, display a custom stylesheet.

#### Rich Mobile Applications

If you're interested in creating a custom, interactive mobile application for your users, there are a few options to consider.  Rich applications are more than just custom stylesheets, they offer a whole new level of interactivity and make use of asynchronous technology to make the overall experience seamless for the user.  Good examples of this are the [Facebook app](http://touch.facebook.com/) and [West Virginia University's mobile page](http://m.wvu.edu/).  The latter makes use of [jQTouch](http://www.jqtouch.com/), a highly extensible [jQuery](http://www.jquery.com/) plugin that makes developing asynchronous mobile applications much easier than it should be.
[![](http://devgrow.s3.amazonaws.com/assets/images/mobile-dev-jqt.jpg)](http://jqtouch.com/)
The jQuery team also recently [announced](http://jquerymobile.com/2010/08/announcing-the-jquery-mobile-project/) [jQuery Mobile](http://jquerymobile.com/), their own framework for developing rich mobile applications that are compatible with the majority of mobile web browsers and devices.  This project has stirred a lot of excitement and controversy, as the fate of jQTouch and similar competitors will most likely be impacted by this official plugin.  For developers, it's probably a safe bet to stick with jQTouch for now, as jQuery Mobile isn't scheduled for release until late 2010.  Even after it's initial release, it's probably wiser to wait a few months until a fully stable version is released and all the major bugs are ironed out.

#### Plugins

There are several plugins and extensions that can make it easy to create mobile websites as well, especially for blogs.  The [WordPress plugin directory](http://wordpress.org/extend/plugins/search.php?q=mobile) is a great place to start:

  * [WordPress Mobile Edition](http://wordpress.org/extend/plugins/wordpress-mobile-edition/)
  * [Mobilize by Mippin wordpress plugin](http://wordpress.org/extend/plugins/mobilize-by-mippin-wordpress-plugin/)
  * [WordPress Mobile Pack](http://wordpress.org/extend/plugins/wordpress-mobile-pack/)
  * [WordPress Mobile Admin](http://wordpress.org/extend/plugins/wordpress-mobile-admin/)

Also worthy of mention is [PadPressed](http://devgrow.com/go/padpressed), a new plugin that automatically generates a great looking iPad version of your blog.

## Conclusion

As I mentioned above, the need to develop a mobile-friendly website is dependent on the demographics of your audience.  If you receive a lot of mobile traffic, it is crucial for you to make sure their experience is enjoyable.  If this is not the case, you can push the task further down your list of to-do's however I advise against taking it off your list completely.  As more and more people start browsing on the go, the need for a mobile site is only going to increase.

For most websites, a mobile version can be as simple as a custom stylesheet or activating a plugin, both of which can be done in a day or less.  Even if only a handful of visitors benefit from this, in terms of opportunity costs it is completely worth it (especially if you plan on monetizing your visitors now or in the future).  On the other hand, rich applications require time and possibly money to develop, so commit only when it makes sense to.

#### Further Reading

  * [Introduction to W3C's Mobile Web Best Practices](http://www.w3.org/2009/03/mobitrain_course_description.html)
  * [Mobile 1: Introduction to the mobile web by Opera](http://dev.opera.com/articles/view/introduction-to-the-mobile-web/)
  * [Mobile Web Design: Is it Worth It?](http://sixrevisions.com/web-development/mobile-web-design-is-it-worth-it/)
  * [A Beginner's Guide to Mobile Web Development](http://mobiforge.com/starting/story/a-beginners-guide-mobile-web-development)

As always, be sure to **[subscribe to our RSS feed](http://feeds.feedburner.com/devgrow)** and **[follow us on Twitter](http://twitter.com/ThinkDevGrow)**!