<?php
// Include du fichier des fonctions
include('./includes/fonctions.php');

echo '<h2>Nouvelle Aventure</h3>';
echo '<h3>Le royaume des fonctions</h3>';

// Caractéristiques de mon héros
$force = rand(10, 15);
$agilite = rand(10, 15);
$defense = rand(5, 15);
$magie = rand(8, 12);

$pointsDeVie = 100;
$piecesDOr = rand(50, 100);

$inventaire = ['Epée', 'Dent de Dragon', 'Poudre magique'];

// Exercice 1
// Créer une fonction qui prend en paramètres toutes les caractéristiques et les points de vie et qui affiche les valeurs mises en page (texte)
echo htmlCaracteristiques($force, $agilite, $defense, $magie, $pointsDeVie, $piecesDOr);

// Exercice 2
// Créer une fonction qui prend en paramètre l'inventaire et affiche correctement les objets

echo htmlInventaire($inventaire);

// Exercice 3
// Créer une fonction qui prend en paramètres l'inventaire et un objet et qui retourne true ou false, selon la présence ou non de l'objet dans l'inventaire

// Je rencontre une sorcière un peu insistante qui veut voir mes objets
$questionsSorcieres = ['Dague de gobelin', 'Poudre de fée', 'Dent de Dragon', 'Pince de crabe'];
// Si j'ai un objet en commun avec la sorcière, elle me donne 2 pièces d'or

// Je passe en revue chaque objet de la sorcière

	// Je vérifie s'il est présent dans MON inventaire
	// S'il est présent, je gagne 2 pièces d'or

foreach($questionsSorcieres as $item){
	if (objetPresentDansInventaire($inventaire, $item)){
		echo $item . ' est dans mon inventaire, je gagne 2 pieces d\'or' . '<br/>';
		$piecesDOr = $piecesDOr + 2;
	}
}


// Exercice 4
// Je tombe sur un mage puissant
// La puissance du mage pour ce combat se calcule de cette façon :
	// Sa force vaut entre 8 et 12
	// Sa magie est + élevée que la mienne de 3 pts
	// Son agilite est - élevée que la mienne de 2 pts
	// Sa puissance est égale à force + magie + (agilite * 2)
$magePuissant = [
	'force' => rand(8, 12),
	'magie' => $magie + 3,
	'agilite' => $agilite - 2 
];

$gagnant = herosArriveABattreUnEnnemi($magePuissant, $force, $magie, $defense);
// Ma puissance pour ce combat se calcule de cette façon :
	// force + magie + defense

// Créez 2 fonctions pour calculer les puissances respectives

// Créez une fonction qui prend en paramètres 2 puissances et retourne le combattant qui gagne le combat (puissance la + élevée)

// Utilisez ces 3 fonctions pour écrire le déroulé du combat
if ($gagnant == 'Hero'){
	echo 'le Hero a gagne, il gagne un Sortilege du mage !';
	$inventaire[] = "Sortilèges du mage";
}
elseif($gagnant == 'Mage'){
	echo 'le Mage a gagne le combat, le Hero perd 20 PV, 1 pt de def et 2 pts de magie <br/>';
	$pointsDeVie = $pointsDeVie - 20;
	$defense = $defense - 1;
	$magie = $magie - 2;
}
else{}
// Si je gagne le combat, je récupère l'objet "Sortilèges du mage"
// Si je perds le combat, je perds 20 pts de vie, 1 pt de défense et 2pts de magie

// Utilisez la fonction de l'exercice 1 pour afficher vos caractéristiques

echo htmlCaracteristiques($force, $agilite, $defense, $magie, $pointsDeVie, $piecesDOr);









// Exercice 5
// Je rencontre un Ogre marchand, il me propose de m'acheter un de mes objets mais je n'arrive pas à me décider lequel...

// Créer une fonction qui va choisir un objet au hasard dans mon inventaire


// Créer une fonction qui retire un objet de l'inventaire

// L'ogre me donne un nombre de pièces d'or équivalent au double du nombre de lettres de l'objet (hors espaces)
// Créer une fonction qui donne la correspondance en pièces d'or pour un objet

// Vendez l'objet

// Affichez l'inventaire

echo htmlInventaire(correspondanceEnPiecesDOr(retireObjet($inventaire, objetAuHasard($inventaire))));

