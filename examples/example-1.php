<?php
$name = "Michele"; // variabile di tipo stringa
$age = 24; // variabile di tipo intero
$color = "blue";

echo "<h1>Name: $name</h1>"; // stampa il valore della variabile $name
echo "<h1>Age: $age</h1>"; // stampa il valore della variabile $age



if (true) {
    //GLOBALS
    $test = true; // Variabile
    define("PI_GRECO", 3.14); // Costante
}

echo $test;
echo PI_GRECO; // 3.14
?>


<!-- DINAMICO CON PHP -->
<h2 style="color: <?php echo $color ?>"><?php echo $color ?> </h2>

<?php $color = "pollo"; ?>

<!-- DINAMICO CON PHP IN UN UNICO ECHO -->
<?php echo "<h2 style='color: $color'>$color</h2>" ?>

<!-- LEGACY -->
<h2 style="color: red">red</h2>