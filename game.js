var hrk1 = "hrk1";
var hrs1 = "hrs1";
var hvk1 = "hvk1";
var hvs1 = "hvs1";
var frk1 = "frk1";
var frs1 = "frs1";
var fvk1 = "fvk1";
var fvs1 = "fvs1";

var hrk2 = "hrk2";
var hrs2 = "hrs2";
var hvk2 = "hvk2";
var hvs2 = "hvs2";
var frk2 = "frk2";
var frs2 = "frs2";
var fvk2 = "fvk2";
var fvs2 = "fvs2";

var verifNinja = function(tuile, target){
  console.log(tuile);
  console.log(this.target);
  if (tuile == target) {
    chronoStop();
    alert("Gagné !!!");
    console.log("Ok");
  } else {
    alert("Perdu !!!");
    console.log("Non");
  }
}
