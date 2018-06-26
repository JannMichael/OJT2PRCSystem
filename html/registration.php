<!--<?php
//include('db_connect.php');
?>-->
<style>

                                body {font-family: Arial, Helvetica, sans-serif;}
                                * {box-sizing: border-box}
                                /* Full-width input fields */
                                input[type=text], input[type=password] {
                                    width: 100%;
                                    padding: 15px;
                                    margin: 5px 0 22px 0;
                                    display: inline-block;
                                    border: none;
                                    background: #f1f1f1;
                                }

                                /* Add a background color when the inputs get focus */
                                input[type=text]:focus, input[type=password]:focus {
                                    background-color: #ddd;
                                    outline: none;
                                }

                                /* Set a style for all buttons */
                                button {
                                    background-color: #4CAF50;
                                    color: white;
                                    padding: 3px 20px;
                                    margin: 1px 0;
                                    border: none;
                                    cursor: pointer;
                                    width: 100%;
                                    opacity: 0.9;
                                }

                                button:hover {
                                    opacity:1;
                                }

                                /* Extra styles for the cancel button */
                                .cancelbtn {
                                    padding: 3px 20px;
                                    background-color: #f44336;
                                }

                                /* Float cancel and signup buttons and add an equal width */
                                .cancelbtn, .signupbtn {
                                  float: left;
                                  width: 50%;
                                }

                                /* Add padding to container elements */
                                .container {
                                    padding: 16px;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none; /* Hidden by default */
                                    position: fixed; /* Stay in place */
                                    z-index: 1; /* Sit on top */
                                    left: 0;
                                    top: 0;
                                    width: 100%; /* Full width */
                                    height: 100%; /* Full height */
                                    overflow: auto; /* Enable scroll if needed */
                                    background-color: #474e5d;
                                    padding-top: 50px;
                                }

                                /* Modal Content/Box */
                                .modal-content {
                                    background-color: #fefefe;
                                    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                                    border: 1px solid #888;
                                    width: 80%; /* Could be more or less, depending on screen size */
                                }

                                /* Style the horizontal ruler */
                                hr {
                                    border: 1px solid #f1f1f1;
                                    margin-bottom: 25px;
                                }
                                 
                                /* The Close Button (x) */
                                .close {
                                    position: absolute;
                                    right: 35px;
                                    top: 15px;
                                    font-size: 40px;
                                    font-weight: bold;
                                    color: #f1f1f1;
                                }

                                .close:hover,
                                .close:focus {
                                    color: #f44336;
                                    cursor: pointer;
                                }

                                /* Clear floats */
                                .clearfix::after {
                                    content: "";
                                    clear: both;
                                    display: table;
                                }

                                /* Change styles for cancel button and signup button on extra small screens */
                                @media screen and (max-width: 300px) {
                                    .cancelbtn, .signupbtn {
                                       width: 100%;
                                    }
                                }
                                </style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>PRC Membership</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head> 

        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
            </div>
        </nav>
       
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Registration</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Membership List</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Notifications</a>
                    </li>

                </ul>
            </div>
            
        </div>


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">PHILIPPINE RED CROSS MEMBERSHIP</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">PRINT</a>
                        <ol class="breadcrumb">
                            <li>IMPORT</li>
                        </ol>
                        
                        <ol class="breadcrumb">
                            <li>EXPORT</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php
                    $conn = mysql_connect('localhost', 'root', '');

                    if(!$conn){
                        die('Could Not connect: ' . mysql_error());
                    }
                    $sql="SELECT orNum, IDNumber, lastName, firstName, middleName, address, contactNumber, validDate, expiryDate FROM maablist";
                    mysql_select_db('maabprc');
                    $retval = mysql_query($sql, $conn);
                ?>
                <div class="row">
                        <div class="white-box">
                            <div class="row">
                                <div class="pull-left"><h3><b>New Member As of :</b></h3></div>
                                <div class="pull-right"><a href="" data-target="addmember" class="btn btn-info  m-l-20 hidden-xs hidden-sm waves-effect waves-light">Sign-Up New Member</a></div>
                            </div>

                            <?php
                            $projects = array();
                            while ($project =  mysql_fetch_assoc($retval)) {?>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>OR NUMBER</th>
                                            <th>ID NUMBER</th>
                                            <th>LAST NAME</th>
                                            <th>FIRST NAME</th>
                                            <th>MIDDLE NAME</th>
                                            <th>ADDRESS</th>
                                            <th>CONTACT NUMBER</th>
                                            <th>REGISTRATION DATE</th>
                                            <th>VALID UNTIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td><?php echo $project['orNumber']; ?></td>
                                            <td><?php echo $project['IDNumber']; ?></td>
                                            <td><?php echo $project['lastName']; ?></td>
                                            <td><?php echo $project['firstName']; ?></td>
                                            <td><?php echo $project['middleName']; ?></td>
                                            <td><?php echo $project['address']; ?></td>
                                            <td><?php echo $project['contactNumber']; ?></td>
                                            <td><?php echo $project['validDate']; ?></td>
                                            <td><?php echo $project['expiryDate']; ?></td>
                                        </tr>
                                    </tbody>
                              </table>
                              <?php
    }
?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Saint Louis University </footer>
        </div>
    </div>
        <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>