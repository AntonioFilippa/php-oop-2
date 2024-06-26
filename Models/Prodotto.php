<?php
//Product class with get and set methods
class Prodotto {
    private $id;
    private $nome;
    private $prezzo;
    private $descrizione;
    private $categoria;
    private $immagine;
    private $quantita;

    public function __construct($id, $nome, $prezzo, $descrizione, $categoria, $immagine, $quantita) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->categoria = $categoria;
        $this->immagine = $immagine;
        $this->quantita = $quantita;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }

    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function setImmagine($immagine) {
        $this->immagine = $immagine;
    }

    public function getQuantita() {
        return $this->quantita;
    }

    public function setQuantita($quantita) {
        $this->quantita = $quantita;
    }
}
?>