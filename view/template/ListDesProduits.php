
<?php
      session_start(); 
      include ("../../models/Client.php");
      include ("../../models/Commande.php"); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>E-Shop</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
   
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
<?php 
  include ("../headerAdmin.php");
  include("../menuAdmin.php");
?>

  
    <a href="#" data-toggle2="tooltip" data-placement="top" title="ajouter Article" data-toggle="modal" data-target="#login-modal" style="left: 1200px;position: relative;"><button class="aa-browse-btn"  >add a new product</button></span></a>

  <!-- Products section -->
  <section id="aa-product" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
                        
            <div class="aa-product-area">
   
              <div class="aa-product-inner">
                <!-- start prduct navigation -->

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                 
                    <div class="tab-pane fade in active" id="men">

                      <ul class="aa-product-catg">

                        <!-- start single product item -->
                               <?php $db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
                                    if (!isset($_GET['categorie'])){
                                      $req='SELECT * FROM produit ';
                                    }
                                    else {
                                      $req="SELECT * FROM produit WHERE categorie = '{$_GET['categorie']}' ";
                                    }

                                    $reponse=$db->query($req);
                                    while ($donnees=$reponse->fetch()) {
                                    ?>                         
                        <li>
                         
                          <figure>
                            <a class="aa-product-img" href="product-detail.php?id=<?php echo $donnees['reference'] ?>"><img src=<?php echo $donnees['photo'] ;?> ></a>
                            
                              <figcaption >
                              <h4 class="aa-product-title"><a href="product-detail.php?id=<?php echo $donnees['reference'] ?>"><?php echo $donnees['désignation'] ?></a></h4>
                             <?php if (!$donnees['promotion']==0){ ?>
                              <span class="aa-product-price"><?php echo ($donnees['prix']*(100-$donnees['promotion'])/100); ?> DT</span>
                              <span class="aa-product-price"><del><?php echo $donnees['prix'] ?></del> DT</span> <?php }else{ ?>
                                <span class="aa-product-price"><?php echo ($donnees['prix']); ?> DT</span> <?php } ?>
                            </figcaption>
                          </figure>                        
                          	<div class="aa-product-hvr-content">
                            <a href="http://localhost/projet%20php/view/template/product-update.php?id=<?php echo $donnees['reference']; ?>" data-toggle="tooltip" data-placement="top" title="Update" style="background-color: green ;"><span class="fa fa-refresh" ></span></a>
                            <a href="http://localhost/projet%20php/controlleur/DeleteProduct.php?id=<?php echo $donnees['reference']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"  style="background-color: red ;"><span class="fa fa-trash"></span></a>
                          </div>
                          <!-- product badge -->
                        </li> 
                          <?php } ?>   
                      </ul> 
                        
                 
              </div>
                
            </div>
          </div>

        </div>
      
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- footer -->  
  <footer id="aa-footer" >
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>

    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>add new product</h4>
          <form class="aa-login-form" action="http://localhost/projet php/controlleur/AjouterProduit.php" method="POST">
            <label for="">reference<span>*</span></label><br>
            <input type="text" name="reference" placeholder="reference"><br>
            <label for="">désignation<span>*</span></label><br>
            <input type="text" name="désignation" placeholder="désignation"><br>
            <label for="">quantite<span>*</span></label>
            <input type="text" name="qte" placeholder="quantite">
            <label for="">prix<span>*</span></label>
            <input type="text" name="prix" placeholder="prix">
            <label for="">Promotion<span>*</span></label>
            <input type="text" name="promotion" placeholder="promotion">
            <label for="">photo<span>*</span></label>
            <input type="text" name="photo" placeholder="photo">
            <label for="">Categorie<span>*</span></label>

            <select name="categorie">
            <?php 
            	$requete=$db->query('SELECT * FROM categorie') ;
            	while ($hos=$requete->fetch()) {
            ?>

            	<option value="<?php echo $hos['nom']; ?>"><?php echo $hos['nom']; ?></option>

        <?php } ?>
        	</select ><br>
           	<label for="">description<span>*</span></label>
            <textarea name="description" rows="5" cols="30"></textarea>
            <button class="aa-browse-btn" type="submit">add</button>
            
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>