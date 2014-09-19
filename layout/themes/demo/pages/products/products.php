<h4>Products is alive</h4>


<?php if(!get_request('page')): ?>
	<!-- Produtos -->
	<p><a href="<?php echo base_url() ?>products/product-1">Produto1</a></p>
	<p><a href="<?php echo base_url() ?>products/product-2">Produto2</a></p>
	<p><a href="<?php echo base_url() ?>products/product-3">Produto3</a></p>
	<p><a href="<?php echo base_url() ?>products/product-4">Produto4</a></p>
	<p><a href="<?php echo base_url() ?>products/product-5">Produto5 não exisite</a></p>

<?php else:  ?>

	<?php if(get_request('page') == 'product-1'): ?>
		<!-- A listagem do produto pode ser da maneira abaixo, ou por include include_file('arquico.php' ,'caminho/do/arquivo') -->
		<h2>Product 1</h2>

		<p>
		   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae posuere lacus.
		   Curabitur at lacinia diam. Proin hendrerit ullamcorper purus, a hendrerit massa viverra at.
		   Aenean fermentum orci dolor. Maecenas eget volutpat enim. Nunc feugiat consectetur accumsan.
		   Nunc eleifend mi sed luctus imperdiet.
		</p>

		<p>
			Aliquam eleifend pellentesque neque eget mattis.
			Suspendisse vestibulum justo sed lectus cursus, vel tempor odio blandit.
			Fusce nec magna scelerisque leo laoreet venenatis.
			Aenean dui orci, semper at nulla at, imperdiet egestas nisl.
			Sed vel est venenatis, tincidunt magna sed, tincidunt tellus.
			Praesent ullamcorper imperdiet nisl eu aliquet.
			Aliquam interdum, est et auctor luctus, nunc augue feugiat lorem, suscipit vehicula nisi odio tristique libero.
			Etiam ultrices eleifend dui, at ultrices metus.
			Sed lorem nisi, tempus et bibendum iaculis, sollicitudin et arcu. Pellentesque id dapibus risus.
			Fusce dictum convallis turpis eu euismod. Praesent pretium tellus velit, sit amet cursus ipsum malesuada vitae.
		</p>

		<p><a href="<?php echo base_url()?>products/product-1/model-1234">Modelo 1234</a></p>

	<?php elseif(get_request('page') == 'product-2'): ?>
		<!-- Exemplo de inclusão de um arquivo -->
		<?php include_file('pages/products/product_2.php') ?>

	<?php elseif(get_request('page') == 'product-3'): ?>

		<h2>Product 3</h2>

		<p>
		   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae posuere lacus.
		   Curabitur at lacinia diam. Proin hendrerit ullamcorper purus, a hendrerit massa viverra at.
		   Aenean fermentum orci dolor. Maecenas eget volutpat enim. Nunc feugiat consectetur accumsan.
		   Nunc eleifend mi sed luctus imperdiet.
		</p>

		<p>
			Aliquam eleifend pellentesque neque eget mattis.
			Suspendisse vestibulum justo sed lectus cursus, vel tempor odio blandit.
			Fusce nec magna scelerisque leo laoreet venenatis.
			Aenean dui orci, semper at nulla at, imperdiet egestas nisl.
			Sed vel est venenatis, tincidunt magna sed, tincidunt tellus.
			Praesent ullamcorper imperdiet nisl eu aliquet.
			Aliquam interdum, est et auctor luctus, nunc augue feugiat lorem, suscipit vehicula nisi odio tristique libero.
			Etiam ultrices eleifend dui, at ultrices metus.
			Sed lorem nisi, tempus et bibendum iaculis, sollicitudin et arcu. Pellentesque id dapibus risus.
			Fusce dictum convallis turpis eu euismod. Praesent pretium tellus velit, sit amet cursus ipsum malesuada vitae.
		</p>

	<?php elseif(get_request('page') == 'product-4'): ?>
		<h2>Product 4</h2>

		<p>
		   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae posuere lacus.
		   Curabitur at lacinia diam. Proin hendrerit ullamcorper purus, a hendrerit massa viverra at.
		   Aenean fermentum orci dolor. Maecenas eget volutpat enim. Nunc feugiat consectetur accumsan.
		   Nunc eleifend mi sed luctus imperdiet.
		</p>

		<p>
			Aliquam eleifend pellentesque neque eget mattis.
			Suspendisse vestibulum justo sed lectus cursus, vel tempor odio blandit.
			Fusce nec magna scelerisque leo laoreet venenatis.
			Aenean dui orci, semper at nulla at, imperdiet egestas nisl.
			Sed vel est venenatis, tincidunt magna sed, tincidunt tellus.
			Praesent ullamcorper imperdiet nisl eu aliquet.
			Aliquam interdum, est et auctor luctus, nunc augue feugiat lorem, suscipit vehicula nisi odio tristique libero.
			Etiam ultrices eleifend dui, at ultrices metus.
			Sed lorem nisi, tempus et bibendum iaculis, sollicitudin et arcu. Pellentesque id dapibus risus.
			Fusce dictum convallis turpis eu euismod. Praesent pretium tellus velit, sit amet cursus ipsum malesuada vitae.
		</p>

	<?php else: ?>
		<!-- Se o Conteúdo não existir -->
		<h3>Conteúdo não encontrado</h3>

	<?php endif; ?>

<?php endif;  ?>