<?php
class site {
   public static $pages;
    
  function __construct() {
   $this->mainPages();
  }
  
   function load() {
    $uri = $_SERVER['REQUEST_URI'];
    $html = Page::loadpage($uri);
   
    die($html);   
    }
     
     function mainPages() {
     $content = new DirectoryIterator(path('content'));
     foreach($content as $c) {
	     if (!$content->isDot() && $content->isDir()) {
		     self::$pages["$c"] = new Page("$c");
	     }     
     }
     ksort(self::$pages);
    } 
  }