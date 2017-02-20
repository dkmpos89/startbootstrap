<?
    require 'steamauth/steamauth.php';
    require 'steamauth/userInfo.php';
    if (isset($_SESSION['steamid'])){
        $id = $_SESSION['steamid'];
    }
    else{
        # Not logged in
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap_2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            
            <? if (isset($_SESSION['steamid'])){ ?>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-rounded" src="<?=$steamprofile['avatar'];?>"> <b><?=$steamprofile['personaname'];?></b><b class="caret"></b></a>
                       <span class="dropdown-arrow"></span>
                       <ul class="dropdown-menu" role="menu" aria-labelledby="user_options_dropdown_toggle" id="user_options_dropdown_content">
                          <li role="presentation" class="dropdown-header welcome-li">
                            <div class="avatar-wrapper"><img alt="Photo" class="img-circle user-placeholder" src="<?=$steamprofile['avatar'];?>" width="24"></div>
                            <div class="welcome-wrapper">
                              <p class="welcome-msg">
                                ¡Bienvenido!
                              </p>
                            </div>
                            <div class="clearfix"></div>
                          </li>
                          <li role="presentation" class="divider"></li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-desktop"></i>
                              <span>Dashboard</span>
                            </a>
                          </li>
                          <li role="presentation" class="divider"></li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-shopping-cart"></i>
                              <span>Mis compras</span>
                            </a>
                          </li>
                          <li role="presentation">
                              <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-money"></i>
                              <span>Mis puntos</span>
                            </a>
                          </li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-car"></i>
                              <span>Rutas favoritas</span>
                            </a>
                          </li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-users"></i>
                              <span>Pasajeros frecuentes</span>
                            </a>  
                          </li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-envelope"></i>
                              <span>Mensajes</span>
                            </a>  
                          </li>
                          <li role="presentation">
                            <a href="#" role="menuitem" tabindex="-1">
                              <i class="fa fa-cogs"></i>
                              <span>Ajustes</span>
                            </a>    
                          </li>
                          <li role="presentation" class="divider"></li>
                          <li role="presentation" class="text-center">
                            <a data-method="delete" href="steamauth/logout.php" rel="nofollow">Salir</a>
                          </li>
                        </ul>
                   </li>﻿
                </ul>   
            <? } else { ?>
                <p><? echo loginbutton(); ?></a>
            <? } ?>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Dota 2 Inventory</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center" style="padding : 4px;width : 50%; height : 500px; overflow : auto; ">
            <? if (isset($_SESSION['steamid'])){ ?>
                <p>Info desde Json:</p><? echo loadbackpack(); ?>
            <? } else {?>
                <!-- Aqui va el codigo cuando no esta logeado -->
            <? }?> 
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
