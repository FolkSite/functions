<?php
//

$html1='';
$html1.='
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="windows-1251">
</head>
<body>
<form action="" method="POST" accept-charset="windows-1251">
<input type="textarea" name="a" value=""> Enter you text<br>
<input type="submit" name="result" value="result">

</form>
<div></div>
</body>
</html>
';
$html.="<br>";

function reverse($ab){
if (isset($_POST["result"])){
$ab= $_POST["a"];
 //var_dump($ab). "<br>";
 $reverce = strrev($ab);
 return $reverce;
}
}
echo $html1 . "<br>";
echo "Перевернутая строка " . (reverse($ab));

 ?>