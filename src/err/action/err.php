<?php
	class err extends core{

		function Error403(){
			$data['date'] = date("d-m-Y");
			$data['title'] = 'Error 403';
		   echo $this->themesViewEmpt('err','403', $data);
		}
		function Error404(){
			$data['date'] = date("d-m-Y");
			$data['title'] = 'Error 404';
			echo $this->themesViewEmpt('err','404',$data);
		}
		function Error405(){
			$data['date'] = date("d-m-Y");
			$data['title'] = 'Error 405';
		   echo $this->themesViewEmpt('err','405', $data);
		}


	}
?>