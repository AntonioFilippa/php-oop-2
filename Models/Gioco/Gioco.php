<?php
class Gioco extends Prodotto{
    private $etaConsigliata;
    private $materiale;

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia, $etaConsigliata, $materiale) {
        parent::__construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia);
        $this->etaConsigliata = $etaConsigliata;
        $this->materiale = $materiale;
    }
    // GET E SET
    public function getEtaConsigliata() {
        return $this->etaConsigliata;
    }

    public function setEtaConsigliata($etaConsigliata) {
        $this->etaConsigliata = $etaConsigliata;
    }
    // GET E SET
    public function getMateriale() {
        return $this->materiale;
    }

    public function setMateriale($materiale) {
        $this->materiale = $materiale;
    }

}