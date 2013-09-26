---
author: Monji Dolon
comments: true
date: 2010-10-05 15:45:35+00:00
layout: post
slug: simple-cache-class
title: Creating a Simple, Reusable PHP Cache Class
wordpress_id: 1861
categories:
- Freebies
tags:
- caching
- class
- how-to
- php
- programming
- scalability
- server
- snippets
- web development
---

Recently for a small project, I turned one of my previous [WordPress cache experiments](http://www.hongkiat.com/blog/display-wordpress-sidebar-on-other-non-wp-sites/) into a simple, reusable PHP class that you can throw into any project for quick caching.  It's released under MIT license so feel free to use and modify it however you'd like!


## Download


The following zip file contains the PHP class and license information.


[Download Source File (zip)](http://devgrow.com/examples/SimpleCache.zip)




### The Cache Class


`
class Cache {

	// Pages you do not want to Cache:
	var $doNotCache = array("admin","profile");

	// General Config Vars
	var $cacheDir = "./cache";
	var $cacheTime = 21600;
	var $caching = false;
	var $cacheFile;
	var $cacheFileName;
	var $cacheLogFile;
	var $cacheLog;

	function __construct(){
		$this->cacheFile = base64_encode($_SERVER['REQUEST_URI']);
		$this->cacheFileName = $this->cacheDir.'/'.$this->cacheFile.'.txt';
		$this->cacheLogFile = $this->cacheDir."/log.txt";
		if(!is_dir($this->cacheDir)) mkdir($this->cacheDir, 0755);
		if(file_exists($this->cacheLogFile))
			$this->cacheLog = unserialize(file_get_contents($this->cacheLogFile));
		else
			$this->cacheLog = array();
	}

	function start(){
		$location = array_slice(explode('/',$_SERVER['REQUEST_URI']), 2);
		if(!in_array($location[0],$this->doNotCache)){
			if(file_exists($this->cacheFileName) && (time() - filemtime($this->cacheFileName)) < $this->cacheTime && $this->cacheLog[$this->cacheFile] == 1){
				$this->caching = false;
				echo file_get_contents($this->cacheFileName);
				exit();
			}else{
				$this->caching = true;
				ob_start();
			}
		}
	}

	function end(){
		if($this->caching){
			file_put_contents($this->cacheFileName,ob_get_contents());
			ob_end_flush();
			$this->cacheLog[$this->cacheFile] = 1;
			if(file_put_contents($this->cacheLogFile,serialize($this->cacheLog)))
				return true;
		}
	}

	function purge($location){
		$location = base64_encode($location);
		$this->cacheLog[$location] = 0;
		if(file_put_contents($this->cacheLogFile,serialize($this->cacheLog)))
			return true;
		else
			return false;
	}

	function purge_all(){
		if(file_exists($this->cacheLogFile)){
			foreach($this->cacheLog as $key=>$value) $this->cacheLog[$key] = 0;
			if(file_put_contents($this->cacheLogFile,serialize($this->cacheLog)))
				return true;
			else
				return false;
		}
	}

}
`
All of the functions are fairly self-explanatory.  The `__construct` function is called when you instantiate the class - all it does is set the variables and create (or load) the cache log file.  I chose to use a log file to deal with cache creation and deletion as it reduces unnecessary calls and is a bit faster, in my opinion.  If you'd rather just delete expired files, feel free to change that section to however you see fit.

The `start` function first checks the current URL to make sure that the base name is not in the "do not cache" list and either **a)** begins the cache process or **b)** loads the existing cache.  The `end` function checks to see whether or not the page is being cached and if so, creates the static file and updates the cache log file.

The last two functions are used for deleting cache files.  The `purge` function takes a location (full URL for now) and marks it for deletion, while the `purge_all` function marks all files for deletion.  When a file is marked for deletion, the next time a user visits that page the script will create a fresh cache file (it will not be deleted in advance, simply overwritten).



### How to Use the Cache Class


Using the cache class is very easy!  Just call the `start` function at the part of your script where you'd like to start caching and the `end` function wherever the cache ends.  For me personally, I tend to start caching after the header section (where I have dynamic elements, such as username and profile links) and end caching after the footer.  I also make use of the `doNotCache` array to make sure my admin and profile pages are not cached.  Lastly, I add the `purge_all` function to my admin save function, so that whenever I update the site the cache is cleared.

**To start the Cache:**
`
include_once("cache.php");
$cache = new Cache;
$cache->start(); // Start caching (if needed)

// Other PHP that generates your pages goes here
`
**And to end the Cache:**
`
$cache->end(); // Stop caching
`
Anything outside of the `start` and `end` functions are left alone, so be sure to cache wisely.



### Conclusion


I wrote this class after having the need for really simple caching that didn't require a bunch of other libraries to use.  If this is useful for your project, I'd love to hear about it in the comments (it would make my day), and I really appreciate any feedback you may have!  I know my PHP isn't pro level (probably not even close) but I hope it's good enough to use in small projects.

Lastly, if you haven't subscribed to the [RSS feed](http://feeds.feedburner.com/devgrow), please consider doing so to get more posts like this, and [follow me on Twitter](http://twitter.com/ThinkDevGrow)!

