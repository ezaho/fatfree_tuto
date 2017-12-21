<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',3);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');


$f3->route('GET /blog_home',
	function($f3) {
		 require('fatfree_tuto/app/view/blog_home.html');
       
	}
);
$f3->run();
