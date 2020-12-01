<!DOCTYPE html>
<html>
    <head>
        <title>Projet PHP - Estiam</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=PATH_CSS?>/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    </head>
    <body>
    <header id="header" >
            <!-- Static navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-block">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12  ">
                            <div class="navbar ">
                                <a href="index.html" class="navbar-brand"><img class="m-md-n3"  src="<?= REP_IMAGES ?>/la bare/about-icon-2.png" alt=""  /> </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-sm-12 ">
                            <div class="navbar-right float-md-right">
                                <div class="login-sr">
                                    <div class="login-signup">
                                        <ul>
                                            <li> <div class="badge" id="Loging">
                                                    <a href="#" id="myModal" data-toggle="modal" data-target="#loginModal" data-backdrop="static">
                                                    Se connecter    
                                                    </a>
                                                    <form id="contactForm" action="user" method="POST"  >
                                                        <div class="modal fade" id="loginModal" tabindex="-1"  role="dialog" aria-hidden="false">
                                                            <div class="modal-dialog modal-register">
                                                                <div class="modal-content">
                                                                    <div class="modal-header no-border-header text-center">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>

                                                                        <h5 class="text-center text-muted col-12" id="WEl">Bienvenue</h5>
                                                                          <br/>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="text" value="" placeholder="Email" class="form-control" id="_email" name="User" required/>
                                                                            <div id="_ExcepUser">
                                                                                <div id=Exception_User style="display: none"> Incorecte : user vide </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Password</label>
                                                                            <input type="password" value="" placeholder="Password" class="form-control" id="_password" name="password" required />
                                                                            <div id="_ExcepPwrd">
                                                                                <div id=Exception_password style="display: none"> Incorecte : PASS est vide </div>
                                                                            </div>

                                                                        </div>
                                                                        <button class="btn btn-block btn-round btn btn-outline-success" id="SUB"  type="button" name="submit" value="Loging"> Log in</button>

                                                                    </div>
                                                                    <div class="modal-footer no-border-footer">
                                                                        <span class="text-muted  text-center">Looking <a href="inscription">create an account</a> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div></li>
                                            <li><a class="custom-b" href="inscription">S'inscrire</a></li>
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