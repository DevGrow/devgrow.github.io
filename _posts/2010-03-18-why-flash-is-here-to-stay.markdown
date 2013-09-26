---
author: Monji Dolon
comments: true
date: 2010-03-18 16:51:56+00:00
layout: post
slug: why-flash-is-here-to-stay
title: Why Flash is Here to Stay
wordpress_id: 337
categories:
- General
tags:
- adobe
- controversy
- editorial
- flash
- opinion
- rant
- unity
---

There's a huge debate stirring around the internet about the capabilities of HTML5 and it's threat to Adobe Flash, Microsoft Silverlight and other rich internet application (RIA) technologies.  The amount of support behind HTML5 is encouraging and great to see, as it will only help it's adoption by both browsers and users, however it is important to understand it's capabilities and limitations.  As the hype builds up, so does the flash-bashing around forums and blogs - something that needs to change.



### Capabilities of HTML5 Today


HTML5 brings with a host of new features, but the ones we're concerned about for this article are it's rich-media uses, mainly [Canvas](https://developer.mozilla.org/en/Canvas_tutorial), [Video](http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html#video), [Audio](http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html#audio) and [Offline Data Storage](http://www.quirksmode.org/blog/archives/2009/06/html5_storage_t.html).

**Canvas** gives you the power of bitmap rendering using Javascript.  You can use Canvas to do simple tasks, like [draw two overlapping rectangles with varying alpha transparencies](https://developer.mozilla.org/@api/deki/files/2931/=simple_example_(1).html), or more complex feats such as [dynamic graphing](http://igrapher.com/) and [interactive animations](http://www.blobsallad.se/).  The latter examples show the immense potential HTML5 has - they work on any browser that support HTML5 and do not require extra plugins, are functional and smooth, and are not very CPU intensive.  Another cool example is [Canvascape](http://www.benjoffe.com/code/demos/canvascape/) - a 3d shooter complete with map and textures.

The long overdue (in my opinion) **Video and Audio** elements do exactly what you think they would - allow you to embed high quality video or audio without the need of plugins or other dependencies.  [Jilion's SublimeVideo](http://jilion.com/sublime/video) provides a great demonstration of the features, which include custom styled controls, full-window and resizing options, and **native iPhone and iPad support**.  This is a huge asset for HTML5, as Flash is not currently supported on either device.

The ability to store data locally on the clients machine/browser will also be very helpful to RIA developers.  It allows you to store information on the user, much akin to browser cookies, without taxing your server or using your resources.  WebReference provides some great information about this feature in [Client-side Storage](http://www.webreference.com/authoring/languages/html/HTML5-Client-Side/).



### The Power and Reach of Flash


Let's face it, Flash is everywhere these days.  From streaming video and casual games to interactive websites and complex web applications, it has been the driving power behind a lot of companies and creative forces.  Flash has support for everything HTML5 can do and more, including:




  * [Complex 3d animation](http://blog.papervision3d.org/) * see edit after conclusion


  * [Physics](http://www.box2d.org/) and [Particle Dynamics](http://flintparticles.org/examples)


  * [XML Socket Connections](http://www.kirupa.com/developer/flash8/php5sockets_flash8.htm)


  * [3rd Party Components](http://ntt.cc/2009/02/13/over-18-great-third-party-tools-for-adobe-flash-2.html) (many commercial)


I'm sure there are more that I can't think of right now, but these cover some of the bigger advantages.

Adobe (formerly Macromedia) was also able to accomplish an incredible feat that is unlikely to be repeated - they've almost standardized the Flash player on computers with internet access.  Let's face it, [almost everyone](https://www.adobe.com/products/player_census/flashplayer/) has Flash player installed (99% of internet users, for those too lazy to check the link).  This means that depending on the version of Flash Player they're using, your application should be readily accessible by a huge number of people.

The biggest examples of the prevalence and power of Flash, however, have to be in the casual gaming industry.  There several multi-million dollar companies whose businesses are based on creating interactive games that they simply can't recreate with HTML5.  It is a thriving industry seeing a lot of action recently, including several companies getting VC funding and a few getting acquired by larger entities.  The numbers, both in terms of revenue and usage, speak for themselves.



### Source of the Flash Hate


It seems to me that the majority of users with complaints about Flash are users (and not developers), who have had several unfavorable experiences with Flash such as:




  * Slow load times


  * High CPU usage


  * Poor design and/or usability


  * Lack of SEO


  * Plugin Dependency


  * etc.


I'm sure the list goes on, but these are the major complaints I keep hearing.  If you have some more, feel free to leave them in the comments and I'll add them to the list.  A lot of these problems stem from poor application development.  For every poorly written Flash application you show me that is ugly and takes forever to load, I can show you one that is beautiful and fast.  As for SEO, that is also usually a result of poor/careless development - the same can be said about HTML sites made without keeping SEO in mind.  Google and Adobe [have worked together](http://www.beussery.com/blog/index.php/2008/10/google-flash-seo/) in the past to address this issue, and a lot of progress has been made to allow Flash applications to get good rankings on search terms.



### The Advent of Unity and Others


There are a few game changers that are creating a lot of buzz, possibly as better alternatives (mainly for gaming) to Flash.  [Unity](http://www.beussery.com/blog/index.php/2008/10/google-flash-seo/), for example, is a powerful 3d engine that is capable of web publishing, however it requires a special plugin to use.  InstantAction and OnLive similarly have browser plugins that let you access games rendered in the cloud and play them in real-time.  This is an interesting space to keep an eye out, as technology rapidly advances and new services are offered.

The problem they all face, however, is how likely people are to install a plugin on their computers.  Nearly all computers have Flash installed, even those in libraries and schools or at work, where your file access may be limited.  For all gamers who play from those locations, it is simpler to play a casual Flash game than to figure out how to bypass access and install a new plugin.



### Conclusion


While it's clear that HTML5 has a ton of new advantages that I'm looking forward to, it's pretty obvious that Flash isn't going anywhere, especially since huge companies have based their business models on what Flash provides.  It's wishful thinking to expect a perfect product that is as capable as Flash without some of the downsides, but who knows, maybe that perfect solution will come about some day.  All I know is, it's not HTML5.



**Edit:** 3D and Physics on Flash are simulated using external libraries - Flash does not utilize OpenGL or Direct3D for true 3D acceleration.
