<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<title>test</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow"> 
  <!--Navigation-->
  <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="index.html"><span class="text-blue">Test</span></a> 
    
    <!--Search-->
    <div class="site-search">
      <form action="#" id="inline-search">
        <i class="fa fa-search"></i>
        <input type="search" placeholder="Search">
      </form>
    </div>
    
    <!--Navigation Itself-->
    
    <div class="navbar-content"> 
      
      <!--Sidebar Toggler--> 
      <a href="#" class="btn btn-default left-toggler"><i class="fa fa-bars"></i></a> 
      <!--Right Userbar Toggler--> 
      <a href="#" class="btn btn-user right-toggler pull-right"><i class="entypo-vcard"></i> <span class="logged-as hidden-xs">Logged as</span><span class="logged-as-name hidden-xs">Anton Durant</span></a> 
      <!--Fullscreen Trigger-->
      <button type="button" class="btn btn-default hidden-xs pull-right" id="toggle-fullscreen"> <i class=" entypo-popup"></i> </button>
      
      <!--Settings Dropdown-->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default dropdown-toggle tooltiped" data-placement="bottom" title="Configurations" data-toggle="dropdown"> <i class="entypo-cog"></i></button>

          <?php if (isset($_POST["configuration"])) {
            echo "Formulaire Check";
          }else{
            echo "Formulaire Error";
          } ?>

          <div id="settings-dropdown" class="dropdown-menu keep_open orb-form">
            <form action="" method="post" class="orb-form">  
              <div class="dropdown-header">Configurations </div>
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
                  <button type="submit" name="configuration" class="btn t-btn-green">Envoyer</button>
              </form>
            </div>
          </div>
          <?php var_dump($_POST); ?>
      
      <!--Lock Screen--> 
      <a href="#" data-toggle="modal" class="btn btn-default hidden-xs pull-right lockme"> <i class="entypo-lock"></i> </a> 
      
      <!--Notifications Dropdown-->
      
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <i class="entypo-megaphone"></i><span class="new"></span></button>
        <div id="notification-dropdown" class="dropdown-menu">
          <div class="dropdown-header">Notifications <span class="badge pull-right">8</span></div>
          <div class="dropdown-container">
            <div class="nano">
              <div class="nano-content">
                <ul class="notification-dropdown">
                  <li class="bg-warning"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Server Down</h4>
                    <p>Server #435 was shut down (Power loss)</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 59 mins ago</span> </a> </li>
                  <li class="bg-info"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Too Many Connections</h4>
                    <p>Too many connections to Database Server</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 2 hours ago</span> </a> </li>
                  <li class="bg-danger"><a href="#"> <span class="notification-icon"><i class="fa fa-android"></i></span>
                    <h4>Sausage Stolen</h4>
                    <p>Someone stole your hot sausage</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> </a> </li>
                  <li class="bg-success"><a href="#"> <span class="notification-icon"><i class="fa fa-bolt"></i></span>
                    <h4>Defragmentation Completed</h4>
                    <p>Disc Defragmentation Completed on Server</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 3 hours ago</span> </a> </li>
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
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
                    <h4>Why don't u answer calls?</h4>
                    <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 59 mins ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
                    <h4>Rawrr, rawrrr...</h4>
                    <p>Listen, dude, time is off. I'll find you soon! Sounds good?...</p>
                    <span class="label label-default"><i class="entypo-clock"></i> 2 hours ago</span> <span class="delete"><i class="entypo-back"></i></span> </a> </li>
                  <li><a href="#"> <span class="user-image"><img src="http://placehold.it/150x150" alt="Gluck Dorris" /></span>
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
    
    <!--OffCanvas Menu -->
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
              <div class="user-img"><img src="http://placehold.it/150x150" alt="User Picture" /></div>
              <h1>Anton Durant <small>Administrator</small></h1>
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
                    <li><a href="#"><span class="chat-name">Gluck Dorris</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span><span class="badge">5</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                    <li><a href="#"><span class="chat-name">Mr. Joker</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Chewbacca</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">The Piggy</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                    <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                    <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
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
      <div class="responsive-menu">Test
        <div class="menuicon"><i class="fa fa-angle-down"></i></div>
      </div>
      <ul id="menu">
        <li><a class="active submenu" href="#" title="Dashboard" data-id="dash-sub"><i class="entypo-briefcase"></i><span> Dashboard</span></a>
          <ul id="dash-sub">
            <li><a href="index.html" title="Dashboard Variant One"><i class="fa fa-cubes"></i><span> Layout I </span></a></li>
            <li><a href="index-2.html" title="Dashboard Variant Two"><i class="fa fa-cubes"></i><span> Layout II <span class="badge">New!</span></span></a></li>
          </ul>
        </li>
        <li><a href="admin-inbox.html" title="Inbox"><i class="entypo-inbox"></i><span> Inbox <span class="badge">32</span></span></a></li>
        <li><a class="submenu" href="#" title="Widgets" data-id="widgets-sub"><i class="entypo-rocket"></i><span> Widgets</span></a>
          <ul id="widgets-sub">
            <li><a href="admin-widgets.html" title="Power Widgets"><i class="entypo-rocket"></i><span> Power Widgets</span></a></li>
            <li><a href="admin-portlets.html" title="Portlets"><i class="fa fa-square"></i><span> Portlets</span></a></li>
          </ul>
        </li>
        <li><a href="#" class="submenu" data-id="tables-sub" title="Tables"><i class="fa fa-table"></i><span> Tables</span></a> 
          <!-- Tables Sub-Menu -->
          <ul id="tables-sub" class="accordion">
            <li><a href="admin-tables.html" title="Timeline"><i class="fa fa-table"></i><span> Tables</span></a></li>
            <li><a href="admin-datatables.html" title="Profile"><i class="entypo-database"></i><span> Datatables</span></a></li>
          </ul>
        </li>
        <li><a class="submenu" href="#" data-id="other-sub" title="Other Contents"><i class="fa fa-th"></i><span> Forms</span></a> 
          <!-- Forms Sub-Menu -->
          <ul id="other-sub" class="accordion">
            <li><a href="admin-forms.html" title="Forms"><i class="fa fa-th"></i><span> Forms</span></a></li>
            <li><a href="admin-forms-bootstrap.html" title="Bootstrap Forms"><i class="fa fa-table"></i><span> Bootstrap Forms</span></a></li>
            <li><a href="admin-forms-plugins.html" title="Forms Plugins"><i class="fa fa-puzzle-piece"></i><span> Form Plugins</span></a></li>
            <li><a href="admin-forms-validation.html" title="Forms Validation"><i class="fa fa-check-circle"></i><span> Form Validation</span></a></li>
            <li><a href="admin-forms-wizard.html" title="Forms Wizard"><i class="fa fa-magic"></i><span> Form Wizard</span></a></li>
          </ul>
        <li> <a class="submenu" href="#" title="Graph &amp; Charts" data-id="graph-sub"><i class="entypo-chart-area"></i><span> Graph &amp; Charts</span></a> 
          <!-- Graph and Charts Menu -->
          <ul id="graph-sub" class="accordion">
            <li><a href="admin-chart-morris.html" title="Video Gallery"><i class="entypo-chart-bar"></i><span> Morris Charts</span></a></li>
            <li><a href="admin-chart-flot.html" title="Photo Gallery"><i class="entypo-chart-line"></i><span> Flot Charts</span></a></li>
            <li><a href="admin-chart-others.html" title="Photo Gallery"><i class="entypo-chart-pie"></i><span> Others Charts</span></a></li>
          </ul>
        <li> <a class="submenu" href="#" data-id="interface-sub" title="Interface"><i class="entypo-palette"></i><span> Interface</span></a> 
          <!-- Interface Sub-Menu -->
          <ul id="interface-sub" class="accordion">
            <li><a href="admin-typography.html" title="Typography"><i class="entypo-language"></i><span> Typography</span></a></li>
            <li><a href="admin-nestable.html" title="Nestable"><i class="entypo-list-add"></i><span> Nestable</span></a></li>
            <li><a href="admin-tree-view.html" title="Tree View"><i class="entypo-flow-tree"></i><span> Tree View</span></a></li>
            <li><a href="admin-animation.html" title="Animation"><i class="entypo-cd"></i><span> Animation</span></a></li>
            <li><a href="admin-components.html" title="Components"><i class="entypo-traffic-cone"></i><span> Components</span></a></li>
            <li><a href="admin-elements.html" title="Elements"><i class="entypo-archive"></i><span> Elements</span></a></li>
            <li><a href="admin-buttons.html" title="Items List"><i class="entypo-list"></i><span> Buttons</span></a></li>
            <li><a href="#" data-id="fonts-sub" title="Icon Fonts" class="submenu"><i class="fa fa-heart"></i><span> Icons</span></a>
              <ul id="fonts-sub">
                <li><a href="admin-font-awesome.html" title="Awesome Font"><i class="fa fa-flag"></i><span> Awesome</span></a></li>
                <li><a href="admin-font-glyphicons.html" title="Glyphicons"><i class="entypo-cancel-circled"></i><span> Glyphicons</span></a></li>
                <li><a href="admin-font-entypo.html" title="Entypo"><i class="entypo-flag"></i><span> Entypo</span></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li> <a class="submenu" href="#" data-id="pages-sub" title="Pages"><i class="entypo-book"></i><span> Pages</span></a> 
          <!-- Pages Sub-Menu -->
          <ul id="pages-sub">
            <li><a href="admin-megamenu.html" title="MegaMenu"><i class="entypo-menu"></i><span> MegaMenu <span class="badge">New!</span></span></a></li>
            <li><a href="admin-timeline.html" title="Timeline"><i class="entypo-chart-bar"></i><span> Timeline</span></a></li>
            <li><a href="admin-profile.html" title="Profile"><i class="entypo-user"></i><span> Profile</span></a></li>
            <li><a href="admin-gallery.html" title="Gallery"><i class="entypo-picture"></i><span> Gallery</span></a></li>
            <li><a href="admin-user-list.html" title="Items List"><i class="entypo-list"></i><span> Items List</span></a></li>
            <li><a href="admin-pricelists.html" title="Pricelists"><i class="entypo-tag"></i><span> Pricelists</span></a></li>
            <li><a href="admin-forum.html" title="Forum"><i class="entypo-comment"></i><span> Forum</span></a></li>
            <li><a href="admin-chat.html" title="Chat"><i class="entypo-chat"></i><span> Chat</span></a></li>
            <li><a href="admin-404.html" title="404"><i class="entypo-window"></i><span> 404 Error</span></a></li>
            <li><a href="admin-404.html" title="500"><i class="entypo-window"></i><span> 500 Error</span></a></li>
            <li><a href="admin-login.html" title="Login"><i class="entypo-vcard"></i><span> Login Page</span></a></li>
            <li><a href="admin-clear.html" title="Clear Page"><i class="entypo-monitor"></i><span> Carte blanche</span></a></li>
            <li><a href="admin-events.html" title="Events Calendar"><i class="entypo-calendar"></i><span> Calendar</span></a></li>
            <li><a href="admin-search.html" title="Search Results"><i class="entypo-search"></i><span> Search Results</span></a></li>
            <li><a href="admin-invoice.html" title="Invoice"><i class="entypo-box"></i><span> Invoice</span></a></li>
          </ul>
        </li>
        <li> <a class="submenu" href="#" data-id="maps-sub" title="Maps"><i class="entypo-map"></i><span> Maps</span></a> 
          <!-- Maps Sub-Menu -->
          <ul id="maps-sub">
            <li><a href="admin-maps-google.html" title="Google Maps"><i class="entypo-location"></i><span> Google Maps</span></a></li>
            <li><a href="admin-maps-vector.html" title="Vector Maps"><i class="entypo-compass"></i><span> Vector Maps</span></a></li>
          </ul>
        </li>
        
        <!-- Other Contents Menu -->
        <li><a href="#" title="Front End"><i class="entypo-cog"></i><span> Front End <span class="badge">Soon</span></span></a></li>
      </ul>
    </div>
    <!--/MainMenu-->
    
    <div class="content-wrapper"> 
      <!--Content Wrapper--><!--Horisontal Dropdown-->
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
      
      <!--Breadcrumb-->
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Data</li>
        </ul>
      </div>
      <!--/Breadcrumb--> 
      
     
      
      <!-- Widget Row Start grid -->
      <div class="row" id="powerwidgets">
        <div class="col-md-12 bootstrap-grid"> 
          
          <!-- New widget -->
          
          <div class="powerwidget powerwidget-as-portlet-white" id="serverstatuz-indexpage2">
            <header>
              <h2>Source Geo<small>Money!</small></h2>
            </header>
            <div>
              <div class="powerwidget-editbox">
                <div>
                  <label>Title:</label>
                  <input class="form-control" type="text" />
                </div>
                <div>
                  <label>Styles:</label>
                  <span data-widget-setstyle="pink" class="pink-btn"></span> <span data-widget-setstyle="blue" class="blue-btn"></span> <span data-widget-setstyle="dark-blue" class="dark-blue-btn"></span> <span data-widget-setstyle="green" class="green-btn"></span> <span data-widget-setstyle="green-alt" class="green-alt-btn"></span> <span data-widget-setstyle="green-acid" class="green-acid-btn"></span> <span data-widget-setstyle="yellow" class="yellow-btn"></span> <span data-widget-setstyle="purple" class="purple-btn"></span> <span data-widget-setstyle="cold-grey" class="cold-grey-btn"></span> <span data-widget-setstyle="dark-cold-grey" class="dark-cold-grey-btn"></span> <span data-widget-setstyle="orange" class="orange-btn"></span> <span data-widget-setstyle="red" class="red-btn"></span> <span data-widget-setstyle="dark-red" class="dark-red-btn"></span> <span data-widget-setstyle="black" class="black-btn"></span> </div>
              </div>
              <div class="inner-spacer">
                <div class="row"> 
                  <!--Row-->
                  
                  <div class="col-md-12">
                    <div class="flotchart-container  margin-negative-top-10px">
                      <div id="placeholder9" class="flotchart-placeholder"></div>
                    </div>
                    <div class="row margin-bottom-10px">
                      <ul class="countries-demo" id="choices">
                        <li class="col-md-2 col-sm-4">
                          <h3>UK <span class="label bg-marine"><i class="fa fa-caret-up"></i> 22%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="iduk">
                              <input name="uk" checked id="iduk" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>Japan <span class="label bg-red"><i class="fa fa-caret-down"></i> 5%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="idjapan">
                              <input name="japan" checked id="idjapan" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>USA <span class="label bg-marine"><i class="fa fa-caret-up"></i> 16%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="idusa">
                              <input name="usa" checked id="idusa" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>Russia <span class="label bg-marine"><i class="fa fa-caret-up"></i> 7%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="idrussia">
                              <input name="russia" checked id="idrussia" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>China <span class="label bg-marine"><i class="fa fa-caret-up"></i> 1%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="idchina">
                              <input name="china" checked id="idchina" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                        <li class="col-md-2 col-sm-4">
                          <h3>Others <span class="label bg-red"><i class="fa fa-caret-down"></i> 13%</span></h3>
                          <div class="orb-form">
                            <label class="toggle" for="idothers">
                              <input name="others" checked id="idothers" type="checkbox">
                              Uncheck to hide
                              </input>
                              <i></i></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!--/Row--> 
                    
                  </div>
                  <!--/Col-md-12--> 
                </div>
                <!--/Row--> 
                
              </div>
            </div>
          </div>
          
          <!-- End .powerwidget --> 
          
          <!-- New widget-->
          <div class="powerwidget cold-grey" id="calendar-widget-index2" data-widget-editbutton="false">
            <header>
              <h2>Calendar<small>Events</small></h2>
            </header>
            <div class="inner-spacer">
              <div class="row">
                <div class="col-md-8">
                  <div id='calendar2'></div>
                </div>
                <div class="col-md-4"> 
                  
                  <!--Calendar-->
                  <div class="calendar-day-block">
                    <div class="day-block">
                      <p class="week-day">Saturday</p>
                      <p class="day">28</p>
                      <p class="month-year">June 2014</p>
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i> Add Event</button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-gift"></i> Birthdays</button>
                      </div>
                    </div>
                    <form action="" id="data-pickers" class="orb-form bg-blue">
                      <fieldset>
                      <section>
                        <div id="inline"></div>
                      </section>
                    </form>
                  </div>
                  <!--/calendar-day-block-->
                  
                  <div class="weather-block bg-blue">
                    <div class="weather-current-city">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><span class="current-city">London, GB <span class="badge bg-blue"><i class="fa fa-clock-o"></i> GMT+1</span></span><span class="current-temp">22&deg;C</span><span class="current-day">Saturday, 28 June</span></div>
                        <div class="col-md-6 col-sm-6 col-xs-6"><span class="current-day-icon">
                          <canvas id="clear-day" width="120" height="120"></canvas>
                          </span></div>
                      </div>
                    </div>
                    <div class="row">
                      <ul class="days">
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Tue</strong>
                          <canvas id="snow" width="50" height="50"></canvas>
                          <span>19&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Fri</strong>
                          <canvas id="rain" width="50" height="50"></canvas>
                          <span>17&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Sat</strong>
                          <canvas id="sleet" width="50" height="50"></canvas>
                          <span>23&deg;</span></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><strong>Sun</strong>
                          <canvas id="fog" width="50" height="50"></canvas>
                          <span>21&deg;</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Widget --> 
          
          <!-- New widget -->
          <div class="powerwidget blue" id="vectormap-index2" data-widget-editbutton="false">
            <header>
              <h2>Traffic Geo<small>Just Demo</small></h2>
            </header>
            <div class="inner-spacer">
              <div class="row"> 
                <!--Row-->
                <div class="col-md-6">
                  <div id="vmap" class="jqvmap"></div>
                </div>
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover margin-0px airtable">
                      <thead>
                        <tr>
                          <th colspan="2">Country</th>
                          <th >Source/Data</th>
                          <th >Part</th>
                          <th >Dinamic</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="num">1</span></td>
                          <td><h5>United States</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:20</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>589871 <span class="text-green">(567113)</span></strong> <i class="fa fa-caret-down"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,5,3</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
                        </tr>
                        <tr>
                          <td ><span class="num">2</span></td>
                          <td><h5>China</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:21</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>82871 <span class="text-green">(99143)</span></strong> <i class="fa fa-caret-up"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,1,5</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">9,3,3,2,4,5,6,2,8,4,9,0</span></td>
                        </tr>
                        <tr>
                          <td ><span class="num">3</span></td>
                          <td><h5>Germany</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:22</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>589666 <span class="text-red">(542313)</span></strong> <i class="fa fa-caret-down"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">1,3,2,3,1</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,8,4,6,7</span></td>
                        </tr>
                        <tr>
                          <td ><span class="num">4</span></td>
                          <td><h5>Russian Federation</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:23</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>589788 <span class="text-green">(508113)</span></strong> <i class="fa fa-caret-down"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">4,3,2,2,5</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,9,2,4,6,7</span></td>
                        </tr>
                        <tr>
                          <td ><span class="num">5</span></td>
                          <td><h5>India</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:24</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>589871 <span class="text-blue">(567113)</span></strong> <i class="fa fa-caret-down"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">3,3,2,5,7</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,9,9,5,3,2,2,4,6,7</span></td>
                        </tr>
                        <tr>
                          <td ><span class="num">6</span></td>
                          <td><h5>Antarctica</h5>
                            <small><i class="fa fa-clock-o"></i> Last Update</small> <span class="badge">12:25</span></td>
                          <td><h5>Google<small class="text-muted">Google Analytics</small></h5>
                            <small><strong>589871 <span class="text-green">(567113)</span></strong> <i class="fa fa-caret-up"></i></small></td>
                          <td class="text-center"><span class="table-sparkline-pie2">2,3,2,2,6</span></td>
                          <td class="text-center"><span class="table-sparkline-lines">5,6,7,2,4,5,1,2,8,4,6,9</span></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="2">Country</th>
                          <th>Source</th>
                          <th>Part</th>
                          <th>Dynamic</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!--/Row--> 
            </div>
          </div>
          <!-- End Widget --> 
          
        </div>
        <div class="col-md-6 bootstrap-grid"> 
          
          <!-- New widget -->
          <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-white" id="chatez-index" data-widget-editbutton="false">
            <header>
              <h2>Chat<small>Yeah!</small></h2>
            </header>
            <div class="inner-spacer nopadding">
              <div class="chat-container">
                <div class="top-buttons clearfix">
                  <h2 class="margin-0px pull-left">Chat</h2>
                  <span class="badge">25</span>
                  <div class="btn-group btn-group-sm pull-right"> <a class="btn btn-default"><i class="fa fa-thumbs-down"></i> <span class="hidden-xs">Leave</span></a> <a class="btn btn-default"><i class="fa fa-times-circle"></i> <span class="hidden-xs">Clear</span></a></div>
                </div>
                <nav class="chat-users-menu"> 
                  
                  <!--Adding Some Scroll-->
                  <div class="nano">
                    <div class="nano-content">
                      <div class="menu-header"><a class="btn btn-default chat-toggler"><i class="fa fa-user"></i> <i class="fa fa-arrow-down"></i></a></div>
                      <ul>
                        <li><a href="#"><span class="chat-name">Gluck Dorris</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span><span class="badge">5</span></a></li>
                        <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                        <li><a href="#"><span class="chat-name">Mr. Joker</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Chewbacca</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">The Piggy</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Anton Durant</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-default">Offline</span></a></li>
                        <li><a href="#"><span class="chat-name">Spiderman</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                        <li><a href="#"><span class="chat-name">Muchu</span><span class="user-img"><img src="http://placehold.it/150x150" alt="User"/></span><span class="label label-success">Online</span></a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <div class="chat-container">
                  <div class="chat-pusher">
                    <div class="chat-content"><!-- this is the wrapper for the content -->
                      <div class="nano"><!-- this is the nanoscroller -->
                        <div class="nano-content">
                          <div class="chat-content-inner"><!-- extra div for emulating position:fixed of the menu --> 
                            
                            <!-- Top Navigation -->
                            
                            <div class="clearfix">
                              <div class="chat-messages chat-messages-with-sidebar">
                                <ul>
                                  <li class="left clearfix">
                                    <div class="user-img pull-left"> <img src="http://placehold.it/150x150" alt="User Avatar" /> </div>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Gluck Dorris</span><span class="name"></span> <span class="badge"><i class="fa fa-clock-o"></i>14 mins ago</span></div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porttitor nulla vitae interdum fermentum. Ut in vulputate neque. Praesent luctus lacus a dolor tempus pellentesque. Cras sit amet urna eu augue suscipit eleifend. Mauris mollis pharetra faucibus. Phasellus eu massa quam. Nunc id metus placerat neque feugiat commodo. </p>
                                    </div>
                                  </li>
                                  <li class="right clearfix"><span class="user-img pull-right"> <img src="http://placehold.it/150x150" alt="User Avatar" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Anton Durant</span><span class=" badge"><i class="fa fa-clock-o"></i>13 mins ago</span> </div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                  <li class="left clearfix"><span class="user-img pull-left"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Spiderman</span> <span class="badge"><i class="fa fa-clock-o"></i>14 mins ago</span> </div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                  <li class="right clearfix"><span class="user-img pull-right"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"><span class="name">Muchu</span><small class="badge"><i class="fa fa-clock-o"></i>15 mins ago</small></div>
                                      <p>Nunc ipsum dui, tempus id sagittis eu, rutrum ac libero. Morbi non enim a tortor pulvinar feugiat at consectetur nunc. Curabitur pulvinar tincidunt nisi id bibendum. Nulla ut diam iaculis, venenatis velit hendrerit, fringilla arcu. Mauris accumsan pulvinar augue, non blandit justo vestibulum a. Proin non eros semper, accumsan nisl in, imperdiet justo. Pellentesque convallis commodo porttitor. Nam feugiat dignissim felis sed tempor. Sed pretium eros nec mi semper aliquam. Phasellus eget accumsan felis. Nulla varius risus quis dapibus porta. Donec vel magna viverra, semper velit eu, adipiscing arcu. Integer sollicitudin elementum est eget ullamcorper. Mauris eget sollicitudin erat. Nullam et lacinia nibh, a aliquam nunc. Curabitur ullamcorper metus ac purus commodo, sit amet mattis arcu mollis. </p>
                                    </div>
                                  </li>
                                  <li class="left clearfix"><span class="user-img pull-left"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Gluck Dorris</span> <span class="badge"><i class="fa fa-clock-o"></i>14 mins ago</span></div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                  <li class="right clearfix"><span class="user-img pull-right"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Anton Durant</span><span class=" badge"><i class="fa fa-clock-o"></i>13 mins ago</span> </div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                  <li class="left clearfix"><span class="user-img pull-left"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Spiderman</span> <span class="badge"><i class="fa fa-clock-o"></i>14 mins ago</span> </div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                  <li class="right clearfix"><span class="user-img pull-right"> <img src="http://placehold.it/150x150" alt="User Avatar" class="img-circle" /> </span>
                                    <div class="chat-body clearfix">
                                      <div class="header"> <span class="name">Spiderman</span> <span class="badge"><i class="fa fa-clock-o"></i>14 mins ago</span></div>
                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales. </p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          
                          <!-- /chat-content-inner --> 
                        </div>
                      </div>
                      
                      <!-- /nano --> 
                      
                    </div>
                    
                    <!-- /chat-content --> 
                  </div>
                  <!-- /chat-pusher --> 
                </div>
              </div>
              <!-- /chat-container--> 
              <!--Chat-form -->
              <div class="chat-message-form">
                <div class="row">
                  <div class="col-md-12">
                    <textarea placeholder="Write Your Message Here" class="form-control margin-bottom" rows="2"></textarea>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="btn-group">
                      <button class=" btn btn-default"><i class="fa fa-location-arrow"></i></button>
                      <button class=" btn btn-default"><i class="fa fa-camera"></i></button>
                      <button class=" btn btn-default"><i class="fa fa-music"></i></button>
                      <button class=" btn btn-default"><i class="fa fa-file"></i></button>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <button class="btn btn-info pull-right" type="button">Chat!</button>
                  </div>
                </div>
              </div>
              
              <!-- /Chat-form --> 
              
            </div>
          </div>
          <!-- End Widget --> 
          
        </div>
        <!-- /Inner Row Col-md-6 -->
        
        <div class="col-md-6 bootstrap-grid"> 
          
          <!-- New widget -->
          <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-white" id="widget5" data-widget-editbutton="false">
            <header>
              <h2>Portlet<small>With Carousel</small></h2>
            </header>
            <div class="inner-spacer nopadding">
              <div class="portlet-profile">
                <div class="user-img"><img src="http://placehold.it/150x150" alt="User Picture" /></div>
                <h1>Anton Durant</h1>
                Followers: 451 | Friends: 45</div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item item4 active"> </div>
                  <div class="item item5"></div>
                  <div class="item item6"></div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
            </div>
          </div>
          <!-- /New widget --> 
          
          <!-- New widget -->
          <div class="powerwidget powerwidget-as-portlet powerwidget-as-portlet-green" id="googlemapindex">
            <header>
              <h2>Google Map<small>Styled</small></h2>
            </header>
            <div>
              <div class="powerwidget-editbox">
                <div>
                  <label>Title:</label>
                  <input class="form-control" type="text" />
                </div>
                <div>
                  <label>Styles:</label>
                  <span data-widget-setstyle="pink" class="pink-btn"></span> <span data-widget-setstyle="blue" class="blue-btn"></span> <span data-widget-setstyle="dark-blue" class="dark-blue-btn"></span> <span data-widget-setstyle="green" class="green-btn"></span> <span data-widget-setstyle="green-alt" class="green-alt-btn"></span> <span data-widget-setstyle="green-acid" class="green-acid-btn"></span> <span data-widget-setstyle="yellow" class="yellow-btn"></span> <span data-widget-setstyle="purple" class="purple-btn"></span> <span data-widget-setstyle="cold-grey" class="cold-grey-btn"></span> <span data-widget-setstyle="dark-cold-grey" class="dark-cold-grey-btn"></span> <span data-widget-setstyle="orange" class="orange-btn"></span> <span data-widget-setstyle="red" class="red-btn"></span> <span data-widget-setstyle="dark-red" class="dark-red-btn"></span> <span data-widget-setstyle="black" class="black-btn"></span> </div>
              </div>
              <div class="inner-spacer nopadding">
                <div class="map-container" id="map_canvas"></div>
              </div>
            </div>
          </div>
          <!-- End Widget --> 
          
        </div>
        <!-- /Inner Row Col-md-6 --> 
        
      </div>
      <!-- /Widgets Row End Grid--> 
    </div>
    <!-- / Content Wrapper --> 
  </div>
  <!--/MainWrapper--> 
</div>
<!--/Smooth Scroll--> 

<!-- scroll top -->
<div class="scroll-top-wrapper hidden-xs"> <i class="fa fa-angle-up"></i> </div>
<!-- /scroll top --> 

<!--Modals--> 

<!--Power Widgets Modal-->
<div class="modal" id="delete-widget">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">
        <p>Are you sure to delete this widget?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="trigger-deletewidget-reset">Cancel</button>
        <button type="button" class="btn btn-primary" id="trigger-deletewidget">Delete</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Sign Out Dialog Modal-->
<div class="modal" id="signout">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Sign Out?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesigo">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Lock Screen Dialog Modal-->
<div class="modal" id="lockscreen">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Lock Screen?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesilock">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Scripts--> 
<!--GMaps--> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 

<!--JQuery--> 
<script type="text/javascript" src="js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="js/vendors/jquery/jquery-ui.min.js"></script> 

<!--GMap--> 
<script type="text/javascript" src="js/vendors/gmap/jquery.gmap.js"></script> 

<!--EasyPieChart--> 
<script type="text/javascript" src="js/vendors/easing/jquery.easing.1.3.min.js"></script> 
<script type="text/javascript" src="js/vendors/easypie/jquery.easypiechart.min.js"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="js/vendors/fullscreen/screenfull.min.js"></script> 

<!--NanoScroller--> 
<script type="text/javascript" src="js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> 

<!--Sparkline--> 
<script type="text/javascript" src="js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="js/vendors/powerwidgets/powerwidgets.min.js"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="js/vendors/raphael/raphael-min.js"></script> 
<script type="text/javascript" src="js/vendors/morris/morris.min.js"></script> 

<!--FlotChart--> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script> 
<script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script> 

<!--Chart.js--> 
<script type="text/javascript" src="js/vendors/chartjs/chart.min.js"></script> 

<!--Calendar--> 
<script type="text/javascript" src="js/vendors/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="js/vendors/fullcalendar/gcal.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Vector Map--> 
<script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.min.js"></script> 
<script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.sampledata.js"></script> 
<script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.world.js"></script> 

<!--ToDo--> 
<script type="text/javascript" src="js/vendors/todos/todos.js"></script> 

<!--SkyCons--> 
<script type="text/javascript" src="js/vendors/skycons/skycons.js"></script> 
<script>
      var icons = new Skycons({"color": "#fff"}),
          list  = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

      for(i = list.length; i--; )
        icons.set(list[i], list[i]);

      icons.play();
    </script> 

<!--Main App--> 
<script type="text/javascript" src="js/scripts.js"></script> 

<!--/Scripts-->

</body>
</html>