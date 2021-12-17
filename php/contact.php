<?php
$content=file_get_contents("data/contact.yaml");
$data=yaml_parse($content);

echo '<flex>';
echo '<div class="boite">';
echo '<div class="droite">';
echo '<h1 id="formutitre">Me Contacter</h1>';
echo '<form id="formulaire" method="POST" action="php/formulaire.php">';
foreach ($data[0] as $elt) {
    echo '<h3>'.$elt["affichage"].'</h3>';
    echo '<input class="barre" type="'.$elt["type"].'" name="'.$elt["name"].'" placeholder="'.$elt["placeholder"].'" required="required">';
}
echo '<h3>Contenu du message*</h3>';
echo '<textarea rows="15" class="barre-grosse" name="commentaire"placeholder="Entrez le contenu du message" required="required" style=resize:none></textarea><br>';
echo '<div class="g-recaptcha" data-sitekey="6Ldjz6QdAAAAAFyXp1shjZlQj4p8dIJ4p-2yobuJ"></div>';
echo '<input class="submit" type="submit" value="Soumettre">';
echo '<p id="formupara">Les informations portées sur ce formulaire font l’objet d’un traitement informatisé destiné à envoyer un email.<br>
Le destinataire des données est <b>Romain Lemartinel</b></p>';
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


