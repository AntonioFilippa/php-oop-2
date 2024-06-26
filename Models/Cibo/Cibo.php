<?php
class Cibo extends Prodotto{
    private $ingredienti;
    private $nutrizione;

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia, $ingredienti, $nutrizione) {
        parent::__construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia);
        $this->ingredienti = $ingredienti;
        $this->nutrizione = $nutrizione;
    }

    public function getIngredienti() {
        return $this->ingredienti;
    }

    public function setIngredienti($ingredienti) {
        $this->ingredienti = $ingredienti;
    }

    public function getNutrizione() {
        return $this->nutrizione;
    }

    public function setNutrizione($nutrizione) {
        $this->nutrizione = $nutrizione;
    }
    


}