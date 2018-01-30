<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Find The Ninja</title>
    <link rel="stylesheet" href="normalize.css">
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

$trappes = array(
  0 => array(
    "type" => "trappe",
    "nom" => "trappe1",
    "attributs" => "t1"
  ),
  1 => array(
    "type" => "trappe",
    "nom" => "trappe2",
    "attributs" => "t2"
  ),
  2 => array(
    "type" => "trappe",
    "nom" => "trappe2",
    "attributs" => "t2"
  ),
);

// Preparation du plateau de jeu
shuffle($plateau);
array_push($plateau, $plateau[0]);
$plateau[0] = $portes[0];
array_push($plateau, $plateau[4]);
$plateau[4] = $trappes[0];
array_push($plateau, $plateau[8]);
$plateau[8] = $portes[1];
array_push($plateau, $plateau[12]);
$plateau[12] = $trappes[1];
array_push($plateau, $plateau[16]);
$plateau[16] = $portes[2];
array_push($plateau, $plateau[18]);
$plateau[18] = $trappes[2];

$plateau_size = count($plateau);

// Tirage de la porte d'entrée
$de_porte = rand(1, 6);
$porte_d_entree = entryGateM($de_porte);
$sens = isPaire($de_porte);
$entree = getEntryColor($de_porte).$sens;

// Tirage des attributs de la cible
$de_sexe = defineSex(rand(1, 2));
$de_couleur = defineColor(rand(1, 2));
$de_arme =  defineWeapon(rand(1, 2));
$attributs = $de_sexe.$de_couleur.$de_arme;

// Definition de la cible
$current_tile = $porte_d_entree;
if ($sens == 'horaire') {
  while ($plateau[$current_tile]['attributs'] !== $attributs) {
    $current_tile = goToNextTile($current_tile, $plateau_size);

    if (isTrappe($current_tile)) {
      $current_tile = goNextTrappe($current_tile);
    }
  }

  $target = $plateau[$current_tile]['nom'];

} elseif ($sens == 'antihoraire') {
  while ($plateau[$current_tile]['attributs'] !== $attributs) {
    $current_tile = goToPreviousTile($current_tile, $plateau_size);

    if (isTrappe($current_tile)) {
      $current_tile = goPreviousTrappe($current_tile);
    }
  }

  $target = $plateau[$current_tile]['nom'];
}

?>

<body onload = "chronoStart()">
  <!-- ZONE DE TEST  -->
  <div class="rules">
    <p class="center">
      <a href="index.php">MODE FACILE</a> <a href="moyen.php">MODE MOYEN</a> <a href="difficile.php">MODE DIFFICILE</a> <a href="extreme.php">MODE EXTREME</a> 
    </p>
    <p>
      Désormais, les ninjas peuvent emprunter des trappes. Si le ninja que vous cherchez à rencontré une trappe sur sa route, il
      y est entré et est ressorti par la trappe suivante avant de continuer son chemin.
    </p>
    <p class="center">
      <span id="chronotime">0:00:00:00</span>
      <input type="button" onclick='window.location.reload(false)' value="Recommencer"/>
    </p>
    <form name="chronoForm" class="hidden">
        <input type="button" name="startstop" value="start!" onClick="chronoStart()" />
        <input type="button" name="reset" value="reset!" onClick="chronoReset()" />
    </form>
  </div>
  <div class="plateauTest">
    <div class="ligneTest">
      <div class="vide5"></div>
      <div class="tuileTest1"><img src="images/trappe.jpg" class="ninjatest"></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[19]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[19]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[20]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[20]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[21]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[21]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><img src="images/<?php echo $plateau[0]['nom']; ?>.png" class="ninjatest"></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[1]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[1]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[2]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[2]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[3]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[3]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest1"><img src="images/trappe.jpg" class="ninjatest"></div>
    </div>
    <div class="ligneTest2">
      <div class="vide5"></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[17]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[17]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="vide70"><p style="width:100%;text-align:center;margin-bottom:0px;">Vous recherchez :<span id="target" class="hidden"><?php echo $target; ?></span></p></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[5]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[5]['attributs']; ?>.png" class="ninjatest"></a></div>
    </div>
    <div class="ligneTest">
      <div class="vide5"></div>
      <div class="tuileTest2"><img src="images/<?php echo $plateau[16]['nom']; ?>.png" class="ninjatest"></div>
      <div class="vide15"><p id="de-sex" style="width:100%;text-align:center;margin-bottom:0px;"><img src="images/dices/<?php echo $de_sexe ?>.png"></p></div>
      <div class="vide15"><p id="de-color" style="width:100%;text-align:center;margin-bottom:0px;"><img src="images/dices/<?php echo $de_couleur ?>.png"></p></div>
      <div class="vide20"><p id="de-weapon" style="width:100%;text-align:center;margin-bottom:0px;"><img src="images/dices/<?php echo $de_arme ?>.jpg"></p></div>
      <div class="vide20"><p style="width:100%;text-align:center;margin-bottom:0px;"><img src="images/dices/<?php echo $entree ?>.png"></p></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[6]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[6]['attributs']; ?>.png" class="ninjatest"></a></div>
    </div>
    <div class="ligneTest2">
      <div class="vide5"></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[15]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[15]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="vide70"></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[7]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[7]['attributs']; ?>.png" class="ninjatest"></a></div>
    </div>
    <div class="ligneTest">
      <div class="vide15"></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[14]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[14]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[13]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[13]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest1"><img src="images/trappe.jpg" class="ninjatest"></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[11]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[11]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><a href="#" onclick="verifNinja(<?php echo $plateau[10]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[10]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest1"><a href="#" onclick="verifNinja(<?php echo $plateau[9]['nom']. ', ' .$target?>)"><img src="images/<?php echo $plateau[9]['attributs']; ?>.png" class="ninjatest"></a></div>
      <div class="tuileTest2"><img src="images/<?php echo $plateau[8]['nom']; ?>.png" class="ninjatest"></div>
    </div>
  </div>

  <script type="text/javascript" src="chrono.js"></script>
  <script type="text/javascript" src="game.js"></script>

  <script type="text/javascript">
    var de_sex = document.getElementById("de-sex");
    var de_sex = de_sex.textContent;
    var de_color = document.getElementById("de-color");
    var de_color = de_color.textContent;
    var de_weapon = document.getElementById("de-weapon");
    var de_weapon = de_weapon.textContent;

    var target = document.getElementById("target");
    var target = target.textContent;

    console.log(de_sex);
    console.log(de_color);
    console.log(de_weapon);
    console.log(target);
  </script>


</body>
</html>
