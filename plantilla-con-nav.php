<?php 
/*
Template Name: Plantilla con Nav
*/
?>

<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title>prueba</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body>
	<h1>Pagina(page.php): <?php the_title();?></h1>
	<?php the_post();?>
	<?php the_content( );?>
	<a href="<?php bloginfo(home);?>">Ir al inicio</a>
	
<?php include("menu-extra.php") ?>
</body>
</html>
