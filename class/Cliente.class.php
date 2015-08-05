<?php
include_once 'GrauDeImportanciaInterface.php';
include_once 'EnderecoCobrancaInterface.php';

class Cliente implements GrauDeImportanciaInterface, EnderecoCobrancaInterface{
    private $id;
    private $nome;    
    private $endereco;
    private $data_de_nascimento;
    private $nivel;
    private $importancia;
    private $endereco_especifico;
    
    function getId() {
        return $this->id;
    }
    
    function getNome() {
        return $this->nome;
    }
    
    function getEndereco() {
        return $this->endereco;
    }

    function getData_de_nascimento() {
        return $this->data_de_nascimento;
    }
    
    function getNivel() {
        return $this->nivel;
    }
    
    function getImportancia() {
        return $this->importancia;
    }
    
    function getEndereco_especifico() {
        return $this->endereco_especifico;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setData_de_nascimento($data_de_nascimento) {
        $this->data_de_nascimento = $data_de_nascimento;
    }
    
    function setNivel($nivel) {
        $this->nivel = $nivel;
    }   

    function setImportancia($importancia) {
        $this->importancia = $importancia;
    }
    
    function setEndereco_especifico($endereco_especifico) {
        $this->endereco_especifico = $endereco_especifico;
    }
    
}
