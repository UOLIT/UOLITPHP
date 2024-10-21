<?php 
	include_once('core/file/componnen.php');

	class core extends componnen{

		public function action_core(){

			$id='';
			$page='';
			$data_view='';
			$type_page = 'module';

			foreach ($this->url_params as $key => $a);

				if(!empty($a[1])){
					$this->action=str_replace('-', '_', $a[1]);

					if($this->action=='api'){
						$this->action=str_replace('-', '_', $a[2]);
						$type_page = 'api';
					}

					if(file_exists('src/'.$this->action.'/action/'.$this->action.'.php')){

						include_once('src/'.$this->action.'/action/'.$this->action.'.php');

						if($type_page=='api' && !empty($a[3])){
							$this->module=str_replace("-", "_", str_replace("'", "", $a[3]));
						}else if(!empty($a[2])){
							$this->module=str_replace("-", "_", str_replace("'", "", $a[2]));
						}else{
							$this->module='index';
						}	

						if(class_exists($this->action)){
							// if(empty($this->session_get('id_employee')) && $this->action!=='login' && $this->action!=='err'){
							// 	header("location: ".$this->link('login'));
							// }

							$this->action = new $this->action();
							$module = $this->module;

							if(method_exists($this->action, $this->module)){								
								$this->params = $a[1];
								$this->action->$module();
							}else{
								header("location: ".$this->link('err/Error404'));
							}


						}else{
							header("location: ".$this->link('err/Error405'));
						}
						
						
					}else{
						header("location: ".$this->link('err/Error403'));
					}

				}else{
					header("location: ".$this->link('home'));
				}

		}

	}

?>