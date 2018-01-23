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

    <p>
      <h1>Liste des ninjas presents :</h1>
      <a href="#" onclick="verifNinja(hrk)">HRK</a><br>
      <a href="#" onclick="verifNinja(hrs)">HRS</a><br>
      <a href="#" onclick="verifNinja(hvk)">HVK</a><br>
      <a href="#" onclick="verifNinja(hvs)">HVS</a><br>
      <a href="#" onclick="verifNinja(frk)">FRK</a><br>
      <a href="#" onclick="verifNinja(frs)">FRS</a><br>
      <a href="#" onclick="verifNinja(fvk)">FVK</a><br>
      <a href="#" onclick="verifNinja(fvs)">FVS</a><br>
    </p>

    <script type="text/javascript">
      console.log(target);
      console.log(des1);
      console.log(des2);
      console.log(des3);
      document.getElementById('D1').innerHTML = des1.result;
      document.getElementById('D2').innerHTML = des2.result;
      document.getElementById('D3').innerHTML = des3.result;
    </script>

</body>
</html>
