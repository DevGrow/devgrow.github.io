---
author: admin
comments: true
date: 2011-03-08 22:35:37+00:00
layout: post
slug: html5-contenteditable-attribute
title: Using the HTML5 ContentEditable Attribute
wordpress_id: 2310
categories:
- Tutorials
tags:
- contenteditable
- css
- css3
- editors
- html5
- web design
- wysiwyg
---

I've been trying to utilize HTML5 more recently in a few smaller projects and came across a really cool new attribute: ContentEditable.  You can add this attribute to any HTML element and it automatically makes that (and any element within it) editable.

<!-- more -->



### Live Example









Everything in this paragraph is editable in any modern browser that supports HTML5.  You should see a grey outline when you mouseover it, indicating that it is editable.  One very cool aspect of this is that it retains the CSS styling from the parent document, so the edited elements will still look correct.






	
  * Feel free to edit this list element.

	
  * Or add more by simply pressing enter after the last list item - no HTML needed!



Chris Coyier of [CSS-Tricks.com](http://css-tricks.com/show-and-edit-style-element/) pointed out that you can also let users edit CSS styles and have them update in real-time using the ContentEditable attribute.  Try it out by editing the background color of the above list:





### Adding the MouseOver Outline



To create the outline effect on mouseover, I had to add the following line to my CSS stylesheet:

`
[contenteditable]:hover {
     outline: 1px dotted #ccc;
}
`

Obviously this can be styled to your liking and since it's just using standard CSS, it's possible to do some really creative things with this (I'll leave that to your imagination).  As for using the ContentEditable attribute itself, it really is as simple as appending it to any tag like so:

`



     Any text in this DIV will be editable.



`



### Final Thoughts



This attribute really opens a lot of doors when [paired with HTML5's LocalStorage capabilities](https://www.ibm.com/developerworks/mydeveloperworks/blogs/bobleah/entry/html5_code_example_of_contenteditable_and_localstorage_create_a_web_sticky_note?lang=en).  There's also the [Aloha Editor](http://www.aloha-editor.org/), a pure HTML5 WYSIWYG editor that utilizes the ContentEditable attribute and generates a nifty real-time editor.

I'm really looking forward to the day that the majority of internet users have HTML5 capable browsers so that I can more freely use these cool new features! (hopefully soon, fingers crossed)
