<?php
echo "Task 18.", "\n";
function first($a, $b){
	if (($a + $b) > 10){
		return true;
	}
	else{
	return false;
	}
}
function second($a, $b){
	if ($a==$b){
		return true;
	}
	else{
	return false;
	}
}

$a = rand (1,10);
$b = rand (1,10);
echo $a, " ", $b, " ", "first: ", first($a, $b), " second: ", second($a, $b), "\n";

$test = rand(0, 1);
if (!$test){
  echo 'верно', "\n";
}

#Вторая половина будет получше :))
$age = rand(1, 200);
if($age < 10 || $age > 99)
{
    echo "Число меньше 10 или больше 99";
} else
{
    echo array_sum(str_split($age)) <= 9 ? "Сумма цифр однозначна" : "Сумма цифр двузначна";
}echo "\n";
//
$arr = [56, 23, 11];
echo count($arr) == 3 ? array_sum($arr) : "В массиве не 3 элемента";

?>