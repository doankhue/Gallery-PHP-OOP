<?php  

require_once('init.php');

if($sessiton->is_signed_in()){
	redirect("index.php")
}

if(isset($_POST['submit'])){

	$username = trim($_POST['username']);

	$password = trim($_POST['password']);


	//Check user
	$user_found = User::verify_user($username,$password);

	if($user_found){
		$sessiton->login($user_found);
		redirect("index.php");
	}else{
		$the_message = "Your password or username are incorrect";
	}

}else{
	$username = "";
	$password = "";
}

?>