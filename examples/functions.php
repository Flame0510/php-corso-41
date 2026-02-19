<?php

// Funzione semplice che accetta un parametro con un valore di default
function saluta($chi = "zulù")
{
    echo "Ciao, $chi! Benvenuto nel mio sito!";
}

saluta(); // Chiamo la funzione per eseguire il codice al suo interno


// STATIC VARIABLE
function static_variable()
{
    // La variabile statica mantiene il suo valore tra le chiamate alla funzione
    static $counter = 0;
    $counter++;
    echo "<p>La funzione è stata chiamata $counter volte.</p>";
}

static_variable(); // La funzione è stata chiamata 1 volte.
static_variable(); // La funzione è stata chiamata 2 volte.
static_variable(); // La funzione è stata chiamata 3 volte.
static_variable(); // La funzione è stata chiamata 4 volte.
