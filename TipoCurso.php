<?php

Class TipoCurso extends Salas {

    public $idTipo;
    public $codTipo;
    public $nome;

    public function __construct($idTipo, $codTipo, $nome)
    {
        $this->idTipo = $idTipo;
        $this->codTipo = $codTipo;
        $this->nome = $nome;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}