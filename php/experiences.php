<?php
$content=file_get_contents("data/experiences.yaml");
$data=yaml_parse($content);


echo '<table class="expflex">';
echo '<tr class="expbox">';
foreach($data[0] as $elt):
        echo '<td class="exparticle">';
        echo '<div class="expboite">';
        echo '<div class="expgauche">';
        echo '<h1 class="exptitre1">'.$elt["date"].'</h1>';
        echo '<h2 class="exptitre2">'.$elt["activite"].'</h2>';
        echo '<h3 class="exptitre3">'.$elt["nom de l'entreprise"].'</h3>';
        echo '<h3 class="exptitre3">'.$elt["ville"].'</h3>';
        echo '</div>';
        echo '<div class="expdroite">';
        echo '<p class="exptache">'.$elt["tâches"].'</p>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
endforeach;
echo '</tr>';

echo '<tr class="expbox">';
foreach($data[1] as $elt):
        echo '<td class="exparticle">';
        echo '<div class="expboite">';
        echo '<div class="expgauche">';
        echo '<h1 class="exptitre1">'.$elt["date"].'</h1>';
        echo '<h2 class="exptitre2">'.$elt["activite"].'</h2>';
        echo '<h3 class="exptitre3">'.$elt["nom de l'entreprise"].'</h3>';
        echo '<h3 class="">'.$elt["ville"].'</h3>';
        echo '</div>';
        echo '<div class="expdroite">';
        echo '<p class="exptache">'.$elt["tâches"].'</p>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
endforeach;
echo '</tr>';
echo '</table>';
echo '<br>';
echo '<div class="bouttoncvvv">';
echo '<a  href="images/RomainLemartinel.pdf" target="_blank" class="cvboutton" aria-disabled="false">';
echo '<span class="_1Qjd7">TÉLÉCHARGER CV</span>';
echo '</a>';
echo '</div>';