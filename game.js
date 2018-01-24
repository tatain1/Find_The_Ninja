var des1 = new DesSex();
var des2 = new DesColor();
var des3 = new DesArme();

if (des1.result ==  "Homme") {
  if (des2.result == "Rouge") {
    if (des3.result == "Kunaï") {
      var target = "HRS";
    } else {
      var target ="HRK"
    }
  } else {
    if (des3.result == "Kunaï") {
      var target = "HVS";
    } else {
      var target ="HVK"
    }
  }
} else {
  if (des2.result == "Rouge") {
    if (des3.result == "Kunaï") {
      var target = "FRS";
    } else {
      var target ="FRK"
    }
  } else {
    if (des3.result == "Kunaï") {
      var target = "FVS";
    } else {
      var target ="FVK"
    }
  }
}

var hrk = "HRK";
var hrs = "HRS";
var hvk = "HVK";
var hvs = "HVS";
var frk = "FRK";
var frs = "FRS";
var fvk = "FVK";
var fvs = "FVS";

var verifNinja = function(target){
  if (this.target == target) {
    chronoStop();
    alert("Gagné !!!");
    console.log("Ok");
  } else {
    alert("Perdu !!!");
    console.log("Non");
  }
}
