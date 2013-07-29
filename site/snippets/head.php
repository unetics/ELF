<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= Page::$data->title;?></title>
		<meta charset="utf-8">	
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />	
		<meta name="description" content="<?= Page::$data->description;?>">
		<meta name="keywords" content="<?= Page::$data->keywords;?>">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<?php theme('base') ?>
		<?php css('site') ?>
	</head>