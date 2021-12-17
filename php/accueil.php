<?php
$content=file_get_contents("data/accueil.yaml");
$data=yaml_parse($content);

        echo '<div class="headcomp1">';
        echo '<header>';
        echo '<h1>ACCUEIL</h1>';
        echo '</header>';
        echo '</div>';
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
        echo '<h1 id="accugrostitre">Bonjour</h1>';
        echo '<p id="accueavpara">Je suis un geek, un communicant avec un très bon relationnel.</p>';
        echo '<div class="bouttoncvvv2">';
        echo '<a  href="images/RomainLemartinel.pdf" target="_blank" class="cvboutton2" aria-disabled="false">';
        echo '<span class="">TÉLÉCHARGER CV</span>';
        echo '</a>';
        echo '<p id="accueavpara2">Étudiant en première année de BTS SIO. Pour ce deuxiéme semestre je choisi l&#8217option <b>réseau</b>. 
             Dans ce site web vous allez découvrir mon parcour, mes formations et bien plus encore ...</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';     
?>