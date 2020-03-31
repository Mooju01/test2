<?php
$count = array(
    'a' => "12","3","-20","20","539","0","11",
    'b' => "4500","-956","3","90","567",-"200",
    'c' => "34","600","-4","891","1000","-40","-20"
);
$countvals = array_count_values($count);
echo "<pre>";
print_r($countvals );
echo "</pre>";
echo "มี 20 อยู่ = ".$countvals[20]." ตัว" ; 
?>


<?
// $ans = firting("a");
// var_dump($ans);
// echo "</pre";

 
// function firting ($num){
//   
//     $arraynum = [
//         "a" => [12,3,-20,20,539,0,11],
//         "b" => [4500,-956,3,90,567,-200],
//         "c" => [34,600,-4,891,1000,-40,-20],
//     ];
//     return $arraynum[$num];
// }

// $str = "ทดสอบนับอักขระภาษาไทย";
//  function utf8_strlen($s) {
//  $c = strlen($s); $l = 0;
//  for ($i = 0; $i < $c; ++$i)
//  if ((ord($s[$i]) & 0xC0) != 0x80) ++$l;
//  return $l;
//  }
//  echo utf8_strlen($str);
 


?>