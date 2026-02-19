<?php

$fruits = ["Apple", "Banana", "Cherry", "Date"];

// FOREACH
echo "<h2>FOREACH</h2>";
foreach ($fruits as $fruit) {
    echo "<button onclick='fruit_stamp(\"$fruit\")'>Frutto: $fruit</button>";
    
    // Stampa HTML con JavaScript per ogni frutto
    // onclick stampa il frutto selezionato tramite JavaScript (fruit_stamp) quando viene cliccato il pulsante
    // <button onclick='fruit_stamp("Apple")'>Frutto: Apple</button>
}

// FOR 
echo "<h2>FOR</h2>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "<button onclick='fruit_stamp(\"$fruits[$i]\")')'>Frutto: $fruits[$i]</button>";
}
?>


<script>
    // Funzione JavaScript per stampare il frutto selezionato da PHP
    function fruit_stamp(fruit) {
        if (confirm("Vuoi selezionare " + fruit + "?")) {
            alert(fruit);
        }
    }
</script>