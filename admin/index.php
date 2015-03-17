<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta name="keywords" content="Administration Gestion">
  <meta name="author" content="E-asy Gest">
  <meta name="description" content="Gestion pour auto-entrepreneur">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-asy Gest</title>
  <link id="main-style" href="css/styles.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

  <!--Smooth Scroll-->
  <div class="smooth-overflow">
    <!--Navigation-->
    <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="index.html"><span class="text-blue">ORB</span></a> 

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
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <i class="entypo-cog"></i></button>
          <div id="settings-dropdown" class="dropdown-menu keep_open orb-form">
            <div class="dropdown-header">Settings <span class="badge pull-right">6</span></div>
            <div class="dropdown-container">
              <div class="nano">
                <div class="nano-content">
                  <ul class="settings-dropdown">
                    <li>
                      <label class="toggle">
                        <input type="checkbox" name="checkbox-toggle" checked>
                        <i></i>Prevent Midnblow</label>
                      </li>
                      <li>
                        <label class="toggle">
                          <input type="checkbox" name="checkbox-toggle" checked>
                          <i></i>Sleep All nights</label>
                        </li>
                        <li>
                          <label class="toggle">
                            <input type="checkbox" name="checkbox-toggle" checked>
                            <i></i>Drink more Coffee</label>
                          </li>
                          <li>
                            <label class="toggle">
                              <input type="checkbox" name="checkbox-toggle" checked>
                              <i></i>Auto feed cat</label>
                            </li>
                            <li>
                              <label class="toggle">
                                <input type="checkbox" name="checkbox-toggle" checked>
                                <i></i>Dummy Checkbox</label>
                              </li>
                              <li>
                                <label class="toggle">
                                  <input type="checkbox" name="checkbox-toggle" checked>
                                  <i></i>Read More Books</label>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-footer"> <a class="btn btn-dark" href="#">Save</a> </div>
                      </div>
                    </div>

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
                                      <div class="responsive-menu">ORB
                                        <div class="menuicon"><i class="fa fa-angle-down"></i></div>
                                      </div>
                                      <ul id="menu">
                                        <li><a class="submenu" href="#" title="Dashboard" data-id="dash-sub"><i class="entypo-briefcase"></i><span> Dashboard</span></a>
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
                                            <li> <a class="submenu active" href="#" data-id="pages-sub" title="Pages"><i class="entypo-book"></i><span> Pages</span></a> 
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

                                          <!--Breadcrumb-->
                                          <div class="breadcrumb clearfix">
                                            <ul>
                                              <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                              <li><a href="index.php">Panneaux de contrôle</a></li>

                                            </ul>
                                          </div>
                                          <!--/Breadcrumb-->

                                          <div class="panel-body"><div class="callout callout-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                                            <h4>Astuce</h4>
                                            <p>Vous avez la possibilité de voir des informations de manière rapide en cliquant sur la petite barre grise.</p>
                                          </div></div>

                                          <div class="page-header">
                                            <h1>Panneaux de contrôle<small>Vue d'ensemble</small></h1>
                                          </div>

                                          <!-- Widget Row Start grid -->
                                          <div class="row" id="powerwidgets">
                                            <div class="col-md-12 bootstrap-grid"> 

                                              <!--Panel-->
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <div class="panel-title pull-left">Labels<small>Panel Success</small></div>
                                                  <div class="pull-right"> <a href="#" data-toggle="modal" data-target="#panel-question" class="btn-question"><i class="fa fa-question-circle"></i></a> <a href="#" class="btn-minmax"><i class="fa fa-chevron-circle-up"></i></a> <a href="#" class="btn-close"><i class="fa fa-times-circle"></i></a> </div>
                                                  <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body"> Add Content and Start with Panel </div>
                                              </div>
                                              <!--/Panel--> 


                                            </div>
                                            <!-- /Inner Row Col-md-12 --> 
                                          </div>
                                          <!-- /Widgets Row End Grid--> 
                                        </div>
                                        <!-- / Content Wrapper --> 

                                      </div>
                                      <!--/MainWrapper--> 
                                    </div>
                                    <!--/Smooth Scroll--> 


                                    <!-- scroll top -->
                                    <div class="scroll-top-wrapper hidden-xs">
                                      <i class="fa fa-angle-up"></i>
                                    </div>
                                    <!-- /scroll top -->



                                    <!--Modals--> 
                                    <!--Panel Question Modal-->
                                    <div class="modal fade" id="panel-question">
                                      <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <i class="fa fa-question"></i> </div>
                                            <div class="modal-body text-center">How Do you Do?</div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          <!-- /.modal-content --> 
                                        </div>
                                        <!-- /.modal-dialog --> 
                                      </div>
                                      <!-- /.modal --> 

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
                                            <!--JQuery--> 
                                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
                                            <script type="text/javascript" src="js/vendors/jquery/jquery.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/jquery/jquery-ui.min.js"></script> 

                                            <!--EasyPieChart--> 
                                            <script type="text/javascript" src="js/vendors/easing/jquery.easing.1.3.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/easypie/jquery.easypiechart.min.js"></script> 

                                            <!--Fullscreen--> 
                                            <script type="text/javascript" src="js/vendors/fullscreen/screenfull.min.js"></script> 

                                            <!--Forms--> 
                                            <script type="text/javascript" src="js/vendors/forms/jquery.form.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/forms/jquery.validate.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/forms/jquery.maskedinput.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/jquery-steps/jquery.steps.min.js"></script> 

                                            <!--NanoScroller--> 
                                            <script type="text/javascript" src="js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> 

                                            <!--Sparkline--> 
                                            <script type="text/javascript" src="js/vendors/sparkline/jquery.sparkline.min.js"></script> 

                                            <!--Horizontal Dropdown--> 
                                            <script type="text/javascript" src="js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
                                            <script type="text/javascript" src="js/vendors/classie/classie.js"></script> 

                                            <!--Datatables--> 
                                            <script type="text/javascript" src="js/vendors/datatables/jquery.dataTables.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/datatables/jquery.dataTables-bootstrap.js"></script> 
                                            <script type="text/javascript" src="js/vendors/datatables/dataTables.colVis.js"></script> 
                                            <script type="text/javascript" src="js/vendors/datatables/colvis.extras.js"></script> 

                                            <!--PowerWidgets--> 
                                            <script type="text/javascript" src="js/vendors/powerwidgets/powerwidgets.js"></script> 

                                            <!--Summernote--> 
                                            <script type="text/javascript" src="js/vendors/summernote/summernote.min.js"></script> 

                                            <!--Morris Chart--> 
                                            <script type="text/javascript" src="js/vendors/raphael/raphael-min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/morris/morris.min.js"></script> 

                                            <!--FlotChart--> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.stack.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.categories.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.time.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.axislabels.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot-tooltip.js"></script> 
                                            <script type="text/javascript" src="js/vendors/flotchart/jquery.flot.pie.min.js"></script> 

                                            <!--Calendar--> 
                                            <script type="text/javascript" src="js/vendors/fullcalendar/fullcalendar.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/fullcalendar/gcal.js"></script> 

                                            <!--Bootstrap--> 
                                            <script type="text/javascript" src="js/vendors/bootstrap/bootstrap.min.js"></script> 

                                            <!--Bootstrap Progress Bar--> 
                                            <script type="text/javascript" src="js/vendors/bootstrap-progress-bar/bootstrap-progressbar.min.js"></script> 

                                            <!--iOnRangeSlider--> 
                                            <script type="text/javascript" src="js/vendors/ionrangeslider/ion.rangeSlider.min.js"></script> 

                                            <!--Vector Map--> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.min.js"></script> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.sampledata.js"></script> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.world.js"></script> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.usa.js"></script> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.europe.js"></script> 
                                            <script type="text/javascript" src="js/vendors/vector-map/jquery.vmap.russia.js"></script> 

                                            <!--ToDo--> 
                                            <script type="text/javascript" src="js/vendors/todos/todos.js"></script> 

                                            <!--Nestable--> 
                                            <script type="text/javascript" src="js/vendors/nestable-lists/jquery.nestable.js"></script> 

                                            <!--FitVids--> 
                                            <script type="text/javascript" src="js/vendors/fitvids/jquery.fitvids.js"></script> 

                                            <!--Main App--> 
                                            <script type="text/javascript" src="js/scripts.js"></script>





                                            <!--/Scripts-->

                                          </body>
                                          </html>