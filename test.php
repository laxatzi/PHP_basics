<?php 	
 
// Arrays
$indexArrDemo = array(11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A'=>12, 'B'=>5, 'C'=>20);
echo array_search(5, $indexArrDemo).'<BR>';
echo array_search(20, $assocArrDemo).'<BR>';
var_dump(in_array(12, $assocArrDemo));
echo("<br>");
$num1 = array(100, 111, 120);
$num2 = array(100, 3, 5);
 $num3 = array(1, 10);
 $newArray1 = array_merge($num1, $num2, $num3);

 print_r($newArray1);
 echo("<br>");
 $names1 = array(5 => "Peter", 24 => "Aaron");
 $names2 = array(5 => "Zac", 4 => "Alfred", 7 => "Avi");
 $newArray2 = array_merge($names1, $names2);
 print_r($newArray2);
 echo("<br>");
 $str1 = array('A'=> 12, 'B' => 5, 'C' => 8);
 $str2 = array('A' => 15, 'D' => 10);
 $newArray3 = array_merge($str1, $str2);

 print_r($newArray3);