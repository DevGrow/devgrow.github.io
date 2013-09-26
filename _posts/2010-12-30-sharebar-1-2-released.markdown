---
author: Monji Dolon
comments: true
date: 2010-12-30 23:11:30+00:00
layout: post
slug: sharebar-1-2-released
title: Sharebar 1.2 Released
wordpress_id: 2155
categories:
- Resources
tags:
- plugins
- sharebar
- WordPress
- wordpress plugins
---

I've just finished an update to the Sharebar WordPress plugin that adds color selectors for the vertical widget, new [ShareThis](http://www.sharethis.com/) buttons and a switch to the Facebook Like (from Facebook Share) button.  I had planned to have AJAX loading of buttons finished with this release however it's proving to be a bit more difficult than I originally expected.

![](http://devgrow.s3.amazonaws.com/assets/images/v1.2.gif)



### Download


You can view the [plugin details](http://wordpress.org/extend/plugins/sharebar/) at [WordPress.org](http://www.wordpress.org/) or [view a simple demo](http://devgrow.com/plugins/sharebar/).


[View Demo](http://devgrow.com/plugins/sharebar/)[Sharebar WordPress Plugin (zip)](http://downloads.wordpress.org/plugin/sharebar.zip)




### 1.2 Change Log:






  * Added ability to change color of vertical widget from admin panel


  * Added ShareThis buttons


  * Changed Facebook Share to Facebook Likes





### To-do List:






  * AJAX loading of buttons


  * Better browser compatibility (specifically Internet Explorer)


  * More default buttons



So it turns out AJAX loading isn't as easy as I thought.  While several buttons work, many do not function properly when called from another page via jQuery's GET function.  I ended up switching to the Facebook 'Like' button as the default over the Facebook 'Share' widget, as I think it will be more consistent with displaying the actual share/like numbers (a common complaint of the previous Share button).  Also, the default buttons now include ShareThis, which include a couple of great E-mail and Share buttons.  I left the ShareThis Facebook button code as well, in case anyone preferred using that over the new Facebook Like one.

If you have ideas to improve Sharebar or would like to contribute to the code, please leave a comment or send me an e-mail.  I could definitely use some help in debugging the random IE/Thesis theme errors!
