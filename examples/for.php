<?php
// Array associativo (vuole dire che le chiavi sono stringhe, non numeri)
// Array classico = [0 => "John", 1 => "Doe", 2 => 30, 3 => "New York"]
// Array associativo = ["name" => "John", "age" => 30, "city" => "New York"]
$data = (
    [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ]
);

// Esempio di array classico
/* $data = (
    [
        0 => "John Doe",
        1 => 30,
        2 => "New York"
    ]
); */

// Stampo il nome dell'utente originale
echo "<p>{$data['name']}</p>";

// Modifico il nome dell'utente
$data["name"] = "Michele";

// Stampo il nome modificato
echo "<p>{$data['name']}</p>";


// Stampo l'intero array in formato JSON
echo json_encode($data);


// Divisore HTML
echo "<hr>";


// Stampa numeri da 1 a 10
for ($i = 1; $i <= 10; $i++) {
    echo "<h2>Iterazione: $i</h2>";
}

// Divisore HTML
echo "<hr>";


// Stampa utenti con array
$users = ["Alice", "Bob", "Charlie", "Diana"];

// count($users) restituisce la lunghezza dell'array (4 in questo caso)
for ($i = 0; $i < count($users); $i++) {
    echo "<p>Utente: " . $users[$i] . "</p>";
}
