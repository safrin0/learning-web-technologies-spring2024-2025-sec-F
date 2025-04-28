<?php
$a = 10;
$b = 58;
$c = 25;

if($a >= $b && $a >= $c){
    echo "Here $a is the largest Number";
} elseif($b >= $a && $b >= $c){
    echo "Here $b is the largest Number";
} else {
    echo "Here $c is the largest Number";
}
?>
