<?php
//require nutritional
require_once __DIR__ . '/../NutritionalInformation/NutritionalInformation.php';


class Cibo extends Prodotto
{

    use NutritionalInformation;

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia, $ingredienti, $nutrizione)
    {
        parent::__construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia);
        $this->setIngredienti($ingredienti);
        $this->setNutrizione($nutrizione);
    }

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
