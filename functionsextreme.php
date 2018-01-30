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

function entryGateM($dice) {
  if ($dice == 1 || $dice == 2) {
    return 0;
  } elseif ($dice == 3 || $dice == 4) {
    return 8;
  } elseif ($dice == 5 || $dice == 6) {
    return 16;
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
  if ($tile == 6 || $tile == 16 || $tile == 22) {
    return true;
  }
}

function goNextTrappe($tile) {
  if ($tile == 6) {
    return 16;
  } elseif ($tile == 16) {
    return 22;
  } elseif ($tile == 22) {
    return 6;
  }
}

function goPreviousTrappe($tile) {
  if ($tile == 6) {
    return 22;
  } elseif ($tile == 16) {
    return 6;
  } elseif ($tile == 22) {
    return 16;
  }
}

function isSwapper($tile) {
  if ($tile == 4 || $tile == 13 || $tile == 20) {
    return true;
  }
}

function swapAttribut($tile, $attributs) {
  if ($tile == 4) {
    if ($attributs[0] == "h") {
      $attributs = "f".$attributs[1].$attributs[2];
      return $attributs;
    } elseif ($attributs[0] == "f") {
      $attributs = "h".$attributs[1].$attributs[2];
      return $attributs;    }
  }
  if ($tile == 13) {
    if ($attributs[1] == "r") {
      $attributs = $attributs[0].'v'.$attributs[2];
      return $attributs;
    } elseif ($attributs[1] == "v") {
      $attributs = $attributs[0].'r'.$attributs[2];
      return $attributs;
    }
  }
  if ($tile == 20) {
    if ($attributs[2] == "k") {
      $attributs = $attributs[0].$attributs[1].'s';
      return $attributs;
    } elseif ($attributs[2] == "s") {
      $attributs = $attributs[0].$attributs[1].'k';
      return $attributs;    }
  }
}


 ?>
