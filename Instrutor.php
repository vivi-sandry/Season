<?php
Class Instrutor extends Cursos {
    public $idInstrutor;
    public $codInstrutor;
    public $nome;
    public $email;

    public function __construct($idInstrutor, $codInstrutor, $nome, $email)
    {
        $this->idInstrutor = $idInstrutor;
        $this->codInstrutor = $codInstrutor;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function creat(){};

    public function read(){};

    public function update(){};

    public function delete(){};
}