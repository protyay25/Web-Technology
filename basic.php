<?php
echo "Hello World"
?>

<?php
$name = "Protyay";
$Name = "Kumar";
$age = 23;
$balance = 0.00;

echo $name;
echo $Name;
echo $age;
echo $balance;
?>

<?php
$name = "Protyay";
$age = 30;
$cgpa = 1.00;
$isStudent= true;

var_dump($name);
var_dump($age);
var_dump($cgpa);
var_dump($isStudent);
?>


<?php
$first = "Protyay";
$last = "Kumar";

echo $first . " " . $last;
?>


<?php
$marks = 85;

if ($marks >= 85 )
    {
        echo "Excellent";
    }
?>

<?php
$marks = 45;

if ($marks >= 50 )
    {
        echo "Pass";
    }
    else {
        echo "Fail";
    }
?>

<?php
$marks = 72;

if ($marks >= 80 )
    {
        echo "A+";
    }
    elseif ($marks >= 70) {
        echo "A";
    }
    elseif ($marks >= 60) {
        echo "A-";
    }
    else {
        echo "Below A-";
    }
?>

<?php
$day = "Friday";

switch($day) 
{
    case "Sunday" :
        echo "Weekend";
        break;

    case "Friday" :
        echo "Holiday";
        break;
        
    default :
    echo "Working Day";
}
?>


<?php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
}
while ($i <=5);

?>





