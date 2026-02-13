<?php

// Imposto il content-type JSON
header('Content-Type: application/json');

// Simulazione di un database di utenti
$users = [
    [
        "name" => "Alice",
        "age" => 30,
        "email" => "tqPZL@example.com",
        "city" => "New York"
    ],
    [
        "name" => "Bob",
        "age" => 25,
        "email" => "h5TbI@example.com",
        "city" => "London"
    ],
    [
        "name" => "Charlie",
        "age" => 35,
        "email" => "Bb5dE@example.com",
        "city" => "Paris"
    ],
    [
        "name" => "Diana",
        "age" => 28,
        "email" => "diana@me.com",
        "city" => "Rome"
    ]
];

// Stampo l'intero array in formato JSON
echo json_encode($users);
