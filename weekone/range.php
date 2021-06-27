
<?php
function myrange ($a,$b){
$numbers = range($a, $b);
foreach ($numbers as $number) {
    echo  $number." \n";
}

}
 myrange(2,10);
?>
