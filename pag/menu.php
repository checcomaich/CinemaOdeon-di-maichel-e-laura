<?php
session_start(); // Inizializza la sessione

// Verifica se il carrello non esiste e crea un nuovo array per il carrello
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Aggiunge un elemento al carrello
if (isset($_POST['add_to_cart'])) {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];

    // Verifica se l'elemento esiste già nel carrello
    if (isset($_SESSION['cart'][$item])) {
        $_SESSION['cart'][$item] += $quantity; // Aggiorna la quantità
    } else {
        $_SESSION['cart'][$item] = $quantity; // Aggiunge l'elemento al carrello
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu - Cinema Odeon</title>
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
            <li><a href="#">Menu</a></li>
            <li><a href="cart.php">Carrello</a></li>
        </ul>
    </nav>

    <div class="contenuto1">
    <h1>Menu</h1>
</br></br>
    <div class="menu_items">
        <h2>Pizza</h2>
        <div class="item">
            <h3>Pizza Margherita</h3>
            <p>Deliziosa pizza con ingredienti freschi.</p>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="pizza Margherita">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Pizza Quattro formaggi</h3>
            <p>ingredienti:gorgonzola,fontina,mozzarella e parmigiano reggiano</p>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="pizza 4 formaggi">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Pizza Prosciutto e funghi</h3>
            <p>ingredienti:prosciutto e funghi</p>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="pizza prosciutto e funghi">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Pizza Wurstel e patatine</h3>
            <p>ingredienti:wurstel e patatine</p>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="pizza wurstel e patatine">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
</hr>
</br>
            <h2>Bibite</h2>
            <div class="item">
            <h3>Coca Cola</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Coca Cola">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Sprite</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Sprite">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Fanta</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Fanta">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Acqua</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Acqua">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Caffè</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Caffè">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
</hr>
</br>
            <h2>Snack & Gelati</h2>
            <div class="item">
            <h3>Popcorn</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Popcorn">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Popcorn caramellato</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Popcorn caramellato">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Nacho</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="nacho">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>Hotdog</h3>
            <p>ingredienti:wurstel e salse a scelta</p>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="Acqua">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
        <div class="item">
            <h3>KIT KAT</h3>
            <form method="post" action="menu.php">
                <input type="hidden" name="item" value="KIT KATS">
                <label>Quantità:</label>
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
            </form>
        </div>
</br>
</hr>
</br>
   <footer>
   <?php
        require("footer.php");
   ?>
    </footer>
</body>
</html>
