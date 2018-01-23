<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find The Ninja</title>
</head>
<body>
    <!-- <script src="classes/Personnage.js"></script> -->
    <script src="ninja.js"></script>
    <script src="game.js"></script>

    <p>
      Vous devez trouver le ninja correspondant à cette description :
      <span id="D1"></span> <span id="D2"></span> & <span id="D3"></span>
    </p>

    <script type="text/javascript">
      console.log(arene);
      document.getElementById('D1').innerHTML = d1.tirage;
      document.getElementById('D2').innerHTML = d2.tirage;
      document.getElementById('D3').innerHTML = d3.tirage;
    </script>

</body>
</html>
