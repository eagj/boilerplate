<?php get_header(); ?>

<body>
	<h1>Entrada o articulo </h1>
	<?php the_post();?>
	<?php the_content( );?>
	<!-- <img src="<?php bloginfo(template_url); ?>/screenshot.png"/> -->
	
<?php get_footer(); ?>