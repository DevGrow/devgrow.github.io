---
author: Monji Dolon
comments: true
date: 2010-04-29 13:31:10+00:00
layout: post
slug: quick-seo-tip-set-preferred-domain-in-google-webmaster-tools
title: 'Quick SEO Tip: Set Preferred Domain in Google Webmaster Tools'
wordpress_id: 798
categories:
- Tutorials
tags:
- apache
- google
- lighttpd
- marketing
- nginx
- seo
- tips
---

There are a few quick fixes you can apply to your site that can help boost your search rankings.  If you haven't already done these, take a break from what you're doing and do this first - the results will be well worth the 10 minutes it will take.


## Use Either WWW or No-WWW

Search engines treat each sub-domain, including www, as a different website altogether.  This means that if your content is accessible via www and without it, both will be crawled and ranked in search engines.  This will hurt your overall page rank (effectively splitting it) and reduce the number of backlinks to your domain.  Be decisive - pick one or the other and configure your website to redirect traffic there.

The technique varies depending on your web server, but here are a few quick methods:

---

### Using Apache

First, make sure you have mod_rewrite installed and enabled.  Then create or modify an `.htaccess` file (in your directory root) and enter the following:

##### Redirect to WWW

{% highlight apacheconf linenos=table %}
RewriteEngine On
RewriteBase /
RewriteCond %{HTTP_HOST} !^www.domain.com$ [NC]
RewriteRule ^(.*)$ http://www.domain.com/$1 [L,R=301]
{% endhighlight %}

##### Redirect to No-WWW

{% highlight apacheconf linenos=table %}
RewriteEngine On
RewriteBase /
RewriteCond %{HTTP_HOST} !^domain.com$ [NC]
RewriteRule ^(.*)$ http://domain.com/$1 [L,R=301]
{% endhighlight %}

---

### Using Lighttpd


Edit your site configuration, which is either your `/etc/lighttpd/lighttpd.conf` file or virtual host file (usually in sites-available), and add:

##### Redirect to WWW

{% highlight lighttpd linenos=table %}
$HTTP["host"] =~ "^www\.(.*)" {
    url.redirect = ( "^/(.*)" => "http://%1/$1" )
}
{% endhighlight %}

##### Redirect to No-WWW

{% highlight lighttpd linenos=table %}
$HTTP["host"] =~ "^domain\.com$" {
    url.redirect = ( "^/(.*)" => "http://www.domain.com/$1" )
}
{% endhighlight %}

---

### Using nginx

Edit your site configuration, which is either your `/usr/local/nginx/conf/nginx.conf` file or virtual host file (usually in sites-available), and add:

##### Redirect to WWW

{% highlight nginx linenos=table %}
server {
    server_name  domain.com;
    rewrite ^(.*) http://www.domain.com$1 permanent;
}

server {
    server_name  www.domain.com;
    # Enter your configuration info here
}
{% endhighlight %}

##### Redirect to No-WWW

{% highlight nginx linenos=table %}
server {
    server_name  www.domain.com;
    rewrite ^(.*) http://domain.com$1 permanent;
}

server {
    server_name  domain.com;
    # Enter your configuration info here
}
{% endhighlight %}

---

### Using Windows

I personally have zero experience using Windows servers, however I did find [this article](http://www.electric-media.co.uk/blog/post/Redirecting-(301)-to-no-www-Class-B-specification-in-IIS.aspx) by [Electric Media](http://www.electric-media.co.uk/) that may help.  There are also a [few](http://www.webmasterworld.com/microsoft_asp_net/3370771.htm) [forum](http://forums.iis.net/t/1148516.aspx) posts that may shed some light into the matter.

---

## Set Preferred Domain

![Setting Preferred Domain in Google Webmaster Tools](http://devgrow.s3.amazonaws.com/assets/images/preferred-domain.gif)Using the incredibly useful [Google Webmaster Tools](http://www.google.com/webmasters/tools/), you can set a preferred domain for your website that Google will favor in rankings.  One useful bit of information is that you must verify both **www.domain.com** and **domain.com** to be able to select a preferred domain.  This took me a little searching to figure out but it makes sense - Google does really treat different sub-domains, including www, as different websites.

You can find the **Preferred Domain** setting under **Site Configuration -> Settings** in your domain settings.


## Final Words

It takes less than 10 minutes to implement www/no-www on your website and set a preferred domain - if you haven't already done so, do it ASAP!  This will help improve your search rankings and will make sure you're not penalized for duplicate content, and the results are simply well worth the time.

If you have any other quick SEO tips or suggestions, please leave them in the comments.  If you haven't already, [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) and [follow us on Twitter](http://twitter.com/ThinkDevGrow)!
