//mobil navigacio
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
//bejelentkezes bezaro
function loginClose() {

    var modal = document.getElementById('id01');
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
}
//trailerAnimacio
function trailerAnim() {
    var x = document.getElementsByClassName("framek");

    var i = 1;

    function myLoop() {
        setTimeout(function () {
            x.item(0).className = "framek2";
            i++;
            if (i < 7) {
                myLoop();
            }
        }, 250)
    }

    myLoop();

}

function idopont(nap) {
    //FilmekAnimacio
    var delayInMilliseconds = 1;
    var x = document.getElementById("filmek");
    if (x.className === "anim") {
        x.style.animationName = "none";


        setTimeout(function () {
            x.style.animationName = "example";
        }, delayInMilliseconds);

    } else {
        x.className = "anim";
    }
//napgomb kijelölés
    var z = document.getElementsByClassName("napok");
    for (var i = 0; i < 5; i++) {


        z.item(i).style.color = "";

    }
    z.item(nap).style.color = "#04AA6D";
}