<?php 
    require("../data/connessione_data.php");
    if(isset($_POST["username"])) $username = $_POST["username"];  else $username = "";
    if(isset($_POST["password"])) $password = $_POST["password"];  else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["mail"])) $mail = $_POST["mail"];  else $mail = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <title>Cinema Odeon - Registrazione</title>
</head>

<body class="film-image2">
<header>
    <h1 class="title1">Cinema Odeon </h1>
	
	<div class="text-film">
	<header>
	<nav>
        <ul>
			<h2><li><a href="../index.php">Login</a></li></h2>
        </ul>
    </nav>
    <div class="contenuto">
        <h2>Registrazione</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table id="tab_dati_personali">
                <tr>
                    <td>Username:</td>
                    <td><input class="input_dati_personali" type="text" name="username" <?php echo "value = '$username'" ?> required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="input_dati_personali" type="password" name="password" <?php echo "value = '$password'" ?> required></td>
                </tr>
                <tr>
                    <td>Conferma psw:</td>
                    <td><input class="input_dati_personali" type="password" name="conferma" <?php echo "value = '$conferma'" ?> required></td>
                </tr>
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
                    <td>Telefono:</td>
                    <td><input type="text" class="input_dati_personali" name="telefono" <?php echo "value = '$telefono'" ?>></td>
                </tr>
               
            </table>
            <p style="text-align: center">
                <input type="submit" value="Invia">
            </p>
        </form>

            <?php
            if(isset($_POST["username"]) and isset($_POST["password"])) {
                if ($_POST["username"] == "" or $_POST["password"] == "") {
                    echo "username e password non possono essere vuoti!";
                } elseif ($_POST["password"] != $_POST["conferma"]){
                    echo "Le password inserite non corrispondono";
                } else {
                    $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
                    if($conn->connect_error){
                        die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                    }

                    $myquery = "SELECT username 
						    FROM utenti 
						    WHERE username='$username'";

                    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                    if ($ris->num_rows > 0) {
                        echo "Questo username è già stato usato";
                    } else {                     
                        $myquery = "INSERT INTO utenti (username, password, nome, cognome, mail, telefono)
                                    VALUES ('$username', '$password', '$nome', '$cognome','$mail','$telefono')";
    
                        if ($conn->query($myquery) === true) {
                            session_start();
                            $_SESSION["username"]=$username;
                            $_SESSION["username"]=$password;
                            
						    $conn->close();

                            echo "Registrazione effettuata con successo!";
                            header('location:home.php');

                        } else {
                            echo "Non è stato possibile effettuare la registrazione per il seguente motivo:  . $conn->error";
                        }
                    }
                }
            }
            ?>
    </div>
    </div>
</body>

</html>