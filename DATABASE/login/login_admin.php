<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="section\assets\images\favicon.ico">
        <!-- App css -->
        <link href="section\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="section\assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="section\assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets\images\flags\us.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="Web/assets/images/flags/vietnamese.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Vietnamese</span>
                            </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets\images\flags\spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets\images\flags\italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                             </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets\images\flags\french.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">French</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets\images\flags\russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="Web/assets/images/users/admin.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            Admin
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="http://localhost/btth01/index.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="http://localhost/btth01/login_admin.php" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="Web/assets/images/rsz_logo.png" alt="" height="59">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <img src="Web/assets/images/logo.png" alt="" height="65">
                        </span>
                    </a>

                    <a href="http://localhost/btth01/login_admin.php" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="Web/assets/images/rsz_logo.png" alt="" height="59">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                            <img src="Web/assets/images/logo.png" alt="" height="65">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
            
<div class="left-side-menu">


                <div class="user-box">
                        <div class="float-left">
                            <img src="Web/assets/images/users/admin.jpg" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="user-info">
                            <a href="#">Account</a>
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
    
            <!--- Sidemenu -->
            <div id="sidebar-menu">
    
                <ul class="metismenu" id="side-menu">
    
                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="http://localhost/btth01/login_admin.php">
                            <i class="ti-home"></i>
                            <span> User </span>
                        </a>
                    </li>
                    
                </ul>
    
            </div>
            <!-- End Sidebar -->
    
            <div class="clearfix"></div>

    
    </div>
    <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Welcome Administrator!</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h5 class="mt-0 font-22 mb-3">Danh sách người dùng </h5>
                                    <div>
                                        <a class="btn btn-success" href="http://localhost/btth01/add_admin.php">Thêm người dùng</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 95px;">
                                                        <div class="checkbox checkbox-single checkbox-primary">
                                                            <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                                            <label class="custom-control-label" for="action-checkbox">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Mã người dùng</th>
                                                    <th>Tên người dùng</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Email</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Chỉnh sửa</th>
                                                    <th>Xóa</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    // Bước 01: Kết nối Database Server
                                                    $conn = mysqli_connect('localhost','root','','btth01_cse485');
                                                    if(!$conn){
                                                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                                    }
                                                    // Bước 02: Thực hiện truy vấn
                                                    $sql = "SELECT id_user, name_user, birthday_user, email_user, phonenumber_user FROM db_user";
                                                    $result = mysqli_query($conn,$sql);
                                                    // Bước 03: Xử lý kết quả truy vấn
                                                    if(mysqli_num_rows($result) > 0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                            <tr>
                                                                <th style="min-width: 95px;">
                                                                    <div class="checkbox checkbox-single checkbox-primary"></div>
                                                                </th>
                                                                <th scope="row"><?php echo $row['id_user']; ?></th>
                                                                <td><?php echo $row['name_user']; ?></td>
                                                                <td><?php echo $row['birthday_user']; ?></td>
                                                                <td><?php echo $row['email_user']; ?></td>
                                                                <td><?php echo $row['phonenumber_user']; ?></td>
                                                                <td><a href="http://localhost/btth01/update_admin.php?id=<?php echo $row['id_user']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                                                <td><a href="http://localhost/btth01/delete_admin.php?id=<?php echo $row['id_user']; ?>"><i class="bi bi-trash"></i></a></td>
                                                            </tr>
                                                <?php
                                                        }
                                                    }
                                                    // Bước 04: Đóng kết nối Database Server
                                                    mysqli_close($conn);
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                    

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2001-2022 &copy; Developed by <a href="">Anh Nông Dân Pro </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        
        <div class="rightbar-overlay"></div>


        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <script src="section\assets\libs\morris-js\morris.min.js"></script>
        <script src="section\assets\libs\raphael\raphael.min.js"></script>

        <script src="section\assets\js\pages\dashboard.init.js"></script>

        <!-- App js -->
        <script src="section\assets\js\app.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>