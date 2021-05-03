
<!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                

                
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                 
    
                    
                
                       <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li> 
                      <li><a href="http://localhost/projet php/controlleur/deconnexion.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  
                  <p>E -<strong>Shop</strong> <?php if (isset($_SESSION['client'])){ ?> <span> Salut <?php echo $_SESSION['client']; ?> ,Soyez a l'aise</span> <?php } ?></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <div class="search-container" style="margin-left: 300px;">
                  <form action="http://localhost/projet php/controlleur/search.php" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-cart" style="font-size:36px"></span>
                  <span class="aa-cart-title">PANIER</span>
                  <span class="aa-cart-notify"><?php $nb=0;if (isset($_SESSION['panier'])) {foreach ($_SESSION['panier'] as $josef) { 
                        $nb=$nb+1;}} echo $nb ; ?></span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                  <?php 

                    $nb=0;
                    $total=0;
                    $db =new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
                    $req=$db->prepare('SELECT * FROM produit WHERE reference=?');
                    if (isset($_SESSION['panier'])){
                  foreach ($_SESSION['panier'] as $josef) { 
                        $nb=$nb+1;
                    $req->execute(array($josef));
                    while ($tab=$req->fetch()) {
                      
                      $total=$total+$tab['prix']*(100-$tab['promotion'])/100;

                    ?>
                    
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src=<?php echo $tab['photo'] ?> alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#"><?php  echo $tab['désignation'];  ?></a></h4>
                        <p><?php echo $tab['prix']*(100-$tab['promotion'])/100 ?></p>
                      </div>
                      <a class="aa-remove-product" href="http://localhost/projet php/controlleur/ajouterArticle.php?supprimer=<?php echo $josef ?>"><span class="fa fa-times"></span></a>
                    </li>
                  <?php }}} ?>
                   
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        <?php echo $total; ?>
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.php">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
                         
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->