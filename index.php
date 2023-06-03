<?php
	session_start();
    require("data/connessione_data.php");
	if (isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
	if (isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Cinema Odeon - Login</title>
	<link rel="stylesheet" href="style.css">

</head>

<body class="film-image">
	<header>
    <h1 class="title1">Cinema Odeon </h1>
	
	<div class="text-film">
	<header>
	<nav>
        <ul>
			<h2><li><a href="pag/registrazione.php">Registrati</a></li></h2>
        </ul>
    </nav>
	
	<div class="contenuto">
		<h2>Pagina di Login</h2>

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<table class="tab_input">
				<tr>
					<td>Username:</td> <td><input type="text" name="username" value="<?php echo $username; ?>" required></td>
				</tr>
				<tr>
					<td>Password:</td> <td><input type="password" name="password" value="<?php /*echo $password; */?>" required></td>
				</tr>
			</table>
			<p><input type="submit" value="Accedi"></p>
		</form>
		<?php
			if (isset($_POST["username"]) and isset($_POST["password"])) {
				$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
				if($conn->connect_error){
					die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
				}

				$myquery = "SELECT username, password 
							FROM utenti
							WHERE username='$username'
								AND password='$password'";

				$ris = $conn->query($myquery) or die("<p>Query fallita! ".$conn->error."</p>");

				if($ris->num_rows == 0){
					echo "<p>Utente non trovato o password errata</p>";
					$conn->close();
				} 
				else {
					echo "<p>Utente trovato</p>";

					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password ;
											
					$conn->close();
					header('location:./pag/home.php');

			}
			}
			

		?>	

	</div>
		</div>
</body>
</html>