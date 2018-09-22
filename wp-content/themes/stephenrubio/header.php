<!DOCTYPE html><html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="keywords" content="Stephen, Rubio, video, game, design, analysis">
	<meta name="author" content="You">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Source+Sans+Pro" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="<?php echo get_bloginfo('template_directory'); ?>/index.css" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>

<body>
	<div class="flex flex-start flex-no-shrink">
		<nav class="main-nav px-8">
		<div class="logo"></div>
		<h1>Stephen <div class="rubio"><i>Rubio</i></div></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		</nav>
