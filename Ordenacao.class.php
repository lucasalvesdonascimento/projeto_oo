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
        echo '<table class="table">'
            . '<theader>'                
                . '<td><b>Id</b></td>'
                . '<td><b>Nome</b></td>'
                . '<td><b>Nível</b></td>'
                . '<td><b>Importância</b></td>'                                
            . '</theader>';        
        foreach ($clientes as $posicao => $cli){
            echo '<tr>';
                echo '<td><a href="index.php?pag='.$posicao.'">'.$posicao."</a></td>"
                   . '<td><a href="index.php?pag='.$posicao.'">'.$cli->getNome().'</a></td>'
                   . '<td>'.$cli->getNivel().'</td>'
                   . '<td>'.$cli->getImportancia().'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    
    public function OrdenaDecrescente() {
        include './Objetos.php';
        krsort($clientes);
        echo '<table class="table">'
            . '<theader>'                
                . '<td>Id</td>'
                . '<td>Nome</td>'
                . '<td>Nível</td>'
                . '<td>Importância</td>'
            . '</theader>';        
        foreach ($clientes as $posicao => $cli){
            echo '<tr>';
                echo '<td><a href="index.php?pag='.$posicao.'">'.$posicao."</a></td>"
                   . '<td><a href="index.php?pag='.$posicao.'">'.$cli->getNome().'</a></td>'
                   . '<td>'.$cli->getNivel().'</td>'
                   . '<td>'.$cli->getImportancia().'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    
    
}
