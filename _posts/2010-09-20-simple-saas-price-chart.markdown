---
author: Monji Dolon
comments: true
date: 2010-09-20 18:37:32+00:00
layout: post
slug: simple-saas-price-chart
title: How to Create a Simple SaaS Price Chart (HTML/CSS)
wordpress_id: 1827
categories:
- Freebies
tags:
- business
- css
- examples
- freebies
- how-to
- html
- price chart
- pricing
- saas
- web design
---

As I've mentioned before, I'm working on a premium WordPress themes site at the moment and came across the need for a decent-looking SaaS-style pricing table.  After looking over dozens of other sites to get an idea of what works best, I whipped one up that satisfies the needs of my customers.  To save you a bit of time, I'm sharing the code here so you can use it in your projects as well (GPLicious!).

## Download


The zip file below contains the CSS and HTML to create all of the elements in the above example, as well as the icon images used.

<div class="download">
  <a href="http://demos.devgrow.com/pricechart/pricechart.zip" class="primary">Download</a>
  <a href="http://demos.devgrow.com/pricechart/" class="secondary">Preview</a>
</div>

[![](http://devgrow.s3.amazonaws.com/assets/images/saas-pricechart.gif)](http://demos.devgrow.com/pricechart/)

To create the price chart/table, I opted to use unordered lists over tables as it makes life easier when you want to change things around later on.  It's also fully valid code (W3C - XHTML 1.0 strict) and looks the same/correct in the latest versions of Firefox, Chrome, Safari, Opera and IE8+.  I haven't tested it in IE6 or IE7 but it _should_ look correct, can someone verify that for me in the comments?

### The HTML:

{% highlight html linenos=table %}
<div class="price-chart">
    <div class="attr-col">
        <ul>
            <li>Recurring Payments:</li>
            <li>Automatic Updates:</li>
            <li>Tutorials and Support Docs:</li>
            <li>Support Forum Access:</li>
            <li class="last">Usage Limits:</li>
        </ul>
    </div>
    <div class="pt-table">
        <div class="pt-body">
            <ul class="pt-rows">
                <li class="title"><span>Category 1</span><span>Category 2</span><span>Category 3</span><span>Hidden Column</span></li>
                <li class="fees"><span>$5</span><span>$10</span><span>$20</span><span>$25</span></li>
                <li><span>-</span><span>-</span><span>-</span><span>-</span></li>
                <li><span class="pt-yes"></span><span class="pt-yes"></span><span class="pt-yes"></span><span class="pt-yes"></span></li>
                <li><span class="pt-no"></span><span class="pt-yes"></span><span class="pt-yes"></span><span class="pt-yes"></span></li>
                <li><span class="pt-no"></span><span class="pt-no"></span><span class="pt-no"></span><span class="pt-yes"></span></li>
                <li><span class="pt-no"></span><span>Single License</span><span>2 Licenses</span><span>2 Licenses</span></li>
                <li class="fin"><span class="pt-3x"><a href="./products" class="big-button">Browse Our Products</a></span></li>
            </ul>
        </div>
        <div class="pt-special">
            <ul class="pt-rows">
                <li class="title">Special Plan</li>
                <li class="fees"><span>$100</span></li>
                <li><span>$2 / month</span></li>
                <li><span class="pt-yes"></span></li>
                <li><span class="pt-yes"></span></li>
                <li><span class="pt-yes"></span></li>
                <li><span>Unlimited Usage</span></li>
                <li class="fin"><a href="./join" class="big-button">Join Now</a></li>
            </ul>
        </div>
    </div>
</div>
{% endhighlight %}

As you can see there are 3 unordered lists being used.  The first is for the feature list, the second contains the main tabular data and the third is specifically for the special/highlighted column.  Columns are simulated in the main table using `span` tags, which support text or the use of the specified "pt-yes" and "pt-no" classes to generate the icons.  If you don't want to have the highlighted column, just delete the entire "pt-special" DIV.  You will also need to adjust some of the widths as I used approximate percentages to keep the entire table fluid.

### The CSS:

{% highlight css linenos=table %}
.attr-col { margin: 110px 0 0; float: left; width: 200px; }
.attr-col ul { background: #f4f4f4; font-weight: bold; font-size: 13px; border: 1px solid #d6d6d6; border-width: 1px 0px 1px 1px; -webkit-border-top-left-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-radius-topleft: 5px; -moz-border-radius-bottomleft: 5px; border-top-left-radius: 5px; border-bottom-left-radius: 5px; }
.attr-col ul li { text-align: right; padding: 0 10px; border-bottom: 1px solid #d6d6d6; line-height: 45px; display: block; }
.attr-col ul li.last { border-bottom: none; }
.pt-table { padding-left: 200px; display: block; position: relative; }
.pt-body { padding: 10px 0 0; }
.pt-rows li { display: block; overflow: hidden;background: #fff; border-left: 2px solid #ccc; border-right: 2px solid #ccc; border-bottom: 1px solid #d9d9d9;  }
.pt-rows li span { width: 24%; text-align: center; float: left; border-right: 1px solid #d9d9d9; display: block; line-height: 45px; height: 45px; }
.pt-rows li.title { background: #666; font-size: 22px; color: #fff; font-weight: bold; -webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; border-top-left-radius: 5px; border-bottom: 2px solid #555; border-width: 0 0 2px; }
.pt-rows li.title span { line-height: 50px; height: 50px; border: none; padding: 0 1px; text-shadow: 2px 2px #444; }
.pt-rows li.fees { border-bottom: 1px solid #ccc; }
.pt-rows li.fees span { line-height: 48px; height: 48px; background: #f7f7f7; font-size: 34px; font-weight: 700; font-family: Georgia, Arial, sans-serif; color: #4172a5; text-shadow: 2px 2px #fff; }
.pt-rows li span.pt-yes { background: url(yes-no.gif) no-repeat center 12px; }
.pt-rows li span.pt-no { background: url(yes-no.gif) no-repeat center -38px; }
.pt-rows li.fin { border-bottom: 2px solid #d9d9d9; -webkit-border-bottom-right-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomright: 5px; -moz-border-radius-bottomleft: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; height: 85px; }
.pt-rows li span.pt-3x { width: 72%; float: left; text-align: center; border: none; }
.pt-special { width: 23%; position: absolute; right: 0; top: 0; }
.pt-special .pt-rows { border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: 1px solid #a2b7ca; background: #f4faff; 	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); padding-bottom: 10px; }
.pt-special .pt-rows li { border-width: 0 0 1px; background: transparent; }
.pt-special .pt-rows li.title { height: 58px; margin: 1px; background: #d0ebfe; color: #2a719d; font-size: 30px; line-height: 65px; text-align: center; border-bottom: 1px solid #bfd4e6; border-width: 0 0 1px; text-shadow: 2px 2px #e6f5ff; }
.pt-special .pt-rows li.fees { border-bottom: 1px solid #bcd8ec; }
.pt-special .pt-rows li.fees span { background: #ecf6fe; }
.pt-special .pt-rows li.fin { border: none; text-align: center; }
.pt-special .pt-rows li span { border: none; width: 100%; }
.pt-special .pt-rows li.fin .big-button { background: #3a8bd0; top: 22px; }
.pt-special .pt-rows li.fin .big-button:hover { background: #50a6ef; }

/* Simple Button CSS: */
.big-button { font-size: 24px; line-height: 50px; font-weight: 700; color: #fff; padding: 10px 20px; background: #4a980d; text-shadow: 2px 2px rgba(0, 0, 0, 0.3); border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; border: 1px solid #407718; text-decoration: none; position: relative; top: 18px; }
.big-button:hover { color: #fff; -moz-box-shadow: 0 0 20px #fffc00; -webkit-box-shadow: 0 0 20px #fffc00; box-shadow: 0 0 20px #fffc00; background: #6fbb2f; }
.big-button:active { position: relative; top: 1px; }
{% endhighlight %}

I know it's not the prettiest code but it gets the job done for most browsers.  I used a lot of browser-specific hacks to add rounded corners and shadows, which are ignored by Internet Explorer.  You can easily swap them for images or just take them out all together if you'd like.

### Reader Exercise

There are a few things I left out of this table on purpose so you can mess with it yourself.  Instead of a single call-to-action button for the first 3 columns, try adding a unique one to each category.  Also try shifting around the highlighted column, maybe making it the 2nd column instead of the last.  That will take a moderate amount of CSS hackery to achieve and should be a worthwhile exercise.

### Feedback?

I'm eating my own dog food with this one - I will be using this table (nearly exactly) in my own project.  Thus, I appreciate your feedback as it will help improve something that will be presented to my own customers in the future.  If you end up using it in your project, please leave your link in the comments so I can check it out - or send me an e-mail if you want to keep it private.

And as always, [subscribe to the RSS feed](http://feeds.feedburner.com/devgrow) and [follow me on Twitter](http://twitter.com/ThinkDevGrow)!