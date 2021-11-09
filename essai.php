<?php


$monTableauAssociatif = array();

$monTableauAssociatif = [];

$monTableauAssociatif["Nom"] = "Toto";
$monTableauAssociatif["Prénom"] = "Tata";

$monTableauAssociatif = [
    "Nom" => "Toto",
    "Prénom" => "Tata",
];


foreach ($monTableauAssociatif as $key => $value) {
    # code...
}

$perso1 = new Personnage([
    "Nom" => "Toto",
    "Prénom" => "Tata",
]);

$perso1 = new Personnage($monTableauAssociatif);

/**
 * Undocumented function
 *
 * @return string A text
 */
function maFonction() {
    return "Hello";
}

print json_encode($monTableauAssociatif);