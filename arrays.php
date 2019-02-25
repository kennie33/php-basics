<?php
//arrays
$names = ["Kay","Wachira","Mutongoi","Chris","Sirma","Moyees","Buffon","Jibril","Cate","Alice"];

$ages = [19,20,22,24,27,29,30,59,57,30];

echo $names[4];
echo "<hr>";
echo $ages[0];

foreach ($names as $jina)
{

    echo "$jina <br>";
}
echo "<hr>";
echo sizeof($names);//count the # of names
echo "<hr>";
array_push($names,"Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($ages);

foreach ($ages as $miaka);
{
    echo "$miaka<br>";

}
echo "<hr>";

echo array_sum($ages);

echo "<hr>";
//associate array
$person =["names"=>"Kay", "age=>20","height=>34","color"=>"black","nationality"=>"kenyan","denomination"=>"christian"];

echo $person["names"];
echo "<hr>";
echo $person["height"];
echo "<hr>";
echo $person["color"];
echo "<hr>";
echo $person["nationality"];
echo "<hr>";
