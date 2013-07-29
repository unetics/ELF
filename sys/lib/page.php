<?php
class Page{
	public $uri;
	public $menuItem;
	public $visible;
	public $location;
	public $active;
	public static $data;
	
	public function __construct($dir){
		$this->getUri($dir);
	}
	public function getUri($dir){
			if(preg_match('/^
			(?P<hidden>_)? 			#see if has hidden char_
			(?P<menuItem>^\d{2})? 	#see if has menuNum 
			-?
			(?P<menuTitle>[^(?]+)	#get uri 
			\(?
			(?P<menuSpan>[^)?]+)?	#get menuSpan
			/x', $dir, $matches)) {
		    	$this->menuItem = $matches['menuItem'] ?: FALSE;
		    	$this->menuTitle = $matches['menuTitle']; 
	    		if(isset($matches['menuSpan'])){
		    		$this->menuSpan = $matches['menuSpan'];
		    	}
		    	$this->uri = preg_replace('/\s/', '-', $matches['menuTitle']); 
		    	$this->visible = ($matches['hidden'] == '_' ? FALSE : TRUE);
		    	$this->location = $dir;
		    }
	}
	
	
	public static function loadpage($uri){
	    $pieces = explode("/", $uri);
	    $active = $pieces[1];

	         
    if($active == ""){
		    $active = 'home';
	}
	
	if($active == "sitemap.xml" || $active == "sitemap"){
		    $file = path('site') .'sitemap.php';
	        require($file);  
	        return "";
	}
	
	if($active == "elementree" || $active == "elementry"){
		    $file = path('site') .'elementree.php';
	        require($file);  
	        return "";
	}
	if($active == "manage" ){
		    $file = path('sys') .'manage/manage.php';
	        require($file);  
	        return "";
	}
    
    foreach (site::$pages as $page) {
	    if ($page->uri == $active) {
	    	$page->active = TRUE;
	    	$rawData = path('content') .$page->location .'/data.xml';
	    	self::$data = simplexml_load_file($rawData);    	
	    	$file = path('content') .$page->location .'/view.php';
	    	require($file);
		return;
	    }
	 }
	    
	return "404";
	}
	
}