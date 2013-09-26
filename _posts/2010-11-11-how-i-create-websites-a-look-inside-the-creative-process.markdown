---
author: Monji Dolon
comments: true
date: 2010-11-11 21:54:08+00:00
layout: post
slug: how-i-create-websites-a-look-inside-the-creative-process
title: 'How I Create Websites: A Look Inside the Creative Process'
wordpress_id: 1959
categories:
- Resources
- Tutorials
tags:
- creative
- creative process
- mockups
- photoshop
- redesign
---

Last week, a friend of mine who recently started freelancing asked me to elaborate on my personal web design process.  I've been doing client work for years and now have essentially a standard routine when working on a new project.  It goes something like this:



### 1. Understand the Project



The first step is to know what you're making inside and out.  For every freelance project I work on, I try to understand what it is the client wants, who they are targeting and what role this website will play in their business.  It's important to get a clear understanding of these concepts in order to create a product that satisfies the client, the target market and you, the designer/developer, as you should always want to create something you can be proud of.

Nearly every project requires doing some research prior to beginning the design process.  I usually ask the client for a short list of competitors from which to start with, from which I identify the strong and weak points (used later to refine the design).  I also ask for a list of websites the client admires and likes - this helps to get an idea of the design style that will reflect their personality and in the end result in a overall happy client.  A bit of psychology 101 but if you use some of the underlying influences of the sites they like in your design work, they will hopefully make a link subconsciously and like your work too (familiarity-induced liking).



### 2. Brainstorm



After I have a thorough understanding of the project, the target market and what the client wants, I start to brainstorm features and elements that will be used.  This usually means quick lists of features per page, like so:




  * Homepage


    * Login Box


    * Top 5 News (blog posts)


    * Top 5 Discussions (from Newsboard)


    * Newsboard (latest posts)





  * Profile Page


    * User Info [name, bio, DOB, gender, joined date, #posts]


    * Profile pic


    * Commenting/Wall


    * Friends





  * Every Page


    * Header + Footer + Nav


    * Left Nav with icon links


    * Top leaderboard ad





  * Etc..



This kind of list doesn't have to be that in-depth, it's used just to help you formulate ideas for the next step.



### 3. Sketch it Out



Using the list of features and elements I need, I take out a sheet of paper and create a rough sketch of the each of the main sections of the website.  The sketches don't have to be polished or too accurate, they are just meant to provide direction for element positioning.  If at all possible, I will sit with my client and do it together with them, as this helps eliminate many future iterations in the actual mockup phase of the design.  Here's a sketch a client and I created for a project a few months ago:
![](http://devgrow.s3.amazonaws.com/assets/images/sketch.jpg)
In fact, this sketch was mainly done by the client himself, laying out where he wanted certain elements to be in relation to each other.  Most clients will not have this much foresight on content placement and you will likely end up having to do the bulk of it yourself.  If you come to an understanding on this sketch with your client you can focus on polishing the real mockup rather than worrying about placement.



### 4. Photoshop Mockups



Once the paper sketch is done, I open up Photoshop and create a complete mockup.  When I say complete mockup, I mean I reproduce the main pages of the website (homepage, generic page, forum page, etc.) in it's entirety, with correct fonts, stylings, features, content placement, etc.  It not only helps me visualize what I will be coding but also keeps the design process somewhat relaxed and enjoyable, at least for me.  I use tons of guides to help get the dimensions of elements correct and also try to keep everything organized into multiple folders.  Sometimes I will have multiple pages in one PSD (under multiple hidden folders), sometimes I split them up into separate PSDs - it all depends on how many elements are being reused throughout the site.

After creating the initial mockup, I send it to the client for review and then implement his suggested changes.  This process repeats several times until we're both satisfied with the end result.  Here are a few of the mockups for the project from the sketch above:
![](http://devgrow.s3.amazonaws.com/assets/images/reiterate.jpg)
I skipped a few in the image above but there were more than 10 different variations and iterations of the mockup, with the final product looking more like this:
![](http://devgrow.s3.amazonaws.com/assets/images/final.jpg)


### 5. HTML/CSS/JS



From the mockups, I open up Notepad++ if I'm on my Windows 7 desktop or Textmate if I'm on a Mac and begin the coding process.  I usually start with a standard group of files, which include:





  * css


    * reset.css


    * main.css





  * images


  * js


    * functions.js





  * index.html



In the `reset.css` file, I usually stick in either [Eric Meyer's CSS Reset](http://meyerweb.com/eric/tools/css/reset/) or this simpler one I found a while back (can't remember where now):

`
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {margin:0; padding:0;}
table {border-collapse:collapse; border-spacing:0;}
fieldset,img {border:0;}
address,caption,cite,code,dfn,em,strong,th,var {font-style:normal; font-weight:normal;}
ol,ul {list-style:none;}
caption,th {text-align:left;}
h1,h2,h3,h4,h5,h6 {font-size:100%; font-weight:normal;}
q:before,q:after {content:'';}
abbr,acronym {border:0;}
`

In terms of converting the Photoshop mockup to HTML, I usually work in this order:




  1. Main background


  2. Body wraps to center main content if needed


  3. Header and/or top navigation, then logo and main navigation bar


  4. Sidebar block (in HTML before content block, has float property assigned)


  5. Content block (after sidebar, no float and with padding equal to sidebar width + margin)


  6. Footer



I try to finalize each element as I progress down the page, adding the necessary images and styles as I go along.  The images are sliced directly from Photoshop (this is where layering and putting things in folders comes in handy) and are called from the CSS file unless I absolutely need it in the HTML (or unless it's dynamic).  Recently, I've been trying to keep images down to an absolute minimum as they can slow your pages, so I'll try to use CSS for whatever I can, including rounding corners and glow/shadow effects (taking a slight compatibility hit).  I'll also be continuously checking the HTML file in Firefox, Internet Explorer and Chrome during this entire process to make sure everything looks okay (and occasionally Safari and Opera as well).

Here are the files I delivered to the client for the project we've been following:



  * css


    * [framework.css](http://cdn.devgrow.com/examples/ewrestlingnews/css/framework.css)


    * [tipsy.css](http://cdn.devgrow.com/examples/ewrestlingnews/tipsy.css)





  * images


    * Multiple images...





  * js


    * [functions.js](http://cdn.devgrow.com/examples/ewrestlingnews/js/functions.js)


    * [jquery.js](http://cdn.devgrow.com/examples/ewrestlingnews/js/jquery.js)


    * [jquery.tipsy.js](http://cdn.devgrow.com/examples/ewrestlingnews/js/jquery.tipsy.js)





  * [elements.html](http://cdn.devgrow.com/examples/ewrestlingnews/elements.html)


  * [index.html](http://cdn.devgrow.com/examples/ewrestlingnews/index.html)


  * [just-top.html](http://cdn.devgrow.com/examples/ewrestlingnews/just-top.html)


  * [page.html](http://cdn.devgrow.com/examples/ewrestlingnews/page.html)


  * [page2.html](http://cdn.devgrow.com/examples/ewrestlingnews/page2.html)


  * [page3.html](http://cdn.devgrow.com/examples/ewrestlingnews/page3.html)





### 6. Backend Development



After the main HTML/CSS/JS framework is complete for the main sections of the website, I'll begin any backend development necessary.  Since this relies so much on what the client wants, I'm not going to get into it much here.  Just make sure to use the absolute minimal code possible in order to keep things fast and CPU-friendly.



## Conclusion



All web designers and developers have a unique process in which they complete projects, the above outlines the one I most commonly use.  I may have left out a couple of things here and there but it covers the overall big picture of how I get things done.  The project covered in this post was for the redesign of [eWrestlingNews.com](http://ewrestlingnews.com/) - I was responsible only for the HTML/CSS portion of the site while a developer handled the backend.  As you can see, even the final design I submitted ended up changing a bit to the client's liking.



##### What is your creative process like?  Do you work in the same way I do?  Leave your feedback in the comments below.



And as always, [follow me on Twitter](http://twitter.com/ThinkDevGrow) and [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) for more articles like this!
