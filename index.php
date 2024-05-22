<?php
include_once __DIR__ . "/partials/functions.php";

if (!isset($_SESSION)) {
    session_start();
}

// Se la mail è corretta (verifico con variabile flag), reindirizzo alla pagina di conferma
if ($thankyou) {
    // salvo la chiave auth = true nella session dell'utente
    $_SESSION["auth"] = true;
    $_SESSION["email"] = $user_email;
    header('Location: ./thankyou.php');
}

?>

<?php include_once __DIR__ . "/partials/template/head.php"; ?>
<div class="row justify-content-center">
    <div class="col-3">
        <form action="index.php" method="POST">
            <div class="mb-4">
                <label for="email" class="form-label">Indirizzo Email</label>
                <input type="text" class="form-control" id="email" aria-describedby="Indirizzo e-mail" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row justify-content-center text-center pt-5">
    <div class="col-4">
        <h6 class="<?php echo $alert ?> py-3"><?php echo $result ?></h6>

    </div>
</div>
</div>
</body>

</html>