---
author: Monji Dolon
comments: true
date: 2010-04-14 17:15:05+00:00
layout: post
slug: how-to-migrate-wordpress-blog-between-hosts
title: How to Migrate Your WordPress Blog Between Hosting Providers
wordpress_id: 610
categories:
- Resources
- Tutorials
tags:
- backup
- how-to
- migrate
- WordPress
---

I found this article suggestion on [Skribit](http://skribit.com/) and realized that after doing this numerous times for multiple sites, I have a pretty solid technique down for migrating WordPress blogs between hosts.  While a large part of it depends on the hosts themselves, I've compiled a a list of tips and tricks for moving your site.



#### Step 1. Picking the Right Host


An important factor when moving your WordPress blog (or website in general) is the hosting provider you're going to.  There are several things to consider, including:




  * **Service and Reliability** - Do they have a reputation for great service and support?  Are their servers constantly down?  Check reviews about your host online.


  * **Scalability** - There is a definite chance that at least one of your posts will get a decent amount of traffic.  It's fine to start with a small hosting plan but be sure to pick a host that allows you to scale up if your bandwidth or CPU consumption increases.


  * **Technology** - If your blog already gets a lot of traffic and you're looking to optimize your setup and reduce costs, changing the technology you use can create a significant reduction.  Apache is a very solid web server but both Lighttpd and nginx are faster and less CPU-intensive for static content (and if you use a cache plugin on your WordPress blog, your entire site can be made static).  Switching web server technologies can be beneficial but it also requires work, as most servers require manual installation and configuration of anything other than Apache.





#### Step 2. Backup Your Current Setup


This one is a no-brainer - make sure you backup your current blog and all the files associated with it.  Follow these steps to backup your current setup and ready the files to migrate to your new host:




  1. In WordPress, [Export](http://codex.wordpress.org/Tools_Export_SubPanel) all of your posts.


  2. Deactivate all of your plugins one by one.


  3. Using [PHPMyAdmin](http://www.phpmyadmin.net/home_page/index.php) or [SSH](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html), export your WordPress database and download it to your local machine (as SQL or gzip file).  Make a note of your database name, username and password as well.


  4. Using SSH, [WinSCP](http://winscp.net/eng/index.php) or any FTP program, copy all of the files from your site directory (often _public_html_) onto your local hard drive.  Be sure to transfer your .htaccess files as well, since they can contain configuration on URL rewrites used by WP and plugins.


The key items in this list are you MySQL database and the contents of your **wp-contents** folder.



#### Step 3. Transferring to New Host


So now that we have our files and database backed up, we're ready to transfer them over to the new hosting provider.  Most shared hosting plans come with a default set of software installed, including Apache, MySQL and PHP.  If not, make sure you install them before proceeding.  If you'd like to use Lighttpd or nginx, be sure to properly configure the rewrites to support WordPress.  Once your server is configured with your software of choice, you have two ways of restoring your old blog:


### Restoring the Original:


This is my preferred method of migrating my sites, as it restores the exact setup I had on my previous site.  The following steps assumes your server/host is properly configured to your needs:




  1. Transfer all of your site files from your local hard drive to your server.


  2. While this is happening, in PHPMyAdmin, create a new database and import the previously exported database.  I usually use the same database name, username and password, however if you end up using different ones, you will need to edit the wp-config.php file in the root directory of your site.


  3. Once your files have finished uploading and your database has been successfully imported, you should be able to login to your administration panel.  Login and activate all of your plugins, one-by-one to isolate any problems if they occur.


  4. Still in the administration panel, go through your settings to make sure everything is correctly configured and your plugins aren't reporting errors (cache plugins may give difficulty depending on folder permissions).


  5. View the live site to make sure everything looks and works correctly.





### Using New WordPress Install:


Sometimes I use a fresh install of WordPress, as it should work flawlessly out-of-box and takes care of any upgrading I may have had to do.  The steps to restore your blog with this method:




  1. Download and Install a fresh copy of WordPress on your site.


  2. Import all of your old posts (using the file you exported earlier).


  3. Copy all of the plugins from the old site to the new one, then activate them one by one.


  4. Copy over your theme files from your old site and activate your old theme.


  5. Reconfigure your permalinks and plugin settings as needed.




#### Final Notes and Recommendations


A few more tips that may help you with the migration:




  * If your new host gives you a temporary URL or an IP address in which to access your files, migrate your site and use the temporary URL to make sure your site works correctly before changing your DNS information.  This will create a seamless transition.


  * Use the opportunity of migrating to revise your blog with a new post or even better, refresh your design.


  * If you're not already using one, use a cache plugin (like [W3 Total Cache](http://www.w3-edge.com/wordpress-plugins/w3-total-cache/)) to make your website load faster and to ease the burden on your host.


In terms of hosting providers, there are two I can honestly recommend because I either use them now or have used them before.  The first is my current provider, [Linode](http://www.linode.com/).  They offer cheap VPS servers that are fast and reliable, however make sure you know how to setup your own server, as you will have to install PHP, MySQL or whatever else you use from SSH.  If you're not ready to commit that much time and energy just yet, I recommend [Media Temple](http://www.mediatemple.com/) for shared hosting (or managed VPS).  I've used them in the past and recall their support being available 24/7, a huge plus in the hosting industry.

As usual, if you have anything to add that I overlooked, please respond in the comments!  I hope this was useful to [Jay Cuthrell](http://skribit.com/blogs/fudge), who made the original article suggestion on Skribit.
