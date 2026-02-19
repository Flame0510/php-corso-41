<?php
// Recupero i dati inviati tramite POST dal form
$name = $_POST['name'];
$email = $_POST['email'];
?>

<style>
    .form {
        padding: 8px;
    }
</style>

<!-- Form per inviare dati tramite POST a form.php -->
<!-- Invio a form.php per ricaricare la pagina e mostrare il messaggio di benvenuto con i dati inseriti nel form. -->
<!-- Su action posso usare anche altri path di file php a patto che recuperino i dati tramite POST o method utilizzato -->
<form class="form" method="post" action="form.php">
    <label for="name">Nome:</label>
    <!-- "name=" è il nome del campo che viene inviato al server -->
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <!-- "name=" è il nome del campo che viene inviato al server -->
    <input type="email" id="email" name="email" required>
 
    <!-- Invio i dati tramite POST al server -->
    <button type="submit">Invia</button>
</form>


<!-- Stampa il messaggio -->
<p>
    <?php
    // Controllo se la richiesta è di tipo POST per mostrare il messaggio di benvenuto
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Ciao, $name! La tua email è $email.";
    }
    // Se la richiesta non è di tipo POST, mostro un messaggio generico
    else {
        echo "Compila il form per vedere il messaggio di benvenuto.";
    }
    ?>
</p>