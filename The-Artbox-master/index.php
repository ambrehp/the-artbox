<!doctype html>
<html lang='fr'>
<!-- Head -->
<?php include('includes/head.php'); ?>
<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>

    

    <!-- Corps -->
    <main>
        <div id='liste-oeuvres'>
        <a href="oeuvre.php">
            <?php
            // Tableau associatif pour les œuvres d'art
            $oeuvres = [
                [
                    'lien' => 'oeuvre.php?id=1',
                    'image' => 'img/clark-van-der-beken.png',
                    'titre' => 'Dodomu',
                    'artiste' => 'Mia Tozerski',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=2',
                    'image' => 'img/pawel-czerwinski-3.png',
                    'titre' => 'Aashaaheen Baadal',
                    'artiste' => 'Anaisha Devi',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=3',
                    'image' => 'img/dan-cristian-padure.png',
                    'titre' => 'Nightlife Traffic',
                    'artiste' => 'Andrew Forsythe',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=4',
                    'image' => 'img/steve-johnson-5.png',
                    'titre' => 'Le refuge de l\'Havre',
                    'artiste' => 'Simon Pelletier',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=5',
                    'image' => 'img/steve-johnson.png',
                    'titre' => 'Red Washover',
                    'artiste' => 'Kit Van Der Borght',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=6',
                    'image' => 'img/pawel-czerwinski.png',
                    'titre' => 'Chromatics',
                    'artiste' => 'Jean-Michel Delatronchette',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=7',
                    'image' => 'img/jazmin-quaynor.png',
                    'titre' => 'Digital Negative',
                    'artiste' => 'Hamish McKee',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=8',
                    'image' => 'img/steve-johnson-6.png',
                    'titre' => 'Blast from the past',
                    'artiste' => 'Juliette Baskerville',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=9',
                    'image' => 'img/victor-grabarczyk.png',
                    'titre' => 'Hurricane',
                    'artiste' => 'Natalie Wellington',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=10',
                    'image' => 'img/pawel-czerwinski-2.png',
                    'titre' => 'La marée rouge',
                    'artiste' => 'Martin Rodriguez',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=11',
                    'image' => 'img/steve-johnson-2.png',
                    'titre' => 'Asimilacion',
                    'artiste' => 'Angel Sanchez-Fernandez',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=12',
                    'image' => 'img/fly-d.png',
                    'titre' => 'La Galaxia Gialla',
                    'artiste' => 'Eduardo Tancredi',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=13',
                    'image' => 'img/orfeas-green.png',
                    'titre' => 'Puffy Amalgamate',
                    'artiste' => 'Sandro De Blasi',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=14',
                    'image' => 'img/steve-johnson-4.png',
                    'titre' => 'Mirage',
                    'artiste' => 'Stéphanie Kaiser',
                    'enabled' => true,
                ],
                [
                    'lien' => 'oeuvre.php?id=15',
                    'image' => 'img/steve-johnson-3.png',
                    'titre' => 'Blaue Gelbe Muster',
                    'artiste' => 'Adelheid Von Schreiber',
                    'enabled' => true,
                ],
            ];

            // Boucle foreach pour générer le contenu HTML
            foreach ($oeuvres as $oeuvre) {
                echo '<article class="oeuvre">';
                echo '<a href="' . $oeuvre['lien'] . '">';
                echo '<img src="' . $oeuvre['image'] . '" alt="' . $oeuvre['titre'] . '">';
                echo '<h2>' . $oeuvre['titre'] . '</h2>';
                echo '<p class="description">' . $oeuvre['artiste'] . '</p>';
                echo '</a>';
                echo '</article>';
            }
            ?>
            </a>
        </div>
    </main>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>