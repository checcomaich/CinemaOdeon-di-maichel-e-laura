
<?php
session_start();

require_once('../data/connessione_data.php');

if(!isset($_SESSION['username'])){ 
    header('location: ../index.php');
}

$username = $_SESSION["username"];
$password = $_SESSION["password"];

$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
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

//Query per ottenere i dati dei film
$film_query = "SELECT titolo,regista,genere,durata,annoprod,immagini,trailer FROM film";
$film_result = $conn->query($film_query);

$ultimeuscite_query = "SELECT titolo, regista, genere, durata, annoprod,immagini,trailer FROM film WHERE annoprod >= 2022";
$ultimeuscite_result = $conn->query($ultimeuscite_query);

$proiezioni_query = "SELECT titolo, codsala, orario FROM proiezioni ";
$proiezioni_result = $conn->query($proiezioni_query);

// Chiusura della connessione al database
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cinema Odeon</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1 class="title">Cinema Odeon</h1>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="#">Homepage</a></li>
            <li><a href="genere.php">Genere</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="cart.php">carrello</a></li>
        </ul>
    </nav>

    <h2>Prossimamente al Cinema</h2>

    <section>
        <div class="film-container">
          <div id="slider">
            <ul>
            <?php 
            if ($ultimeuscite_result->num_rows > 0) {
                while ($uscite = $ultimeuscite_result->fetch_assoc()) { ?>
                    <li>
                        <a>
                        <img src="<?php echo $uscite['immagini']; ?>" alt="<?php echo $uscite['titolo']; ?>">
                          <h3><?php echo $uscite["titolo"]; ?></h3>
                        </a>
                    </li>
                <?php }
            } ?>
            </ul>
          </div>
        </div>
    </section>
                </div>
            </div>
        </div>
   </div>

</div>
</br>
        <h2>Prossime proiezioni</h2>
        <table>
            <tr>
                <th>Film</th>
                <th>Sala</th>
                <th>Orario</th>
                <th>biglietti</th>
            </tr>
            <?php if ($proiezioni_result->num_rows > 0) {
            while ($proiezione = $proiezioni_result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $proiezione["titolo"]; ?></td>
                    <td><?php echo $proiezione["codsala"]; ?></td>
                    <td><?php echo $proiezione["orario"]; ?></td>
                    <td>
                        <form method="post" action="cart.php">
                            <input type="hidden" name="film" value="<?php echo $proiezione["titolo"]; ?>">
                            <input type="hidden" name="sala" value="<?php echo $proiezione["codsala"]; ?>">
                            <input type="hidden" name="orario" value="<?php echo $proiezione["orario"]; ?>">
                            <label>Quantità:</label>
                            <input type="number" name="quantity" value="1" min="1">
                            <input type="submit" name="add_to_cart" value="Aggiungi al carrello">
                        </form>
                    </td>
                </tr>
            <?php }
        } ?>
    </table>
        </br>
    </div>
    <footer>
   <?php
        require("footer.php");
   ?>
    </footer>
</html>


