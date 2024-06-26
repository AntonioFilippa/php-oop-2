<?php

trait NutritionalInformation
{
    private $ingredienti;
    private $nutrizione;

    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    public function setIngredienti($ingredienti)
    {
        $this->ingredienti = $ingredienti;
    }

    public function getNutrizione()
    {
        return $this->nutrizione;
    }

    public function setNutrizione($nutrizione)
    {
        $this->nutrizione = $nutrizione;
    }
}
