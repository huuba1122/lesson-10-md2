<?php

include_once "Dancer.php";
include_once "Couple.php";

$manList = new SplQueue();
$womanList = new SplQueue();
$couple = new Couple();
/** man dancer */
$manFirst= new Dancer('Super Man', "male");
$manSecond = new Dancer('Spider Man', "male");
$manThird = new Dancer('Iron Man', "male");

/**     man List */
$manList->push($manFirst);
$manList->push($manSecond);
$manList->push($manThird);

/**     woman dancer    */

$womanFirst = new Dancer("Wonder Woman", 'female');
$womanSecond = new Dancer("Black Widow", 'female');
$womanThird = new Dancer("Gamora", 'female');
$womanFourth = new Dancer("Harley Quinn", 'female');


/**     woman List*/
$womanList->push($womanFirst);
$womanList->push($womanSecond);
$womanList->push($womanThird);
$womanList->push($womanFourth);

echo "<pre>";
print_r($manList);
print_r($womanList);
//print_r(count($manList));
print_r($couple->pairing($manList, $womanList));
print_r($couple->pairing($manList, $womanList));
print_r($couple->pairing($manList, $womanList));
print_r($couple->pairing($manList, $womanList));
print_r($couple->wait($manList, $womanList));

