<?php 
	include_once('core/file/componnen.php');
	class core extends componnen{

		public function action_core(){

			$id='';
			$page='';
			$data_view='';

			foreach ($this->url_params as $key => $a);

				if($this->total_params>4){
					$par=1;
					for ($i=5; $i < $this->total_params; $i++) { 
						$params[$par]= str_replace("'", "", $a[$i]);
						$par++;
					}
				}

				if(!empty($a[1])){

					if(file_exists('src/'.$a[1].'/action/'.$a[1].'.php')){

						$this->action=$a[1];
						include_once('src/'.$this->action.'/action/'.$this->action.'.php');
						
						if(!empty($_SERVER)){
							$data_check['userid'] = $_SERVER['HTTP_USERID'];
							$data_check['password'] = $_SERVER['HTTP_PASSWORD'];

							$check = $this->check($data_check);

							if($check==true || $this->action=='err'){
								
								if(!empty($a[4])){
									$page=str_replace("'", "", $a[4]);
								}

								if(!empty($a[3])){
									$id=str_replace("'", "", $a[3]);
								}	
								if(!empty($a[2])){
									$this->module=str_replace("-", "_", str_replace("'", "", $a[2]));
								}else{
									$this->module='index';
								}	
							}else{
								header("location: ".$this->link('err/Error302'));
							}
						}else{
							header("location: ".$this->link('err/Error404'));
						}

						if(class_exists($this->action)){

							$this->action = new $this->action();
							$module = str_replace("-", "_", $this->module);

							if(method_exists($this->action, $this->module)){

								$this->action->$module();
							
							}else{
								header("location: ".$this->link('err/Error404'));
							}
						}else{
							header("location: ".$this->link('err/Error405'));
						}						
					}else{
						header("location: ".$this->link('err/Error404'));
					}
				}else{
					header("location: ".$this->link('home'));
				}
		}
	}

?>