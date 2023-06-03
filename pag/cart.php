<?php
session_start(); // Inizializza la sessione

// Verifica se il carrello esiste
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = [];
}




// Rimuove una prenotazione dal carrello
if (isset($_GET['remove'])) {
    $prenotazione = $_GET['remove'];
    unset($cart[$prenotazione]); // Rimuove la prenotazione dal carrello
    $_SESSION['cart'] = $cart; // Aggiorna il carrello nella sessione
}

if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = []; // Svuota il carrello
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrello - Cinema Odeon</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1 class="title">Cinema Odeon</h1>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="home.php">Homepage</a></li>
            <li><a href="genere.php">Genere</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#">Carrello</a></li>
        </ul>
    </nav>

    <h2>Carrello</h2>

    <?php if (count($cart) > 0) : ?>
        <table class="cart-table">
            <tr>
                <th>Prenotazione</th>
                <th>Quantità</th>
                <th>Azioni</th>
            </tr>
            <?php foreach ($cart as $prenotazione => $quantity) : ?>
                <tr>
                    <td><?php echo $prenotazione; ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td>
                        <a href="cart.php?remove=<?php echo urlencode($prenotazione); ?>">Rimuovi</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <form method="post" action="cart.php">
            <input type="submit" name="clear_cart" value="Svuota carrello">
        </form>

    <?php else : ?>
        <p>Il carrello è vuoto.</p>
    <?php endif; ?>

    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>
