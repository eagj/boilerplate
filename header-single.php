<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

</head>
<body class="single">

<?php get_template_part('nav'); ?>