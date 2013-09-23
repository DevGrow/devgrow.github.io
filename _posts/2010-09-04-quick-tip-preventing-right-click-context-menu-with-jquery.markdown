---
author: admin
comments: true
date: 2010-09-04 19:33:32+00:00
layout: post
slug: quick-tip-preventing-right-click-context-menu-with-jquery
title: 'Quick Tip: Preventing Right-Click Context Menu with jQuery'
wordpress_id: 1783
categories:
- Tutorials
tags:
- javascript
- jquery
- quick tips
- tips
---

__One of my clients recently asked for an image slideshow on his blog to showcase his photography.  When I asked him how he wanted it to be, he was insistent on using a Flash slideshow over JavaScript.  It turns out that although the Flash gallery was far less useful for him, as he couldn't view it on the iPhone or iPad, he preferred it anyways because it prevented people from right-clicking on his images and saving them to their hard drives.<!-- more -->

I spent a good bit of time attempting to explain to him that while people couldn't right-click, they could still easily rip the photos using the Print Screen button or using any screen capture tool.  My suggestion was to simply watermark the images, however he was insistent on having no context-menus show up on right-click.  Ultimately, I ended up using a bit of jQuery to disable all context-menus in any images on the site, which allowed him to use the more compatible JS slideshows:

`
$('img').bind("contextmenu", function(e){ return false; })
`

That should do the trick!  While I still don't think it's the best solution, if you run into the need to disable context menus for any element, feel free to use the snippet above (replace the img with anything else).



### Edit: Compatibility and Demo


Someone mentioned it doesn't work in Firefox in the comments - I've tested the code in the latest beta build of Chrome, IE8, Firefox 3.6.8, Safari and Opera - it **does** work in all of these browsers, at least in my Windows 7 x64 build.

Feel free to view the source of the demo to see how the exact implementation.  Also, keep in mind that this is certainly not a fool-proof solution (not even a great one) at preventing image theft.  It's useful in deterring the subset of people who are less tech-savvy and are likely to give up after being unable to right-click.


[Live Example](http://devgrow.com/examples/nocontext.html)




### Edit 2: I am not suggesting this!


A number of comments make the assumption that I am recommending this technique for preventing image theft.  Let me be clear: I am not endorsing this technique for that purpose.  There are many ways around it and I made that clear to my client.

Since my client, however, was insistent on specifically disabling right-click for images, the above is the method I used.  It was somewhat difficult finding this information online so I decided to share it with others here on my blog.  It is certainly not the best solution (not even a good one) for preventing image theft, in my opinion a watermark works much better for that.  It may be useful for you in some circumstances, so use the knowledge however you'd like.
