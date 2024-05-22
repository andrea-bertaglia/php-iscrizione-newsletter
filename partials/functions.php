<?php
$result = "";
$alert = "";
$error = "";
$thankyou = false;

// verifico se la variabile non è null e se l'indirizzo inserito è nel formato richiesto


if (isset($_POST["email"])) {
    $user_email = $_POST["email"];
    if (strpos($user_email, "@") && strpos($user_email, ".")) {
        $result = "Ok! L'indirizzo inserito è corretto";
        $thankyou = true;

        // aggiunta della classe per lo stile dell'alert
        $alert = "alert alert-success";
    } elseif ($user_email !== "") {
        $result = "Attenzione: i dati inseriti sono errati";
        $error = $user_email;

        // aggiunta della classe per lo stile dell'alert
        $alert = "alert alert-danger";
    }
}
