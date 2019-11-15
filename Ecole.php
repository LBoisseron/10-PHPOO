<?php

/**
 * Une Class PHP est une entité regroupant des variables (propriétés) et des fonctions (méthodes) par thème
 */

class Ecole
{
    /**
     * déclaration des propriétés de notre classe Ecole
     * "private" permet d'interdire l'accès direct aux propriétés par les objets
     * en "private" les propriétés sont accessibles UNIQUEMENT depuis l'intérieur de la classe
     */
    private $nom;
    private $adresse;
    private $effectif;
    private $directeur;
    private $classes = [];


    public function __construct($nom, $adresse, $effectif, $directeur)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->effectif = $effectif;
        $this->directeur = $directeur;
    }
    /*
     * alors pour permettre l'attribution de valeurs à mes propriétés, je vais mettre en place un CONSTRUCTEUR
     * -----------------------------------------------------
     * l'objectif du constructeur est d'initialiser les propriétés de la classe (hydrater un objet) avec des valeurs
     * IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT !!!
     * ----------------------------------------------------------
     * cette fonction est exécutée AUTOMATIQUEMENT par PHP au moment de l'instanciation (le new) de la classe
     */

    /**********GETTERS************/
    public function getNom()
    {
        return $this->nom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getDirecteur()
    {
        return $this->directeur;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    /**********SETTERS************/
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function ajouterUneClasse(Classe $classe)
    {
        $this->classes[] = $classe;
    }

}