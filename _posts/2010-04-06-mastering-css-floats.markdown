---
author: Monji Dolon
comments: true
date: 2010-04-06 21:20:41+00:00
layout: post
slug: mastering-css-floats
title: Mastering CSS Floats
wordpress_id: 519
categories:
- General
- Tutorials
tags:
- css
- tips
- tips and tricks
---

Last month, I had the pleasure of teaching a friend basic HTML and CSS for a job that required him to know the bare essentials of building a website.  Instead of learning how to use Dreamweaver, he wanted to understand the way modern websites work, utilizing CSS stylesheets and table-less layouts.  While he quickly picked up most of what I taught him, the concept of the floating elements was something that took a lot more work and time to fully understand.



#### Root Beer and Vanilla Ice Cream?

![](http://devgrow.s3.amazonaws.com/assets/images/root-beer-float-e1270587170844.jpg)We're talking about web development here, not the tasty drink!  Simply put, the [CSS float property](http://www.w3schools.com/css/pr_class_float.asp) allows you to position block-level elements on your page.  In truth, a thorough understanding of this property is key to creating your dream layout - it can singlehandedly help you create a work of art, or if incorrectly used, bring down your website like the Titanic (depending on browser used, of course).



#### Why use the Float Property?


Consider your website like a blank piece of paper.  On it, you have several different elements, each cut out from another piece of paper and placed on this blank sheet.  Using floats allows you to place your sidebar cutout to the right and have your larger content section to the left.  Sure you can achieve a lot of these effects using tables, however using floats allows you to achieve that effect with browser cross-compatibility, fluid layouts and code that's easier to maintain or update (assuming you keep your CSS in a linked stylesheet).

When you float an element, that element will go to either the left or right edge of it's parent container element.  In my example above, the edges of the piece of paper would be considered the edges of the element.  Within it, you could have an element with a width of 50% floated right (blue outline), and within that have an element with another width of 50% floated to the left (red outline) to produce this:
![](http://devgrow.s3.amazonaws.com/assets/images/css-floats-example1.gif)



#### How to Use


Unlike some other CSS properties (I'm looking at you, font and background!), the CSS float property has very limited options and settings.  Your options are limited to: **left**, **right**, **none** and **inherit**.  Like all other CSS styles, you can invoke it inside of the HTML page like so:
`



	Some kind of content here.



`
Or you can invoke it in your CSS file you've linked to in the HTML head:
`
#box {
	float: left;
	}
`



#### What Can You Float?


Great question, I'm glad you asked.  You can float any block-level element, or any element that has a CSS display property set to block.  Most of my layouts utilize elements such as span, strong and em with the added block property, like so:
`
strong.date {
	float: left;
	display: block;
	}
`
This code will make this HTML float to the left:
`
**Some kind of content here.**
`
I could just as well use a div to achieve the same effect but I prefer this technique as it prevents layer after layer of nested divs and just makes my code look nicer (and saves a few characters of code).  One thing to keep in mind is that when you float an element, it's width is reduced to either the contents of that element or whatever you set it to in the CSS.



#### Practice


The best way to understand how the CSS float property is to simply play with it, something you probably do with any new tool/toy you get or skill you learn.  I recommend create a simple HTML skeleton and populating it with dummy elements, then play with the float settings until you are comfortable working with them.  Be sure to add colored borders to the element and some text inside of them to help you understand the container concept!

**You can use the following code to get you started:**
`

CSS Float Practice













This element has **float: right;** and **width: 50%;** applied





This element has **float: left;** and **width: 50%;** applied












`
This produces a page similar to the one in the example graphic above, with a couple of nested elements each floating in different directions.



#### With Great Power Comes Great Responsibility


While proper knowledge of the CSS float property will allow you to build complex layouts by nesting floated elements within each other, it's very important to make sure your layouts remain compatible (look the same) in the more common web browsers, including Firefox, Chrome and yes, Internet Explorer too.  I usually also check my layout in Safari and Opera for good measure, however that's up to you.  Certain elements are more prone to looking different in each browser, and the CSS float and display properties are among the list.



#### Final Remarks


Creating a layout can at times require some out-of-the-box or abstract thinking, especially when it comes to creating and positioning container elements.  Understanding the float property is a key step on the journey to produce great interfaces and design - take your time to practice these concepts and make sure your work is browser-friendly!
