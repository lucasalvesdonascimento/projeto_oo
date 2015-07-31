<?php 
ini_set('display_errors', true);
error_reporting(E_ALL); 
?>
<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto OO</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css" />    
    </head>
    <body>
         
     jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     Include all compiled plugins (below), or include individual files as needed 
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css" />  

    <title>Projeto OO</title>

    <!-- Custom styles for this template -->
    <!--<link href="jumbotron.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <a class="btn btn-primary" href="index.php?pag=14">Ordena Crescente</a>
        <a class="btn btn-primary" href="index.php?pag=15">Ordena Decrescente</a><br />
        <?php       
                  include_once './Objetos.php';
                  include_once './class/PessoaJuridica.class.php';
                  include_once './Ordenacao.class.php';
                  
                    if(isset($_GET["pag"])){
                        $pag = htmlspecialchars($_GET["pag"]);
                    }
                  
                  $ordenacao = new Ordenacao();
                  
                  if(isset($pag)&& $pag==14){
                      $ordenacao->OrdenaCrescente();                    
                  }elseif(isset($pag)&&$pag==15){
                      $ordenacao->OrdenaDecrescente();                                          
                  }else if(isset($pag) && $pag==0){                                            
                      echo "<b>Id: </b>".$cliente1->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente1->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente1->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente1->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente1->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente1->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente1->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente1->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==1){                                            
                      echo "<b>Id: </b>".$cliente2->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente2->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente2->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente2->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente2->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente2->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente2->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente2->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==2){                                            
                      echo "<b>Id: </b>".$cliente3->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente3->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente3->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente3->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente3->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente3->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente3->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente3->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==3){                                            
                      echo "<b>Id: </b>".$cliente4->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente4->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente4->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente4->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente4->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente4->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente4->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente4->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  } else if(isset($pag) && $pag==4){                                            
                      echo "<b>Id: </b>".$cliente5->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente5->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente5->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente5->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente5->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente5->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente5->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente5->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==5){                                            
                      echo "<b>Id: </b>".$cliente6->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente6->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente6->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente6->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente6->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente6->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente6->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente6->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==6){                                            
                      echo "<b>Id: </b>".$cliente7->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente7->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente7->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente7->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente7->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente7->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente7->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente7->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }else if(isset($pag) && $pag==7){                                            
                      echo "<b>Id: </b>".$cliente8->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente8->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente8->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente8->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente8->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente8->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente8->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente8->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==8){                                            
                      echo "<b>Id: </b>".$cliente9->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente9->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente9->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente9->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente9->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente9->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente9->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente9->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==9){                                            
                      echo "<b>Id: </b>".$cliente10->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente10->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente10->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente10->getEndereco()."<br/><br/>";                      
                      echo "<b>Data de Nascimento: </b>".$cliente10->getData_de_nascimento()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente10->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente10->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente10->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==10){                                            
                      echo "<b>Id: </b>".$cliente11->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente11->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente11->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente11->getEndereco()."<br/><br/>";                      
                      echo "<b>CNPJ: </b>".$cliente11->getCnpj()."<br/><br/>";
                      echo "<b>Razao Social: </b>".$cliente11->getRazao_social()."<br/><br/>";
                      echo "<b>Nome Fantasia: </b>".$cliente11->getNome_fantasia()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente11->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente11->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente11->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==11){                                            
                      echo "<b>Id: </b>".$cliente12->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente12->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente12->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente12->getEndereco()."<br/><br/>";                      
                      echo "<b>CNPJ: </b>".$cliente12->getCnpj()."<br/><br/>";
                      echo "<b>Razao Social: </b>".$cliente12->getRazao_social()."<br/><br/>";
                      echo "<b>Nome Fantasia: </b>".$cliente12->getNome_fantasia()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente12->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente12->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente12->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==12){                                            
                      echo "<b>Id: </b>".$cliente13->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente13->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente13->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente13->getEndereco()."<br/><br/>";                      
                      echo "<b>CNPJ: </b>".$cliente13->getCnpj()."<br/><br/>";
                      echo "<b>Razao Social: </b>".$cliente13->getRazao_social()."<br/><br/>";
                      echo "<b>Nome Fantasia: </b>".$cliente13->getNome_fantasia()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente13->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente13->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente13->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==13){                                            
                      echo "<b>Id: </b>".$cliente14->getId()."<br/><br/>";                      
                      echo "<b>Nome: </b>".$cliente14->getNome()."<br/><br/>";                      
                      echo "<b>CPF: </b>".$cliente14->getCpf()."<br/><br/>";                      
                      echo "<b>Endereco: </b>".$cliente14->getEndereco()."<br/><br/>";                      
                      echo "<b>CNPJ: </b>".$cliente14->getCnpj()."<br/><br/>";
                      echo "<b>Razao Social: </b>".$cliente14->getRazao_social()."<br/><br/>";
                      echo "<b>Nome Fantasia: </b>".$cliente14->getNome_fantasia()."<br/><br/>";
                      echo "<b>Nivel: </b>".$cliente14->getNivel()."<br/><br/>";
                      echo "<b>Importancia: </b>".$cliente14->getImportancia()."<br/><br/>";
                      echo "<b>Endereço Específico: </b>".$cliente14->getEndereco_especifico()."<br/><br/>";
                      echo '<a href="index.php?pag=14"/>Voltar</a>';
                  }
                  
              ?>
      </div>
    </div>    

      <hr>

      <footer>
          <div class="container">
            <p>&copy; Company 2015</p>
          </div>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>   
  </body>
</html>

