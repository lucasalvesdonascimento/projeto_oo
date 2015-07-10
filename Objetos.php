<?php

include_once './Cliente.class.php';

$cliente1 = new Cliente();
    $cliente1->setId("0");
    $cliente1->setNome("Fulano 0");
    $cliente1->setCpf("001.001.001-01");
    $cliente1->setEndereco("Rua 1");
    $cliente1->setData_de_nascimento("01/01/01");
    
$cliente2 = new Cliente();
    $cliente2->setId("1");
    $cliente2->setNome("Fulano 1");
    $cliente2->setCpf("002.002.002-02");
    $cliente2->setEndereco("Rua 2");
    $cliente2->setData_de_nascimento("02/02/02");
    
$cliente3 = new Cliente();
    $cliente3->setId("2");
    $cliente3->setNome("Fulano 2");
    $cliente3->setCpf("003.003.003-03");
    $cliente3->setEndereco("Rua 3");
    $cliente3->setData_de_nascimento("03/03/03");

$cliente4 = new Cliente();
    $cliente4->setId("3");
    $cliente4->setNome("Fulano 3");
    $cliente4->setCpf("004.004.004-04");
    $cliente4->setEndereco("Rua 4");
    $cliente4->setData_de_nascimento("04/04/04");

$cliente5 = new Cliente();
    $cliente5->setId("4");
    $cliente5->setNome("Fulano 4");
    $cliente5->setCpf("005.005.005-05");
    $cliente5->setEndereco("Rua 5");
    $cliente5->setData_de_nascimento("05/05/05");
    
$cliente6 = new Cliente();
    $cliente6->setId("5");
    $cliente6->setNome("Fulano 5");
    $cliente6->setCpf("006.006.006-06");
    $cliente6->setEndereco("Rua 6");
    $cliente6->setData_de_nascimento("06/06/06");
    
$cliente7 = new Cliente();
    $cliente7->setId("6");
    $cliente7->setNome("Fulano 6");
    $cliente7->setCpf("007.007.007-07");
    $cliente7->setEndereco("Rua 7");
    $cliente7->setData_de_nascimento("07/07/07");
    
$cliente8 = new Cliente();
    $cliente8->setId("7");
    $cliente8->setNome("Fulano 7");
    $cliente8->setCpf("008.008.008-08");
    $cliente8->setEndereco("Rua 8");
    $cliente8->setData_de_nascimento("08/08/08");
    
$cliente9 = new Cliente();
    $cliente9->setId("8");
    $cliente9->setNome("Fulano 8");
    $cliente9->setCpf("009.009.009-09");
    $cliente9->setEndereco("Rua 9");
    $cliente9->setData_de_nascimento("09/09/09");

$cliente10 = new Cliente();
    $cliente10->setId("9");
    $cliente10->setNome("Fulano 9");
    $cliente10->setCpf("010.010.010-10");
    $cliente10->setEndereco("Rua 10");
    $cliente10->setData_de_nascimento("10/10/10");

$clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);