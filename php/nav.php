<?php
$content=file_get_contents("data/nav.yaml");
$data=yaml_parse($content);
// echo "<pre>";
// print_r($data);
// echo "</pre>";

foreach($data as $cle=>$val):
        echo '<li><a href="#'.$val.'">'.$cle.'</a></li>';
endforeach;

?>