<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title>prueba</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body>
	<h1>Entrada o articulo </h1>
	<?php the_post();?>
	<?php the_content( );?>
	<!-- <img src="<?php bloginfo(template_url); ?>/screenshot.png"/> -->
	
</body>
</html>