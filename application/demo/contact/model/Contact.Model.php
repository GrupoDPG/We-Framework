<?php

class Contact_Model extends WeModel{


	public function send_notification($post){

		$this->get_helper('email/Email.Helper.php');
		$mail = new Email();

		$mail->mailer->addReplyTo('brito@grupodpg.com.br', 'Brito');
		$mail->mailer->AddAddress('diogo-brito7@hotmail.com', 'Diogo Brito');
		$mail->mailer->Subject = 'Teste';
		$mail->mailer->AltBody = 'To view the message, please use an HTML compatible email viewer!';
		$body = $mail->load_email_template('teste.php', $post);
		$mail->mailer->MsgHTML($body);

		$send = $mail->mailer->Send();
		if($send)
			$result = '<b>Mensagem enviada!</b><br/>';
		else
			$result = 'Error: '.$mail->mailer->ErrorInfo;

		return $result;

	}

}

?>