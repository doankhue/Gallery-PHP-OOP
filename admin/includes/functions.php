<?php  


//function autoload php as same function
function class_auto_load($class){
	$class = strtolower($class);
	$the_path = "includes/{$class}.php";
	if(file_exists($the_path)){
		require_once($the_path);
	}else{
		die("This file named {$class}.php was not found .");
	}
}

spl_autoload_register('class_auto_load');



function redirect($location){
	header("Location: {$location}");
}




?>