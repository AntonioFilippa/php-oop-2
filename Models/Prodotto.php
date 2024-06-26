<?php

class Prodotto {
    protected $id;
    protected $nome;
    protected $prezzo;
    protected $immagine;
    protected $categoria;
    protected $tipologia;

    // Costruttore

    public function __construct($id, $nome, $prezzo, $immagine, $categoria, $tipologia) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipologia = $tipologia;
    }
    // GET E SET
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    // GET E SET
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    // GET E SET
    public function getPrezzo() {
        return $this->prezzo;
    }
    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }
    // GET E SET
    public function getImmagine() {
        return $this->immagine;
    }
    public function setImmagine($immagine) {
        $this->immagine = $immagine;
    }
    // GET E SET
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    // GET E SET
    public function getTipologia() {
        return $this->tipologia;
    }
    public function setTipologia($tipologia) {
        $this->tipologia = $tipologia;
    }
    // METODO PER LA STAMPA DEI DATI

    
    public function stampaDettagli() {
        return [
            'ID' => $this->id,
            'Nome' => $this->nome,
            'Prezzo' => $this->prezzo,
            'Immagine' => $this->immagine,
            'Categoria' => $this->categoria,
            'Tipologia' => $this->tipologia,
        ];
    }

    
    
    
    
}
?>
