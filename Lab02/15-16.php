<?php
#15
echo "Task 15. \n";
function printStringReturnNumber()
{
	echo "Smthng \n";
	return 5;
}

$my_num = printStringReturnNumber();
echo $my_num, "\n";

#16
echo "\nTask 16. \n";
#Вывод всех функций - ниже
function increaseEnthusiasm($str)
{
	return $str.'!';
}

function repeatThreeTimes($str)
{
	return $str.$str.$str;
}

function cut($str, $n=10)
{
	if(strlen($str) < $n){
		$n = strlen($str);
	}
	
	$str2 = null;
	$index = 0;
	while($n>0){
		$str2 = $str2.$str[$index];
		$index +=1;
		$n -=1;
	}
	return $str2;
}

function subsequence($arr, $i)
{
    if($i >= count($arr))
        return;
    echo $arr[$i]." ";
    subsequence($arr, $i+=1);
}
#subsequence([1,2,3,4,5,6,7], 0);

function Add($num)
{
    $sum = 0;
    while($num > 0) {
        $sum += $num % 10;
        $num = floor($num / 10);
    }
    if($sum <= 9)
        return $sum;
    else
        return Add($sum);
}
#echo Add(1313);*/

$str = "Random comp of words";
echo increaseEnthusiasm($str), "\n";
echo repeatThreeTimes($str), "\n";
echo increaseEnthusiasm(repeatThreeTimes($str)), "\n";
echo cut($str), "\n"; #cut($str, 3)
subsequence([1,54,13,34,73,23,7], 0);
echo "\n", Add(2543), "\n";
?>