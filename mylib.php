<?php

function enterArray() {
global $myEmptyList;

if(isset($_POST['items'])) {
$items = $_POST['items'];
$myEmptyList = explode("," , $items);
}
else {
$items = '';
}

if(!is_null($myEmptyList)){
$myEmptyList = array_filter($myEmptyList);
echo "<br>Unsorted list:<br>";
print_r($myEmptyList);
echo "<br>";
return $myEmptyList;
}
}

//Sorts array and prints it.

function sortMyArray($myEmptyList){
if(isset($_POST['items'])) {
$sortedListArray = sort($myEmptyList);
echo "<br><br>Sorted list:<br>";
print_r($myEmptyList);
}}
