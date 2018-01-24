<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Find The Ninja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body onload = "chronoStart()">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="center">
          Vous devez trouver le ninja correspondant à cette description :
          <span id="D1"></span>, <span id="D2"></span> & <span id="D3"></span>. <input type="button" onclick='window.location.reload(false)' value="Recommencer"/>
        </p>
        <p class="center">
          <span id="chronotime">0:00:00:00</span>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(hrk)"><img src="images/HRK.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(hrs)"><img src="images/HRS.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(hvk)"><img src="images/HVK.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(hvs)"><img src="images/HVS.png" class="tuile"></a><br>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(frk)"><img src="images/FRK.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(frs)"><img src="images/FRS.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(fvk)"><img src="images/FVK.png" class="tuile"></a><br>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" onclick="verifNinja(fvs)"><img src="images/FVS.png" class="tuile"></a><br>
      </div>
    </div>
  </div>

  <form name="chronoForm" class="hidden">
      <input type="button" name="startstop" value="start!" onClick="chronoStart()" />
      <input type="button" name="reset" value="reset!" onClick="chronoReset()" />
  </form>

  <script type="text/javascript" src="chrono.js"></script>
  <script type="text/javascript" src="des.js"></script>
  <script type="text/javascript" src="game.js"></script>
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
