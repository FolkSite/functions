<?php
$html1='';
$html1.='
<form method="POST">
<input type="textarea" name="a" value=""> Text A<br>
<input type="submit" name="result" value="Отправить">
</form>' ;

if (isset($_POST["result"])){
	$ab= $_POST["a"];

    $a = explode(' ', $ab);
    function sort_func($a,$b) //объявляем функцию
{
 
 if (strlen($a) == strlen($b)) //если длины значений в переменных $a и $b равны возвращаем 0 (закомментировано)
 {
      //  return 0;
 }
 //если длина значения в переменной $a меньше длины значения в переменной $b, то возвращаем -1, иначе возвращаем 1
    return (strlen($a) <strlen( $b)) ? -1 : 1; 
}
} 
usort($a, "sort_func");//сортируем с использованием функции sort_func, описанной выше
krsort($a);
$b = array_slice($a,0,3);
print_r($b);//выводим содержимое полученного массива на экран
echo $html1;



?>