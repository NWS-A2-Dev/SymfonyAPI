<?php


namespace App\Entity;


class Student
{
    public string $Name;
    public string $Prenom;

    public function __construct($nom, $prenom)
    {
        $this->Name = $nom;
        $this->Prenom = $prenom;
    }
}