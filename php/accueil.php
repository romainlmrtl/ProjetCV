<?php
$content=file_get_contents("data/accueil.yaml");
$data=yaml_parse($content);

        echo '<div id="ACCUEIL">';
        echo '<div class="imagearpln">';
        echo '</div>';
        echo '<div class="imagearplnvrmt">';
        echo '<div class="carreblanc">';
        echo '<div class="photodemoi">';
        echo '<center><img src="images/moi.jpg" alt="Photo de moi" class="photodemoi1" style="width: 200px; height: 200px; object-fit: cover; object-position: 50% 50%;"></center>';
        echo '<h1 class="accutitre">Romain<br>Lemartinel</h1>';
        echo '<center><hr class="accueilbarre"></center>';
        echo '<center><h1 class="accutitre1">ADMINISTRATEUR RÉSEAUX</h1>';
        echo '<div class="barrebleupropos">';
foreach($data[1] as $elt):
        echo '<a href="'.$elt["lien"].'" target="_blank">';
        echo '<i  class="'.$elt["icone"].'" id="iconreseau" style="color: black;"></i>';
        echo '</a>';
endforeach;
        echo '</div>';
        echo '</div>';
        echo '<div class="infoprinc">';
        echo '<ul>';

        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';     
?>