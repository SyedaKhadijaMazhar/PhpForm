<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*
{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.container
{
    max-width:80%;
    background-color:hotpink;
    margin:auto;
    padding:23px;
}
</style>
<body>
    <div class="container">
    <h1>Let's learn about PHP </h1>
    <p>Your party status is here:</p>
    <?php

$age = 25;
if($age>18)
{
    echo"You can party!";
}
else
{
    echo"You cannot party!";
}

echo"</br>";
$lang = array("php", "c++", "flutter", "python");
echo $lang[2];

echo"</br>";
$a=0;
while ($a <= 10) {
    echo "</br> a = : ";
    echo $a;
    $a++;
}
$a=0;
while ($a < count($lang)) {
    echo "</br> a = : ";
    echo $lang[$a];
    $a++;
}

$a=10;
do {
    echo "</br> a = : ";
    echo $a;
    $a++;
} while ($a < 10);

$a=0;
do {
    echo "</br> a = : ";
    echo $lang[$a];
    $a++;
} while ($a < count($lang));

for ($a=0; $a <= 10; $a++) { 
echo "</br> a = ";
echo $a;
}

foreach ($lang as $value) 
{
    echo "</br> the value of lang is ";
    echo $value;
}

function print_num($num)
{
    echo"</br> value of num ";
    echo$num;

}
print_num(30);



    ?>
    </div>
</body>
</html>