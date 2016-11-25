<?php
define('MAT','fuck');
$login="";
$comment=array();

function badWord($comment){
    foreach ($comment as $key=>$value){
        $comment[$key]=strip_tags(str_replace(MAT, '***', $value,$count),'<br>');
        if($count>0){
            echo 'Некорректный комментарий. - '.$value ."<br>";
        }
    }
    return $comment;
}


$formSend=false;
if (isset($_POST["result"])){
	$formSend=true;
	$login=$_POST["login"];
	$comment=$_POST["comment"];
	   $comment=array("user"=>$login,"comment"=>$comment);
		//print_r ($comment);
	 $comment = badWord($comment);
	 $comments[]=$comment;
	if ($_POST["login"] ==null or $_POST["comment"] ==null){
		echo "Неверный логин или пароль";
	}
	 
	
}
include 'dz7.html';
?>
