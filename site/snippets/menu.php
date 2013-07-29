<?php
     foreach (site::$pages as $page) {
	    if ($page->menuItem) {
	    	$active = isset($page->active) ? 'active' : null;
	    	echo '<li class="' .$active.'"><a href=' .'/'. $page->uri . '>';
	    	echo $page->menuTitle;
	    	if (isset($page->menuSpan)) {
		    	echo '<span>' . $page->menuSpan . '</span> ';
		    	}
	    	echo '</a></li>';
	    }
	 }