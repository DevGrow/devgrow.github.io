---
author: Monji Dolon
comments: true
date: 2011-01-06 23:43:08+00:00
layout: post
slug: jquery-mobile-php-mvc-framework
title: jQuery Mobile PHP MVC Framework
wordpress_id: 2189
categories:
- Resources
tags:
- framework
- GPL
- jquery
- jquery framework
- jquery mobile
- mvc
- open source
- php
- php framework
---


I've released an update to this, check out the [blog post](http://devgrow.com/updated-jquery-mobile-php-mvc-framework/) for more details!




In my [Introduction to jQuery Mobile](http://devgrow.com/mobile-web-dev-using-jquery-mobile/), I mentioned that I had plans for a simple MVC framework using jQuery Mobile and that I would release it if there was enough interest (there was!).  While it's not completely finished yet, I've decided to release it in hopes that others find use in it and can perhaps even contribute towards it's development.



## Preview and Download



You can view the files or contribute at the [Github repository](https://github.com/mdolon/jQuery-Mobile-PHP-MVC).  The code is released under GPL so use it however you'd like!


[Download Files (zip)](https://github.com/mdolon/jQuery-Mobile-PHP-MVC/zipball/master)[View Online Demo](http://demos.devgrow.com/jquery-mobile-mvc/)



[![](http://devgrow.s3.amazonaws.com/assets/images/jquery-mobile-mvc.gif)](https://github.com/mdolon/jQuery-Mobile-PHP-MVC)



### Current Features






  * MVC Architecture


  * Simple Database (MySQL) and Authentication Classes


  * Custom routing for clean URLs


  * Apache (.htaccess), NGINX and Lighttpd support





### Configuration



Please read this part, as it is crucial to getting the application to work on your test machine.  You must manually edit the `config.php` file with, at the least, your database information/credentials and the **BASE_URL** of the installation.  **The app will not work without these two settings.**

`/lib/config.php`:
`
...
// Be sure to set these!
define("BASE_URL","http://localhost/jqmobile/");
define("COOKIE_DOMAIN","localhost");

// Database Config
$database = array (
	"user"  => "root",
	"pass"  => "",
	"host"  => "localhost",
	"dbname" => "jqmobile"
);
...
`



### Work in Progress



Please be aware that this code is still in development and is likely to have bugs that need fixing.  It is by all means beta-ware and I wouldn't recommend using it in a production environment as-is.  That said, it should still provide you with a solid base to build your mobile application from, so [download the files](https://github.com/mdolon/jQuery-Mobile-PHP-MVC) and dig in!  If you are interested in contributing to the code, please get in touch via the [contact page](http://devgrow.com/contact) or [Github](https://github.com/mdolon).

For more articles and resources like this, be sure to [Subscribe to our RSS Feed](http://feeds.feedburner.com/devgrow) and [Follow us on Twitter](http://twitter.com/ThinkDevGrow)!

