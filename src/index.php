<?php
require_once   '../vendor/autoload.php';

use App\Entity\Form;
use App\Entity\Form2;

?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>TP Villes</h1>

<?php

$formulaire= new Form2('','Formulaire d\'inscription');
$formulaire->setText("nom :",'idNom','nom');
$formulaire->setText("prenom :",'idPrenom','prenom');
$formulaire->setText("email :",'idEmail','email');
$formulaire->setText("téléphone :",'idTelephone','telephone');
$formulaire->setRadio(['homme','femme','autre'],'Genre :','idGenre','genre');
$formulaire->setCheckbox(['Magic','Pokemon TCG','Clash Royale','Renversement du capitalisme'],'Ateliers souhaités','checkAtelier','ateliers');
$formulaire->setSelect(['visiteur','Bénévole','Intervenant'],'Type de participation','participationSelectId','participation');
$formulaire->setCheckbox(['J\'accepte les conditions de l\'évènement'],'Conditions contractuelles veuillez signer s\'il vous plaît mais impérativement quand même','checkConditions','conditions');
$formulaire->addFile('Photo','photo');
$formulaire->addTextarea('Commentaires: ','commentaires');add .

$formulaire->setButton();


echo $formulaire->getForm();

if (isset($_POST['ok'])) {
    $message = '';
//    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);

}


?>

</body>
</html>
