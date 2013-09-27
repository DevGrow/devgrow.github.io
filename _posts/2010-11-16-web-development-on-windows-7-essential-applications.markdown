---
author: Monji Dolon
comments: true
date: 2010-11-16 14:38:09+00:00
layout: post
slug: web-development-on-windows-7-essential-applications
title: 'Web Development on Windows 7: Essential Applications'
wordpress_id: 2012
categories:
- Resources
tags:
- adobe
- essential applications
- microsoft
- photoshop
- productivity
- programming
- tips and tricks
- web design
- web development
- windows
- windows 7
---

As I mentioned in my [last post](http://devgrow.com/how-i-create-websites-a-look-inside-the-creative-process/), I've been asked for specific information on how I work.  Having a solid work environment can go a long way in increasing your efficiency and help you stay organized, so today we'll take a look at the setup of my desktop computer.

The majority of my web design and development work is done on a 64-bit Windows 7 desktop.  For more serious programming projects (pretty much any language other than PHP, HTML or CSS), I do switch over to Ubuntu in VMware Workstation, but nearly all of my web design client work is done in Windows.  From my experience so far, Windows 7 has been absolutely stellar for web development - it's easy to use, fast and just plain works.

## Using the Right Software

The key to working in any OS is using the right tools to make your work process as painless and efficient as possible.  Thankfully for Windows users, there are plenty of great tools available for web design and development.

### [Notepad++](http://notepad-plus-plus.org/)

[![](http://devgrow.s3.amazonaws.com/assets/images/notepad.gif)](http://notepad-plus-plus.org/)
This is probably the best text editor available on Windows and best of all, it's completely open source.  Notepad++ supports custom styles, recognizes a multitude of different programming languages and supports third-party plugins.  For my setup, I use a slightly modified Ruby Blue style/theme and the following plugins:

  * [Explorer](http://sourceforge.net/projects/npp-plugins/) - Adds a file browser in a pane to the left or right of your editing screen, giving you quick access to your project files
  * [Zen-Coding (Python-based)](http://code.google.com/p/zen-coding/downloads/detail?name=Zen.Coding-Notepad%2B%2B.v0.6.1.zip&can=2&q=) - If you don't know what Zen Coding is, just [watch the video](http://vimeo.com/7405114).  It will change the way you write web pages!

There are a few more installed but these are the two I really can't live without.  I'm still new to Zen Coding but so far it's been an incredible experience, I highly recommend it!

### [Adobe Photoshop and Illustrator CS5](http://www.adobe.com/products/photoshop/compare/)

[![](http://devgrow.s3.amazonaws.com/assets/images/photoshop.gif)](http://www.adobe.com/products/photoshop/compare/)
These are two tools that are an absolute necessity for serious designers and web devs.  I use Photoshop for rough mockups and full compositions before translating them into HTML/CSS in Notepad++.  Illustrator is a vector-based drawing tool that is critical for logo design, as you typically want to create something that is scalable without a loss in quality.

For Photoshop CS5, I use the Essentials workspace setting with a few customizations, including having the info panel show by default (very useful for sizing elements).  Unlike other developers, I prefer making my mockups to nearly exact scale.  It takes a bit longer to do but I like having an accurate depiction of my design and element placement before coding it out.  My rulers are (of course) set to pixels and my default document size is 1280px by 840px, which happens to fit perfectly in my 1680px by 1050px desktop resolution (no scrolling required even with side panels displayed).

### [PuTTY + Pageant](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)

[![](http://devgrow.s3.amazonaws.com/assets/images/putty1.gif)](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)
PuTTY is an open source SSH program that just works.  It's dead simple to use and allows you to save profiles to easily connect to your frequently used servers.  Pageant comes with the default PuTTY installation and allows you to load/use SSH public or private keys (required for using Git).

### [TortoiseGit](http://code.google.com/p/tortoisegit/)

[![](http://devgrow.s3.amazonaws.com/assets/images/tortoisegit.gif)](http://code.google.com/p/tortoisegit/)
Git is a version control system made famous by [Github](http://www.github.com/), which provides hosting and a plethora of other goodies for your Git projects.  I use Git for all of my bigger projects as it makes a) provides an additional level of data security/redundancy and b) makes deploying new code pretty painless (at least for smaller PHP projects).

### [WinSCP](http://winscp.net/eng/index.php)

[![](http://devgrow.s3.amazonaws.com/assets/images/winscp.gif)](http://winscp.net/eng/index.php)
WinSCP is an open source SFTP, FTP and SCP client for Windows.  It's free, secure and easy to use - what more could you ask from an FTP client?

### Firefox, Chrome, IE8, Safari and Opera

![](http://devgrow.s3.amazonaws.com/assets/images/browsers.gif)
These are all of the browsers I use on nearly every client project.  I use Chrome as my primary browser and debug my HTML/CSS using the [WebKit Web Inspector](http://webkit.org/blog/197/web-inspector-redesign/) (inspect element) it comes with.  I'll also debug in Firefox using Firebug from time to time, however most layouts that work in Chrome will also work in Firefox.  As the project progresses, I'll check the layout in IE8, Safari and Opera from time to time to make sure the majority of users will have a similar experience.  I try to avoid IE7 and below if at all possible, though I will break them out if the client's market demands it.

### [Dexpot](http://www.dexpot.de/index.php?lang=en)

[![](http://devgrow.s3.amazonaws.com/assets/images/dexpot.gif)](http://www.dexpot.de/index.php?lang=en)
One thing Ubuntu and OSX have that I sorely miss in Windows is the ability to have multiple desktops.  Thankfully, there are third-party applications like Dexpot to help rectify this - use this free software to add multiple desktops and an Exposé-like feature to Windows.

### [XAMPP Lite](http://www.apachefriends.org/en/xampp-windows.html)

[![](http://devgrow.s3.amazonaws.com/assets/images/xampp.gif)](http://www.apachefriends.org/en/xampp-windows.html)
XAMPP Lite is a quick and easy way to get Apache and MySQL (with PHPMyAdmin) running on Windows.  This is a critical tool to develop and test web applications locally, as it makes the setup and installation of the most common web environment nearly effortless.

### Rainmeter, Desktop Gadgets and Sticky Notes

![](http://devgrow.s3.amazonaws.com/assets/images/desktop.jpg)
The last few applications are not critical but do help with organization and maintaining your system:

  * [Rainmeter](http://rainmeter.net/RainCMS/) - Provides incredible skinning options and widgets to your Windows desktop ([check out the skins](http://customize.org/rainmeter))
  * [Windows Desktop Gadgets](http://msdn.microsoft.com/en-us/library/dd834142.aspx) - More widgets for your desktop (I only use two, one for weather and a CPU monitor)
  * [Sticky Notes](http://windows.microsoft.com/en-US/windows7/products/features/sticky-notes) - Included in Windows 7 (under Accessories), this is a great application for writing down quick notes and tasks that sits on the desktop

## Conclusion

That wraps up the list of essential applications I use on a daily basis on my Windows 7 desktop.  For more programming-heavy projects using RoR or Django, or based on NGINX or Lighttpd web environments, I prefer using the latest stable Ubuntu in VMware Workstation.  Prior to selling my laptop, I used a 15" Macbook Pro for travel and for iOS development (and I'm planning on purchasing another one in January).

##### What is your ideal web development environment?  Do you have any other applications you recommend?

Also, please remember to [Subscribe to the RSS Feed](http://feeds.feedburner.com/devgrow) and [Follow me on Twitter](http://twitter.com/ThinkDevGrow)!