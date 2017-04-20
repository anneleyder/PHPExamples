<?php

$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);

$min=99999;
$max=0;
foreach($marks1 as $mark) {
if ($mark < $min) {
    $min = $mark;
}   
if ($mark > $max) {
    $max = $mark;
}    
}
echo "max marks1 = $max \n min marks1 = $min \n\n";

$min=99999;
$max=0;
foreach($marks2 as $mark) {
if ($mark < $min) {
    $min = $mark;
}   
if ($mark > $max) {
    $max = $mark;
}    
}
echo "max marks1 = $max \n min marks1 = $min \n\n";

$min=99999;
$max=0;
foreach($marks3 as $mark) {
if ($mark < $min) {
    $min = $mark;
}   
if ($mark > $max) {
    $max = $mark;
}    
}
echo "max marks1 = $max \n min marks1 = $min \n\n";