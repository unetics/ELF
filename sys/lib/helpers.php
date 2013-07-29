<?php
// embed a template snippet from the snippet folder
function snippet($snippet, $data=array(), $return=false) {
  $file = path('snippets').$snippet.'.php';
  if(!file_exists($file)) return false;
  require($file);
}

function css($css, $return=false) {
  $file = path('css').$css.'.css';
  if(file_exists($file))   echo('<link rel="stylesheet" href="/'.$file.'" type="text/css" media="screen" />');
}

function img($img, $return=false) {
  $file = path('img').$img;
 	
  if (file_exists($file))
  {
  	echo '<img src="'.$file.'" alt="image01"/>';
  }
  else
  {
  	echo '<!--'.$file.'" NOT FOUND -->';
  }
}

function js($js, $return=false) {
  $file = path('js').$js.'.js';
 	
  if (file_exists($file))
  {
  	echo '<script type="text/javascript" src="'.$file.'""></script>';
  }
  else
  {
  	echo '<!--'.$file.'" NOT FOUND -->';
  }
}

