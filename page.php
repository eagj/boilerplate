<?php get_header(); ?>

<body>
	<h1>Pagina(page.php): <?php the_title();?></h1>
	<?php the_post();?>
	<?php the_content( );?>
	<a href="<?php bloginfo(home);?>">Ir al inicio</a>
	
<?php get_footer(); ?>