---
author: Monji Dolon
comments: true
date: 2010-11-08 16:49:31+00:00
layout: post
slug: best-cms-for-maintaining-a-static-website
title: 'Survey Results: What is the Best CMS for Maintaining a Static Website?'
wordpress_id: 1989
categories:
- Resources
tags:
- cms
- content management system
- drupal
- frogcms
- poll
- survey
- web development
- WordPress
---

In last month's poll, I asked the question "What CMS is best for maintaining a static website?"  Let's take a look at the responses and what they mean (and why I disagree with the majority here).





  1. **WordPress - 76%**


  2. Custom CMS - 18%


  3. Drupal - 8%


  4. FrogCMS - 0%



It turns out the vast majority of readers feel that WordPress is best suited for maintaining a static website.  As a web developer with many clients that frequently demand static websites, I actually have to disagree with this notion.  WordPress may be the best CMS for many sites, however it is packed with features and options that you probably don't need on a simple, static website.  It's simply overkill for simple sites and contains features which may end up confusing your client rather than helping them maintain their site.
![](http://devgrow.s3.amazonaws.com/assets/images/kiss.jpg)


### Always Apply KISS



If you're one of the few who doesn't know what KISS is, it is an acronym for _Keep It Simple Stupid_, and a reminder that often the simplest idea/product is best.  In terms of CMS features, if your client can live without it, leave it out.  A static website entails a site that isn't database intensive and will require occasional editing/updating, however for the most part will remain static.  In terms of CMS, it should have:





  * Content Editing via Authentication


  * Possibly uploading images and rich media


  * Minimal (if any) DB interaction



WordPress can do all of the above and a lot more, which is the main problem.  The need for plugins to create static/cached content is an added headache you don't want your clients to have to deal with.



### My Pick: Custom CMS



Like I said, I prefer keeping features to the absolute minimum to avoid overwhelming the client and making the entire updating process effortless from their site.  Often you'll get clients who are not tech-savvy and will require an intense level of coaching, using a more feature-rich CMS in those circumstances will only result in endless support requests and late night phone calls.

For the minimal features listed above, it's often easier to just code a simple, custom CMS in PHP and throw it on a shared server.  To avoid DB interactions, use [caching](http://devgrow.com/simple-cache-class/) to generate static files and avoid DB calls altogether for the majority of visitors.  Throw in a customized login screen for your client with their company logo and they'll be even more pleased.  It may require more work than implementing WordPress at first, however you can always reuse your code after that initial development.  Bonus points if you manage to use SQLite so if your client decides to ever change hosts or upgrade servers, they just have to copy over the 1-folder all of their site files are stored in (no DB migration headaches).



### The Other Options


![](http://devgrow.s3.amazonaws.com/assets/images/drupal-frog.jpg)
Two of the other options were [Drupal](http://drupal.org/) and [FrogCMS](http://www.madebyfrog.com/).  Drupal is definitely overkill for any simple, static website.  FrogCMS, on the other hand, is probably a little more complex than a custom CMS you code but is still very bare-bones.  If you haven't heard of it, be sure to check out their site and the [administration demo](http://www.opensourcecms.com/demo/2/28/Frog).  It may even be worthwhile to start with FrogCMS and strip down all the excess features you don't need to get to your ideal custom CMS.



### Your Thoughts and New Poll


![](http://devgrow.s3.amazonaws.com/assets/images/internet-explorer.jpg)
If you're one of the people who picked WordPress, what are your thoughts on what I've said so far?  Do you agree or disagree with the notion that WordPress is probably overkill for many static websites?  Voice your thoughts in the comments!

Also, take a look at this month's poll in the right hand column: **What is the lowest version of Internet Explorer your websites support?**
