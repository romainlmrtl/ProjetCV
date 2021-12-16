<?php
$content=file_get_contents("data/contact.yaml");
$data=yaml_parse($content);

echo '<flex>';
echo '<div class="boite">';
echo '<div class="gauche">';
echo '<h1 id="formutitre">Me Contacter</h1>';
echo '<p id="formupara"></p>';
echo '</div>';
echo '<div class="droite">';
echo '<form id="formulaire" method="POST" action="php/formulaire.php">';
foreach ($data[0] as $elt) {
    echo '<h3>'.$elt["affichage"].'</h3>';
    echo '<input class="barre" type="'.$elt["type"].'" name="'.$elt["name"].'" placeholder="'.$elt["placeholder"].'" required="required">';
}
echo '<h3>Contenu du message*</h3>';
echo '<textarea rows="15" class="barre-grosse" name="commentaire"placeholder="Entrez le contenu du message" required="required" style=resize:none></textarea><br><br>';
echo '<div class="g-recaptcha" data-sitekey="6Ldjz6QdAAAAAFyXp1shjZlQj4p8dIJ4p-2yobuJ"></div>';
echo '<input class="submit" type="submit" value="Soumettre">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</flex>';

// Script reCaptcha
?>
<script type="text/javascript">
  var onloadCallback = function() {
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<?php


