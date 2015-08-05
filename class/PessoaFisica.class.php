<?php
include_once 'PFInterface.php';
class PessoaFisica extends Cliente implements PFInterface{
    private $cpf;
    
    function getCpf() {
        return $this->cpf;
    }
    
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
