<?php
	include_once('core/file/query.php');
	class componnen extends query_process{
		
		public $language		=	'indonesia';

		public $url_link		= 'http://localhost/UolitPHP/';
		public $url_folder		= 'UolitPHP/';
		public $url_params;
		public $total_params;
		public $params;

		public $action;
		public $module;		

		private $key;
    	private $iv;

		public function __construct(){

			$this->url_params 				= $_SERVER['REQUEST_URI'];
			$this->url_params 				= parse_url(str_replace($this->url_folder, '', $this->url_params));
			$this->url_params['sections']	= explode('/', $this->url_params['path']);
			$this->total_params				= count($this->url_params['sections']);

			$this->key = random_bytes(32);
			$this->iv = random_bytes(16);
		}

	    public function post($key=[]) {
	    	$postData = file_get_contents('php://input');
			$jsonData = json_decode($postData, true);

	        if (!empty($jsonData[$key])) {
	            return $jsonData[$key];
	        } elseif (empty($key)) {
	            return $jsonData;
	        } else {
	            return null;
	        }
	    }


	    public function post_array() {
	    	$postData = file_get_contents('php://input');
			$jsonData = json_decode($postData, true);

	        if (!empty($jsonData)) {
	            return $jsonData;
	        } elseif (empty($jsonData)) {
	            return $jsonData;
	        } else {
	            return null;
	        }
	    }

	    public function get($key=[]) {
	        if (!empty($_GET[$key])) {
	            return $_GET[$key];
	        } elseif (empty($key)) {
	            return $key;
	        } else {
	            return null;
	        }
	    }

		public function session($sess=[]){
			if(!empty($_SESSION[$sess])){
				return $_SESSION[$sess];
			}
		}

		public function themesView($location,$file_view,$data=[]){
			include_once('src/'.$location.'/view/'.$file_view.'.php');
			if(!empty($data['title'])){
				$title=$data['title'];
				echo '<script>document.getElementById("title").innerHTML = "'.$title.'";</script>';
			}
		}

		public function action_process($location,$file_process,$function,$data="",$where=""){

			include_once('src/'.$location.'/process/'.$file_process.'.php');

			if(class_exists($file_process)){
				$process = new $file_process();
				if(method_exists($process, $function)){
					return $process->$function($data,$where);
				}else{
					echo "Error Function";
				}
			}else{
				echo "Error Class";
			}
		}


		public function language($text){
			include 'core/language/'.$this->language.'/general_lang.php';
			echo $lang[$text];
		}

		public function redirect($e){
			$link = $this->url_link.'/'.$e;
			return '<meta content="0; url='.$link.'" http-equiv="refresh">';
		}

		public function field($function,$type='',$name='',$class='',$id='',$data=''){
			include_once('core/attribute/field.php');
			$field = new field();
			return $field->$function($type,$name,$data);
		}

		public function link($e){
			return $this->url_link.$e;
		}

		public function check($login){
			if (isset($login['userid']) && isset($login['password'])) {
				$user_id 	= $login['userid'];
				$password 	= $login['password'];

				$login = $this->query_global("SELECT user_id FROM tbl_user WHERE user_id='".$user_id."' AND password='".$password."'");

				if($login['results']=='Success'){
					$count = count($login['data']);
					if($count>0){
						return true;
					}else{
						return false;
					}	
				}else{
					return false;
				}
			}else{
				return false;
			}

		}

		public function encrypttoken($data=[]){
			if(!empty($data)){
				$enc = $data['code'].'_?_'.$data['password'];
				$encryptedData 		= base64_encode(openssl_encrypt($enc, 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $this->iv));
				$result['result'] 	= 'Success';
				$result['encrypt'] 	= $encryptedData;
				$result['key'] 		= $this->key;
				$result['iv'] 		= $this->iv;
			}else{
				$result['result'] 	= 'Error';
				$result['encrypt'] 	= '';
				$result['key'] 		= '';
				$result['iv'] 		= '';
			}
			return $result;
		}
	}
?>