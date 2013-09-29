---
author: Monji Dolon
comments: true
date: 2010-06-29 17:31:54+00:00
layout: post
slug: quick-seo-tip-2-submit-your-sitemap
title: 'Quick SEO Tip 2: Submit Your Sitemap'
wordpress_id: 1106
categories:
- Tutorials
tags:
- quick seo tips
- seo
- seo tips
- sitemap
---

A sitemap is an index of pages and content found on your website.  If you don't have a sitemap yet, make one now using free sitemap generators or plugins.  If you do have one, submit it to the big search engines to make sure your website is correctly indexed and ranked.

## Creating a Sitemap

A sitemap is simply a listing of all the important pages of your website.  It's a directory that can be easily and quickly understood by both search engines and visitors who may be lost.  Your sitemap can be a simple page on your website that lists all of the inner pages, but ideally you should use an XML sitemap, as it is preferred by most search engines.  The structure of your XML sitemap is simple:

{% highlight xml linenos=table %}
<?xml version="1.0" encoding="UTF-8"?>
 <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
     <loc>http://devgrow.com/sharebar-wordpress-plugin/</loc>
     <lastmod>2010-06-16</lastmod>
     <changefreq>yearly</changefreq>
     <priority>0.8</priority>
   </url>
   <url>
     <loc>http://devgrow.com/articles/</loc>
     <lastmod>2010-06-01</lastmod>
     <changefreq>weekly</changefreq>
     <priority>0.5</priority>
   </url>
 </urlset>
{% endhighlight %}

The above example indexes two pages from my site, a blog post and the main article homepage.  Obviously this method can be time consuming if you have a lot of pages, and this is the perfect reason to use services like [MakeASitemap.com](http://www.makeasitemap.com/) or the [XML Sitemap Generator](http://www.xml-sitemaps.com/) to automatically index your site.  If you're running WordPress, I highly recommend the [Google XML Sitemaps plugin](http://www.arnebrachhold.de/redir/sitemap-home/), which automates sitemap creation for you blog.  If you've manually created the file, save it in the root of your site.

## Submitting Your Sitemap

After you've created your sitemap, submitting it to search engines is a great way to help them identify which pages on your site are worth crawling, how frequently they should be crawled and their overall search priority.  A good sitemap can help bring traffic to your site by essentially providing search engines with a guideline to correctly index and rank your pages.

**Places to submit your XML sitemap:**

  * [Google Webmaster Tools](http://google.com/webmasters/)
  * [Yahoo! Site Explorer](http://siteexplorer.search.yahoo.com/)
  * [Bing Webmaster Tools](http://www.bing.com/webmaster)

You will have to login and verify you own the site in order to submit a sitemap, however it's well worth the time.

## Conclusion

If you haven't submitted your sitemap, do so to help search engines better index and rank your pages.  If you're using WordPress, be sure to check out that [Google XML Sitemaps plugin](http://www.arnebrachhold.de/redir/sitemap-home/), it can make life a heck of a lot easier.

If you have any other SEO tips, please leave them in the comments.  And as always, [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) if you haven't already and [follow us on Twitter](http://twitter.com/ThinkDevGrow)!