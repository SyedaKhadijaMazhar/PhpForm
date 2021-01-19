<?php
$str = "This is Khadija";
echo "</br>";
$len = strlen($str);

echo "The length of variable str is " . $len . " thank you";
echo "</br>";
echo "The number of words in  str is " . str_word_count($str) . " thank you";
echo "</br>";
echo "The reverse of word in  str is " . strrev($str) . " thank you";
echo "</br>";
echo "The position of Khadija is :" . strpos($str, "K") . " thank you";
echo "</br>";
echo "The replace of Khadija is Riad :" . str_replace("Khadija", "Riad", $str) . " thank you";
//echo $len;
?>
