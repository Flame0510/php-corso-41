<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Users</title>
</head>

<style>
    .users-container {
        padding: 8px;
        margin: 0 auto;
    }

    .user {
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 4px;
    }
</style>

<div class="users-container">
    <h1>Elenco Utenti</h1>
    <p>Di seguito è riportato un elenco di utenti con i loro dettagli:</p>

    <?php
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

    // Stampo l'intero array
    for ($i = 0; $i < count($users); $i++) {
        // Stampo i dettagli di ogni utente
        echo "<div class='user'>"; // Apro div container per ogni utente
        echo "<h2>Utente: " . $users[$i]['name'] . "</h2>";
        echo "<p>Età: " . $users[$i]['age'] . "</p>";
        echo "<p>Email: " . $users[$i]['email'] . "</p>";
        echo "<p>Città: " . $users[$i]['city'] . "</p>";
        echo "</div>"; // Chiudo div container per ogni utente
        echo "<hr>";
    }

    ?>
</div>

</html>