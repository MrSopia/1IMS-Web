document.getElementById("dragon").addEventListener("mouseover", mouseOver);

function mouseOver() {
    var img = document.getElementById('dragon'); // lengte en breedte van image pakken
    var width = img.clientWidth;                // voor berekeningen later
    var height = img.clientHeight;

    document.getElementById("dragon").style.position = "absolute";
    var x = screen.availWidth;      // gebruikbare resolutie
    var y = screen.availHeight;

    

    x = (Math.floor(Math.random() * x) - width);
    y = (Math.floor(Math.random() * y) - height);

    if (x < 0 ){    // zorgen dat x en y niet negatief kunnen gaan(uit scherm beeld)
        x = 0;
    }
    if (y < 0){
        y = 0;
    }

    console.log("dragon pos x: "+ x);
    console.log("dragon pos y: "+ y);

    document.getElementById("dragon").style.left=x + "px";
    document.getElementById("dragon").style.top=y + "px";

  }