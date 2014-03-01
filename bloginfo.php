<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8>">
	<meta name="viewport" content="width=device-width">
	<title>prueba</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body>
	<h1>bloginfo</h1>	
	<ul>
		<li>Con "name" mostramos el titulo del blog.
			<ul>	
				<li><?php bloginfo('name'); ?>.</li>
			</ul>
		</li>	

		
		<li>Con "description" mostramos la descripcion del blog.
			<ul>	
				<li><?php bloginfo('description'); ?>.</li>
			</ul>
		</li>
		
		<li>Con "wpurl" mostramos la Url de WP, que se puede ver en ajustes>Dirección de WordPress (URL).
			<ul>	
				<li><?php bloginfo('wpurl'); ?>.</li>
			</ul>
		</li>
		
		<li>Con "url" mostramos la Url del blog, que se puede ver en ajustes>Dirección del sitio (URL).
			<ul>	
				<li><?php bloginfo('url'); ?>.</li>
			</ul>
		</li>


		<li>Con "admin_email" mostramos el email del admin, que se puede ver en ajustes>General.
			<ul>	
				<li><?php bloginfo('admin_email'); ?>.</li>
			</ul>
		</li>		


		<li>Con "charset" mostramos el encoding.
			<ul>	
				<li><?php bloginfo('charset'); ?>.</li>
			</ul>
		</li>

		<li>Con "version" mostramos la vesión de WP instalada.
			<ul>	
				<li><?php bloginfo('version'); ?>.</li>
			</ul>
		</li>

		<li>Con "html_type" mostramos content-type.
			<ul>	
				<li><?php bloginfo('html_type'); ?>.</li>
			</ul>
		</li>

		<li>Con "text_direction" mostramos la dirección del texto.
			<ul>	
				<li><?php bloginfo('text_direction'); ?>.</li>
			</ul>
		</li>

		<li>Con "language" mostramos el idioma de WP.
			<ul>	
				<li><?php bloginfo('language'); ?>.</li>
			</ul>
		</li>

		<li>Con "stylesheet_url" mostramos la ruta de la hoja de estilos.
			<ul>	
				<li><?php bloginfo('stylesheet_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "stylesheet_directory" mostramos content-type.
			<ul>	
				<li><?php bloginfo('stylesheet_directory'); ?>.</li>
			</ul>
		</li>

		<li>Con "template_url" o "template_directory" mostramos la ruta del theme.
			<ul>	
				<li><?php bloginfo('template_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "pingback_url" mostramos la ruta del pingback.
			<ul>	
				<li><?php bloginfo('pingback_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "atom_url" mostramos la ruta del feed atom.
			<ul>	
				<li><?php bloginfo('atom_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "rdf_url" mostramos la ruta del feed rdf.
			<ul>	
				<li><?php bloginfo('rdf_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "rss_url" mostramos la ruta del feed rss.
			<ul>	
				<li><?php bloginfo('rss_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "rss2_url" mostramos la ruta del feed rss2.
			<ul>	
				<li><?php bloginfo('rss2_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "comments_atom_url" mostramos la ruta de los comentarios por atom.
			<ul>	
				<li><?php bloginfo('comments_atom_url'); ?>.</li>
			</ul>
		</li>

		<li>Con "comments_rss2_url" mostramos la ruta de los comentarios por rss2.
			<ul>	
				<li><?php bloginfo('comments_rss2_url'); ?>.</li>
			</ul>
		</li>
	</ul>
</body>
</html>
