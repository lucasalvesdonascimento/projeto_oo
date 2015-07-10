<?php error_reporting(E_ALL); ?>
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
        <a class="btn btn-primary" href="index.php?pag=11">Ordena Crescente</a>
        <a class="btn btn-primary" href="index.php?pag=12">Ordena Decrescente</a><br />
        <?php       
                  include_once './Objetos.php';
                  include_once './Cliente.class.php';
                  include_once './Ordenacao.class.php';
                  $pag = htmlspecialchars($_GET["pag"]);
                  
                  $ordenacao = new Ordenacao();
                  
                  if(isset($pag)&& $pag==11){
                      $ordenacao->OrdenaCrescente();                    
                  }elseif(isset($pag)&&$pag==12){
                      $ordenacao->OrdenaDecrescente();                                          
                  }else if(isset($pag) && $pag==0){                                            
                      echo $cliente1->getId()."<br/><br/>";                      
                      echo $cliente1->getNome()."<br/><br/>";                      
                      echo $cliente1->getCpf()."<br/><br/>";                      
                      echo $cliente1->getEndereco()."<br/><br/>";                      
                      echo $cliente1->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==1){                                            
                      echo $cliente2->getId()."<br/><br/>";                      
                      echo $cliente2->getNome()."<br/><br/>";                      
                      echo $cliente2->getCpf()."<br/><br/>";                      
                      echo $cliente2->getEndereco()."<br/><br/>";                      
                      echo $cliente2->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==2){                                            
                      echo $cliente3->getId()."<br/><br/>";                      
                      echo $cliente3->getNome()."<br/><br/>";                      
                      echo $cliente3->getCpf()."<br/><br/>";                      
                      echo $cliente3->getEndereco()."<br/><br/>";                      
                      echo $cliente3->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==3){                                            
                      echo $cliente4->getId()."<br/><br/>";                      
                      echo $cliente4->getNome()."<br/><br/>";                      
                      echo $cliente4->getCpf()."<br/><br/>";                      
                      echo $cliente4->getEndereco()."<br/><br/>";                      
                      echo $cliente4->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  } else if(isset($pag) && $pag==4){                                            
                      echo $cliente5->getId()."<br/><br/>";                      
                      echo $cliente5->getNome()."<br/><br/>";                      
                      echo $cliente5->getCpf()."<br/><br/>";                      
                      echo $cliente5->getEndereco()."<br/><br/>";                      
                      echo $cliente5->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==5){                                            
                      echo $cliente6->getId()."<br/><br/>";                      
                      echo $cliente6->getNome()."<br/><br/>";                      
                      echo $cliente6->getCpf()."<br/><br/>";                      
                      echo $cliente6->getEndereco()."<br/><br/>";                      
                      echo $cliente6->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==6){                                            
                      echo $cliente7->getId()."<br/><br/>";                      
                      echo $cliente7->getNome()."<br/><br/>";                      
                      echo $cliente7->getCpf()."<br/><br/>";                      
                      echo $cliente7->getEndereco()."<br/><br/>";                      
                      echo $cliente7->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }else if(isset($pag) && $pag==7){                                            
                      echo $cliente8->getId()."<br/><br/>";                      
                      echo $cliente8->getNome()."<br/><br/>";                      
                      echo $cliente8->getCpf()."<br/><br/>";                      
                      echo $cliente8->getEndereco()."<br/><br/>";                      
                      echo $cliente8->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==8){                                            
                      echo $cliente9->getId()."<br/><br/>";                      
                      echo $cliente9->getNome()."<br/><br/>";                      
                      echo $cliente9->getCpf()."<br/><br/>";                      
                      echo $cliente9->getEndereco()."<br/><br/>";                      
                      echo $cliente9->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }elseif(isset($pag) && $pag==9){                                            
                      echo $cliente10->getId()."<br/><br/>";                      
                      echo $cliente10->getNome()."<br/><br/>";                      
                      echo $cliente10->getCpf()."<br/><br/>";                      
                      echo $cliente10->getEndereco()."<br/><br/>";                      
                      echo $cliente10->getData_de_nascimento()."<br/>";
                      echo '<a href="index.php"/>Voltar</a>';
                  }                  
                  
              ?>
      </div>
    </div>    

      <hr>

      <footer>
          <div class="container">
            <p>&copy; Company 2014</p>
          </div>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>   
  </body>
</html>

