<?php
# CLI command is_exist
class is{
	
	public function controller($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/controller'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				$msg = 1;
		    }
		} else {
		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function model($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/model'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function library($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/library'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function extender($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/extender'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function package($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/package'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){
					$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function module($fileName,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/modules'; $file = $c_dir.'/'.strtolower($fileName);
		
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
		  $msg = "\033[0;31m".strtolower($fileName)." module does not exist.\033[0m \n";
		}
		return $msg;
	}
	public function api($fileName,$dropTable=NULL,$prompt=NULL){ $msg=BAD_FORMAT(); $c_dir = 'app/extender/init'; $file = $c_dir.'/'.ucfirst($fileName.'.php');
		
		$dTc = strtolower($dropTable);
		if (file_exists($file)){
			if(is_dir($c_dir) && is_writable($c_dir) && is_readable($file)){ 
				  	$msg = 1;
		    }else{
		  		$msg = "\033[0;31mPermission denied. coult't remove ".$c_dir."  \033[0m \n";
		    }
		} else {
  		  $msg = "\033[0;31m".ucfirst($fileName)." ".$c_dir." does not exist.\033[0m \n";
		  if($dTc == '-t' || $dTc == '-table'){
		  	if(db()->table_exists(strtolower($fileName))){
				$msg = 1;
  			}
  		  }
  		}
  		return $msg;
  	}
   
}
