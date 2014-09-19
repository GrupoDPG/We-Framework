<h4>Contact is Alive</h4>

<h4>Formulário de exemplo</h4>
<?php
	if(isset($result))
		echo $result;
?>

<form method='post' action ='contact/notify'>


		<label id="lbl_nome" for="nome">Nome:</label><br/>
	    <input type="text" name="nome">
	    <br/><br/>

		<label id="lbl_telefone" for="telefone">Telefone:</label><br/>
		<input type="text" name="telefone">
		<br/><br/>

		<label id="lbl_assunto"for="assunto">Assunto:</label><br/>
		<input type="text" name="assunto">
		<br/><br/>

		<label id="lbl_email" for="email">Email:</label><br/>
		<input type="text" name="email">
		<br/><br/>

		<label id="lbl_mensagem" for="mensagem">Mensagem:</label><br/>
		<textarea name="mensagem" rows="8" cols="60"></textarea>
		<br/><br/>

		<button type="submit" name="btnEnviar" >Enviar</button>


</form>

