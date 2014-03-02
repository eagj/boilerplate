<DOCTYPE! html>
<html lang="es" class=""page>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

</head>
<body>
<?php get_template_part('slider'); ?>