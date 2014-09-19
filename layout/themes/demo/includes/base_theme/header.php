<!doctype html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<?php

		/*
			Quando [definition] for html, o título da página precisa ser inseriodo manualmente
			Utilie as funções de título para otimizar o site (SEO)
		 */
		$title = array('home' => '| O melhor Framework para front-end',
			           'products' => array('product-1' => array( 'model-1234' => '| Modelo 1234',
			           											 'default' => '| Produto 1'),
			           	                   'product-2' => '| Produto 2',
			           	                   'product-3' => '| Produto 3',
			           	                   'product-4' => '| Produto 4',
			           	                   'default'   => '| Produtos'),
			           'about' => '| Sobre nós');

		set_title($title);
	?>
	<title>WE-Framework <?php get_title() ?></title>
	<?php
		/*
			CSS
		 */
		get_head();
	?>
</head>
<body>
<?php
	/*
		Menu
	*/
		include_file('menu.php');

?>
