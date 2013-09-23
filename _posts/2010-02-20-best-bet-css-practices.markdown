---
author: admin
comments: true
date: 2010-02-20 00:42:30+00:00
layout: post
slug: best-bet-css-practices
title: Best Bet CSS Practices
wordpress_id: 101
categories:
- Tutorials
tags:
- css
- tips and tricks
- Tutorials
---

CSS is powerful in styling HTML documents and making things look the way you want.  When writing CSS, there are a few factors to consider that can impact the way you write your code and structure your files.  The following are some best bet practices to clean, effective styling with CSS.<!-- more -->





### Organizing Your Files


Your file structure can largely depend on the number of documents you will be dealing with and how well you want to organize them.  For a small site, having a single **style.css** file in the root directory can suffice.  For a larger site that requires complex styling, especially blogs such as [Jason Santa Maria](http://jasonsantamaria.com/) and [Dustin Curtis](http://dustincurtis.com/), it can be very helpful to split up your CSS into multiple files.  This can help increase load times by allowing you to load only the CSS that you will use on a single page but make life easier for you, giving you the ability to quickly find relevant styles and easily make changes.

Pick a directory and file structure you're comfortable with, and one that gives you options.  My preferred structure is:



	
  * css

	
    * reset.css

	
    * grid.css

	
    * layout.css

	
    * section-name.css




	
  * images

	
  * js

	
  * index.php

	
  * header.php

	
  * etc..


There are obviously many ways to go about structuring your files, just try to maintain consistency with whichever format do end up using.





### The Reset


Resetting your CSS should be the first thing you do when styling your website.  Doing this puts you on a level playing field with all browsers, removing all unnecessary margins, padding and default styling.  You can reset the common styles yourself or save time by using an existing reset file, such as:



	
  * [Yahoo! UI CSS Reset](http://developer.yahoo.com/yui/reset/)

	
  * [Meyer's CSS Reset Reloaded](http://meyerweb.com/eric/tools/css/reset/)

	
  * [Tripoli](http://devkick.com/lab/tripoli/)

	
  * [Kyle Neath's CSS Global Reset](http://warpspire.com/features/css-frameworks/)


A best bet is to start with one of the existing CSS resets and add your own base styles to it over time, creating a simple framework to build your styles on.





### Formatting Your Code


Like with any other form of coding, semantics and proper formatting can go a long way in providing organization and increased readability.  This is especially important with CSS, where you will often find yourself returning to your code to make small adjustments and corrections as you tweak your design.  A great resource that lists most of the many ways to format CSS can be found at [CSSTricks.com](http://css-tricks.com/different-ways-to-format-css/).  I found myself agreeing with the author, Chris Coyer, in using single-line format with indenting for longer CSS stylesheets and more descriptive, multi-line format with indenting for shorter stylesheets.

An example of the **single-line format with indenting**:
`
/*** @Content ***/
#content { width: 900px; margin: 0 auto; border: 2px solid #ccc; }
	#content ul { padding: 0 0 0 20px; list-style-type: square; }
		#content ul li { padding: 0 0 0 30px; }
	#content strong { color: #ff0000; background: #fff; }
	#content em { font-weight: bold; color: #aaa; }
		#content em span { color: #444; }
`
An example of the same styles in **multi-line format with indenting**:
`
/*** @Content ***/
#content {
	width: 900px;
	margin: 0 auto;
	border: 2px solid #ccc;
	}
	#content ul {
		padding: 0 0 0 20px;
		list-style-type: square;
		}
		#content ul li {
			padding: 0 0 0 30px;
			}
	#content strong {
		color: #ff0000;
		background: #fff;
		}
	#content em {
		font-weight: bold;
		color: #aaa;
		}
		#content em span {
			color: #444;
			}
`
As you can see, while the multi-line format is easier to read, it does take up a lot more space than the alternative.





### Commenting


This one is a no-brainer for most developers, however many designers seem to overlook this simple but useful advice.  Commenting frequently helps keep your code organized and will save you time when you inevitably revisit it, allowing you to easily find your way around.  A best bet practice is to take this advice to the next level, using a numerical hierarchy and a simple table of contents for your styles:
`
/************************
  Table of Contents:
  1. Reset
  2. Layout Structuring
      2.1. Body
      2.2. Sidebar
      2.3. Footer
  3. Widgets
      3.1. Flickr Widget
************************/

/*** @ 1. Reset ***/

/*** @ 2. Layout Structuring ***/

/*** @ etc. ***/
`





### Loading Your Styles


The CSS styles you write can be stored in an individual file or embedded in the HTML itself.  The best bet practice is certainly to load an external stylesheet that has all of your styles within it, allowing you to reuse the same stylesheet in multiple documents.  This reduces code redundancy and allows you to change a style and see it reflected in all documents that load that particular stylesheet.

You can load a **single stylesheet** by linking to the file in your HTML header:
`

`

You can also **import multiple stylesheets** at once too:
`

`
A best bet in loading multiple CSS files is to use a PHP or JavaScript compressor to pack them into one file.  This allows you to maintain your internal organization by having multiple files while reducing HTTP requests for the visitor, who probably doesn't care too much about how well organized your code is and would rather have a faster website.  Some resources on how to compress your CSS code:



	
  * [3 ways to compress CSS files using PHP](http://www.catswhocode.com/blog/3-ways-to-compress-css-files-using-php)

	
  * [On-the-fly CSS Compression Script in PHP](http://manas.tungare.name/software/css-compression-in-php/)

	
  * [jscsscomp: JavaScript and CSS files compressor](http://ajaxian.com/archives/jscsscomp-javascript-and-css-files-compressor)

	
  * [Huge list of compressors by Robert Nyman](http://robertnyman.com/2010/01/19/tools-for-concatenating-and-minifying-css-and-javascript-files-in-different-development-environments/)







### Conclusion


CSS is a major part of making your website look the way you want, taking the time to make sure your code is well organized and follows the best bet practices can make life easier for you in the long run.  Keep your code clean and organized, comment frequently and compress your files to keep not only your visitors happy but your whole design process painless and dare I say... fun!
