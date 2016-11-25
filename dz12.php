<?php
$str1='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
$str= 'hello. world. how are you.';
function chagePlace($str1){
$arrA = explode(".", $str1);
//print_r($arrA);
array_pop($arrA);
//print_r($arrA);
krsort($arrA);
$result = implode(". ",$arrA);
//echo $result;

return $result;}
var_dump (chagePlace($str1));
?>