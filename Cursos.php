<?php

Class Cursos extends TipoCurso {

    public $idCurso;
    public $codCurso;
    public $idTipo;
    public $nome;

    public function __construct($idCurso, $codCurso, $idTipo, $nome)
    {
        $this->idCurso = $idCurso;
        $this->codCurso = $codCurso;
        $this->idTipo = $idTipo;
        $this->nome = $nome;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}