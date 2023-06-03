<?php
require_once('../data/connessione_data.php');

$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

// Query per ottenere i dati dei film d'azione
$azione_query = "SELECT id,titolo, regista, genere, durata, annoprod, immagini, trailer FROM film WHERE genere = 'Azione'";
$azione_result = $conn->query($azione_query);

$thriller_query = "SELECT id,titolo, regista, genere, durata, annoprod, immagini, trailer FROM film WHERE genere = 'Thriller'";
$thriller_result = $conn->query($thriller_query);

$bio_query = "SELECT id,titolo, regista, genere, durata, annoprod, immagini, trailer FROM film WHERE genere = 'Biografico'";
$bio_result = $conn->query($bio_query);

$drammatici_query = "SELECT id,titolo, regista, genere, durata, annoprod, immagini, trailer FROM film WHERE genere = 'Drammatico'";
$drammatici_result = $conn->query($drammatici_query);

$horror_query = "SELECT id,titolo, regista, genere, durata, annoprod, immagini, trailer FROM film WHERE genere = 'Horror'";
$horror_result = $conn->query($horror_query);
// Chiusura della connessione al database
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generi film - Cinema Odeon</title>
    <link rel="stylesheet" href="../style.css">
    <script>
        var filmItems = document.querySelectorAll('.film-list li');
        filmItems.forEach(function(item) {
            item.addEventListener('click', function() {
                this.querySelector('.film-details').classList.toggle('show');
            });
        });
    </script>
</head>
<body>
    <header>
        <h1 class="title">Cinema Odeon</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="home.php">Homepage</a></li>
            <li><a href="#">Genere</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="cart.php">carrello</a></li>
        </ul>
    </nav>
</br>
</br>
    <h2>Azione</h2>
    <section>
        <div class="film-container">
          <div id="slider">
            <ul>
    <?php if ($azione_result->num_rows > 0) : ?>
        <ul class="film-list">
            <?php while ($azione = $azione_result->fetch_assoc()) : ?>
                <li onclick="toggleFilmDetails(this)">
                    <h3><?php echo $azione['titolo']; ?></h3>
                    <img src="<?php echo $azione['immagini']; ?>" alt="<?php echo $azione['titolo']; ?>">
                    <div class="film-details">
                        <p>Regista: <?php echo $azione['regista']; ?></p>
                        <p>Genere: <?php echo $azione['genere']; ?></p>
                        <p>Durata: <?php echo $azione['durata']; ?> min</p>
                        <p>Anno di produzione: <?php echo $azione['annoprod']; ?></p>
                        <a href="<?php echo $azione['trailer']; ?>">Trailer</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Nessun film d'azione disponibile.</p>
    <?php endif; ?>
    </ul>
          </div>
        </div>
    </section>

    </br>
    <h2>Horror</h2>
    <section>
        <div class="film-container">
          <div id="slider">
            <ul>
    <?php if ($horror_result->num_rows > 0) : ?>
        <ul class="film-list">
            <?php while ($horror = $horror_result->fetch_assoc()) : ?>
                <li onclick="toggleFilmDetails(this)">
                    <h3><?php echo $horror['titolo']; ?></h3>
                    <img src="<?php echo $horror['immagini']; ?>" alt="<?php echo $horror['titolo']; ?>">
                    <div class="film-details">
                        <p>Regista: <?php echo $horror['regista']; ?></p>
                        <p>Genere: <?php echo $horror['genere']; ?></p>
                        <p>Durata: <?php echo $horror['durata']; ?> min</p>
                        <p>Anno di produzione: <?php echo $horror['annoprod']; ?></p>
                        <a href="<?php echo $horror['trailer']; ?>">Trailer</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Nessun altro film disponibile.</p>
    <?php endif; ?>
    </ul>
          </div>
        </div>
    </section>


    </br>
    <h2>Biografie</h2>
    <section>
        <div class="film-container">
          <div id="slider">
            <ul>
    <?php if ($bio_result->num_rows > 0) : ?>
        <ul class="film-list">
            <?php while ($bio = $bio_result->fetch_assoc()) : ?>
                
                <li onclick="toggleFilmDetails(this)">
                    <h3><?php echo $bio['titolo']; ?></h3>
                    <img src="<?php echo $bio['immagini']; ?>" alt="<?php echo $bio['titolo']; ?>">
                    <div class="film-details">
                        <p>Regista: <?php echo $bio['regista']; ?></p>
                        <p>Genere: <?php echo $bio['genere']; ?></p>
                        <p>Durata: <?php echo $bio['durata']; ?> min</p>
                        <p>Anno di produzione: <?php echo $bio['annoprod']; ?></p>
                        <a href="<?php echo $bio['trailer']; ?>">Trailer</a>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
    <?php else : ?>
        <p>Nessun altro film disponibile.</p>
    <?php endif; ?>
    </ul>
          </div>
        </div>
    </section>

    </br>
    <h2>Drammatico</h2>
    <section>
        <div class="film-container">
          <div id="slider">
            <ul>
    <?php if ($drammatici_result->num_rows > 0) : ?>
        <ul class="film-list">
            <?php while ($dram = $drammatici_result->fetch_assoc()) : ?>
                
                <li onclick="toggleFilmDetails(this)">
                    <h3><?php echo $dram['titolo']; ?></h3>
                    <img src="<?php echo $dram['immagini']; ?>" alt="<?php echo $dram['titolo']; ?>">
                    <div class="film-details">
                        <p>Regista: <?php echo $dram['regista']; ?></p>
                        <p>Genere: <?php echo $dram['genere']; ?></p>
                        <p>Durata: <?php echo $dram['durata']; ?> min</p>
                        <p>Anno di produzione: <?php echo $dram['annoprod']; ?></p>
                        <a href="<?php echo $dram['trailer']; ?>">Trailer</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Nessun altro film disponibile.</p>
    <?php endif; ?>
    </ul>
          </div>
        </div>
    </section>
  
    </br>
    <footer>
   <?php
        require("footer.php");
   ?>
     </footer>
</body>
</html>
