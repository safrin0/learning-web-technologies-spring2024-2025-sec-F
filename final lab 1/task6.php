<?php
$pets = array("cat", "dog", "finch", "rabbit", "hamster", "parrot", "fish", "turtle", "lizard", "snake");
$search = "finch";

$found = false;

foreach($pets as $pet){
    if($pet == $search){
        $found = true;


        break;
    }
}

if($found){
    echo "$search found!";
} else {
    echo "$search not found!";


}
?>
