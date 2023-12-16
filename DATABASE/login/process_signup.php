<?php
session_start();

if(isset($_POST['btnSignUp'])){
    $user=$_POST['txtUser2'];
    $email=$_POST['txtEmail2'];
    $phone=$_POST['txtPhone2'];
    $pass=$_POST['txtPass2'];
    $repass=$_POST['txtRePass2'];

    $conn=mysqli_connect('localhost','root','','btth01_cse485');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql01="SELECT * FROM db_user WHERE email_user='$email' OR name_user='$user'";
    $result=mysqli_query($conn,$sql01);

    if(mysqli_num_rows($result) > 0){
        $error="Email or username is existed";
        header("location:http://localhost/btth01/signup.php?error=$error");
    }
    else{
        if($user != null && $email != null && $phone != null && $repass != null && $pass != null && $pass==$repass){
            $sql="INSERT INTO db_user (name_user,email_user,phonenumber_user,password_user,status_user) VALUES ('$user','$email','$phone','$pass','1')";
            $ketqua = mysqli_query($conn,$sql);
            
            if(!$ketqua){
                $error = "Dữ liệu chưa được thêm !";
                header("location: http://localhost/btth01/signup.php?error=$error");
            }else{
                header("location: http://localhost/btth01/login_user.php"); //Chuyển hướng lại Trang Quản trị
            }
            mysqli_close($conn);
        }
        else{
            $error = "Bạn nhập thông tin hoặc mật khẩu chưa khớp !";
            header("location: http://localhost/btth01/signup.php?error=$error");
        }
    }
}
?>