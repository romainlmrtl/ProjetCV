<?php
$content=file_get_contents("data/accueil.yaml");
$data=yaml_parse($content);

        echo '<div id="ACCUEIL">';
        echo '<div class="imagearpln">';
        echo '</div>';
        echo '<div class="imagearplnvrmt">';
        echo '<div class="carreblanc">';
        echo '<div class="photodemoi">';
        echo '<img src="images/moi.jpg" alt="Photo de moi" class="photodemoi1" style="width: 180px; height: 180px; object-fit: cover; object-position: 50% 50%;">';
        echo '<h1 class="accutitre">Romain<br>Lemartinel</h1>';
        echo '<hr class="accueilbarre">';
        echo '<div class="barrebleupropos">';
foreach($data[1] as $elt):
        echo '<a href="'.$elt["lien"].'" target="_blank">';
        echo '<i  class="'.$elt["icone"].'" id="iconreseau" style="color: white;"></i>';
        echo '</a>';
endforeach;
        echo '</div>';
        echo '</div>';
        echo '<div class="infoprinc">';
        echo '<ul>';
foreach($data[0] as $elt):
        echo '<li>'.$elt["moiinformation"].'</li>';
endforeach;  
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        
?>

<!-- echo '<div class="accroche1">';
<p>Etudiant à Sup Avenir à Caen en BTS S.I.O (Service.Informatique.Aux.Organisations)</p><br>
<p>Mes qualités : organisé, optimiste, déterminé, flexible et toujours souriant.</p>
</div>'; -->