<?php

Class CursoInstrutor extends Instrutor {

    public $idCursoInstrutor;
    public $idCurso;
    public $idInstrutor;

    public function __construct($idCursoInstrutor, $idCurso, $idInstrutor)
    {
        $this->idCursoInstrutor = $idCursoInstrutor;
        $this->idCurso = $idCurso;
        $this->idInstrutor = $idInstrutor;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}