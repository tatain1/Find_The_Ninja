<?php
function isPaire($dice) {
  if ($dice % 2 == 0) {
    return true;
  } elseif ($dice % 2 == 1) {
    return false;
  }
}

function checkTarget($array, $key ,$dice) {
  if ($array[$key] != $dice) {
    $key = $key + 1;
    checkTarget($array, $key ,$dice);
  } else {
    echo "ok, stop ";
    echo $array[$key]. ' ';
    echo $dice. ' ';
    die();
  }
}

function kshuffle(&$array) {
    if(!is_array($array) || empty($array)) {
        return false;
    }
    $tmp = array();
    foreach($array as $key => $value) {
        $tmp[] = array('k' => $key, 'v' => $value);
    }
    shuffle($tmp);
    $array = array();
    foreach($tmp as $entry) {
        $array[$entry['k']] = $entry['v'];
    }
    return true;
}

 ?>
