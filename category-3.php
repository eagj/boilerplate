<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title>prueba</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body class="villanos">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<p><?php the_title();?></p>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	
	
</body>
</html>
