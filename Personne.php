<?php 
class Personne {
    protected string $prenom;
    protected string $nom;
    protected int $age;

    public function __construct($prenom, $nom, $age){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setPrenom($nouveauPrenom): self
    {
        $this->prenom = $nouveauPrenom;
        return $this;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function vieillir(){
        $this->age++;
    }

    public function afficher(){
        echo $this->prenom . " " . $this->nom . " a " . $this->age . " ans.<br>";
    }
}
?>