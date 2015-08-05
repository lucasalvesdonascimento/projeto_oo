<?php
include_once './class/Cliente.class.php';
include_once './class/PessoaJuridica.class.php';
include_once './class/PessoaFisica.class.php';

$cliente1 = new PessoaFisica();
    $cliente1->setId("0");
    $cliente1->setNome("Fulano 0");
    $cliente1->setCpf("001.001.001-01");
    $cliente1->setEndereco("Rua 1");
    $cliente1->setData_de_nascimento("01/01/01");
    $cliente1->setNivel("Pessoa Fisica");
    $cliente1->setImportancia("1 estrela");
    $cliente1->setEndereco_especifico("Rua A");
   

$cliente2 = new PessoaFisica();
    $cliente2->setId("1");
    $cliente2->setNome("Fulano 1");
    $cliente2->setCpf("002.002.002-02");
    $cliente2->setEndereco("Rua 2");
    $cliente2->setData_de_nascimento("02/02/02");
    $cliente2->setNivel("Pessoa Fisica");
    $cliente2->setImportancia("2 estrelas");
    $cliente2->setEndereco_especifico("Rua B");

    
$cliente3 = new PessoaFisica();
    $cliente3->setId("2");
    $cliente3->setNome("Fulano 2");
    $cliente3->setCpf("003.003.003-03");
    $cliente3->setEndereco("Rua 3");
    $cliente3->setData_de_nascimento("03/03/03");
    $cliente3->setNivel("Pessoa Fisica");
    $cliente3->setImportancia("3 estrelas");
    $cliente3->setEndereco_especifico("Rua C");

$cliente4 = new PessoaFisica();
    $cliente4->setId("3");
    $cliente4->setNome("Fulano 3");
    $cliente4->setCpf("004.004.004-04");
    $cliente4->setEndereco("Rua 4");
    $cliente4->setData_de_nascimento("04/04/04");
    $cliente4->setNivel("Pessoa Fisica");
    $cliente4->setImportancia("4 estrelas");
    $cliente4->setEndereco_especifico("Rua D");

$cliente5 = new PessoaFisica();
    $cliente5->setId("4");
    $cliente5->setNome("Fulano 4");
    $cliente5->setCpf("005.005.005-05");
    $cliente5->setEndereco("Rua 5");
    $cliente5->setData_de_nascimento("05/05/05");
    $cliente5->setNivel("Pessoa Fisica");
    $cliente5->setImportancia("5 estrelas");
    $cliente5->setEndereco_especifico("Rua E");
    
$cliente6 = new PessoaFisica();
    $cliente6->setId("5");
    $cliente6->setNome("Fulano 5");
    $cliente6->setCpf("006.006.006-06");
    $cliente6->setEndereco("Rua 6");
    $cliente6->setData_de_nascimento("06/06/06");
    $cliente6->setNivel("Pessoa Fisica");
    $cliente6->setImportancia("1 estrela");
    $cliente6->setEndereco_especifico("Rua F");
    
$cliente7 = new PessoaFisica();
    $cliente7->setId("6");
    $cliente7->setNome("Fulano 6");
    $cliente7->setCpf("007.007.007-07");
    $cliente7->setEndereco("Rua 7");
    $cliente7->setData_de_nascimento("07/07/07");
    $cliente7->setNivel("Pessoa Fisica");
    $cliente7->setImportancia("2 estrelas");
    $cliente7->setEndereco_especifico("Rua G");
    
$cliente8 = new PessoaFisica();
    $cliente8->setId("7");
    $cliente8->setNome("Fulano 7");
    $cliente8->setCpf("008.008.008-08");
    $cliente8->setEndereco("Rua 8");
    $cliente8->setData_de_nascimento("08/08/08");
    $cliente8->setNivel("Pessoa Fisica");
    $cliente8->setImportancia("3 estrelas");
    $cliente8->setEndereco_especifico("Rua H");
    
$cliente9 = new PessoaFisica();
    $cliente9->setId("8");
    $cliente9->setNome("Fulano 8");
    $cliente9->setCpf("009.009.009-09");
    $cliente9->setEndereco("Rua 9");
    $cliente9->setData_de_nascimento("09/09/09");
    $cliente9->setNivel("Pessoa Fisica");
    $cliente9->setImportancia("4 estrelas");
    $cliente9->setEndereco_especifico("Rua I");

$cliente10 = new PessoaFisica();
    $cliente10->setId("9");
    $cliente10->setNome("Fulano 9");
    $cliente10->setCpf("010.010.010-10");
    $cliente10->setEndereco("Rua 10");
    $cliente10->setData_de_nascimento("10/10/10");
    $cliente10->setNivel("Pessoa Fisica");
    $cliente10->setImportancia("5 estrelas");
    $cliente10->setEndereco_especifico("Rua J");

$cliente11 = new PessoaJuridica();
    $cliente11->setId("10");
    $cliente11->setNome("Fulano 10");    
    $cliente11->setEndereco("Rua 11");  
    $cliente11->setNivel("Pessoa Juridica");
    $cliente11->setCnpj("01.001.001/0001-01");
    $cliente11->setRazao_social("Empresa 01");
    $cliente11->setNome_fantasia("Empresa do Fulano 10");
    $cliente11->setNivel("Pessoa Juridica");
    $cliente11->setImportancia("1 estrela");
    $cliente11->setEndereco_especifico("Rua L");
    
$cliente12 = new PessoaJuridica();
    $cliente12->setId("11");
    $cliente12->setNome("Fulano 11");    
    $cliente12->setEndereco("Rua 11"); 
    $cliente12->setNivel("Pessoa Juridica");
    $cliente12->setCnpj("02.002.002/0002-02");
    $cliente12->setRazao_social("Empresa 02");
    $cliente12->setNome_fantasia("Empresa do Fulano 11");
    $cliente12->setNivel("Pessoa Juridica");
    $cliente12->setImportancia("2 estrelas");
    $cliente12->setEndereco_especifico("Rua M");
    
$cliente13 = new PessoaJuridica();
    $cliente13->setId("12");
    $cliente13->setNome("Fulano 12");    
    $cliente13->setEndereco("Rua 12");  
    $cliente13->setNivel("Pessoa Juridica");
    $cliente13->setCnpj("03.003.003/0003-03");
    $cliente13->setRazao_social("Empresa 03");
    $cliente13->setNome_fantasia("Empresa do Fulano 12");
    $cliente13->setNivel("Pessoa Juridica");
    $cliente13->setImportancia("3 estrelas");
    $cliente13->setEndereco_especifico("Rua N");
    
$cliente14 = new PessoaJuridica();
    $cliente14->setId("13");
    $cliente14->setNome("Fulano 13");    
    $cliente14->setEndereco("Rua 13");
    $cliente14->setNivel("Pessoa Juridica");
    $cliente14->setCnpj("04.004.004/0004-04");
    $cliente14->setRazao_social("Empresa 04");
    $cliente14->setNome_fantasia("Empresa do Fulano 13");
    $cliente14->setNivel("Pessoa Juridica");
    $cliente14->setImportancia("4 estrelas");
    $cliente14->setEndereco_especifico("Rua O");

$clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10, $cliente11, $cliente12, $cliente13, $cliente14);
