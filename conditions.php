<?php
$score=20;

if ($score >=50){
    echo "pass";
}
else {
    echo "fail";

}
echo "<hr>";
$day_of_the_week=2;
switch ($day_of_the_week)
{
    case 1:
        echo "monday";
        break;
    case  2:
        echo "tuesday";
        break;
    case  3:
        echo "wednesday";
     break;
    case 4:
        echo "thursday";
        break;
    case  5:
        echo "friday";
        break;
    case  6:
        echo "saturday";
        break;
    case 7:
        echo"sunday";
        break;
    default:
        echo "unknown date";










}
