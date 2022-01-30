    // RELOAD
    // AJAX
    /*
    function ajax(){
        let dir = "kepek/";
        let fileextension = ".jpg";
        let kepArray = [];
        $.ajax({
            url: dir,
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
               $(data).find("a:contains(" + fileextension + ")").each(function () {
                    var filename = this.href.replace(window.location.host, "").replace("https:///", "");
                    filename = filename.replace("KartyasJatek/", "");
                    kepArray.push(filename);
                    //console.log("Filename: " + filename);
                    //$("body").append($("<img src=" + dir + filename + "></img>"));
                });
            }
        });
        
        return kepArray;
    }
        let files = [];
        files = ajax();
        
        $( document ).ready(function() {
            if (files[0] == undefined) {
                location.reload();
            }
            filek();
        });
        let randomSzam = 0;
        //window.onload = filek();
    */

    // CHECK
    function check(){
        var nev = document.getElementById("name").value;
        console.log(files[randomSzam].slice(0, -4));
        if (nev.toUpperCase() == files[randomSzam].slice(0, -4).toUpperCase()) {
            document.getElementsByClassName("gomb")[0].style.display = "block";
            document.getElementsByClassName("gomb")[1].style.display = "block";
        }else{
            document.getElementsByClassName("gomb")[0].style.display = "none";
            document.getElementsByClassName("gomb")[1].style.display = "none";
            document.getElementsByClassName("links")[0].style.display = "none";
        }
    }

    // MUTI
    function muti(){
        document.getElementsByClassName("links")[0].style.display = "block";
    }

    function levago (szoveg, hanyat) {
        console.log(szoveg);
        let a = [];
        a = szoveg.split("");
        console.log("A: " + a);
        let eddig = a.length-hanyat;
        console.log("EDDIG: " + eddig);
        for (let i = a.length-1; i > eddig; i--) {
            a.pop();
        }
        console.log("A join elott: " + a);
        return a.join("");
    }

    // FILEK FUNCTION
    filek();
    function filek() {
        eddig = files.length - 1;
        randomSzam = Math.floor(Math.random() * eddig)+1;
        console.log("randomSzam:" + randomSzam);
        String.prototype.replaceAt = function (index, char) {
            let a = this.split("");
            if (a[index] != " ") {
                a[index] = char;
            }
            return a.join("");
        }

        // DEKLARÁCIÓ
        if (files[randomSzam].includes("%20")) {
            files[randomSzam] = files[randomSzam].replace("%20", " ");
        }
        let nev = files[randomSzam];
        console.log("Ki randomizált file: " + nev);   
        nev = levago(nev, 5);
        console.log("Levagó után: " + nev);
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
        document.getElementById('kep').src= "kepek/" + nev + ".jpg";
        while (szamolo <= 3) {
                nev = nev.replaceAt(nevRandomSzam[szamolo], "_");
                szamolo++;
        }

        console.log("Kontroll: " + kontroll);
        document.getElementsByClassName("nev")[0].innerHTML = nev;
    }

    // BENNE VAN
    function benneVan(nevRandomSzam, seged){
        for (let index = 0; index < nevRandomSzam.length; index++) {
                if (nevRandomSzam[index] == seged || seged == nevRandomSzam[index]-1 || seged == nevRandomSzam[index] + 1) {
                return false;
            }
        }
        return true;
    }

    // NEXT GOMB
    function kovi(){
        location.reload();
    }