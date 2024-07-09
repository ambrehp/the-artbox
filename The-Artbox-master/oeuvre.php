<?php
include('oeuvres.php');
$oeuvre_id = $_GET['id'];
$oeuvre = $oeuvres[$oeuvre_id];
// echo $oeuvre['titre'];

// if (isset($_GET['oeuvre_id'])) {
// $oeuvreid = $_GET['oeuvre_id'];
// echo 'L\'identifiant récupéré depuis l\'URL est : ' . $oeuvreid;
// } else {
//     echo 'Paramètres manquants.';
//     return;
// }

    ?>
<!doctype html>
<html lang='fr'>
    <!-- Head -->
<?php include('includes/head.php'); ?>
<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Corps -->
<main>
<article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/<?php echo $oeuvre['image']; ?>" alt="Dodomu">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            <p class="description-complete"><?php echo $oeuvre['description']; ?> </p>
        </div>
    </article>

</main>
    
 <!-- Footer -->
 <?php include('includes/footer.php'); ?>
</body>
</html>