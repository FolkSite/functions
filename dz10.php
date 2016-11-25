<?php
//

$html1='';
$html1.='
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form method="POST">
<input type="textarea" name="a" value=""> Enter you text<br>
<input type="submit" name="result" value="result">
</form>
<div></div>
</body>
</html>
';
$html.="<br>";

function uniq($ab){
if (isset($_POST["result"])){
$ab= $_POST["a"];
$arrA = explode(" ", $ab);

 
 $arrB = array_unique($arrA);
 var_dump($arrB ). "<br>";
 $count=count($arrB);
 return $count;

}
}
echo $html1 . "<br>";
echo "Кол-во уникальных " . (uniq($ab));
 ?>