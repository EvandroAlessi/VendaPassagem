﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Voo | Home</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
     
    <link href="../../Content/Scripts/plugins/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../../Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Content/animate.css" rel="stylesheet" type="text/css" />
    <link href="../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper" class="">

        <!-- Navigation -->
        <?php require("_Navigation.php") ?>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Top Navbar -->
            <?php require("_TopNavbar.php")

            //<!-- Main view  -->
            require("index.php")

            //<!-- Footer -->
            require("_Footer.php") ?>

        </div>
        <!-- Right Sidebar -->
        <?php require("_RightSidebar.php") ?>
    </div>
    
    <script src="../../Scripts/jquery-2.1.1.min.js"></script>
    <script src="../../Scripts/bootstrap.min.js"></script>
    <script src="../../Scripts/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../Scripts/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="../../Scripts/plugins/pace/pace.min.js"></script>
    <script src="../../Scripts/app/inspinia.js"></script>
</body>
</html>
