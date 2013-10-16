---
author: mdolon
comments: true
date: 2010-05-06 18:21:03+00:00
layout: post
slug: griddy-overlay
title: 'Griddy: Simple Grid Overlay Plugin for jQuery'
wordpress_id: 901
categories:
- Resources
tags:
- css
- grid
- jquery
- overlays
- plugins
---

Often when I’m designing layouts, I know I want to create x number of columns that are spaced y pixels apart. Usually I do the math in my head or if I’m feeling super lazy, I pull out my calculator. While playing with grid overlays earlier today, I decided to make a plugin that automatically calculates column width and row height based on the number of rows or columns present and overlays an appropriately sized grid.

**Griddy** is a small JQuery plugin thats creates a simple, customizable grid overlay on top of any element. It can also calculate row heights and column widths automatically based on the number of rows/columns and gutter space. Initially the plugin was pretty limited and did only what I needed to, however after deciding to make it public I added a few options, including:

* __rows__ (#, default = 10, use 0 to disable)
* __rowheight__ (px, default = 0 [auto])
* __rowgutter__ (px, default = 20)
* __columns__ (#, default = 4, use 0 to disable)
* __columnwidth__ (px, default = 0 [auto])
* __columngutter__ (px, default = 20)
* __color__ (hex, default = #ccc)
* __opacity__ (0-100, default = 30)

You can see the default values in the plugin code itself (all sizes in pixels). All of the styling is done inline (yuck!) to avoid linking to an external CSS file or having to use images. The numbers on top are column widths, the numbers running along the left side are row heights.

### The Code

You’ll find the code below but if you prefer, you can [download it](http://devgrow.com/griddy/griddy.js) as well (and include it like any other JQuery plugin). You can also check out the [example page](http://devgrow.com/griddy/) if you’d like.

<div class="download">
  <a href="http://devgrow.com/griddy/griddy.js" class="button primary">Download</a>
  <a href="http://devgrow.com/griddy/" class="button secondary">Preview</a>
</div>

{% highlight html linenos=table %}
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js?ver=2.9.2'></script>
<script type='text/javascript'>
  $(document).ready(function(){
    $('body').griddy();
  });
  $.fn.griddy = function(options) {
    this.css('position','relative');
    var defaults = { rows: 10, rowheight: 0, rowgutter: 20, columns: 4, columnwidth: 0, columngutter: 20, color: '#ccc', opacity: 30 };
    var opts = $.extend(defaults, options); var o = $.meta ? $.extend({}, opts, $$.data()) : opts;
    var width = this.width(); var height = $(document).height();
    if(o.columnwidth == 0) o.columnwidth = Math.floor(width - ((o.columns-1)*o.columngutter))/o.columns;
    if(o.rowheight == 0) o.rowheight = Math.floor(height - ((o.rows-1)*o.rowgutter))/o.rows;
    this.prepend("<div class='griddy' style='display:none;overflow:hidden;position:absolute;left:0;top:0;width:100%;height:"+(height-20)+"px;'><div class='griddy-r' style='position:relative;width:100%;height:100%;display:block;overflow:hidden;'><div class='griddy-columns' style='position:absolute;top:0;left:0;width:100%;height:100%;'></div></div></div>");
    if(o.columns != 0){
      for ( var i = 0; i < o.columns; i++ ) { // columns
        if(i!=0) $('.griddy-r').append("<div style='width:"+o.columngutter+"px;display:inline;float:left;height:100%;'></div>");
        $('.griddy-r',this).append("<div style='width:"+o.columnwidth+"px;height:100%;display:block;float:left;text-align:center;position:relative;'><span style='background:#000;padding:5px;color:#fff;font-weight:bold;border:1px solid #fff;'>"+o.columnwidth+"px</span><div style='width:100%;height:100%;position:absolute;top:0;left:0;display:block;background:"+o.color+";opacity:"+(o.opacity/100)+";filter:alpha(opacity="+o.opacity+");'></div></div>");
      }
    }
    if(o.rows != 0){
      for ( var i = 0; i < o.rows; i++ ) { // rows
        if(i!=0) $('.griddy-columns').append("<div style='height:"+o.rowgutter+"px;display:block;float:left;width:100%;'></div>");
        $('.griddy-columns',this).append("<div style='height:"+o.rowheight+"px;width:100%;float:left;display:block;line-height:"+o.rowheight+"px;position:relative;'><span style='background:#000;padding:5px;color:#fff;font-weight:bold;border:1px solid #fff;'>"+o.rowheight+"px</span><div style='width:100%;height:100%;position:absolute;top:0;left:0;display:block;background:"+o.color+";opacity:"+(o.opacity/100)+";filter:alpha(opacity="+o.opacity+");'></div></div>");
      }
    }
    $('body').prepend("<span onclick=\"$('.griddy').toggle();return false;\" style='position:fixed;top:5px;right:5px;cursor:pointer;padding:5px;background:#000;color:#fff;font-weight:bold;font-size:18px;z-index:999;'>Toggle Griddy</span>");
  };
</script>
{% endhighlight %}

### Final Thoughts

The plugin started out pretty bare-bones and I tried to add a few features without taking away from the main utility. If you have any improvements or suggestions for it, please leave them in the comments. If there’s interest in this plugin I’ll add a summary box somewhere on the grid that displays the basic info for each Griddy box. Your feedback is appreciated!