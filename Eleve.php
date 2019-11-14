<?php


class Eleve
{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**********GETTERS************/
    public function getNom(){return $this->nom;}

    public function getPrenom(){return $this->prenom;}

    public function getAge(){return $this->age;}

    /**********SETTERS************/
    public function setNom($nom){$this->nom = $nom;}

    public function setPrenom($prenom){$this->prenom = $prenom;}

    public function setAge($age){$this->age = $age;}
}