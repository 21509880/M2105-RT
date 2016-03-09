<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variables</title>
</head>
<body>
<?php
function addition($a,$b){
    echo "a = $a <br>" ;
    echo "b= $b <br>";
    echo "Cela fait :", ($a+$b) ;
}
function soustraction($a,$b){
    echo "a = $a <br>" ;
    echo "b= $b <br>";
    echo "Cela fait :", ($a-$b) ;
}
function division($a,$b){
    echo "a = $a <br>" ;
    echo "b= $b <br>";
    echo "Cela fait :", ($a/$b) ;
}
function multiplication($a,$b){
    echo "a = $a <br>" ;
    echo "b= $b <br>";
    echo "Cela fait :", ($a*$b) ;
}
function operation($val1,$val2,$op){
    return $op($val1,$val2);
}
echo operation(3,5,"addition");
?>
</body>
</html>