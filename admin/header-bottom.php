  <link id="main-style" href="css/styles.css" rel="stylesheet" type="text/css">
  <link id="main-style" href="css/theme.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />


</head>

<body>

  <!--Smooth Scroll-->
  <div class="smooth-overflow">
    <!--Navigation-->
    <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="index.php">Accueil</a> 

      <!--Navigation Itself-->
      
      <div class="navbar-content"> 

        <!--Sidebar Toggler--> 
        <a href="#" class="btn btn-default tooltiped" data-toggle="tooltip" data-placement="bottom" title="Montant du compte">Compte : <?php echo info_active('compte'); ?> €</i></a> 
        <a href="#" class="btn btn-default tooltiped" data-toggle="tooltip" data-placement="bottom" title="Chiffre d'affaire du mois">CA : 1258,25 €</i></a> 
        <a href="#" class="btn btn-default tooltiped" data-toggle="tooltip" data-placement="bottom" title="Dépenses du mois">Dépenses: 708 €</i></a> 
        <a href="#" class="btn btn-default left-toggler"><i class="fa fa-bars"></i></a> 
        <!--Right Userbar Toggler--> 
        <a href="#" class="btn btn-user right-toggler pull-right"><i class="entypo-vcard"></i> <span class="logged-as hidden-xs">Logged as</span><span class="logged-as-name hidden-xs">Anton Durant</span></a> 
        <!--Fullscreen Trigger-->
        <button type="button" class="btn btn-default hidden-xs pull-right tooltiped" data-toggle="tooltip" data-placement="bottom" title="Plein écran" id="toggle-fullscreen"> <i class=" entypo-popup"></i> </button>
        
        <!--Settings Dropdown-->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default dropdown-toggle tooltiped" data-placement="bottom" title="Configurations" data-toggle="dropdown"> <i class="entypo-cog"></i></button>

          <?php if (isset($_POST['configuration'])) {
            #Code si formulaire fonctionne
          } ?>

          <div id="settings-dropdown" class="dropdown-menu keep_open orb-form">

            <div class="dropdown-header">Configurations </div>
            <form action="" method="post" class="orb-form">  
              <div class="dropdown-container">
                <div class="nano">
                  <div class="nano-content">
                    <ul class="settings-dropdown">
                      <li>
                        <label class="toggle">
                          <input type="checkbox" name="astuce" checked>
                          <i></i>Astuces</label>                          
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>               
                <input type="submit" name="configuration" class="btn btn-success pull-right" value="Envoyer">
              </form>
            </div>
          </div>

          <!--Lock Screen--> 
          <a href="../logout.php" class="btn btn-default hidden-xs pull-right tooltiped" data-toggle="tooltip" data-placement="bottom" title="Déconnexion"> <i class="entypo-lock"></i> </a> 

          <!--Notifications Dropdown-->

          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle tooltiped" data-toggle="dropdown" data-placement="bottom" title="Historiques"> <i class="entypo-archive"></i></button>
            <div id="notification-dropdown" class="dropdown-menu">
              <div class="dropdown-header">Historiques</div>
              <div class="dropdown-container">
                <div class="nano">
                  <div class="nano-content">
                    <ul class="notification-dropdown">
                      <?php 
                      $n_historique = $bdd->prepare('SELECT * FROM historiques WHERE h_id_membre = :id ORDER BY h_date DESC LIMIT 0, 10'); 
                      $n_historique->execute(array('id' => $_SESSION['id_membre']));
                      while ($donnees = $n_historique->fetch()){
                        if ($donnees['h_type'] == 1) {
                          echo '<li class="bg-danger"><a href="#"> <span class="notification-icon"><i class="fa fa-trash-o"></i></span>
                          <p>' . $donnees['h_description'] . '</p>
                          <span class="label label-default"><i class="entypo-clock"></i> ' . getRelativeTime($donnees['h_date']) . '</span> </a> </li>';
                        }elseif ($donnees['h_type'] == 2) {
                          echo '<li class="bg-info"><a href="#"> <span class="notification-icon"><i class="fa fa-check-circle"></i></span>
                          <p>' . $donnees['h_description'] . '</p>
                          <span class="label label-default"><i class="entypo-clock"></i> ' . getRelativeTime($donnees['h_date']) . '</span> </a> </li>';
                        }elseif ($donnees['h_type'] == 3) {
                          echo '<li class="bg-success"><a href="#"> <span class="notification-icon"><i class="fa fa-pencil"></i></span>
                          <p>' . $donnees['h_description'] . '</p>
                          <span class="label label-default"><i class="entypo-clock"></i> ' . getRelativeTime($donnees['h_date']) . '</span> </a> </li>';
                        }elseif ($donnees['h_type'] == 4) {
                          echo '<li class="bg-warning"><a href="#"> <span class="notification-icon"><i class="fa fa-pencil"></i></span>
                          <p>' . $donnees['h_description'] . '</p>
                          <span class="label label-default"><i class="entypo-clock"></i> ' . getRelativeTime($donnees['h_date']) . '</span> </a> </li>';
                        }
                      }
                      $n_historique->closeCursor();
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="dropdown-footer"><a class="btn btn-dark" href="#">See All</a></div>
            </div>
          </div>

          <!--Inbox Dropdown-->
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="entypo-mail"></i><span class="new"></span></button>
            <div id="inbox-dropdown" class="dropdown-menu inbox">
              <div class="dropdown-header">Inbox <span class="badge pull-right">32</span></div>
              <div class="dropdown-container">
                <div class="nano">
                  <div class="nano-content">
                    <ul class="inbox-dropdown">
                      <li><a href="#"> <span class="user-image"><img src="" alt="Gluck Dorris" /></span>
                        <h4>Why don't u answer calls?</h4>
                        <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                        <span class="label label-default"><i class="entypo-clock"></i> 59 mins ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                        <li><a href="#"> <span class="user-image"><img src="" alt="Gluck Dorris" /></span>
                          <h4>Rawrr, rawrrr...</h4>
                          <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                          <span class="label label-default"><i class="entypo-clock"></i> 2 hours ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                          <li><a href="#"> <span class="user-image"><img src="" alt="Gluck Dorris" /></span>
                            <h4>Why so serious?</h4>
                            <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                            <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown-footer"><a class="btn btn-dark" href="admin-inbox.html">Save All</a></div>
                  </div>
                </div>
              </div>
            </nav>

            <!--/Navigation--> 

            <!--MainWrapper-->
            <div class="main-wrap"> 

              <!-- /Offcanvas user menu-->
              <aside class="user-menu"> 

                <!-- Tabs -->
                <div class="tabs-offcanvas">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#userbar-one" data-toggle="tab">Main</a></li>
                    <li><a href="#userbar-two" data-toggle="tab">Users</a></li>
                    <li><a href="#userbar-three" data-toggle="tab">ToDo</a></li>
                  </ul>
                  <div class="tab-content"> 

                    <!--User Primary Panel-->
                    <div class="tab-pane active" id="userbar-one">
                      <div class="main-info">
                        <div class="user-img"><img src="images/avatar/Gollum.jpg" alt="User Picture" /></div>
                        <h1><?php echo info('c_nom_societe'); ?> <small>Administrator</small></h1>
                      </div>
                      <div class="list-group"> <a href="#" class="list-group-item"><i class="fa fa-user"></i>Profile</a> <a href="#" class="list-group-item"><i class="fa fa-cog"></i>Settings</a> <a href="#" class="list-group-item"><i class="fa fa-flask"></i>Projects<span class="badge">2</span></a>
                        <div class="empthy"></div>
                        <a href="#" class="list-group-item"><i class="fa fa-refresh"></i>Updates<span class="badge">5</span></a> <a href="#" class="list-group-item"><i class="fa fa-comment"></i>Messages<span class="badge">12</span></a> <a href="#" class="list-group-item"><i class="fa fa-comments"></i> Comments<span class="badge">45</span></a>
                        <div class="empthy"></div>
                        <a href="#" data-toggle="modal" class="list-group-item lockme"><i class="fa fa-lock"></i> Lock</a> <a data-toggle="modal" href="#" class="list-group-item goaway"><i class="fa fa-power-off"></i> Sign Out</a> </div>
                      </div>

                      <!--User Chat Panel-->
                      <div class="tab-pane" id="userbar-two">
                        <div class="chat-users-menu"> 
                          <!--Adding Some Scroll-->
                          <div class="nano">
                            <div class="nano-content">
                              <div class="buttons">
                                <div class="btn-group btn-group-xs">
                                  <button type="button" class="btn btn-default">Friends</button>
                                  <button type="button" class="btn btn-default">Work</button>
                                  <button type="button" class="btn btn-default">Girls</button>
                                </div>
                              </div>
                              <ul>
                                <li><a href="#"><span class="chat-name">Gluck Dorris</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span><span class="badge">5</span></a></li>
                                <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                                <li><a href="#"><span class="chat-name">Mr. Joker</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Chewbacca</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">The Piggy</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                                <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                                <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="" alt="User"/></span><span class="label label-success">Online</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--User Tasks Panel-->
                      <div class="tab-pane" id="userbar-three">
                        <div class="nano"> 
                          <!--Adding Some Scroll-->
                          <div class="nano-content">
                            <div class="small-todos">
                              <div class="input-group input-group-sm">
                                <input id="new-todo" placeholder="Add ToDo" type="text" class="form-control">
                                <span class="input-group-btn">
                                  <button id="add-todo" class="btn btn-default" type="button"><i class="fa fa-plus-circle"></i></button>
                                </span> </div>
                                <section id="task-list">
                                  <ul id="todo-list">
                                  </ul>
                                </section>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- /tabs --> 

                  </aside>
                  <!-- /Offcanvas user menu--> 

                  <!--Main Menu-->
                  <div class="responsive-admin-menu">
                    <div class="responsive-menu">ORB
                      <div class="menuicon"><i class="fa fa-angle-down"></i></div>
                    </div>
                    <ul id="menu">
                      <!--Search-->
                      <div class="site-search">
                        <form action="#" id="inline-search">
                          <i class="fa fa-search"></i>
                          <input type="search" placeholder="Rechercher">
                        </form>
                      </div>
                      <li><a  href="#" title="Dashboard" data-id="dash-sub"><i class="entypo-briefcase"></i><span> Panneaux de contrôle</span></a>  </li>

                      <li><a class="submenu" href="#" title="Fournisseurs" data-id="fournisseur-sub"><i class="entypo-briefcase"></i><span> Fournisseurs</span></a>
                        <ul id="fournisseur-sub">
                          <li><a href="ajout_fournisseur.php" ><i class="fa fa-cubes"></i><span> Ajouter un fournisseur </span></a></li>
                          <li><a href="liste_fournisseur.php"><i class="fa fa-cubes"></i><span> Voir les fournisseurs </span></a></li>
                        </ul>
                      </li>

                      <li><a class="submenu" href="#" title="Produits" data-id="produit-sub"><i class="entypo-briefcase"></i><span> Produits</span></a>
                        <ul id="produit-sub">
                          <li><a href="ajout_produit.php" ><i class="fa fa-cubes"></i><span> Ajouter produit </span></a></li>
                          <li><a href="#"><i class="fa fa-cubes"></i><span> Voir les produits </span></a></li>
                        </ul>
                      </li>


                      <li><a class="submenu" href="#" title="Produits" data-id="compo-sub"><i class="entypo-briefcase"></i><span> Compositions produits</span></a>
                        <ul id="compo-sub">
                         <li><a href="ajout_produit_c.php" ><i class="fa fa-cubes"></i><span> Ajouter un composant produit </span></a></li>
                         <li><a href="liste_produit_c.php"><i class="fa fa-cubes"></i><span> Voir les un composant produits </span></a></li>
                       </ul>
                     </li>



                     <li><a class="submenu" href="#" title="Produits" data-id="categorie-sub"><i class="entypo-briefcase"></i><span> Catégories</span></a>
                      <ul id="categorie-sub">
                        <li><a href="ajout_categorie.php"><i class="fa fa-cubes"></i><span> Ajouter une catégorie </span></a></li>
                        <li><a href="liste_categories.php"><i class="fa fa-cubes"></i><span> Voir les catégories </span></a></li>
                      </ul>
                    </li>

                  </ul>
                </div>
                <!--/MainMenu--> 

                <!--Content Wrapper-->
                <div class="content-wrapper"> 

                  <!--Horisontal Dropdown-->
                  <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
                    <div class="cbp-hsinner">
                      <ul class="cbp-hsmenu">
                        <li> <a href="#"><span class="icon-bar"></span></a>
                          <ul class="cbp-hssubmenu">
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="inlinebar">10,8,8,7,8,9,7,8,10,9,7,5</span>
                                <p class="sparkle-name">project income</p>
                                <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                              </div>
                            </a></li>
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="linechart">5,6,7,9,9,5,3,2,9,4,6,7</span>
                                <p class="sparkle-name">site traffic</p>
                                <p class="sparkle-amount">122541 <i class="fa fa-chevron-circle-down"></i></p>
                              </div>
                            </a></li>
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="simpleline">9,6,7,9,3,5,7,2,1,8,6,7</span>
                                <p class="sparkle-name">Processes</p>
                                <p class="sparkle-amount">890 <i class="fa fa-plus-circle"></i></p>
                              </div>
                            </a></li>
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="inlinebar">10,8,8,7,8,9,7,8,10,9,7,5</span>
                                <p class="sparkle-name">orders</p>
                                <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                              </div>
                            </a></li>
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="piechart">1,2,3</span>
                                <p class="sparkle-name">active/new</p>
                                <p class="sparkle-amount">500/200 <i class="fa fa-chevron-circle-up"></i></p>
                              </div>
                            </a></li>
                            <li><a href="#">
                              <div class="sparkle-dropdown"><span class="stackedbar">3:6,2:8,8:4,5:8,3:6,9:4,8:1,5:7,4:8,9:5,3:5</span>
                                <p class="sparkle-name">fault/success</p>
                                <p class="sparkle-amount">$23989 <i class="fa fa-chevron-circle-up"></i></p>
                              </div>
                            </a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </nav>