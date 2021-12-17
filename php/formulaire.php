<?php
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

// !!! ON VERIFIE L'INTEGRITEE DU FORMULAIRE !!! //

$nom;$email;$objet;$commentaire;$captcha;
if(isset($_POST['nom'])){
    $nom=$_POST['nom'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['objet'])){
    $objet=$_POST['objet'];
}
if(isset($_POST['commentaire'])){
    $commentaire=$_POST['commentaire'];
}
if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}

// !!! Si on oublie le CAPTCHA !!! //

if(!$captcha){
    echo 'Vous avez oublié le Captcha.';
    exit;
    }

// !!! ON VALIDE LE CAPTCHA !!! //

$secretKey = "6Ldjz6QdAAAAAMPgvd9JUmTiqrbgK2W4BmrFVnG2";
$ip = $_SERVER['REMOTE_ADDR'];
// post requête du serveur
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);

// !!! SI CAPTCHA VALIDE ALORS : !!! //

if($responseKeys["success"]) {

    // !!! CONFIGURATION PHPMAILER !!! //

    function sendMail(string $to, string $from, string $from_name, string $subject, string $body) {
        $CONFIG= include 'infomail.php';
        $mail = new PHPMailer(true);  // Crée un nouvel objet PHPMailer
        $mail->IsSMTP(); // active SMTP
        $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
        $mail->SMTPSecure = 'ssl'; //or ssl
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
        
        //Pour autoriser un envoi depuis 127.0.0.1
        $mail->SMTPOptions = [
                "ssl"=>[
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                        "allow_self_signed"=>true
                        ]
                ];
        
        $mail->SMTPAuth = true;  // Authentification SMTP active
        $mail->Username = $CONFIG['user'];
        $mail->Password = $CONFIG['password'];
        
        $mail->isHTML(true);
        $mail->SetFrom($_POST['email']);
        $mail->Subject = $_POST['objet'];
        $mail->Body = ('<b>Nom | Prenom : </b>'.$_POST['nom'].'<br><br><b>Email : </b>'.$_POST['email'].'<br><br><b>Message:</b><br><br>'.$_POST['commentaire'].'');
        $mail->AddAddress($to);
        $mail->Send();
        }

// !!! ENVOI DU MESSAGE !!! //
    try{
        sendMail('romain.lemartinel@sts-sio-caen.info', 'me@gmail.com', $_POST['nom'], 'Test', '<h1>Test</h1><p>Message</p>');
        echo 'Votre Email a bien été envoyé !';
    }
    catch (\Exception $e){
        echo $e->getMessage();
    }
}

// !!! Si un robot envoi un message !!! //
else {
    echo 'You are spammer ! Get the @$%K out';
}
?>
