<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= Page::$data->title;?></title>
		<meta charset="utf-8">	
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />	
		<meta name="description" content="<?= Page::$data->description;?>">
		<meta name="keywords" content="<?= Page::$data->keywords;?>">
		<?php theme('speak') ?>
		<?php css('site') ?>
	</head>