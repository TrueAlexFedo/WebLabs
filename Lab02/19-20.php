<?php
#19
echo "Task 19.", "\n";
$c = 'x';
$r = 1;
while ($r<=20){
  echo $c, "\n";
  $c = $c.'x';
  $r +=1;
}

#20
echo"\n", "Task 20.", "\n";
#1
$mas = array(1, 2, 3, 4, 5);
$a = array_sum($mas)/ count($mas);
echo $a;

#2
$arr = range(1, 100);
echo "\n", array_sum($arr);

#3
echo "\n";
$m = array (4, 16, 25, 64, 100);
function sq($a){
  return sqrt($a);
}
$m = array_map('sq', $m);
foreach ($m as $v){
  echo $v, " ";
}

#4
echo "\n", "\n";
$mm = array_combine(range('a', 'z'), range(1, 26));
$r = 1;
while ($r <= 26){
echo key($mm), " ", current($mm), "\n";
next($mm);
$r +=1;
}


#5
echo "\n", "\n";
$a = '1234567890';
$masi = str_split($a, 2);
echo array_sum($masi);

?>