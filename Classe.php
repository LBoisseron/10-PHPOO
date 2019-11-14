<?php


class Classe
{
    private $nom;
    private $enseignant;
    private $effectif;
    private $eleves;

    public function __construct($nom, $enseignant, $effectif)
    {
        $this->nom = $nom;
        $this->enseignant = $enseignant;
        $this->effectif = $effectif;
        $this->eleves = [];
    }

    /**********GETTERS************/
    public function getNom(){return $this->nom;}

    public function getEnseignant(){return $this->enseignant;}

    public function getEffectif(){return $this->effectif;}

    public function getEleves(){return $this->eleves;}

    /**********SETTERS************/
    public function setNom($nom){$this->nom = $nom;}

    public function setEnseignant($enseignant){$this->enseignant = $enseignant;}

    public function setEffectif($effectif){$this->effectif = $effectif;}

    # cette fonction permet de rajouter un élève à la classe
    # TODO: vérifier que l'élève n'existe pas déjà...
    public function ajouterUnEleve( Eleve $eleve){$this->eleves[] = $eleve;}

}