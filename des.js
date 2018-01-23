var DesSex = function(){

    function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
  }

  if (getRandomInt(1, 3) == 1) {
    this.result = "Homme";
  } else {
    this.result = "Femme";
  }
}

var DesColor = function(){

    function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
  }

  if (getRandomInt(1, 3) == 1) {
    this.result = "Rouge";
  } else {
    this.result = "Vert";
  }
}

var DesArme = function(){

    function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
  }

  if (getRandomInt(1, 3) == 1) {
    this.result = "Shuriken";
  } else {
    this.result = "Katana";
  }
}
