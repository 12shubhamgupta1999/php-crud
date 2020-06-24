<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <script src="https://kit.fontawesome.com/cef3123337.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <!-- <button class="dismiss"><i class="fas fa-times-circle"></i></button> -->
                <form id="searchForm" action="search.php" role="search">
                    <input type="text" id="searchtags" name="search" placeholder="What are you looking for..." class="form-control">
                    <button class="dismiss" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><span>Restautrant</span></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>RS</strong></div>
                        </a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Logout    -->
                        <?php if (isset($_SESSION["email"])) {  ?>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link logout">
                                    <span class="d-none d-sm-inline">LogOut</span>
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link logout">
                                    <span class="d-none d-sm-inline">LogIn</span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="register.php" class="nav-link logout">
                                    <span class="d-none d-sm-inline">Register</span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </li>
                        <?php } ?>
                     
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="https://thumbs.dreamstime.com/b/vector-illustration-isolated-white-background-user-profile-avatar-black-line-icon-user-profile-avatar-black-solid-icon-121102166.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <?php
                    if (isset($_SESSION["email"])) {
                        $sql = "select username from user_mst where user_mst.email='{$_SESSION['email']}'";
                        $result = mysqli_query($db, $sql) or die("Bad query $sql");
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <h1 class="h4"><?php echo "{$row['username']}" ?></h1>
                            <p><?php echo "{$_SESSION['rolename']}" ?></p>
                        <?php }
                    } else { ?>
                        <h1 class="h4">Guest</h1>
                    <?php } ?>
                </div>
            </div>
            <!-- <h1 class="h4">hgvnm</h1> -->
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href="main.php"><i class="fas fa-home"></i>Home </a></li>
                
            </ul><span class="heading">HELP & SETTINGS</span>
            <ul class="list-unstyled">
                <li> <a href="viewprofile.php"> <i class="far fa-id-card"></i>Profile</a></li>
            </ul>
        </nav>
        <div class="content-inner">


            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/popper.js/umd/popper.min.js"> </script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
            <script src="../vendor/chart.js/Chart.min.js"></script>
            <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
            <script src="../js/charts-home.js"></script>
            <script src="../js/front.js"></script>
</body>

</html>