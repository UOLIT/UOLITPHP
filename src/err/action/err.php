<?php
	class err extends core{

		function Error403(){
		   echo $this->themesView('err','403');
		}
		function Error404(){
		   echo $this->themesView('err','404');
		}
		function Error405(){
		   echo $this->themesView('err','405');
		}


	}
?>