<?php

Class Salas extends Aluno {

    public $idSala;
    public $codSala;
    public $sala;
    public $capacidade;

    public function __construct($idSala, $codSala, $sala, $capacidade)
    {
        $this->idSala = $idSala;
        $this->codSala = $codSala;
        $this->sala = $sala;
        $this->capacidade = $capacidade;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}