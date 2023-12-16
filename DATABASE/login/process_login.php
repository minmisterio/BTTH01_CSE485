<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $username = $_POST['username'];
        $password  = $_POST['password'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','btth01_cse485');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_user WHERE  username = '$username' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        
        $sql01="SELECT * FROM db_user WHERE username = '$username' AND password='$password' AND status_user='2'";
        $result01 = mysqli_query($conn,$sql01);

        //Nếu có tài khoản và mật khẩu thì thực hiện
        if(mysqli_num_rows($result) > 0){
            //Cấp thẻ làm  việc
            $_SESSION['isLoginOK'] = $username ;
            //Nếu có status=2 là admin thì chuyển vào loginadmin.php
            if(mysqli_num_rows($result01) > 0){
                header("location: http://localhost/BTTH01/login_admin.php");
            }
            else{
                header("location: http://localhost/BTTH01/login_user.php");
            }
        }
        else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác !";
            header("location: login_new.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }
    else{
        header("location: http://localhost/BTTH01/login.php");
    }
?>