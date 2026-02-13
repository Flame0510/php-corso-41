<?php
$voto = 5;

echo "<h1>Voto: $voto</h1>";
?>

<h2>Valutazione:
    <?php
    if ($voto >= 6) {
        if ($voto >= 7 && $voto <= 8) {
            echo "Buono";
        } else if ($voto >= 9 && $voto <= 10) {
            echo "Ottimo";
        } else {
            echo "Sufficente";
        }
    } else {
        echo "Insufficente";
    }
    ?>
</h2>