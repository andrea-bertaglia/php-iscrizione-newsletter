<?php
$result = "";

// verifico se la variabile non è null e se l'indirizzo inserito è nel formato richiesto
if (isset($_POST["email"])) {
    $user_email = $_POST["email"];
    if (strpos($user_email, "@") && strpos($user_email, ".")) {
        $result = "Ok! L'indirizzo inserito è corretto";
    } elseif ($user_email !== "") {
        $result = "Attenzione: dati errati";
    }
}
