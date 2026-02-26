<form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>
</form>

<?php
// Esempio di login semplice con PHP
// Verifico se il form è stato inviato con il metodo POST tramite la superglobale $_SERVER
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupero i dati inviati dal form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validazione dell'email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Validazione del campo password
    if (empty($password)) {
        echo "Password field is required.";
        exit;
    }

    // Validazione della password
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
        exit;
    }

    // Dati di esempio per l'autenticazione con costanti definiti
    define('USER_EMAIL', 'user@example.com');
    define('USER_PASSWORD', 'password');

    // Controllo se le credenziali sono corrette
    if ($email === USER_EMAIL && $password === USER_PASSWORD) {
        // Autenticazione riuscita
        header('Location: dashboard.php'); // Reindirizza a una pagina protetta
        exit;
    } else {
        // Autenticazione fallita
        echo "Invalid email or password.";
        exit;
    }
}
?>