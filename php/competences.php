<?php
$content=file_get_contents("data/competences.yaml");
$data=yaml_parse($content);

echo '<div class="headcomp">';
echo '<header>';
echo '<h1>COMPETENCES</h1>';
echo '</header>';
// ####### Compétences par niveau (débutant, intermédiaire, confirmé, expert)
echo '<table class="compflexx">';
echo '<tr class="compbox">';
foreach($data[0] as $elt):
        echo '<td class="article1">';
        echo '<a>'.$elt["competence"].' : ';
        echo '<b>'.$elt["niveau"].'</b>';
        echo '</a>';
        echo '</td>';
endforeach;
echo '</tr>';

echo '<tr class="compbox">';
foreach($data[1] as $elt):
        echo '<td class="article1">';
        echo '<a>'.$elt["competence"].' : ';
        echo '<b>'.$elt["niveau"].'</b>';
        echo '</a>';
        echo '</td>';
endforeach;
echo '</tr>';

echo '<tr class="compbox">';
foreach($data[2] as $elt):
        echo '<td class="article1">';
        echo '<a>'.$elt["competence"].' : ';
        echo '<b>'.$elt["niveau"].'</b>';
        echo '</a>';
        echo '</td>';
endforeach;
echo '</tr>';
echo '</table>';

// ####### Compétences en pourcentages (barres)
echo '<div class="container">';
foreach($data[3] as $elt):
        echo '<div class="bar">';
        echo '<div class="bar-stat" style="width:'.$elt["niveau"].';">';
        echo '<img src="'.$elt["lienimage"].'" class="bar-icon"/><span class="bar-text">'.$elt['competence'].' - '.$elt["niveau"].'</span>';
        echo '</div>';
        echo '</div>';
endforeach;
echo '</div>';
?>              




<!-- echo '<div class="compflexx">';
foreach($data[0] as $elt):
        echo '<div class="compbox">';
        echo '<div class="article1">';
        echo '<a>'.$elt["competence"].' : ';
        echo '<b>'.$elt["niveau"].'</b>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
endforeach;
echo '</div>'; -->
