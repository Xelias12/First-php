
<?php
// différents type de variable nombre, chaine de caractère booleen,null
// le ' n'interpréte jamais contrairement au " qui permet aussi de faire des caractère spéciaux tel que le retour à la ligne
/*
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
    'Note' => [10 , 20 , 8 ,14]
];
$notes['Prenom'] = 'Louis';
$notes[] = 'Belluga';
// Les crochets vide permette de remplir le tableau directement après la dernière valeur
$notes['Note'][] = 19;
print_r( $notes['Prenom'].' '.$notes['Note'][4]."\n");
print_r($notes);
// les conditions 
if($notes['Note'][2]>=10){
    echo "\nBravo vous avez la moyenne";
}else{
    echo "\nDommage vous n'avez pas la moyenne";
}
// Demander à l'utilisateur une valeur
$NoteDemande =(int) readline ("\nEntrez votre note :");
if($NoteDemande>=10){
    // le triple égale permet de verifier également le type de la variable. Il faut donc convertir la variable
    //  en mettannt son type entre parenthèse au début ex : (int)
    if($NoteDemande===10){
        echo 'OUF de justesse';
    }else{
        echo 'Bien joué';
    }
    
}else{
    echo 'Dommage';
}
*/
$action = (int) readline ('1 : Attaquer 2 : Défendre 3 : Passer son tour);
switch ($action){
    case 1: 
        echo



?>
