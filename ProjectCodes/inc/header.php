<?php 
  session_start();
  if(!isset($_SESSION['login'])){
    echo "<script>window.location='index.php'</script>";
  }

  if(isset($_GET['logout'])){
    session_destroy();
    echo "<script>window.location='index.php'</script>";
  }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noakhali Prison Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    #wrapper > nav > div.collapse.navbar-collapse.navbar-ex1-collapse > ul > li > a{
        font-size: 18px;
    }

    </style>
    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/prison/">Noakhali Prison Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
              
                <li class="dropdown">
                    <li><a href="?logout">Log out</a></li>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="http://localhost/prison/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Prisoner <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="prisoner reg.php">Prisoner Registration</a>
                            </li>
                            <li>
                                <a href="prisoner list.php">Prisoner List</a>
                            </li>
                            <li>
                                <a href="delete prisoner.php">Delete Prisoner </a>
                            </li>
                            <li>
                                <a href="Search prisoner.php">Search Prisoner </a>
                            </li>
                            <li>
                                <a href="addexam.php">Add Prisoner Exam </a>
                            </li>
                            <li>
                                <a href="examinee_list.php">Examinee List</a>
                            </li>
                            <li>
                                <a href="delete examinee.php">Delete Examinee</a>
                            </li>
                        </ul>
                    </li>


                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Duty Officer <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="add duty officer.php">Add Duty Officer</a>
                            </li>
                            <li>
                                <a href="Duty Officer List.php">Duty Officer List</a>
                            </li>
                            <li>
                                <a href="delete duty officer.php">Delete Duty Officer</a>
                            </li>
                        </ul>
                    </li>


                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> Employer <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="add employee.php">Add Employee</a>
                            </li>
                            <li>
                                <a href="employee list.php">Employee List</a>
                            </li>
                            <li>
                                <a href="delete employee.php">Delete Employee</a>
                            </li>
                        </ul>
                    </li>


                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-arrows-v"></i> Doctor <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="add doctor.php">Add Doctor</a>
                            </li>
                            <li>
                                <a href="Doctor list.php">Doctor List</a>
                            </li>
                            <li>
                                <a href="delete doctor.php">Delete Doctor</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-arrows-v"></i> Add Visitor <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="add visitor.php">Add Visitor</a>
                            </li>
                            <li>
                                <a href="visitor list.php">Visitor List</a>
                            </li>
                            <li>
                                <a href="delete visitor.php">Delete Visitor</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>