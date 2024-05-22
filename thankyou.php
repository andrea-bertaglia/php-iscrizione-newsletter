<?php
include_once __DIR__ . "/partials/template/head.php";

// faccio partire la sessione 
if (!isset($_SESSION)) {
    session_start();
}

// var_dump($_SESSION);
?>
<div class="row justify-content-center">
    <div class="col-3">
        <h4 class="text-center pb-4">Ti confermiamo la registrazione alla newsletter dell'indirizzo e-mail <span class="fw-bold text-primary"><?php echo $_SESSION["email"] ?></span></h4>
        <div class="text-center fs-6 pt-5">
            <small class="d-block">Si tratta di un errore? </small>
            <a class="text-secondary" href="#">Annulla la cancellazione</a>
        </div>
    </div>


</div>