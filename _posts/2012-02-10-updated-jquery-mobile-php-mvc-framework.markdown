---
author: mdolon
comments: true
date: 2012-02-10 04:50:56+00:00
layout: post
slug: updated-jquery-mobile-php-mvc-framework
title: Updated jQuery Mobile PHP MVC Framework
wordpress_id: 2484
categories:
- Resources
tags:
- development
- jquery
- jquery mobile
- jquery mobile framework
- php
- php mvc
- programming
---

I've just spent the past couple of days rewriting a lot of the [jQuery Mobile PHP MVC Framework](https://github.com/mdolon/jQuery-Mobile-PHP-MVC).  A complete list of updates is available after the break, so check it out and let me know if you have any feedback!

<div class="download">
  <a href="https://github.com/mdolon/jQuery-Mobile-PHP-MVC" class="button primary">Download at Github</a>
</div>

[![](http://devgrow.s3.amazonaws.com/assets/images/jquery-mobile-mvc.gif)](https://github.com/mdolon/jQuery-Mobile-PHP-MVC)

#### Updates:

  * Overall code base simplified and cleaned up, unused functions removed
  * Support for PHP PDO
  * Now uses a simple SQLite database with a single table for the base application
  * Now uses a smarter, more effective PHP router class (thanks to [Dan Sosedoff](http://blog.sosedoff.com/2009/09/20/rails-like-php-url-router/))
  * All of the code is now thoroughly commented
  * You no longer have to specify the base directory, it is automatically directed
  * Fixed bug related to page redirections
  * Fixed bug that caused buttons to show up improperly
  * Fixed bug that prevented 'Back' button from appearing

Of course, there is always room for improvement so any and all feedback is appreciated.  There are certainly a few bad programming practices, so if more experienced coders could help point them out I will gladly fix them up!