
<?php
// différents type de variable nombre, chaine de caractère booleen,null
// le ' n'interpréte jamais contrairement au " qui permet aussi de faire des caractère spéciaux tel que le retour à la ligne

$Prenom = 'Alexis';
$Nom='Reigne';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1+$note2)/2;

// si il y a un calcul le mettre entre parenthèse
echo 'Bonjour ' .$Prenom.' '. $Nom.' '. 'vous avez eu '.(($note1+$note2)/2).' de moyenne' ;
echo "\nBonjour $Prenom $Nom vous avez eu $moyenne de moyenne\n";

// tableau entre crochet, => pour indexer, on peut mettre des tableaux dans des tableaux
$notes = [
    'Prenom' => 'Alexis',
    'Nom' => 'Reigne',
    'Note' => [10 , 20 , 15 ,14]
];
$notes['Prenom'] = 'Louis';
// Les crochets vide permette de remplir le tableau directemetn après la dernière valeur
$notes['Note'][] = 19;
print_r( $notes['Prenom'].' '.$notes['Note'][4]);

?>
