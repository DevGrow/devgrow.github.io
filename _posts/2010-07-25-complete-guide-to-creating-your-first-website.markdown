---
author: Monji Dolon
comments: true
date: 2010-07-25 02:45:15+00:00
layout: post
slug: complete-guide-to-creating-your-first-website
title: The Complete Guide to Creating Your First Website
wordpress_id: 1546
categories:
- Tutorials
tags:
- beginners
- introduction
- programming
- Tutorials
- web development
- websites
---

<div class="note top">
  <strong>Note:</strong> This article is aimed at the completely inexperienced, those who may have always wanted a website but do not yet understand what it takes to make one.
</div>

So one thing is clear: you want/need your own website.  But how do you go about making one?  Where do you even start?  Whether it's for your business, personal blog or any obscure reason, understanding how the web works and establishing an online presence is crucial in today's high-tech world.

## Understanding the Web and How Websites Work

According to Wikipedia, a website can be defined as a "collection of related web pages, images, videos or other digital assets that are addressed relative to a common Uniform Resource Locator (URL)."  Simply put, it's a collection of internet-accessible files stored somewhere and identified by an URL/address.  Let's take a look at some more definitions first:

  * **HTML** - HyperText Markup Language, the name of the syntax/code used to create web page files (usually ending in .html)
  * **Host** - A host makes your files accessible on the web by storing your files on a server/computer and providing a persistent internet connection
  * **Web Server** - The actual machine or piece of hardware where your files are stored (usually by your host)
  * **IP Address** - The numerical address of your Web Server; All computers connected to the internet have an IP address, even yours
  * **Domain Name** - The actual address of the website, ie www.mydomain.com
  * **Registrar** - The company that has permission from [ICANN](http://www.icann.org/) to sell domain names, like [GoDaddy](http://www.godaddy.com/)
  * **DNS** - Domain Name Servers, used to connect a domain name to a host/server

Now that we have a basic understand of the terms involved, let's take a look at how they are connected.  A website is a collection of **HTML** files and digital assets (images, scripts, videos, etc.) stored on a **web server** (provided by a **host**) that makes it accessible by anyone via a persistent internet connection.  How do you find that website?  Using a **domain name**, which is the online address of your website.  The domain name is purchased from a domain **registrar** and before it can be used, it must point to the correct **domain name servers** that correctly directs traffic to your web server's **IP address**.  It may sound a bit convoluted at first but thinking about it in simpler terms might help to better grasp the concept:

![](http://devgrow.s3.amazonaws.com/assets/images/internet-diagram.gif)

In the above diagram, the green arrow represents the request you make when you enter a URL into your browser and the blue arrow represents the response sent back.  What's important to note is that many hosts offer all of these services, so from one server you can get hosting (web server access) for your files and complete domain name setup.


##### Further Reading:

  1. [Wikipedia Article on Websites](http://en.wikipedia.org/wiki/Website)
  2. [HowStuffWorks: How Web Pages Work](http://www.howstuffworks.com/web-page.htm)
  3. [How Websites Work by Quackit](http://www.quackit.com/how-websites-work/)

## Creating Your First Website

Now that you have an understanding of how websites work, it's time to create your first web page.  The below steps will take you through the entire process, from picking a domain name to uploading your files.

##### 1. Picking the Right Host

<a href="http://mediatemple.net/">
  <img src="http://devgrow.s3.amazonaws.com/assets/images/mt.gif" class="image-left" />
</a>
This can be a bit complicated depending on your needs but for nearly all starters, a simple shared hosting plan is enough to host a basic website.  I suggest [Media Temple's Grid Service](http://mediatemple.net/webhosting/gs/) to most of my clients and [Host Gator](http://devgrow.com/hostgator) to those feeling a little cheaper.  Both providers have been around for a long time and are fairly consistent in their services.

##### 2. Getting a Domain Name

<a href="http://www.godaddy.com/">
  <img src="http://devgrow.s3.amazonaws.com/assets/images/godadddy.gif" class="image-left" />
</a>
There are many providers that offer domain names for a variety of prices.  In reality, they are all resellers for ICANN and whoever sells the most can usually offer the cheapest prices.  Personally I use [GoDaddy](http://www.godaddy.com/) because they are one of the cheapest (use CHRIS3 coupon during checkout for $7.95 domains) but their website feels a bit spammy.  Throughout the entire purchasing process, they'll suggest purchasing a million of their other services (including hosting) but I would personally advise against those.

##### 3. Configuring Your DNS

<img src="http://devgrow.s3.amazonaws.com/assets/images/nameserver.gif" class="image-left" />
When you register for your domain name, you're given the option to edit it's DNS information.  If you skip this, you can find it (at least in GoDaddy) under Manage Domains by checking the relevant domain name and selecting Set Nameservers from the top menu.  Enter the addresses of the DNS servers your host provided when you signed up with them to let GoDaddy know where to send visitors when they enter your URL.

##### 4. Creating a Basic Web Page

As I mentioned earlier, HTML provides the backbone for web pages.  In fact, you can right-click on any website and click View Source to see the HTML code that is powering the site.  While it may look daunting at first, HTML is not really that complex and can be learned within a few days with some patience.  On your desktop, create a blank file and call it `index.html`, then enter the following HTML into it:

{% highlight html linenos=table %}
<html>
<head><title>My Website</title></head>
<body>
<p>Hello World</p>
</body>
</html>
{% endhighlight %}

The above code will produce this, a simple white page with the words 'Hello Word' written on it.  HTML is all about tags that must be opened and closed.  Every page should have a `head` section with a proper `title`, this is the text that is visible in the title bar of your browser.  The `body` section is where any content you want shown on the website itself should go - in this example we have a simple paragraph (`<p>`) with that contains the 'Hello World' statement.  Also note that each tag must be closed properly and in the correct order.

##### 5. Upload and Sit Back

<img src="http://devgrow.s3.amazonaws.com/assets/images/upload.gif" class="image-left" />
Now that you have your first web page ready, you need to get it online by uploading the file to your web server.  This is done using an FTP, or File Transfer Protocol, program like [FileZilla](http://filezilla-project.org/) (OS-independent) or [WinSCP](http://winscp.net/eng/index.php) (Windows only).  When you signed up for your host, you should have received an e-mail that contains an FTP address, usually _ftp.mydomain.com_, and some login credentials.  Start the FTP program, enter your credentials and transfer the `index.html` file from your computer to the _public_html_ folder (or sometimes www) on your web server.

##### Congratulations! Your Website is Now Online

If you have properly configured your host, purchased a domain name and set your DNS information, entering your URL into a browser should load up your Hello World page.

## Make it Better With Open Source Software

The example above is too simple for any practical use and chances are, you want something that looks nice and has more functionality.  While I would definitely recommend learning as much about building websites as you can first, there are a few ways to get a nice website up very quickly and with limited knowledge.  Open source software makes this possible, there are literally hundreds of blogging platforms and content management systems that you can install to have a very complete website running in minutes.

Most of these scripts require the minimum of PHP and MySQL, both of are included in 99% of shared hosting services.  Create a database, upload the script and point your browser to the install file, the rest is taken care of automatically.  The best part is that open source software is completely free to use, so definitely check it out.

##### A Few Open Source Options:

  1. [WordPress Blogging Software](http://wordpress.org/)
  2. [phpBB Forum Software](http://www.phpbb.com/)
  3. [FrogCMS Content Management System](http://www.madebyfrog.com/)

## Conclusion

This article is meant to be a very basic introduction into the very big world of web development.  It's meant for my friends who have always expressed interest in creating a website but don't have the time to invest in learning to make one.  Feedback is appreciated and comments are always welcome!

Also remember to [subscribe to the RSS Feed](http://feeds.feedburner.com/devgrow) and follow [@ThinkDevGrow](http://twitter.com/ThinkDevGrow) on Twitter!
