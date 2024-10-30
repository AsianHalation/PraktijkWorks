<?php 
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam</title>
    <link rel="stylesheet" href="css/vragenlijst.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Steam</div>
            <nav>
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="vragenlijst.php">Find your genre!</a></li>
                    <li><a href="https://store.steampowered.com"></a></li>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: support@steam.com
            </div>
        </div>
    </header>

    <main>
    <form method="post">
        <legend>Genre Vragenlijst</legend>
        <div class="form-section">
            <label for="vraag1">Hou je van strategisch denken en plannen tijdens het spelen?</label>
            <div class="radio-group">
                <input type="radio" name="vraag1" value="ja"> Ja
                <input type="radio" name="vraag1" value="neutraal"> Neutraal
                <input type="radio" name="vraag1" value="nee"> Nee
            </div>

            <label for="vraag2">Vind je het leuk om je aandacht te verdelen over meerdere eenheden of objecten tegelijkertijd?</label>
            <div class="radio-group">
                <input type="radio" name="vraag2" value="ja"> Ja
                <input type="radio" name="vraag2" value="neutraal"> Neutraal
                <input type="radio" name="vraag2" value="nee"> Nee
            </div>

            <label for="vraag3">Speel je graag in een open wereld waar je vrij kunt rondlopen en je eigen avonturen kunt kiezen?</label>
            <div class="radio-group">
                <input type="radio" name="vraag3" value="ja"> Ja
                <input type="radio" name="vraag3" value="neutraal"> Neutraal
                <input type="radio" name="vraag3" value="nee"> Nee
            </div>

            <label for="vraag4">Geniet je van het oplossen van puzzels of uitdagingen binnen het spel?</label>
            <div class="radio-group">
                <input type="radio" name="vraag4" value="ja"> Ja
                <input type="radio" name="vraag4" value="neutraal"> Neutraal
                <input type="radio" name="vraag4" value="nee"> Nee
            </div>

            <label for="vraag5">Hou je van snelle actie waarbij snelle reflexen belangrijk zijn?</label>
            <div class="radio-group">
                <input type="radio" name="vraag5" value="ja"> Ja
                <input type="radio" name="vraag5" value="neutraal"> Neutraal
                <input type="radio" name="vraag5" value="nee"> Nee
            </div>
        </div>

        <div class="form-section">
            <label for="vraag6">Vind je het leuk om voertuigen te besturen in games, zoals auto's of racewagens?</label>
            <div class="radio-group">
                <input type="radio" name="vraag6" value="ja"> Ja
                <input type="radio" name="vraag6" value="neutraal"> Neutraal
                <input type="radio" name="vraag6" value="nee"> Nee
            </div>

            <label for="vraag7">Speel je liever in "first-person", alsof je door de ogen van het personage kijkt?</label>
            <div class="radio-group">
                <input type="radio" name="vraag7" value="ja"> Ja
                <input type="radio" name="vraag7" value="neutraal"> Neutraal
                <input type="radio" name="vraag7" value="nee"> Nee
            </div>

            <label for="vraag8">Ben je geïnteresseerd in schietspellen waar precisie en timing belangrijk zijn?</label>
            <div class="radio-group">
                <input type="radio" name="vraag8" value="ja"> Ja
                <input type="radio" name="vraag8" value="neutraal"> Neutraal
                <input type="radio" name="vraag8" value="nee"> Nee
            </div>

            <label for="vraag9">Hou je van spellen waarin je karakters moet laten springen, rennen en obstakels overwinnen?</label>
            <div class="radio-group">
                <input type="radio" name="vraag9" value="ja"> Ja
                <input type="radio" name="vraag9" value="neutraal"> Neutraal
                <input type="radio" name="vraag9" value="nee"> Nee
            </div>

            <label for="vraag10">Speel je graag spellen waarin je tegenstanders tactisch moet verslaan in een competitive omgeving?</label>
            <div class="radio-group">
                <input type="radio" name="vraag10" value="ja"> Ja
                <input type="radio" name="vraag10" value="neutraal"> Neutraal
                <input type="radio" name="vraag10" value="nee"> Nee
            </div>
        </div>

        <div class="form-section">
            <label for="vraag11">Heb je een voorkeur voor games waarin je je eigen werelden kunt creëren of veranderen?</label>
            <div class="radio-group">
                <input type="radio" name="vraag11" value="ja"> Ja
                <input type="radio" name="vraag11" value="neutraal"> Neutraal
                <input type="radio" name="vraag11" value="nee"> Nee
            </div>

            <label for="vraag12">Vind je het leuk om tegen andere spelers in snelle, actievolle gevechten?</label>
            <div class="radio-group">
                <input type="radio" name="vraag12" value="ja"> Ja
                <input type="radio" name="vraag12" value="neutraal"> Neutraal
                <input type="radio" name="vraag12" value="nee"> Nee
            </div>

            <label for="vraag13">Hou je ervan om een spannend verhaal te volgen terwijl je door verschillende omgevingen reist?</label>
            <div class="radio-group">
                <input type="radio" name="vraag13" value="ja"> Ja
                <input type="radio" name="vraag13" value="neutraal"> Neutraal
                <input type="radio" name="vraag13" value="nee"> Nee
            </div>

            <label for="vraag14">Speel je graag spellen die draaien om het verslaan van vijanden en het behalen van doelen in een lineaire verhaallijn?</label>
            <div class="radio-group">
                <input type="radio" name="vraag14" value="ja"> Ja
                <input type="radio" name="vraag14" value="neutraal"> Neutraal
                <input type="radio" name="vraag14" value="nee"> Nee
            </div>

            <label for="vraag15">Geniet je van games waarin je bouwt, verkent en met weinig beperkingen speelt?</label>
            <div class="radio-group">
                <input type="radio" name="vraag15" value="ja"> Ja
                <input type="radio" name="vraag15" value="neutraal"> Neutraal
                <input type="radio" name="vraag15" value="nee"> Nee
            </div>
        </div>

        <input type="submit" value="Inleveren" class="submit-btn">
    </form>    
</main>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <div>
            <h2>Result</h2>
    <!--implode om array elementen in een string te zetten -->
            <p>Gefeliciteerd! Je bent verslaafd aan: <?= implode(", ", $highest_genres) ?></p>
            <h3>All Genre Scores:</h3>
            <?php foreach ($genre_scores as $genre => $score) : ?>
                <p><?= $genre ?>: <?= $score ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <footer>
        <div class="container">
            <div class="about">
                <h2>About Steam</h2>
                <p><strong>Company Mission:</strong> Our mission is to help give gamers a better service than the pirates to combat piracy</p>
                <p><strong>Company Vision:</strong> We strive for the best offers</p>
                <p><strong>Team Introduction:</strong> Gabe Newell CEO of Steam and Dota 2 overlord</p>
            </div>

            <div class="newsletter">
                <?php
                    echo date("Y/m/d") . " " . date("h:i:s");
                ?>
            </div>
            <div class="contact-info">
                Address: 123 Productivity Lane, Tech City, TX 12345 | Phone: +123-456-7890 | Email: support@Web-Essentials.com
            </div>
        </div>
    </footer>
</body>
</html>