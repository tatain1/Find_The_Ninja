<?php

function debug($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function isPaire($dice) {
  if ($dice % 2 == 0) {
    return 'horaire';
  } elseif ($dice % 2 == 1) {
    return 'anti-horaire';
  }
}

function entryGate($dice) {
  if ($dice == 1 || $dice == 2) {
    return 'Porte Bleue';
  } elseif ($dice == 3 || $dice == 4) {
    return 'Porte Rouge';
  } elseif ($dice == 5 || $dice == 6) {
    return 'Porte Jaune';
  }
}

function defineSex($dice) {
  if ($dice == 1) {
    return 'h';
  } elseif ($dice == 2) {
    return 'f';
  }
}

function defineColor($dice) {
  if ($dice == 1) {
    return 'r';
  } elseif ($dice == 2) {
    return 'v';
  }
}

function defineWeapon($dice) {
  if ($dice == 1) {
    return 'k';
  } elseif ($dice == 2) {
    return 's';
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


 ?>
