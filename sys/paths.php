<?php
if ( ! defined('DS'))
{
	define('DS', DIRECTORY_SEPARATOR);
}

$GLOBALS['paths']['content'] = 'content'.DS;

$GLOBALS['paths']['site'] = 'site'.DS;

$GLOBALS['paths']['snippets'] = 'site/snippets'.DS;

$GLOBALS['paths']['css'] = 'site/assets/css'.DS;

$GLOBALS['paths']['theme'] = 'site/theme/base/css'.DS;

$GLOBALS['paths']['js'] = 'site/assets/js'.DS;

$GLOBALS['paths']['img'] = 'site/assets/img'.DS;

$GLOBALS['paths']['error'] = 'content/error'.DS;

$GLOBALS['paths']['home'] = 'content/home'.DS;

$GLOBALS['paths']['sys'] = 'sys'.DS;

$GLOBALS['paths']['lib'] = 'system/libraries'.DS;

$GLOBALS['paths']['base'] = __DIR__.DS;

$GLOBALS['paths']['baseUrl'] = $_SERVER['HTTP_HOST'] .DS;

function path($path)
{
	return $GLOBALS['paths'][$path];
}

function set_path($path, $value)
{
	$GLOBALS['paths'][$path] = $value;
}