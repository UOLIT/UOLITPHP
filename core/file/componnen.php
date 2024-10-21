<?php
	class componnen{
		
		public $language	=	'indonesia';

		public $url_link 	= 'https://localhost/UOLITPHP';
		public $url_folder 	= 'UOLITPHP/';
		public $url_params;
		public $total_params;

		public $action;
		public $module;

		public $url_backend = 'localhost/';
		

		public function __construct(){
			$this->url_params 				= $_SERVER['REQUEST_URI'];
			$this->url_params 				= parse_url(str_replace($this->url_folder, '', $this->url_params));
			$this->url_params['sections']	= explode('/', $this->url_params['path']);
			$this->total_params				= count($this->url_params['sections']);	
			$this->session_input('params',$this->url_params['sections']);
		}

		public function session_input($name='',$sess=''){
			$_SESSION[$name] = $sess;
		}

		public function session_get($sess){
			if(!empty($_SESSION[$sess])){
				return $_SESSION[$sess];
			}
		}

		public function session_delete($sess){
			if(!empty($_SESSION[$sess])){
				unset($_SESSION[$sess]);
			}
		}

		public function themesView($location,$file_view,$data=""){
			include_once('src/template/view/template.php');
		}

		public function themesViewEmpt($location,$file_view,$data=""){
			include_once('src/'.$location.'/view/'.$file_view.'.php');
		}

		public function action_process($location,$file_process,$function,$data=""){
			include_once('src/'.$location.'/process/'.$file_process.'.php');
			if(class_exists($file_process)){
				$process = new $file_process();
				if(method_exists($process, $function)){
					return $process->$function($data);
				}else{
					echo "Error Function";
				}
			}else{
				echo "Error Class";
			}
		}

		public function declare($field){
			return addslashes($field);
		}

		public function params($e){			
			if(!empty($this->session_get('params')[$e])){
				$sections = $this->session_get('params');
				if(!empty($sections[$e])){
					return trim($sections[$e]);
				}else{
					return '';
				}
			}else{
				return '';
			}
		}

		public function sendpost($postData='',$process){
            $error = 0;
            $ch = curl_init();

            if(empty($postData)){
            	$postData = array();
            }

            $postData['ad_client_id'] 	= $this->session_get('ad_client_id');
            $postData['ad_org_id'] 		= $this->session_get('ad_org_id');

            curl_setopt($ch, CURLOPT_URL, $this->url_backend.$process);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);

            $postDataString = http_build_query($postData);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $postDataString);

            $headers = [
                'token:' . $this->session_get('token'),
                'key:' . $this->session_get('key'),
                'iv:' . $this->session_get('iv')
            ];

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);
            
            if (curl_errno($ch)) {
                $error++;
            }

            curl_close($ch);

            if ($error == 0) {
                $responseArray = json_decode($response, true);

                if ($responseArray !== null) {
                    $results['results'] = $responseArray['results'];
                    $results['data']    = $responseArray['data'];
                    $results['msg']     = $responseArray['msg'];
                } else {
                    $results['results'] = '500';
                    $results['msg']     = 'Invalid Response';
                }

            } else {
                $results['results'] = '404';
                $results['msg']     = 'Server Error';
            }


            return json_encode($results);
		}

		public function language($text){
			include 'core/language/'.$this->language.'/general_lang.php';
			echo $lang[$text];
		}

		public function redirect($e){
			header("Location: ".$this->link($e));
			exit;
		}

		public function field($function,$type="",$name="",$class="",$id="",$data=""){
			include_once('core/attribute/field.php');
			$field = new field();
			return $field->$function($type,$name,$data);
		}

		public function menu(){
			include_once('src/menu/action/menu.php');
			$menu = new menu;
			$menu->menu();
		}

		public function link($e){
			return $this->url_link.'/'.$e;
		}

		public function js($e){
			return '<script src="'.$this->link('file/js/'.$e.'.js').'"></script>';
		}

		public function error($e){
			include_once('src/err/view/'.$e.'.php');
		}

	}
?>