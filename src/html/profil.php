<?php

// if (!isset($_SESSION['token']) && !isset($_SESSION['fb_access_token'])) {
//    header("location:index.php");
//    exit;

session_start();

?>
<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
<head>
    <?php include ("head.php"); ?>
    <!--couleur du tableau de bord-->
    <link rel="stylesheet" href="../css/style_profil.css">
    <style>
               
        #t_bord{
             text-align:center;
             margin-bottom: 10%;
        }
        
        .t_bord_txt{
            color:white;
            text-align:left;
        }
        
        #t_bord a:hover{
             text-decoration: none;
            
        }
        
        .h_left{
            float:left;
        }
        
        .h_right{
            float:right;
            margin-top:14px;
            text-align:right;
            padding-right:20px;
        }
        
        
    </style>
</head>
<body>
<!--Menu-->
<?php include "menu2.php";?>
<!--menu du bas-->
    <div class="container body">
        <div class="row">
                <div class="col-md-6 h_left">
                    <h3 class="t_bord_txt">Tableau de bord</h3>
                </div>                
        </div>
        <!--menu du bas-->
        <div id="t_bord">
            
            
            <br />
            <!--ligne 1-->
            <div class="row">
                
                <!--ligne 1 col 1-->
                <!--messagerie-->
                <a href="reception.php" alt="messagerie" >
                <div class="a ab col-md-6 col-sm-12 x3">
                    <h4>Messagerie</h4>
                    <span class="badge"></span> <br><br>
                    <img id="msg_ic" class="ab" width="100px" height="100px" src="../images/msg.png" alt="">
                </div>
               </a>
                <!--/ligne 1 col 1-->
                
                <div class="col-md-6 col-sm-12">
                <!--ligne 1 col 2-->
                <div class="row x2">
                    
                <!--mes colis-->
                <a href="my_colis.php" class="b">
                    <div class="col-md-6 col-sm-6 col-xs-6 b x2">
                            <!--<div class="b row x1">-->
                                <h4>Mes colis</h4>
                                <img id="col_ic" width="80px" height="80px" src="../images/colis.png" alt="">
                            <!--</div>-->
                            
                    </div>
                 </a>
                 
                
                            <!--mes trajet-->
                  <a href="my_trajet.php" class="c">
                            <div class="col-md-6 col-sm-6 col-xs-6 c x2">
                            <!--<div class="c row x1">-->
                                <h4>Mes trajets</h4>
                                <img id="trajet_ic" width="80px" height="80px" src="../images/trajet.png" alt="">
                           <!-- </div>-->
                            </div>
                   </a>
                   </div>
                   <!--/ligne 1 col 2-->
                   
                    <!--2eme ligne dans la partie de gauche-->
                    <div class="row x1">
                    <!--mon profil-->
                        <a href="edit_profil.php">
                            <div class="d col-md-6 col-sm-6 col-xs-6 x1">
                                <h4 class="edit">Editer mon profile</h4><br/>
                                <img id="edit_ic" width="70px" height="70px" src="../images/edit.png" alt="">
                            </div>
                        </a>
                    <!--deconnexion-->
                    <a href="fonction/logout.php">
                            <div class="col-md-6 col-sm-6 col-xs-6 e x1">
                                <h4 class="dec">Déconnexion</h4>
                                <img id="dec_ic" style="position:middle;" width="80px" height="80px" src="../images/dec.png" alt="">
                            </div>
                    </a>
                   
                </div>
                <!--ligne 1 col 1-->
            </div>
            <!--/ligne 1-->
        </div>
        <!--/ tableau de bord-->
        
    </div>
    
    </div>
    
    <!--footer-->
        <?php
            include "footer.php";
        ?>
    <!--/footer-->

   
</body>
<script type="text/javascript">
    $(function () {
        $(".ab").mouseover(function () {
            $("#msg_ic").show();
        });

        $(".ab").mouseout(function () {
            $("#msg_ic").hide();
        });

        $(".b").mouseover(function () {
            $("#col_ic").show();
        });

        $(".b").mouseout(function () {
            $("#col_ic").hide();
        });

        $(".c").mouseover(function () {
            $("#trajet_ic").show();
        });

        $(".c").mouseout(function () {
            $("#trajet_ic").hide();
        });

        $(".d").mouseover(function () {
            $(".edit").hide();
            $("#edit_ic").show();
        });

        $(".d").mouseout(function () {
            $(".edit").show();
            $("#edit_ic").hide();
        });

        $(".e").mouseover(function () {
            $(".dec").hide();
            $("#dec_ic").show();
        });

        $(".e").mouseout(function () {
            $(".dec").show();
            $("#dec_ic").hide();
        });

    });
</script>

</html>