<?php
require_once   '../vendor/autoload.php';

use App\Entity\Form;
use App\Entity\Form2;
use App\Entity\Ville;
use App\Entity\Ville2;
use App\Entity\Voiture;

$voiture = new Voiture();


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
$ville1 = new Ville();
$ville1->setNom("Nantes"); $ville1->setDepartement("Loire-Atlantique");
$ville2 = new Ville2("Paimpol","Côtes d'armor");

$formulaire= new Form2('/postForm');
$formulaire->setText("Nom de la ville",'nomVille');
$formulaire->setText("département",'nomDep');
$formulaire->setButton();
$formulaire->setRadio(['oui','non','au contraire'],'boutonsRadio','radioTest');
$formulaire->setCheckbox(['oui','bien entendu','évidemment'],'checkboxTest','checkTest');


echo $formulaire->getForm();



?>
    <p><?= $ville1 ?></p>
    <p><?= $ville2 ?></p>

</body>
</html>