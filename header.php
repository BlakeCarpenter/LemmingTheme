<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php
			$title = bloginfo('name','display');
			$title .= wp_title('|');
			echo($title);
			?></title>
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<?php wp_head();?>
	</head>