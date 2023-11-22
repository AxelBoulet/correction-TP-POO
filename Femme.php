<?php
class Femme extends Personne {
    private $partenaire;

    public function estCelibataire(): bool
    {
       return $this->partenaire === NULL;
    }

    public function getPartenaire()
    {
        return $this->partenaire;
    }

    public function setPartenaire($partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    public function afficher(){
        Personne::afficher();
        echo $this->estCelibataire()? "Elle est célibataire. <br>" : "Elle est mariée à " . $this->partenaire->getPrenom() . " " . $this->partenaire->getNom() . ".<br>";
    
        // if ($this->estCelibataire() == true) {
        //     echo "Il est célibataire.";
        // } else {
        //     echo "Il est marié à " . $this->Partenaire->getPrenom() . " " . $this->Partenaire->getNom() . ".";
        // }
    }

    public function marier($partenaire){
        if ($this->age >= 18 && $partenaire->getAge() >= 18) {
            $this->setPartenaire($partenaire);
            $partenaire->setPartenaire($this);  
        } 
    }
}