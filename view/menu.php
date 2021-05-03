<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=php_project;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM categorie');
?>
<!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Accueil</a></li>
              <li><a href="#">Categorie <span class="caret"></span></a>
                <ul class="dropdown-menu">  
                <?php while ($donnees=$reponse->fetch()) { ?>              
                  <li><a href="index.php?categorie=<?php echo $donnees['nom'] ;?>"><?php echo $donnees['nom']  ?></a></li>
                 <?php } ?> 
                </ul>
              </li>
              <li><a href="contact.php">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->