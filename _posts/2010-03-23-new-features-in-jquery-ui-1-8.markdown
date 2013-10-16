---
author: mdolon
comments: true
date: 2010-03-23 20:02:55+00:00
layout: post
slug: new-features-in-jquery-ui-1-8
title: New Features in jQuery UI 1.8 That Designers Will Love
wordpress_id: 357
categories:
- Resources
tags:
- jquery
- news
- updates
---

Earlier today the JQuery UI team [announced](http://blog.jqueryui.com/2010/03/jquery-ui-18/trackback/) the final release of JQuery UI 1.8.  In case you're not familiar with JQuery UI, it is an extension of the JQuery library that provides "abstractions for low-level interaction and animation, advanced effects and high-level, themeable widgets, built on top of the jQuery JavaScript Library, that you can use to build highly interactive web applications."

The new version of JQuery UI brings about some exciting new additions:



### Position Elements with Ease


You can now [position any element](http://wiki.jqueryui.com/Position) relative to another element, the browser window or even mouse/cursor using simple syntax.  For designers, this is especially useful in getting rid of complex CSS code to place elements relative to the browser window, such as horizontally and vertically centering a dialog window or correctly positioning a tooltip.



### Beautiful Buttons and Form Elements


This is incredibly useful and a God send for many designers - you can now create [beautiful buttons](http://jqueryui.com/demos/button/), stylish radios, checkboxes and select menus without breaking a sweat.  The minimalistic code makes it simple to implement as well.  The following code:
`$("button").button();`
When paired with the usual button HTML elements, produces:![](http://devgrow.s3.amazonaws.com/assets/images/button.png)It's one thing to see a picture and something else to actually interact with it - try it out on the [button demo page](http://jqueryui.com/demos/button/).



### Smaller File Size


Another great relief to designers is sure to be the smaller file size that JQuery UI core now utilizes - according to the team, it is 71% smaller!  When I downloaded both the 1.8 and 1.7.2 cores (both minified), I found the difference to be closer to 60%, but that is still a huge improvement.  While I've used JQuery UI on several projects, one of my biggest qualms with it was it's large file size.  That is a much smaller concern now, especially with the significant speed advantages the library provides in terms of development.



### Additional Goodies


The JQuery UI team is also releasing an [autocomplete widget](http://jqueryui.com/demos/autocomplete/) that is both simple to use and powerful (supporting local calls or ajax), and a [new widget factory](http://jqueryui.com/docs/Upgrade_Guide#Widget_Factory).
