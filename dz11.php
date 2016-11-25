<?php
$str='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
$str1= 'hello. world. how are you.';
function upperCaseFirst($str1){
$arrA = explode(".", $str1);
$arrB= array_pop($arrA);
//var_dump($arrB);
foreach ($arrA as $key => $value){
	$up=ucfirst(trim($arrA[$key])) . ". ";
	//$up=ucfirst($up);
	//var_dump($up);
    $arr[]=$up;
	
}

$result = implode($arr);
//var_dump($result);
return $result;}
var_dump (upperCaseFirst($str1));
?>