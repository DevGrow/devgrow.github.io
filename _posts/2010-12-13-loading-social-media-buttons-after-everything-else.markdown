---
author: Monji Dolon
comments: true
date: 2010-12-13 19:57:47+00:00
layout: post
slug: loading-social-media-buttons-after-everything-else
title: How To Load Social Media Buttons After Everything Else
wordpress_id: 2146
categories:
- Tutorials
tags:
- jquery
- programming
- share buttons
- sharebar
- social media
- web design
---

While working on the new theme for this site, I realized that the various social media buttons I use were making the entire page load considerably slower.  As soon as the browser hit that region of the page (the end of each post), everything would stop until those pesky buttons were loaded.  Using a little bit of jQuery, however, it's possible to get around this and load these heavier elements after the rest of the page has finished loading.



## The Code



In order to load the share buttons after everything else, we need to do two things.  First, we need to edit our post template (`single.php`) to call a jQuery function _after_ everything has loaded.  We call this function in `single.php` instead of an external JavaScript file since some buttons benefit from the post permalink or title, so we need to make sure our buttons have access to that information as well.



### single.php



`




`

In the code above, we're calling the function `get_social` using jQuery's [window load](http://api.jquery.com/ready/) function instead of the typical document ready - this makes means our function is called after everything has loaded, whereas document ready loads all code immediately after the DOM is ready.  Inside the window load event, we call our function and pass the title and permalink so our buttons have access to it.

In the `get_social` function itself, we can use jQuery's load function to pass our variables, get the response and populate or `div` (with the id of "sharing-buttons").  Please be sure to point to the correct URL of your share.php file (which we'll create next) - you may even want to use the absolute URL to minimize errors (ie http://...).



### share.php



The `share.php` simply contains all of your dynamic button code.  Here's what mine looks like:

`












	[Share](http://www.facebook.com/sharer.php)






	[Tweet](http://twitter.com/share)



`

In the beginning, I grab the permalink and title variables from either `$_GET` or `$_POST` (a bit more future-proof in case our function changes) and use the default button codes provided by these services.  Note that I don't use the permalink or title in any of the above buttons, as these services automatically detect that information from whatever page they're posted on, however it's there if you need it!

That should be it though - if you edited your `single.php` and correctly point to your `share.php` file in the `get_social` function, you should be loading your buttons after the rest of the page is completely loaded!



## See It In Action



The current DevGrow theme (v3) is using this code in every post.  To see it, go to any article posted on this site and immediately scroll to the 'Share this Article' section.  You should just see the small icons (RSS, email, reddit, etc.) until the entire page has finished loading, after which 3 additional buttons (Digg, Facebook and Twitter) should pop up above it.  If you take too long to scroll there you may end up missing it but keep an eye on your status bar - you should see the buttons loaded only after the rest of the page has finished loading.



## Caveats and Conclusion



While working on this, I found that **some buttons did not function correctly when loaded this way**, such as the one for [DZone](http://www.dzone.com/links/index.html).  I didn't spend too much time trying to figure out why but I assume it has to do with the way their button code extracts the host URL, which it may have had difficulty with since it was being loaded from an external file.  While it would've been nice to include that button, I found that having a faster loading site is much more important to me than any single service.

Also, please keep in mind that this won't really change your overall page loading times - it will only make it so that the rest of the site is loaded before the social media buttons.  It's useful if you find these buttons to be slow at times and parts of your page render white/blank until they're finished loading, which is the issue I was having.

Are any of you doing something similar to this in order to load your content a little faster?  Anyone know why the DZone button isn't working or know how to fix it?
