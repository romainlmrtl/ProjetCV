<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Présentation Professionnel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"/>
    <script src="https://www.google.com/recaptcha/api.js?render=ICI_LA_CLE_DU_SITE"></script>
</head>
<body>

<!-- /// NAVBARRE /// -->
<nav>
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#accueil">
            <label class="logo" >Romain Lemartinel</label>
        </a>
    <ul>
        <?php include 'php/nav.php'; ?>
    </ul>
</nav>

<!-- /// GENERATEUR DE SECTIONS /// -->
<?php
$content=file_get_contents("data/nav.yaml");
$data=yaml_parse($content);
foreach($data[0] as $elt){
    echo '<section id="'.$elt["nomdesection"].'">';
        include 'php/'.$elt["nomdesection"].'.php'; 
    echo '</section>';
}
?>
</body>

<!-- /// FOOTER /// -->
<footer class="basdepage",>
    <div class="foogauche">
        <p>Copyright © Romain LEMARTINEL - Touts droits réservés.</p>
    </div >
    <div class="foodroite">
    <?php
    $content=file_get_contents("data/accueil.yaml");
    $data=yaml_parse($content);
    echo '<div class="fooinfo">';
    foreach($data[0] as $elt){
    echo '<div class="fooinfo2">';
    echo '<p><b>'.$elt["information"].'</b></p>';
    echo '<p>'.$elt["moiinformation"].'</p>';
    echo '</div>';
    }
    echo '<div class="fooinfo2">';
    echo '<p><b>En ligne</b></p>';
    echo '<a href="https://www.instagram.com/romain_lmrtl/" target="_blank>"';
    echo '<i class="bi bi-instagram" id="footiconreseau" style="color: black;"></i>';
    echo '</a>';
    echo '<a href="https://twitter.com/r_lemartinel" target="_blank">';
    echo '<i class="bi bi-twitter" id="footiconreseau" style="color: black;"></i>';
    echo '</a>';
    echo '<a href="https://www.facebook.com/romainlemartinel2003" target="_blank">';
    echo '<i class="bi bi-facebook" id="footiconreseau" style="color: black;"></i>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    ?> 
    </div>
</foOter>
</html>

<!-- Petit Scipt EN JS pour page d'accueil -->
<script>
window.location.href='#accueil';
</script>


<!--
<section id="apropos" class="proposoui">
    <div class="paragrmoi">
        <h1>Bonjour, Je m'appelle Romain !</h1>
        <br>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
                only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
                the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                including versions of Lorem Ipsum.
            </p>
    </div>
</section>


