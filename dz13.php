<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

//var_dump($string);
function sortStr($string){
$string=explode(' ',$string);
$string=array_count_values($string);
//var_dump($string);
arsort($string);
var_dump($string);
foreach($string as $key=>$value){
    echo $key.' - '.$value."\n";
}
}
var_dump (sortStr($string));
?>