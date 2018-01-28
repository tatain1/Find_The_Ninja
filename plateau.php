<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Find The Ninja</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<?php
include 'functions.php';

$my_arrays = array("hrk", "hrs", "hvk", "hvs", "frk", "frs", "fvk", "fvs");
// Decommenter ci-dessous un fois test = OK.
// shuffle($my_arrays);

$key = 0;
// Ci-dessous "hvs" = pour le test ; changera dynamiquement.
$target = "";
$dice_target_result = "fvs";
// Ci-dessous "1" = pour le test ; changera dynamiquement.
$dice_gate_result = 2;
$sens = "";

if (isPaire($dice_gate_result)) {
  $sens = "Horaire";
} else {
  $sens = "Anti-horaire";
}


while ($target != $dice_target_result) {
  checkTarget($my_arrays, $key ,$dice_target_result);
}


die();

?>

<body>
  <!-- ZONE DE TEST  -->
  <!-- <div class="rules">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div> -->
  <div class="plateauTest">
    <div class="ligneTest">
      <div class="vide15"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><p style="width:100%;text-align:center;margin-bottom:0px;">ICI PORTE FIXE</p></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
    </div>
    <div class="ligneTest2">
      <div class="vide10"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="vide60"><p style="width:100%;text-align:center;margin-bottom:0px;">Vous recherchez :</p></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
    </div>
    <div class="ligneTest">
      <div class="vide10"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="vide15"><p style="width:100%;text-align:center;margin-bottom:0px;"><?php echo $my_arrays[0] ?></p></div>
      <div class="vide15"><p style="width:100%;text-align:center;margin-bottom:0px;"><?php echo $my_arrays[1] ?></p></div>
      <div class="vide15"><p style="width:100%;text-align:center;margin-bottom:0px;"><?php echo $my_arrays[2] ?></p></div>
      <div class="vide15"><p style="width:100%;text-align:center;margin-bottom:0px;"><?php echo $my_arrays[3] ?></p></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
    </div>
    <div class="ligneTest2">
      <div class="vide10"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="vide60"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
    </div>
    <div class="ligneTest">
      <div class="vide20"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest1"><img src="images/ninjatest.png" class="ninjatest"></div>
      <div class="tuileTest2"><img src="images/ninjatest.png" class="ninjatest"></div>
    </div>


  </div>

</body>
</html>
