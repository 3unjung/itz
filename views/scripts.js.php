<script>
    function minimaxi() {

        var table = [];
        var moyenne = 0 / i;
        var sum = 0;
        var i = -1;
        var n = 0;
        do {
            n = parseInt((window.prompt("tapez un nombre")));
            var tidy = table.push(n);
            var min = n
            sum = sum + n;
            i++;
            alert(n);
            alert(table.sort());

        } while (n != 0)
        var moyenne = sum / i;
        alert(moyenne);
    }

    function calculatrice() {
        var x = parseInt(window.prompt("saisir un nombres"));
        var y = parseInt(window.prompt(" saisir un nombre"));
        var op = window.prompt("tapez un opérateur");
        var resultat = 0;
        switch (op) {
            case "+":
                resultat = x + y;
                alert(resultat);
                break;
            case "-":
                resultat = x - y;
                alert(resultat);
                break;
            case "*":
                resultat = x * y;
                alert(resultat);
                break;
            case "/":
                resultat = x / y;
                if (y == 0) {
                    alert("erreur");
                    break;
                }
                alert(resultat);
                break;
        };
    }

    function comptes() {
        i = 0;
        j = 0;
        k = 0;
        do {
            n = prompt("entrez un âge/La saisis s'arrête lors d'un centenaire");
            if (n <= 20) {
                i++;
            } else if (n >= 40) {
                j++;
            } else if (n >= 20 && n <= 40) {
                k++;
            }
        } while (n < 100);
        alert("il y'a " + " " + i + " " + "de jeune(s)," + " " + k + " " + "de moyen(s)," + " " + "senior(s), et un centenaire.");
    }

    function integerLowerN() {
        var n = prompt("Tapez un entier");
        var resultat = 0;
        while (n > 0) {
            resultat += n--;
        }
        alert(resultat);
    }

    function multiplicationTables() {
        i = 0;
        var n = prompt("entrez une table");
        var table_size = 10;
        while (i < table_size) {
            i++;
            alert(i + "x" + n + "=" + i * n);
        };
    }
</script>
