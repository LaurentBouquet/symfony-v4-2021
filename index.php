<?php

$monTableauAssociatif = [
    "Nom" => "Toto",
    "Prénom" => "Tata",
];


foreach ($monTableauAssociatif as $key => $value) {
    print "<br/>Clé = ".$key;
    print "<br/>Valeur = ".$value;
}
print "<br/>";

print json_encode($monTableauAssociatif);

$tableauJson = '{
    "Nom":"Titi",
    "Prénom":"Tutu"
}';

$monTableau2 = json_decode($tableauJson);
foreach ($monTableau2 as $key => $value) {
    print "<br/>Clé = ".$key;
    print "<br/>Valeur = ".$value;
}



if 

