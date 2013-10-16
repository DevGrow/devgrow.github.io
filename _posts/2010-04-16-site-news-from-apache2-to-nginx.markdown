---
author: mdolon
comments: true
date: 2010-04-16 04:10:20+00:00
layout: post
slug: site-news-from-apache2-to-nginx
title: 'Site News: From Apache2 to nginx'
wordpress_id: 626
categories:
- General
tags:
- apache2
- nginx
- WordPress
---

If you've been to the site today then you've probably noticed that it was down intermittently throughout the evening.  One of our articles was featured on [Smashing Magazine](http://www.smashingmagazine.com/)'s Twitter stream (sweet!) and I'm sad to say the site crumbled under the traffic spike.  I've made a few changes that will hopefully make the site more resistant to bumps in traffic.


#### The Original Setup

I've mentioned this before but the site is hosted on the smallest VPS available at Linode, which features 360MB of RAM and 200GB of bandwidth.  I used a fairly standard LAMP setup, with Apache2, MySQL and PHP with fastcgi.  I was also using W3 Total Cache, the supposed top dog of WordPress cache systems.  My server admin skills are still very raw (nearly nonexistent), so I skipped out on major fine-tuning of Apache and MySQL and left things as-is, for the most part.

For the most part, things seemed to be running fine.  Every time the site would get upwards of 200-300 concurrent users, however, CPU usage and IO rates would skyrocket, causing the entire VPS to lock up and require a restart.  I tried messing with the tuning a bit but ultimately I decided that if wanted traffic to increase over time, I needed to make the site resistant to the Digg/Reddit/HN/etc.-effect.


#### Enter nginx

I've switched from Apache to Lightppd on another project and the changes were instantly noticeable.  The site was averaging several thousand pageviews a day and with Apache, my CPU usage on a 360MB slice would hover at around 70% and would crash the site during high usage.  Since switching to Lighttpd, the site rarely goes above 20% CPU usage.

I keep hearing about how amazing nginx is, so I've decided to take the plunge and test it out.  Overall it was a cinch to install and configure, with the rewrites being painless (compare to the nightmare that was Lighttpd config).  If it performs nearly as well as it's supposed to, I think I'm going to be sticking to this one for a while.


#### Sorry for the Downtime

The site was down several times throughout the evening and if you were trying to access it, I apologize.  If you're still getting errors, bear with me until they're resolved.  For you new readers, please consider adding us to your RSS readers and follow us on Twitter!  Thanks for your continued support.