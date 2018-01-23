<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Find The Ninja</title>
</head>
<body>
    <!-- <script src="classes/Personnage.js"></script> -->
    <script type="text/javascript" src="ninja.js"></script>
    <script type="text/javascript" src="des.js"></script>
    <script type="text/javascript" src="game.js"></script>

    <p>
      Vous devez trouver le ninja correspondant à cette description :
      <span id="D1"></span>, <span id="D2"></span> & <span id="D3"></span>
    </p>

    <script type="text/javascript">
      console.log(des1);
      console.log(des2);
      console.log(des3);
      document.getElementById('D1').innerHTML = des1.result;
      document.getElementById('D2').innerHTML = des2.result;
      document.getElementById('D3').innerHTML = des3.result;
    </script>

</body>
</html>
