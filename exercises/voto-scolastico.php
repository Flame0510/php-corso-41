<?php
$grade = 5;

echo "<h1>Voto: $grade</h1>";
?>

<h2>Valutazione:
    <?php
    if ($grade >= 6) {
        if ($grade >= 7 && $grade <= 8) {
            echo "Buono";
        } else if ($grade >= 9 && $grade <= 10) {
            echo "Ottimo";
        } else {
            echo "Sufficente";
        }
    } else {
        echo "Insufficente";
    }
    ?>
</h2>