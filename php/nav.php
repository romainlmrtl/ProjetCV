<?php
$content=file_get_contents("data/nav.yaml");
$data=yaml_parse($content);
// echo "<pre>";
// print_r($data);
// echo "</pre>";

foreach($data[0] as $elt):
        echo '<li><a href="#'.$elt["nomdesection"].'">'.$elt["titre"].'</a></li>';
endforeach;

?>