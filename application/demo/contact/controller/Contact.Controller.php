<?php



class Contact_Controller extends WeController{

	public function __construct(){
		$this->load()->model('contact');
	}


	public function notify(){

		$result = $this->send_notification($_POST);

		$this->load()->view('contact', array('result' => $result));
	}

}

?>