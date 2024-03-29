<?php 
	
	class project {

		public function connection(){
			if(file_exists(dirname(__file__).'/config.php')){
 				require_once(dirname(__file__).'/config.php');
 			}
		}
	}


	$project = new project();
	

?>