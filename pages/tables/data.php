<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li class="active"><a href="data.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>User data table</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>
			
            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="email">Password</label>
                    <input type="text" id="password" placeholder="Password" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="email">Role</label>
                    <input type="text" id="role" placeholder="Role" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="update_email">Password</label>
                    <input type="text" id="update_password" placeholder="Password" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="update_email">Role</label>
                    <input type="text" id="update_role" placeholder="role" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>COMPANY TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal1">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content1"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="company_id">ID</label>
                    <input type="text" id="company_id" placeholder="ID" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="company_name">company_name</label>
                    <input type="text" id="company_name" placeholder="company_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="company_address">company_address</label>
                    <input type="text" id="company_address" placeholder="company_address" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="company_phone">company_phone</label>
                    <input type="text" id="company_phone" placeholder="company_phone" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="company_email">company_email</label>
                    <input type="text" id="company_email" placeholder="company_email" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="user_id" placeholder="user_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordCompany()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_company_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="company_name">company_name</label>
                    <input type="text" id="update_company_name" placeholder="company_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="company_address">company_address</label>
                    <input type="text" id="update_company_address" placeholder="company_address" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="company_phone">company_phone</label>
                    <input type="text" id="update_company_phone" placeholder="company_phone" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="company_email">company_email</label>
                    <input type="text" id="update_company_email" placeholder="company_email" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="update_user_id" placeholder="user_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateCompanyDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_company_id">
            </div>
        </div>
    </div>
</div>



<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>FEEDBACK TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal2">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content2"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="user_id2" placeholder="user_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_1">ans_1</label>
                    <input type="text" id="ans_1" placeholder="ans_1" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="ans_2">ans_2</label>
                    <input type="text" id="ans_2" placeholder="ans_2" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_3">ans_3</label>
                    <input type="text" id="ans_3" placeholder="ans_3" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_4">ans_4</label>
                    <input type="text" id="ans_4" placeholder="ans_4" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_5">ans_5</label>
                    <input type="text" id="ans_5" placeholder="ans_5" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="remarks">remarks</label>
                    <input type="text" id="remarks" placeholder="remarks" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_id">contact_id</label>
                    <input type="text" id="contact_id" placeholder="contact_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordFeedback()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_feedback_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="update_user_id1" placeholder="user_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_1">ans_1</label>
                    <input type="text" id="update_ans_1" placeholder="ans_1" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="ans_2">ans_2</label>
                    <input type="text" id="update_ans_2" placeholder="ans_2" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_3">ans_3</label>
                    <input type="text" id="update_ans_3" placeholder="ans_3" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_4">ans_4</label>
                    <input type="text" id="update_ans_4" placeholder="ans_4" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_5">ans_5</label>
                    <input type="text" id="update_ans_5" placeholder="ans_5" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="remarks">remarks</label>
                    <input type="text" id="update_remarks" placeholder="remarks" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_id">contact_id</label>
                    <input type="text" id="update_contact_id" placeholder="contact_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateFeedbackDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_feedback_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Questions TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal3">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content3"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="question">question</label>
                    <input type="text" id="question" placeholder="question" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordQuestions()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_question_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				<div class="form-group">
                    <label for="question">question</label>
                    <input type="text" id="update_question" placeholder="question" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateQuestionsDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_question_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal4">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content4"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_name">contact_name</label>
                    <input type="text" id="contact_name" placeholder="contact_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_position">contact_position</label>
                    <input type="text" id="contact_position" placeholder="contact_position" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="contact_number_one">contact_number_one</label>
                    <input type="text" id="contact_number_one" placeholder="contact_number_one" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_number_two">contact_number_two</label>
                    <input type="text" id="contact_number_two" placeholder="contact_number_two" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_email_one">contact_email_one</label>
                    <input type="text" id="contact_email_one" placeholder="contact_email_one" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_email_two">contact_email_two</label>
                    <input type="text" id="contact_email_two" placeholder="contact_email_two" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="contact_company_allo">contact_company_allo</label>
                    <input type="text" id="contact_company_allo" placeholder="contact_company_allo" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordContact()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_contact_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				
				<div class="form-group">
                    <label for="contact_name">contact_name</label>
                    <input type="text" id="update_contact_name" placeholder="contact_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_position">contact_position</label>
                    <input type="text" id="update_contact_position" placeholder="contact_position" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="contact_number_one">contact_number_one</label>
                    <input type="text" id="update_contact_number_one" placeholder="contact_number_one" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_number_two">contact_number_two</label>
                    <input type="text" id="update_contact_number_two" placeholder="contact_number_two" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_email_one">contact_email_one</label>
                    <input type="text" id="update_contact_email_one" placeholder="contact_email_one" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="contact_email_two">contact_email_two</label>
                    <input type="text" id="update_contact_email_two" placeholder="contact_email_two" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="contact_company_allo">contact_company_allo</label>
                    <input type="text" id="update_contact_company_allo" placeholder="contact_company_allo" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateContactDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_contact_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PROJECT TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal5">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content5"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">
			

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="project_name">project_name</label>
                    <input type="text" id="project_name" placeholder="project_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="project_desc">project_desc</label>
                    <input type="text" id="project_desc" placeholder="project_desc" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_company_id">project_company_id</label>
                    <input type="text" id="project_company_id" placeholder="project_company_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_price">project_price</label>
                    <input type="text" id="project_price" placeholder="project_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_team">project_team</label>
                    <input type="text" id="project_team" placeholder="project_team" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="project_status">project_status</label>
                    <input type="text" id="project_status" placeholder="project_status" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="user_id3" placeholder="user_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordProject()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">
			<div class="form-group">
                    <label for="project_name">project_name</label>
                    <input type="text" id="update_project_name" placeholder="project_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="project_desc">project_desc</label>
                    <input type="text" id="update_project_desc" placeholder="project_desc" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_company_id">project_company_id</label>
                    <input type="text" id="update_project_company_id" placeholder="project_company_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_price">project_price</label>
                    <input type="text" id="update_project_price" placeholder="project_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_team">project_team</label>
                    <input type="text" id="update_project_team" placeholder="project_team" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="project_status">project_status</label>
                    <input type="text" id="update_project_status" placeholder="project_status" class="form-control"/>
                </div>

                     
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="update_user_id2" placeholder="user_id" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateProjectDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_project_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PROSERV_PROJECT TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal6">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content6"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">
			

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="proserv_id">proserv_id</label>
                    <input type="text" id="proserv_id1" placeholder="proserv_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_contractor_id">project_contractor_id</label>
                    <input type="text" id="project_contractor_id1" placeholder="project_contractor_id" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="project_price">project_price</label>
                    <input type="text" id="project_price1" placeholder="project_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_team">project_team</label>
                    <input type="text" id="project_team1" placeholder="project_team" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_status">project_status</label>
                    <input type="text" id="project_status1" placeholder="project_status" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="category_proserv_project">category_proserv_project</label>
                    <input type="text" id="category_proserv_project1" placeholder="category_proserv_project" class="form-control"/>
                </div>
           
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordProserv_Project()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_proserv_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				<div class="form-group">
                    <label for="proserv_id">proserv_id</label>
                    <input type="text" id="update_proserv_id" placeholder="proserv_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_contractor_id">project_contractor_id</label>
                    <input type="text" id="update_project_contractor_id" placeholder="project_contractor_id" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="project_price">project_price</label>
                    <input type="text" id="update_project_price1" placeholder="project_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_team">project_team</label>
                    <input type="text" id="update_project_team1" placeholder="project_team" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="project_status">project_status</label>
                    <input type="text" id="update_project_status1" placeholder="project_status" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="category_proserv_project">category_proserv_project</label>
                    <input type="text" id="update_category_proserv_project" placeholder="category_proserv_project" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateProserv_ProjectDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_proserv_project_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>TEAM-MEMBER TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal7">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content7"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">
			
			
			

                <div class="form-group">
                    <label for="team_m_id">ID</label>
                    <input type="text" id="team_m_id" placeholder="ID" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="team_m_first_name">team_m_first_name</label>
                    <input type="text" id="team_m_first_name" placeholder="team_m_first_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="team_m_last_name">team_m_last_name</label>
                    <input type="text" id="team_m_last_name" placeholder="team_m_last_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="team_m_position">team_m_position</label>
                    <input type="text" id="team_m_position" placeholder="team_m_position" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_m_employement_status">team_m_employement_status</label>
                    <input type="text" id="team_m_employement_status" placeholder="team_m_employement_status" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_id">team_id</label>
                    <input type="text" id="team_id" placeholder="team_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordTeam_Members()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_team_members_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="team_m_first_name">team_m_first_name</label>
                    <input type="text" id="update_team_m_first_name" placeholder="team_m_first_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="team_m_last_name">team_m_last_name</label>
                    <input type="text" id="update_team_m_last_name" placeholder="team_m_last_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="team_m_position">team_m_position</label>
                    <input type="text" id="update_team_m_position" placeholder="team_m_position" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_m_employement_status">team_m_employement_status</label>
                    <input type="text" id="update_team_m_employement_status" placeholder="team_m_employement_status" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_id">team_id</label>
                    <input type="text" id="update_team_id" placeholder="team_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateTeam_MembersDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_team_members_id">
            </div>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PROSERV TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal9">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content9"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="product_name">product_name</label>
                    <input type="text" id="product_name" placeholder="product_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="product_description">product_description</label>
                    <input type="text" id="product_description" placeholder="product_description" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="product_start_price">product_start_price</label>
                    <input type="text" id="product_start_price" placeholder="product_start_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="product_end_price">product_end_price</label>
                    <input type="text" id="product_end_price" placeholder="product_end_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="category">category</label>
                    <input type="text" id="category" placeholder="category" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordProserv()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_proserv_modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				<div class="form-group">
                    <label for="product_name">product_name</label>
                    <input type="text" id="update_product_name" placeholder="product_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_1">product_description</label>
                    <input type="text" id="update_product_description" placeholder="product_description" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="ans_2">product_start_price</label>
                    <input type="text" id="update_product_start_price" placeholder="product_start_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_3">product_end_price</label>
                    <input type="text" id="update_product_end_price" placeholder="product_end_price" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ans_4">category</label>
                    <input type="text" id="update_category" placeholder="category" class="form-control"/>
                </div>
				

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateProservDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_id">
            </div>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>TEAM TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal10">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content10"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="team_id">Team ID</label>
                    <input type="text" id="team_id" placeholder="team_id" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_name">team_name</label>
                    <input type="text" id="team_name" placeholder="team_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_lead">team_lead</label>
                    <input type="text" id="team_lead" placeholder="team_lead" class="form-control"/>
                </div>

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordTeam()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_team_modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				<div class="form-group">
                    <label for="team_name">team_name</label>
                    <input type="text" id="update_team_name" placeholder="team_name" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="team_lead">team_lead</label>
                    <input type="text" id="update_team_lead" placeholder="team_lead" class="form-control"/>
                </div>

               

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateTeamDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_team_id">
            </div>
        </div>
    </div>
</div>


<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Quotation TABLE DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal23">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content200"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="lead">lead</label>
                    <input type="text" id="lead" placeholder="lead" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="opportunity">opportunity</label>
                    <input type="text" id="opportunity" placeholder="opportunity" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="proposal">proposal</label>
                    <input type="text" id="proposal" placeholder="proposal" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="quotation">quotation</label>
                    <input type="text" id="quotation" placeholder="quotation" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ra">ra</label>
                    <input type="text" id="ra" placeholder="ra" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="design">design</label>
                    <input type="text" id="design" placeholder="design" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="testing">testing</label>
                    <input type="text" id="testing" placeholder="testing" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="development">development</label>
                    <input type="text" id="development" placeholder="development" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="support">support</label>
                    <input type="text" id="support" placeholder="support" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="maintenance">maintenance</label>
                    <input type="text" id="maintenance" placeholder="maintenance" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="invoice">invoice</label>
                    <input type="text" id="invoice" placeholder="invoice" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="delivery">delivery</label>
                    <input type="text" id="delivery" placeholder="delivery" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="cancelled">cancelled</label>
                    <input type="text" id="cancelled" placeholder="cancelled" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="delay">delay</label>
                    <input type="text" id="delay" placeholder="delay" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="completed">completed</label>
                    <input type="text" id="completed" placeholder="completed" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="user_id5" placeholder="user_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordQuotation()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_quotation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                     
				
				<div class="form-group">
                    <label for="lead">lead</label>
                    <input type="text" id="update_lead" placeholder="lead" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="opportunity">opportunity</label>
                    <input type="text" id="update_opportunity" placeholder="opportunity" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="proposal">proposal</label>
                    <input type="text" id="update_proposal" placeholder="proposal" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="quotation">quotation</label>
                    <input type="text" id="update_quotation" placeholder="quotation" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="ra">ra</label>
                    <input type="text" id="update_ra" placeholder="ra" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="design">design</label>
                    <input type="text" id="update_design" placeholder="design" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="testing">testing</label>
                    <input type="text" id="update_testing" placeholder="testing" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="development">development</label>
                    <input type="text" id="update_development" placeholder="development" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="support">support</label>
                    <input type="text" id="update_support" placeholder="support" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="maintenance">maintenance</label>
                    <input type="text" id="update_maintenance" placeholder="maintenance" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="invoice">invoice</label>
                    <input type="text" id="update_invoice" placeholder="invoice" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="delivery">delivery</label>
                    <input type="text" id="update_delivery" placeholder="delivery" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="cancelled">cancelled</label>
                    <input type="text" id="update_cancelled" placeholder="cancelled" class="form-control"/>
                </div>

                
				<div class="form-group">
                    <label for="delay">delay</label>
                    <input type="text" id="update_delay" placeholder="delay" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="completed">completed</label>
                    <input type="text" id="update_completed" placeholder="completed" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="user_id">user_id</label>
                    <input type="text" id="update_user_id5" placeholder="user_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateQuotationDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_quotation_id">
            </div>
        </div>
    </div>
</div>
<!-- Content Section -->




          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
