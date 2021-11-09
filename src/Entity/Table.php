<?php
namespace App\Entity;

class Table {

    private $numero;
    private $calcName;

    public function __construct($numero, $calcName = "multiplication") {
        $this->numero = $numero;
        $this->calcName = $calcName;
    }

    public function calcMultiply($max = 10): array {
        $result = array();        
        $calculation = array();

        // Générer le tableau de calcul de la multiplication
        for ($i=0; $i < $max; $i++) { 

            $calculation['indice'] = $i + 1;
            $calculation['result'] = $this->numero * ($i + 1);

            $result[] = $calculation;
        }
        
        return $result;
    }

    /**
     * Get the value of calcName
     */ 
    public function getCalcName()
    {
        return $this->calcName;
    }

    /**
     * Set the value of calcName
     *
     * @return  self
     */ 
    public function setCalcName($calcName)
    {
        $this->calcName = $calcName;

        return $this;
    }
}