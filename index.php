<?php

# importation de notre classe Ecole
# require_once 'Ecole.php';

# importation de notre classe Classe
# require_once 'Classe.php';

# importation de notre classe Eleve
# require_once 'Eleve.php';

/**
 * spl_autoload_register est une fonction permettant de faire de l'autoloading de classes.
 * elle est appelée AUTOMATIQUEMENT par PHP dès qu'on instancie une classe qui n'a pas été incluse
 */
spl_autoload_register(function( $class ) {
    require_once $class . '.php';
});

/**
 * création d'une instance de la classe Ecole
 * ici notre variable est un objet de la classe Ecole
 * elle a donc accès à l'ensemble des propriétés et méthodes qui la compose
 */

#$ecole = new Ecole();
$ecole = new Ecole(
    'K-anel Consulting',
    'Audacia - La Jaille 97122 BM',
    'Léna BOISSERON',
    15
);

# affecter des valeurs à notre projet
# $ecole->nom = 'K-anel Consulting';
# $ecole->adresse = 'Audacia - La Jaille 97122 BM';
# $ecole->directeur = 'Léna BOISSERON';
# $ecole->effectif = 15;

echo '<pre>';
print_r($ecole);
echo '</pre>';

# afficher le nom de l'école dans un h1
echo '<h1>' . $ecole->getNom() . '</h1>';
echo '<p>' . $ecole->getAdresse() . '</p>';
echo '<p>' . $ecole->getDirecteur() . '</p>';
echo '<p>' . $ecole->getEffectif() . '</p>';

$ecole->setNom('La Famille');

echo '<pre>';
print_r($ecole);
echo '</pre>';

/**
 * CONSIGNE
 * créer les classes "Classe" et "Elève" dans des fichiers séparés
 * Classe.php et Eleve.php
 * propriétés, constructeur, getters et setters
 */

$classe = new Classe(
    'CM2',
    'Mme JONATHAN',
    23
);
$classe2 = new Classe(
    'PHP',
    'Hugo LIEGEARD',
    9
);
$classe3 = new Classe(
    'HTML/CSS',
    'Raphaël ELSO',
    6
);

echo '<pre>';
print_r($classe);
print_r($classe2);
print_r($classe3);
echo '</pre>';

#---------------------------------------

$eleve = new Eleve(
    'SELBONNE',
    'Khénaël',
    9
);
$eleve2 = new Eleve(
    'KANCHAN',
    'Yohan',
    9
);
$eleve3 = new Eleve(
    'SELBONNE',
    'Khélian',
    11
);

echo '<pre>';
print_r($eleve);
print_r($eleve2);
print_r($eleve3);
echo '</pre>';

$classe->ajouterUnEleve($eleve);
$classe2->ajouterUnEleve($eleve3);
$classe3->ajouterUnEleve($eleve2);

echo '<pre>';
print_r($classe);
print_r($classe2);
print_r($classe3);
echo '</pre>';

$ecole->ajouterUneClasse($classe);
$ecole->ajouterUneClasse($classe2);
$ecole->ajouterUneClasse($classe3);
echo '<pre>';
print_r($ecole);
echo '</pre>';

/**
 * CONSIGNE
 * en partant de l'objet $ecole : affichez la liste ol, ul, li des classes et pour chaque classe les élèves
 */

# récupération des classes
$classes = $ecole->getClasses();

# on parcourt nos classes
echo '<ol>';

    foreach ($classes as $classe) {
        #afficher le nom de la classe
        echo '<li>';
            echo $classe->getNom();
        echo '</li>';

        # afficher la liste des élèves
        echo '<ul>';
            # je récupère les élèves de la classe
            $eleves = $classe->getEleves();

    foreach ($eleves as $eleve) {
        echo '<li>';
            echo $eleve->getPrenom();
        echo '</li>';
            }

        echo '</ul>';
    }
echo '</ol>';