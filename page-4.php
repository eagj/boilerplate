<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title>prueba</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body class="especial">
	<h1>Pagina especial(page-4.php): <?php the_title();?></h1>
	<?php the_post();?>
	<?php the_content( );?>
	<a href="<?php bloginfo(home);?>">Ir al inicio</a>
	
</body>
</html>
