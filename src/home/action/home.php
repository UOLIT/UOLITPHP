<?php
	class home extends core{

		public function __construct(){

		}

		function index(){
			$data['title'] = 'SAMPLE';
			echo $this->themesView('home','home',$data);
		}

	}

?>