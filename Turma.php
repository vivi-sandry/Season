<?php

Class Turma extends CursoInstrutor {

    public $idTurma;
    public $idCursoInstrutor;
    public $inicio;
    public $fim;
    public $horario;
    public $idSala;

    public function __construct($idTurma, $idCursoInstrutor, $inicio, $fim, $horario, $idSala)
    {
        $this->idTurma = $idTurma;
        $this->idCursoInstrutor = $idCursoInstrutor;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->horario = $horario;
        $this->idSala = $idSala;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}