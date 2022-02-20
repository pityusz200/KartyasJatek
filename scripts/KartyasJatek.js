    document.getElementById("name").focus();
    var pont = 0;
    var index = 0;
    var max = 1;
    randomSzamArray = [];

    //CHECK
    function check(){
        var nev = document.getElementById("name").value;
        if (nev.toUpperCase() == files[randomSzamArray[index]].slice(0, -4).toUpperCase()) {
            document.getElementById("koviGomb").style.display = "block";
        }else{
            document.getElementById("koviGomb").style.display = "none";
        }
    }

    //SZÖVEGBŐL LEHET VELE LEVÁGNI X KARAKTERT
    function levago (szoveg, hanyat) {
        let a = [];
        a = szoveg.split("");
        let eddig = a.length-hanyat;
        for (let i = a.length-1; i > eddig; i--) {
            a.pop();
        }
        return a.join("");
    }

    // FILEK FUNCTION: BETÖLTI A KÉPET A SZÖVEGET
    filek();
    function filek() {
        eddig = files.length - 1;
        
        if(index >= eddig + 1){
            pont = pont + 1;
            finish();
        }

        if(index == 0){
            for (let i = 0; i < eddig+1; i++) {
                randomSzam = Math.floor(Math.random()*(eddig-0+1)+0);
                if(!randomSzamArray.includes(randomSzam)){
                    randomSzamArray.push(randomSzam);
                }else{
                    i--;
                }
             }
        }

        String.prototype.replaceAt = function (index, char) {
            let a = this.split("");
            if (a[index] != " ") {
                a[index] = char;
            }
            return a.join("");
        }

        // DEKLARÁCIÓ
        if (files[randomSzamArray[index]].includes("%20")) {
            files[randomSzamArray[index]] = files[randomSzamArray[index]].replace("%20", " ");
        }
        let nev = files[randomSzamArray[index]];
        nev = levago(nev, 5);
        let nevRandomSzam = [];
        let seged = 0;
        let szamolo = 0;
        nevRandomSzam.push(Math.floor(Math.random() * nev.length));
        let kontroll = 0;

        // RANDOMIZÁLÁS
        if (nev.length > 5) {
            for (let i = 1; i < 4; i++) {
                seged = Math.floor(Math.random() * nev.length);
                if (benneVan(nevRandomSzam, seged)) {
                    nevRandomSzam.push(seged);
                }else{
                    i--;
                    kontroll++;
                    if (kontroll > 30) {
                        i = 4;
                    }
                }
            }
        }

        // SZÖVEGBE TÖRLÉS
        document.getElementById('kep').src= "kepek/"+ js_fnev +"/" + nev + ".jpg";
        while (szamolo <= 3) {
                nev = nev.replaceAt(nevRandomSzam[szamolo], "_");
                szamolo++;
        }

        document.getElementsByClassName("nev")[0].innerHTML = nev;
    }

    // BENNE VAN
    function benneVan(nevRandomSzam, seged){
        for (let j = 0; j < nevRandomSzam.length; j++) {
                if (nevRandomSzam[j] == seged || seged == nevRandomSzam[j]-1 || seged == nevRandomSzam[j] + 1) {
                return false;
            }
        }
        return true;
    }

    function finish(){
        document.getElementById("kartyak").style.display = "none";
        document.getElementById("ujraButton").style.display = "block";
        document.getElementById("vege").innerHTML = "<h3>Vége.<br> Összes pontszámod: <br>" + pont + " pont / " + max + " pont" + "</h3>";
    }

    // NEXT GOMB
    function kovi(){
        document.getElementById('name').value = "";
        index = index + 1
        filek();
        check();
        pont = pont + 1;
        max = eddig + 1;
        document.getElementById('pont').innerHTML = pont + " / " + max;
        document.getElementById("name").focus();
    }

    var input = document.getElementById("name");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            if(document.getElementById("name").value.toUpperCase() == files[randomSzamArray[index]].slice(0, -4).toUpperCase()){
                kovi();
            }
        }
    });

    //Kép törtlése
    function torles(btn) {
        var btnName = btn.name;
            $.ajax({
            type: "GET",
            url: 'torles.php',
            data: {btnName: btnName},
            success: function(data){
                alert(data);
                location.reload();
            }
        });
    }

    //START GOMB

    function myScriptIN(){
        document.body.style.backgroundColor = "yellow";
        document.getElementById('table').style.backgroundColor = "yellow";
    }

    function myScriptOUT(){
        document.body.style.backgroundColor = "#cce0ff";
        document.getElementById('table').style.backgroundColor = "#cce0ff";
    }

    function kijelentkezesSzovegLathato(){
        document.getElementById("kijelentkezoSzoveg").hidden = false;
    }

    function kijelentkezesSzovegEltun(){
        document.getElementById("kijelentkezoSzoveg").hidden = true;
    }