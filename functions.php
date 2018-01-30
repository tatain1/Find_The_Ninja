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
    return 'antihoraire';
  }
}

function entryGate($dice) {
  if ($dice == 1 || $dice == 2) {
    return 0;
  } elseif ($dice == 3 || $dice == 4) {
    return 7;
  } elseif ($dice == 5 || $dice == 6) {
    return 14;
  }
}

function getEntryColor($dice) {
  if ($dice == 1 || $dice == 2) {
    return 'blue';
  } elseif ($dice == 3 || $dice == 4) {
    return 'red';
  } elseif ($dice == 5 || $dice == 6) {
    return 'yellow';
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
    echo $key;
    die();
    checkTarget($array, $key ,$dice);
  } else {
    echo "ok, stop ";
    echo $array[$key]. ' ';
    echo $dice. ' ';
    die();
  }
}

function goToNextTile($current_tile, $plateau_size) {
  if ($current_tile == $plateau_size-1) {
    return $current_tile = 0;
  } else {
    return $current_tile = $current_tile+1;
  }
}

function goToPreviousTile($current_tile, $plateau_size) {
  if ($current_tile == 0) {
    return $current_tile = $plateau_size-1;
  } else {
    return $current_tile = $current_tile-1;
  }
}

function isTrappe($tile) {
  if ($tile == 4 || $tile == 12 || $tile == 18) {
    return true;
  }
}

function goNextTrappe($tile) {
  if ($tile == 4) {
    return 12;
  } elseif ($tile == 12) {
    return 18;
  } elseif ($tile == 18) {
    return 4;
  }
}

function goPreviousTrappe($tile) {
  if ($tile == 4) {
    return 18;
  } elseif ($tile == 12) {
    return 4;
  } elseif ($tile == 18) {
    return 12;
  }
}


 ?>
