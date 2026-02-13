<?php

// Imposto il content-type JSON
header('Content-Type: application/json');

// Recupero il nome inviato tramite POST
$name = $_POST['name'];

// Controllo se il nome è stato fornito
if (!$name) {
    // Restituisco un codice di stato 404
    http_response_code(404);
    // Restituisco un messaggio di errore
    echo json_encode([
        "error" => "Name is required"
    ]);
    exit;
}

// Simulazione di una risposta dell'API
echo json_encode([
    "message" => "Hello, $name! Welcome to my API."
]);
