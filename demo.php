
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
// Readline permet de demander à l'utilisateur une valeur
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
// $$ pour faire un et || pour un ou le !permet de faire l'inverse
$note1 = 1;
$note2 = 16;
if($note1>10 && $note2>=10||$note1>15||$note2>15){
    echo'Bravo';
}else{
    echo'dommage';
}
$action = (int) readline ('1 : Attaquer 2 : Défendre 3 : Passer son tour');
// switch permet de faire des if consecutifs
switch ($action){
    case 1 :
        echo'Tu attaques';
        break;
    case 2 :
        echo'Tu te defends';
        break;
    case 3 :
        echo'Tu passe ton tour';
        break;
    default :
    echo'Erreur'; 
}
$variable=null;
while($variable!==20){
    $variable = (int)readline ('Entrez une valeur : ');
}
echo'Bravo'
// ++ pour incrementé de 1 += x pour incrémenté de x
for($i=0 ;$i!=10;$i++){
    echo"- $i \n";
}
// boucle pour chaque
$note=[10,15,12,14];
$élèves = [
    'cm2' => ['Alexis','Jean'],
    'cm1' => ['Marc','Yvette'],
];
foreach($note as $notes){
    echo "- $notes \n";
}
foreach($élèves as $classe => $élève ){
    echo "$classe :\n";
    foreach($élève as $prenom){
        echo "- $prenom\n";
    }
    echo "\n";
}

$notes = [];
$noterentree = null;
while($noterentree!='fin'){
    $noterentree = readline ('Entrez votre note ou tapez fin : - ');
    $notes[]="$noterentree";

}
echo "Les notes sont : \n";
$supp = array_pop($notes);

 foreach($notes as $note){
    echo "- $note\n";
}
*/
// Mettre while(true) d'excécuter la boucle tant qu'on n'utilise pas break pour sortir volontairement de la boucle
$horaireOuvertureDemande = null;
$horaireFermeture = null;
$horaireDemande = null;
$horaireOuverture = [];

while (true){
    $horaireOuverture = readline("Entrez l'horraire d'ouverture : \n");
    $horaireFermeture = readline("Entrez l'horraire de fermeture : \n");
    

}

?>
