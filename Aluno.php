<?php

Class Aluno {
    public $idAluno;
    public $codAluno;
    public $nome;
    public $email;
    public $interesse;

    public function __construct($idAluno, $codAluno, $nome, &$email, $interesse)
    {
        $this->idAluno = $idAluno;
        $this->codAluno = $codAluno;
        $this->nome = $nome;
        $this->email = $email;
        $this->interesse = $interesse;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}