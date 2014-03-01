<?php get_header("especial"); ?>
<?php get_template_part( "blocks/bloque-temperatura", "version2" ); ?>
<body class="especial">
	<h1>Pagina especial(page-4.php): <?php the_title();?></h1>
	<?php the_post();?>
	<?php the_content( );?>
	<a href="<?php bloginfo(home);?>">Ir al inicio</a>
<?php get_search_form(); ?>	
<?php get_sidebar(); ?>
<?php get_footer(); ?>