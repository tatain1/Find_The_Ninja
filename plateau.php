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

$plateau = array(
  0 => array(
    "type" => "ninja",
    "nom" => "hrk1",
    "attributs" => "hrk"
  ),
  1 => array(
    "type" => "ninja",
    "nom" => "hrk2",
    "attributs" => "hrk"
  ),
  2 => array(
    "type" => "ninja",
    "nom" => "hrs1",
    "attributs" => "hrs"
  ),
  3 => array(
    "type" => "ninja",
    "nom" => "hrs2",
    "attributs" => "hrs"
  ),
  4 => array(
    "type" => "ninja",
    "nom" => "hvk1",
    "attributs" => "hvk"
  ),
  5 => array(
    "type" => "ninja",
    "nom" => "hvk2",
    "attributs" => "hvk"
  ),
  6 => array(
    "type" => "ninja",
    "nom" => "hvs1",
    "attributs" => "hvs"
  ),
  7 => array(
    "type" => "ninja",
    "nom" => "hvs2",
    "attributs" => "hvs"
  ),
  8 => array(
    "type" => "ninja",
    "nom" => "frk1",
    "attributs" => "frk"
  ),
  9 => array(
    "type" => "ninja",
    "nom" => "frk2",
    "attributs" => "frk"
  ),
  10 => array(
    "type" => "ninja",
    "nom" => "frs1",
    "attributs" => "frs"
  ),
  11 => array(
    "type" => "ninja",
    "nom" => "frs2",
    "attributs" => "frs"
  ),
  12 => array(
    "type" => "ninja",
    "nom" => "fvk1",
    "attributs" => "fvk"
  ),
  13 => array(
    "type" => "ninja",
    "nom" => "fvk2",
    "attributs" => "fvk"
  ),
  14 => array(
    "type" => "ninja",
    "nom" => "fvs1",
    "attributs" => "fvs"
  ),
  15 => array(
    "type" => "ninja",
    "nom" => "fvs2",
    "attributs" => "fvs"
  )
);

$portes = array(
  0 => array(
    "type" => "porte",
    "nom" => "portebleue",
    "attributs" => "blue"
  ),
  1 => array(
    "type" => "porte",
    "nom" => "porterouge",
    "attributs" => "red"
  ),
  2 => array(
    "type" => "porte",
    "nom" => "portejaune",
    "attributs" => "yellow"
  )
);

// Preparation du plateau de jeu
shuffle($plateau);
array_push($plateau, $plateau[0], $plateau[7], $plateau[14]);

$plateau[0] = $portes[0];
$plateau[7] = $portes[1];
$plateau[14] = $portes[2];

foreach ($plateau as $key => $tuile) {
  echo $key. ' ' .$tuile['type']. ', ' .$tuile['nom']. ', ' .$tuile['attributs']. '<br>';
}

$plateau_size = count($plateau);
echo '<br> Taille du plateau : ' .$plateau_size. '<br>';

// Tirage de la porte d'entrée
$de_porte = rand(1, 6);
$porte_d_entree = entryGate($de_porte);
$sens = isPaire($de_porte);

// Tirage des attributs de la cible
$de_sexe = defineSex(rand(1, 2));
$de_couleur = defineColor(rand(1, 2));
$de_arme =  defineWeapon(rand(1, 2));
$attributs = $de_sexe.$de_couleur.$de_arme;

// Definition de la cible


echo '<br> Dé de porte = ' .$de_porte. '<br>';
echo $porte_d_entree. '<br>';
echo $sens. '<br><br>';

echo $attributs. '<br>';

die();



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
