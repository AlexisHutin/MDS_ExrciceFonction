<?php
// Coder ici vos fonctions

// Exercice 1
function htmlCaracteristiques($valeurForce, $valeurAgilite, $valeurDefense, $valeurMagie, $valeurPointsDeVie, $valeurPiecesDOr)
{
	$html = '';

	$html .= 'Force : ' . $valeurForce . '<br/>';
	$html .= 'Agilite : ' . $valeurAgilite . '<br/>';
	$html .= 'Defense : ' . $valeurDefense . '<br/>';
	$html .= 'Magie : ' . $valeurMagie . '<br/>';
	$html .= 'Points de Vie : ' . $valeurPointsDeVie . '<br/>';
	$html .= 'Pieces d\'Or : ' . $valeurPiecesDOr . '<br/>';

	/*switch ($valeurPointsDeVie) {
		case < 10:
			$html .= 'Je me sens faible dite a ma femme que je l\'aime';
			break;
		
		case < 50:
			$html .= 'C\'est pas ouf mais ça va...';;
			break;
			
		case < 80:
			$html .= 'Pépouze !';
			break;

		default:
			$html .= 'J\'aime me battre !';
			break;
	}*/

	return $html;
}



// Exercice 2
/**
 * $inventaire Array mon tableau d'objets
 *
 * @return $html string l'inventaire sous forme de chaine de caractères HTML
 */
function htmlInventaire($inventaire)
{
	$html = '';
	$html .= 'Inventaire : <br/>';
	foreach ($inventaire as $item) {
		$html .= "- $item <br/>";
	}
	return $html;
}


// Exercice 3
// Créer une fonction qui prend en paramètres l'inventaire et un objet et qui retourne true ou false, selon la présence ou non de l'objet dans l'inventaire

/**
 * $inventaire Array
 * $objetRecherche String
 *
 * @return $estPresent booleen, true ou false selon la présence de l'objet dans l'inventaire
 */
function objetPresentDansInventaire($inventaireAVerifier, $objetRecherche)
{
	if (in_array($objetRecherche, $inventaireAVerifier)){
		return true;
	}
	else{
		return false;
	}
}



// Exercice 4

function calculPuissanceMage($mage)
{
	$puissance = $mage['force'] + $mage['magie'] + ($mage['agilite'] * 2);
	/*echo 'La puissance du Mage est de : ' . $puissance;*/
	return $puissance;
}

function calculPuissanceHeros($force, $magie, $defence)
{
	$puissance = $force + $magie + $defence;
	/*echo 'La puissance du Hero est de : ' . $puissance;*/
	return $puissance;
}


function herosArriveABattreUnEnnemi($mage, $force, $magie, $defense)
{
	echo 'La puissance du Hero est de : ' . calculPuissanceHeros($force, $magie, $defense) . '<br/>';
	echo 'La puissance du Mage est de : ' . calculPuissanceMage($mage) . '<br/>';
	if ((calculPuissanceMage($mage) < calculPuissanceHeros($force, $magie, $defense))){
		echo 'Le hero est le plus puissant !';
		return "Hero";
	}
	elseif ((calculPuissanceMage($mage) > calculPuissanceHeros($force, $magie, $defense))){
		echo 'Le mage est le plus puissant !' . '<br/>';
		return "Mage";
	}
	else{
		echo 'Leur puissance est égale' . '<br/>';
		return "Egale";
	}
	
}



// Exercice 5

// Créer une fonction qui va choisir un objet au hasard dans mon inventaire
function objetAuHasard($inventaire)
{
	$nbItem = sizeof($inventaire);
	return rand(0, $nbItem-1);
}


// Créer une fonction qui retire un objet de l'inventaire

/**
 * $inventaire Array
 * $objetARetirer String
 *
 * @return $nouvelInventaire Array Tableau avec l'élément $objetARetirer en moins
 */
function retireObjet($inventaire, $objetARetirer)
{
	$objetChoisie = $inventaire[$objetARetirer];
	echo 'Le hero choisi de vendre : ' . $objetChoisie . '<br/>';
	
	unset($inventaire[$objetARetirer]);
	$inventaire = array_values($inventaire);
	
	/*echo '<pre>';
	print_r($inventaire);
	echo '</pre>';*/

	return [$objetChoisie , $inventaire];
}



// Créer une fonction qui donne la correspondance en pièces d'or pour un objet
function correspondanceEnPiecesDOr($objetChoisie)
{
	$objetSansEspaces = str_replace(' ','',$objetChoisie[0]);
	/*echo $objetSansEspaces;*/
	$prix = strlen($objetSansEspaces) * 2;
	echo $objetChoisie[0] . ' vaut ' . $prix . ' pieces d\'or' . '<br/>';
	
	return $objetChoisie[1];
}

