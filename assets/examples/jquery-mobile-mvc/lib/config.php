<?php

// Global Variables
define("APP_NAME","jQuery Mobile MVC Framework");
define("APP_DESCRIPTION","A simple PHP MVC framework utilizing jQuery Mobile");
define("APP_KEYWORDS","jquery mobile, jquery mobile mvc, jquery mobile php, jquery mobile framework");
define("PASSWORD_SALT","justjquerying");
define("CACHE_ENABLE",true);
define("BASE_DIR",dirname(dirname(__FILE__)));
define("LIB_DIR",dirname(__FILE__));

// Be sure to set these!
define("BASE_URL","http://demos.devgrow.com/jquery-mobile-mvc/");
define("COOKIE_DOMAIN","devgrow.com");

// Database Config
$database = array (
	"user"  => "devgrow_demos",
	"pass"  => "devgrowdemos@1234",
	"host"  => "localhost",
	"dbname" => "devgrow_demos"
);

// The following controllers/actions will not be cached:
$do_not_cache = array("user","");

require_once(LIB_DIR."/functions.php");
require_once(LIB_DIR."/models/cache.php");
require_once(LIB_DIR."/models/database.php");
require_once(LIB_DIR."/models/user.php");
require_once(LIB_DIR."/models/template.php");