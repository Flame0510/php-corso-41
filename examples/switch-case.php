<!-- NON GESTISCE IL COLORE DINAMICO -->
<h1 style='color: green'>
    <?php
    // Valore iniziale
    $status = "inactive";

    // Esempio di switch-case
    switch ($status) {
        case "active":
            echo "User is active";
            break;
        case "inactive":
            echo "User is inactive";
            break;
        case "banned":
            echo "User is banned";
            break;
        default:
            echo "User status is unknown";
            break;
    }
    ?>
</h1>



<!-- COMPLETO CON COLORE DINAMICO -->
<?php
$status = "niente";

switch ($status) {
    case "active":
        $color = "green";
        break;
    case "banned":
        $color = "orange";
        break;
    case "inactive":
        $color = "red";
        break;
    default:
        $color = "lightblue";
}

echo "<h1 style='color: $color'>User status: $status</h1>";
?>