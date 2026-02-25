<?php
$menu_item_id = $_POST['menu_item'] ?? null; // Recupera l'elemento del menu selezionato dal form, se presente

$menu = [
    [
        "id" => 1,
        "name" => "Porchetta",
        "price" => 500,
    ],
    [
        "id" => 2,
        "name" => "Cavaddu",
        "price" => 700,
    ],
    [
        "id" => 3,
        "name" => "Wurstel",
        "price" => 300,
    ],
];

// Funzione per formattare il prezzo in euro con 2 decimali, separatore decimale ',' e separatore delle migliaia '.'
function formatPrice($price, $currency = '€')
{
    // Formatta il prezzo in euro con 2 decimali, separatore decimale ',' e separatore delle migliaia '.'
    return number_format($price / 100, 2, ',', '.') . $currency;
}
?>

<form method="post" action="jonhatanN1.php">
    <h1> Benvenuti da Jonhatan N1! Accattativi un pan...inu! </h1>

    <select name="menu_item" required>
        <option value="">Seleziona un piatto</option>

        <?php
        // FOREACH - stampa le opzioni del menu
        foreach ($menu as $index => $item) {
            // Formatta il prezzo in euro con 2 decimali, separatore decimale ',' e separatore delle migliaia '.'
            $price = formatPrice($item['price']); // Formatta il prezzo in euro

            // Stampa l'opzione del menu con il nome e il prezzo formattato
            echo "<option value=\"{$item['id']}\">{$item['name']} - {$price}</option>";
        }
        ?>
    </select>

    <button type="submit">Invia</button>
</form>

<?php
// Controlla se è stato selezionato un elemento del menu e mostra un messaggio
// isset() ritorna true se la variabile indicata esiste e non è null, altrimenti ritorna false

$menu_item_index = null; // Inizializza l'indice dell'elemento del menu selezionato

// Controlla se è stato inviato un elemento del menu tramite POST
if (isset($_POST['menu_item'])) {

    // Ciclo for per trovare l'indice dell'elemento del menu selezionato
    for ($i = 0; $i < count($menu); $i++) {
        // Controlla se l'elemento del menu selezionato corrisponde all'elemento corrente
        if ($_POST['menu_item'] == $menu[$i]['id']) {
            $menu_item_index = $i; // Salva l'indice dell'elemento del menu selezionato
            break; // Termina il ciclo for
        }
    }
}

// Controlla se è stato selezionato un elemento del menu
if (isset($menu[$menu_item_index])) {
    // Recupera l'elemento del menu selezionato
    $item = $menu[$menu_item_index];

    // Formatta il prezzo in euro con 2 decimali, separatore decimale ',' e separatore delle migliaia '.'
    $formattedPrice = formatPrice($item['price']);

    // Stampa il messaggio con il nome del piatto e il prezzo formattato
    echo "<p>Hai selezionato: {$item['name']}, ma pavari {$formattedPrice} </p>";
} else {
    // Se non è stato selezionato un elemento del menu, mostra un messaggio generico
    echo "<p>Seleziona un piatto dal menu per vedere il messaggio.</p>";
}
?>