<?php 
    require("../data/connessione_data.php");

    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["mail"])) $mail = $_POST["mail"];  else $mail = "";
 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contatti - Cinema Odeon</title>
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

    <main>
</br>
        <h1>Contatti</h1>
        <p>Per maggiori informazioni, compilate i seguenti campi:</p>
        <form action="invio_messaggio.php" method="post">
        <table>
                <tr>
                    <td>Nome:</td>
                    <td><input class="input_dati_personali" type="text" name="nome" <?php echo "value = '$nome'" ?>></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><input type="text" class="input_dati_personali" name="cognome" <?php echo "value = '$cognome'" ?>></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" class="input_dati_personali" name="mail" <?php echo "value = '$mail'" ?>></td>
                </tr>
                <tr>
                <td>Messaggio:</td>
                <td><input type="text" name="messaggio"></td>
                </tr>
            </table>
            <p style="text-align: left">
                <input type="submit" value="Invia">
            </p>
        </form>

        <h2>Informazioni di contatto</h2>
        <p>Email: cinema.odeon@gmail.com</p>
        <p>Telefono: +39 3914172415</p>
        <p>Indirizzo: 24 via limiti, Milano, Italia</p>
    </main>

    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>
