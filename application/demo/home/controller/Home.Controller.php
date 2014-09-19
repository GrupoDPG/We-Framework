<?php
class Home_Controller extends WeController{

	public function __construct(){
		$this->load()->model('home');
	}

	public function index(){
		/*
			É póssível carregar mais de um componente passando o array, podendo especificar também o objeto do componente.
		*/
		$this->load()->component(array('Test'));
		$component_hello = $this->component_hello();

		//View
		$this->load()->view('home', array('hello_comp' => $component_hello));
	}


	public function teste(){
		if(isset_request('subpage')):
			$test = 'Método teste chamado!';
			$test .= '<br/> Parâmetro detectado '.get_request('subpage');
		else:
			$test = 'Método teste chamado!';
		endif;

		$this->load()->view('home', array('test123' => $test));
	}

}

?>