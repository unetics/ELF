<?php 
// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';

?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php foreach(site::$pages as $page): ?> 
  <?php if($page->visible){
	  echo('<url><loc>'.path('baseUrl'). $page->uri .'</loc></url>');	  
  } ?>
  <?php endforeach ?>  
</urlset>

