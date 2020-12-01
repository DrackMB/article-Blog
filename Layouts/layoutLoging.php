<!DOCTYPE html>
<html>
    <head>
        <title>Projet PHP - Estiam</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=PATH_CSS?>/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--enable mobile device-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--fontawesome css-->
        <link rel="stylesheet" href="<?= PATH_CSS ?>/font-awesome.min.css">
        <!--bootstrap css-->
        <link href="<?= PATH_CSS ?>/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--animate css-->
        <link rel="stylesheet" href="<?= PATH_CSS ?>/animate-wow.css">
        <!--main css-->
        <link rel="stylesheet" href="<?= PATH_CSS ?>/style.css">
        <link rel="stylesheet" href="<?= PATH_CSS ?>/bootstrap-select.min.css">
        <link rel="stylesheet" href="<?= PATH_CSS ?>/slick.min.css">
        <link rel="stylesheet" href="<?= PATH_CSS ?>/pricing.css">
        <!--responsive css-->
        <link rel="stylesheet" href="<?= PATH_CSS ?>/css/responsive.css">
        <link rel="stylesheet" href="<?= PATH_CSS ?>/css/Stylehead.css">
    </head>
    <body>
    <header id="header" >
            <!-- Static navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-block">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12  ">
                            <div class="navbar ">
                                <a href="index.html" class="navbar-brand"><img class="m-md-n3"  src="<?= REP_IMAGES ?>/about-icon-2.png" alt=""  /> </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-sm-12 ">
                            <div class="navbar-right float-md-right">
                                <div class="login-sr">
                                    <div class="login-signup">
                                        <ul>
                                            <li>
                                            <div class="" id="LogOut">
                                                    <li class="nav-item dropdown badge ">
                                                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                        <img src="<?= REP_IMAGES ?>/la bare/ic_person_outline_48px.svg" width="25px" height="25px" alt="compte"/> 
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                        <a class="dropdown-item" href="#">parametre</a>
                                                        <a class="dropdown-item" href= "Logout">Déconnexion</a>
                                                    </div>
                                                    </li>
                                                </div> 
                                                    </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="help-r hidden-xs">
                                    <div class="help-box">
                                        <ul>
                                            <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="images/flag.png" alt="" /> </a> </li>
                                            <li> <a href="#"><img class="h-i" src="images/help-icon.png" alt="" /> Help </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nav-b hidden-xs">
                                    <div class="navbar-brand p-1">
                                        <ul><li>
                                                <form class="navbar-form">
                                                    <div class="navbar">
                                                        <input type="text" class="form-control" placeholder="Search for products or companies">
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.container-fluid --> 
            </nav>
        </header>
       
      
        <section>     
         <?php 
         //On appelle la vue
         include_once 'Views/'.$pageName;
         ?>  
        </section>
   
        <footer></footer>
    </body>
    <script src="<?= PATH_JS ?>/jquery-1.12.4.min.js"></script>
    <!--bootstrap js--> 
    <script src="<?= PATH_JS ?>/bootstrap-select.min.js"></script>
    <script src="<?= PATH_JS ?>/slick.min.js"></script>
    <script src="<?= PATH_JS ?>/index.js"></script>
    <script src="<?= PATH_JS ?>/wow.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= PATH_JS ?>/Jshead.js"></script>
</html>   
