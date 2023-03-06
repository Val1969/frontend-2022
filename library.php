<?php

    function stampa_div($classe, $contenuto, $id="") {
        echo "div class='" . $classe . "'>";
        if ($id != "") {
            echo "id='"  .$id . "'";
        }
        echo ">";
        echo $contenuto;
        echo "</div>";
    }

    function valore_assoluto($numero) {
        //se il valore è negativo, lo moltiplico per -1
        //altrimenti lo restituisco senza modificarlo
        if ($numero<0) {
            $risultato=$numero*-1; 
        } else {
            $risultato=$numero;
        }

        return $risultato;
    }


    //ESERCIZIO
    //scrivere la funzione rpeti che accetta due argomenti (un numero e una stringa)
    //e stampa la stringa tante volte quando indicato dal numero,
    //andando a capo dopo ogni stampa (es input:e 3 "ciao", Output ciao<br>ciao<br>ciao<br>)
    //syntax str_repeat($string, $repeat_no)
    function ripeti($numero, $testo) {
        //ciclo per stampare $numero volte il contenuto di $testo
        echo "<p>"; //apro il paragrafo 
        for ($i=0; $i<$numero; $i++) {
            echo $testo . "<br>";
        }
        echo "</p>"; //chiudo il paragrafo

    }

    //ESERCIZIO
    //modificare la funzione dell'esercizio precedente per racchiudere output all'interno di un tag p
    //es Input: 3 e "ciao", <p>Output ciao<br>Output ciao<br>Output ciao<br><p>

?>