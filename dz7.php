<?php

$login="";
$comment=array();
$formSend=false;
if (isset($_POST["result"])){
	$formSend=true;
	$login=$_POST["login"];
	$comment=$_POST["comment"];
	   $comment=array("user"=>$login,"comment"=>$comment);
		//print_r ($comment);
	
	 $comments[]=$comment;
	if ($_POST["login"] ==null or $_POST["comment"] ==null){
		echo "Неверный логин или пароль";
	}
	 
	
}
include 'dz7.html';
?>
