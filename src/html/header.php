<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
    integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
    crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/style.css">
    <title>JibColis</title>
  </head>
  <body>
  <div id="menu">
  <nav class="navbar navbar-default hid">
    <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <img height="100%" src="../logo.png" alt="Logo_JIBCOLIS">
          </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-right collapse navbar-collapse" id="myNavbar">
          <button class="btn btnjcm menubtn" href="#" id="how">Comment ça marche</button>
          <button class="btn navbar-btn f"><i class="fa fa-facebook" aria-hidden="true"></i></button>
          <button class="btn navbar-btn g"><i class="fa fa-google" aria-hidden="true"></i></button>
          <button class="btn btnjcv menubtn" data-toggle="modal" data-target="#cnx_modal">Se conecter</button>
          <button class="btn btnjcm menubtn" data-toggle="modal" data-target="#insc_modal">S'incrire</button>

          <!-- Modal INSCRIPTION -->
          <div id="insc_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- Modal CONNEXION -->
          <div id="cnx_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <div class="jumbotron jumjc">
                    <h3><i class="fa fa-sign-in" aria-hidden="true"></i> Se connecter</h3>
                    <p>
                      <a href="#">Créer un compte</a> - <a href="#">Mot de passe oublié ?</a>
                    </p>
                  </div>
                  <div class="container">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <form class="form-horizontal">

                        <div class="form-group">
                          <div class="col-sm-12">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input id="email" type="mail" class="form-control" name="email" placeholder="Email">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <button type="button" class="btn btnjcv menubtn" style="width:100%;margin-top:5px;">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center;">
                      <h6>S'identifier avec</h6>
                      <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <div style="color:white;padding-top:20px;">
                    notext
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
<!--JUSQUE LA-->
