<?php
require_once'../db_action/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.php">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.php">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.php">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li>
                            <a href="index.php">
                                <i class="fa fa-home"></i>Home</a>
                        </li>

                        <li >
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Register</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="form.php">Customer</a>
                                </li> 
                                <li>
                                    <a href="form_user.php">User</a>
                                </li>
                                <li>
                                    <a href="form_fuel.php">Fuel</a>
                                </li>
                            </ul>
                        </li>

                        <li class="active has-sub">
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>

                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>

                        <li>
                            <a href="scan.php">
                                <i class="fas fa-desktop"></i>Scan QR</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <h3 class="title-3 m-b-30"> <b>Customer Data</b></h3>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th class="text-right">NIC No</th>
                                                <th class="text-right">Password</th>
                                                <th class="text-right">Mobile No</th>
                                                <th>Address</th>
                                                <th>Vehicle Type</th>
                                                <th class="text-right">Chassis No</th>
                                                <th>Fuel Type</th>
                                                <th class="text-right">Vehicle No</th>
                                                <th>Customer Type</th>
                                                <th class="text-right">Eligible Weekly Quota</th>
                                                <th class="text-right">Balance Weekly Quota</th>
                                                <th>Document</th>
                                                <th>QR code</th>
                                                <th class="text-right">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $sql = "Select * From customer_tbl";
                                            $result = $conn->query($sql);
                                            
                                            if ($result -> num_rows>0) {
                                            while ($row = $result->fetch_assoc())
                                            {
                                            echo "<tr>
                                            <td>".$row['customer_name']."</td>
                                            <td>".$row['nic_pass']."</td>
                                            <td>".$row['password']."</td>
                                            <td>".$row['mobile_no']."</td>
                                            <td>".$row['address']."</td>
                                            <td>".$row['vehicle_type']."</td>
                                            <td>".$row['chassis_no']."</td>
                                            <td>".$row['fuel_type']."</td>
                                            <td>".$row['vehicle_no']."</td>
                                            <td>".$row['customer_type']."</td>
                                            <td>".$row['eli_week']."</td>
                                            <td>".$row['bal_week']."</td>
                                            <td>".$row['document']."</td>
                                            
 
                                            <td>
                                            <div>
                                                <a href='edit_form.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                                <a href='delete_customer.php?id=".$row['id']."'><button type='button'>Delete</button> 
                                            </div>
                                            
                                            </td>

                                            </tr> ";  
                                            
                                            }
                                            } else {
                                                echo "<tr><td colspan=5><center>No Data Available Right Now </center></td></tr>";
                                            }
                                            ?>
                                          
                                        </tbody>
                                    </table>
                                </div>                                                  
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- USER DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <h3 class="title-3 m-b-30"> <b>User Data</b></h3>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>User Name</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Mobile Number</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $sql = "Select * From user_tbl";
                                                $result = $conn->query($sql);
                                                
                                                if ($result -> num_rows>0) {
                                                while ($row = $result->fetch_assoc())
                                                {
                                                echo "<tr>
                                                <td>".$row['full_name']."</td>
                                                <td>".$row['user_name']."</td>
                                                <td>".$row['password']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['mobile_no']."</td>
  
                                                <td>
                                                <div>
                                                    <a href='edit_user.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                                    <a href='delete_user.php?id=".$row['id']."'><button type='button'>Delete</button> 
                                                </div>
                                                
                                                </td>

                                                </tr> ";  
                                                
                                                }
                                                } else {
                                                    echo "<tr><td colspan=5><center>No Data Available Right Now </center></td></tr>";
                                                }
                                                ?>    
                                                
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END USER DATA TABLE-->
                            </div>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- FUEL DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <h3 class="title-3 m-b-30"> <b>Fuel Data</b></h3>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Fuel Type</th>
                                                <th>Price</th>
                                                <th>Last Update</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $sql = "Select * From fuel_tbl";
                                                $result = $conn->query($sql);
                                                
                                                if ($result -> num_rows>0) {
                                                while ($row = $result->fetch_assoc())
                                                {
                                                echo "<tr>
                                                <td>".$row['fuel_type']."</td>
                                                <td>".$row['price']."</td>
                                                <td>".$row['last_update']."</td>
  
                                                <td>
                                                <div>
                                                    <a href='edit_fuel.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                                    <a href='delete_fuel.php?id=".$row['id']."'><button type='button'>Delete</button> 
                                                </div>
                                                
                                                </td>

                                                </tr> ";  
                                                
                                                }
                                                } else {
                                                    echo "<tr><td colspan=5><center>No Data Available Right Now </center></td></tr>";
                                                }
                                                ?>    
                                                
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END FUEL DATA TABLE-->
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- FUEL STATION DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <h3 class="title-3 m-b-30"> <b>Fuel Availability</b></h3>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Fuel Station</th>
                                                <th>Station Code</th>
                                                <th>Petrol(92)</th>
                                                <th>Petrol(95)</th>
                                                <th>Auto Diesel</th>
                                                <th>Super Diesel</th>
                                                <th width=30 >Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $sql = "Select * From station_tbl";
                                                $result = $conn->query($sql);
                                                
                                                if ($result -> num_rows>0) {
                                                while ($row = $result->fetch_assoc())
                                                {
                                                echo "<tr>
                                                <td>".$row['station_name']."</td>
                                                <td>".$row['owner_name']."</td>
                                                <td>".$row['petrol_92']."</td>
                                                <td>".$row['petrol_95']."</td>
                                                <td>".$row['auto_diesel']."</td>
                                                <td>".$row['super_diesel']."</td>
  
                                                <td>
                                                <div>
                                                    <a href='edit_station.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                                    <a href='delete_station.php?id=".$row['id']."'><button type='button'>Delete</button> 
                                                </div>
                                                
                                                </td>

                                                </tr> ";  
                                                
                                                }
                                                } else {
                                                    echo "<tr><td colspan=5><center>No Data Available Right Now </center></td></tr>";
                                                }
                                                ?>    
                                                
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END FUEL STATION DATA TABLE-->
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
