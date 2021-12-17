<?php
$content=file_get_contents("data/formations.yaml");
$data=yaml_parse($content);

echo '<div class="headcomp">';
echo '<header>';
echo '<h1>FORMATIONS</h1>';
echo '</header>';
echo '<table class="expflex">';
echo '<tr class="expbox">';
foreach($data[0] as $elt):
        echo '<td class="exparticle">';
        echo '<div class="expboite1">';
        echo '<div class="expgauche">';
        echo '</i><h1 class="exptitre1"><img class="formicon" src="'.$elt["logoannee"].'"/>'.$elt["annee"].'</h1>';
        echo '</i><h2 class="exptitre2"><img class="formicon" src="'.$elt["logodiplome"].'"/>'.$elt["diplome"].'</h2>';
        echo '<h3 class="exptitre3"><img class="formicon" src="'.$elt["logoetablissement"].'"/></i>'.$elt["etablissement"].'</h3>';
        echo '<h3 class="exptitre3"><img class="formicon" src="'.$elt["logomention"].'"/></i>'.$elt["mention"].'</h3>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
endforeach;
echo '</tr>';

echo '<tr class="expbox">';
foreach($data[1] as $elt):
        echo '<td class="exparticle">';
        echo '<div class="expboite1">';
        echo '<div class="expgauche">';
        echo '</i><h1 class="exptitre1"><img class="formicon" src="'.$elt["logoannee"].'"/>'.$elt["annee"].'</h1>';
        echo '</i><h2 class="exptitre2"><img class="formicon" src="'.$elt["logodiplome"].'"/>'.$elt["diplome"].'</h2>';
        echo '<h3 class="exptitre3"><img class="formicon" src="'.$elt["logoetablissement"].'"/></i>'.$elt["etablissement"].'</h3>';
        echo '<h3 class="exptitre3"><img class="formicon" src="'.$elt["logomention"].'"/></i>'.$elt["mention"].'</h3>';
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