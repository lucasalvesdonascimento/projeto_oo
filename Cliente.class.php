<?php

class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $endereco;
    private $data_de_nascimento; 
    
    function getId() {
        return $this->id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getData_de_nascimento() {
        return $this->data_de_nascimento;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setData_de_nascimento($data_de_nascimento) {
        $this->data_de_nascimento = $data_de_nascimento;
    }   

}
