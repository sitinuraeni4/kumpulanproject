// Atribut HTML
function luas_persegi(){

    var p=2;
    var l=3;
    var hasil=p*l;

    document.getElementById("panjang").innerHTML =p;
    document.getElementById("lebar").innerHTML =l;
    document.getElementById("hasil_luas").innerHTML =hasil;
}



//Document Object Model (DOM)
//const a = document.getElementById("luas_persegiDOM");
//a.addEventListener("click", function(){ 
    //masukan logika perhitungan

    //var p=2;
    //var l=3;
    //var hasil=p*l;

    //document.getElementById("panjangDOM").innerHTML =p;
    //document.getElementById("lebarDOM").innerHTML =l;
    //document.getElementById("hasil_luasDOM").innerHTML =hasil;
//});

document.addEventListener("keydown", function(event) {
    event.preventDefault();
    const key = event.key; 
    switch (key) { 
      case "ArrowLeft":
        // Left pressed
        var p=2;
        var l=3;
        var hasil=p*l;

        document.getElementById("panjangDOM").innerHTML =p;
        document.getElementById("lebarDOM").innerHTML =l;
        document.getElementById("hasil_luasDOM").innerHTML =hasil;
        break;
      case "ArrowRight":
        // Right pressed
        var p=2;
    var l=3;
    var hasil=p*l;

    document.getElementById("panjang").innerHTML =p;
    document.getElementById("lebar").innerHTML =l;
    document.getElementById("hasil_luas").innerHTML =hasil;
        break;
      case "ArrowUp":
        // Up pressed
        
        break;
      case "ArrowDown":
        // Down pressed
        
        break;
    }
  });