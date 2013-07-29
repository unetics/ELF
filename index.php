<?php
/**
 * ELF - Webdesigners little helper
 *
 * @package  ELF
 * @version  13.01
 * @author   Mitchell Bray <mitchell.bray@gmail.com>
 * @link     http://echoedlight.com
 */
session_start(); 
require('sys/paths.php');
require('sys/lib/site.php');
require('sys/lib/page.php');
require('sys/lib/helpers.php');
require('sys/lib/notify.php');


$site = new site();
$site->load();