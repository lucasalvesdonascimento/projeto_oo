<?php

/**
 * Ordenacao [TIPO]
 * Descricao
 * @copyright (c) year, Lucas Alves do Nascimento, Lucas Alves
 */
class Ordenacao {   
    
    public function OrdenaCrescente(){
        include './Objetos.php';
        ksort($clientes);
        foreach ($clientes as $posicao => $cli){                          
            echo '<br /><a href="index.php?pag='.$posicao.'">'.$posicao."- ".$cli->getNome().'</a><br />';
        }
    }
    
    public function OrdenaDecrescente() {
        include './Objetos.php';
        krsort($clientes);
        foreach ($clientes as $posicao => $cli){                          
            echo '<br /><a href="index.php?pag='.$posicao.'">'.$posicao."- ".$cli->getNome().'</a><br />';
        }
    }
    
    
}
