<h4>Home is alive</h4>

<?php
	if(isset($users)):
		echo '<h3>Query Result</h3>';
		foreach ($users as $u) :
			echo 'USER_COD: '.$u->USE_COD.'<br/>';
			echo 'USER_NAME: '.$u->USE_NAME.'<br/>';
			echo 'USER_EMAIL: '.$u->USE_EMAIL.'<br/>';
		endforeach;
	endif;

	if(isset($hello_comp))
		echo '<br/>'.$hello_comp.'<br/>';

	if(isset($test123)):
		echo $test123;
	endif;
?>