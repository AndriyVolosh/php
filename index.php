<?php

$count = 15;
$arr = array();
for ($i = 0; $i < $count; $i++) {
    $arr[$i] = rand();
}
echo '<b>Array with 15 elements:</b>' . '<br/>';
var_dump($arr);
echo '<br/>';
$min = min($arr);
$max = max($arr);
echo '<b>Minimal element: </b>' . $min . '<br/><b>Maximal element: </b>' . $max . '<br/>';
$reversed = array_reverse($arr);
echo '<b>Reversed array:</b>' . '<br/>';
var_dump($reversed);
echo '<br/>';
$sorted = asort($arr);
echo '<b>Sorted array:</b>' . '<br/>';
var_dump($arr);
echo '<br/>';
$sum = array_sum($arr);
echo '<b>Summ of elements:</b> ' . $sum . '<br/>';
$key = array_search(33, $arr);
if ($key === FALSE) {
    echo 'This array don\'t have number 33.' . '<br/>';
} else {
    echo 'This array have number 33.' . '<br/>';
}
$shuffle = shuffle($arr);
echo '<b>Shuffled array:</b>' . '<br/>';
var_dump($arr);
