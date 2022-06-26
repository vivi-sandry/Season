<?php

Class AlunoTurma extends Turma {

    public $idAlunoTurma;
    public $idAluno;
    public $idTurma;

    public function __construct($idAlunoTurma, $idAluno, $idTurma)
    {
        $this->idAlunoTurma = $idAlunoTurma;
        $this->idAluno = $idAluno;
        $this->idTurma = $idTurma;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}