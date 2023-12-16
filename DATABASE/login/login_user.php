<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify - Trình phát trên web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="sty.css">

<body>
    <div id="container">
        <div id="header">
            nội dung header
            <div class="header-my-button">
                <button class="header-nav" style="background-color: rgb(19, 17, 17);">
                <i class="bi bi-chevron-left"  style="color:white;font-size: 30px;"></i>
            </button>
                <button class="header-nav" style="background-color: rgb(27, 24, 24);margin-left: 10px;">
                    
                <i class="bi bi-chevron-right" style="color:white;font-size:30px"></i>
            </button>

            </div>
            <button class="header-button">
                <div class="search">
                <from class="search-header">
                    <i class="bi bi-search" style="font-size:30px;margin-left: 0px;"></i>
                    <input class="search-input" type="text" placeholder=" Nghệ sĩ ,bài hát hoặc podcast">
                </from>

            </div>
            </button>

            <div class="header-item">
                <button class="header-item-link-boder" style="background-color: black;color: white;">        
                    <a href="https://www.spotify.com/vn-vi/premium" style="color: white;list-style: none;
                text-decoration: none;"> Nâng Cấp </a>
                </button>
                <div id="header-i">
                    <ul class="vnav">

                        <li><a href="">User <i class="bi bi-caret-up-fill" style="color: #fff"></i>  
                </a>
                            <ul class="supvnav">
                                <li><a href="">
                       Tài Khoản   <i class="bi bi-box-arrow-up-right" style=" padding: 0 0 0 132px;"></i>
                    </a></li>
                                <li><a href="">
                        Hồ Sơ
                    </a></li>
                                <li><a href="">
                        Nâng cấp lên Premium  <i class="bi bi-box-arrow-up-right" style=" padding: 0 0 0 30px;"></i>
                    </a></li>
                                <li><a href="http://localhost:8080/BaiTapLon/index6.html">
                        Đăng xuất
                    </a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="saimain">
            <div class="sidebar">
                <div class="saibar">
                    <h4 class="mt" style="margin-top: 20px;margin-left: 30px;">
                        <a style="list-style: none; justify-content: none; text-decoration: none; color: #fff; display: flex;" href="http://localhost:8080/BaiTapLon/index6.html"><i class="bi bi-spotify" style="font-size: 44px;">
                        </i>
                    <h2 style="margin-top:7.5px; margin-left: 5px;">Spotify</h2></a>
                    </h4>

                    <div class="saibar-from">
                        <button class="saibar-button">
                            <div class="saibar-button-icon" style="margin-left: 10px;">
                                <i class="bi bi-house-door" style="font-size:25px;"> </i>
                                <a href="http://localhost:8080/BaiTapLon/index6.html" style="text-decoration: none; color: white;">Trang chủ</a>
                            </div>
                        </button>

                    </div>
                    <div class="saibar-from">
                        <button class="saibar-button">
                                <div class="saibar-button-icon" style="margin-left: 10px;">
                                    <i class="bi bi-search" style="font-size:25px"></i>
                                    <a href="http://localhost:8080/BaiTapLon/index6.html" style="text-decoration: none; color: white;">Tìm kiếm</a>
                                </div>
                            </button>
                    </div>
                    <div class="saibar-from">
                        <button class="saibar-button">
                                <div class="saibar-button-icon" style="margin-left: 10px;">
                                    <i class="bi bi-music-note-list" style="font-size:25px"></i>
                                    <a href="http://localhost:8080/BaiTapLon/index6.html" style="text-decoration: none; color: white;">Thư viện</a>
                                </div>                       
                            </button>
                    </div>
                    <div class="saibar-from">
                        <button class="saibar-button" style="background-color: black;">
                                <div class=" saibar-button-icon " style="margin-left: 10px; ">
                                    <i class="bi bi-plus-square "  ></i>
                                Tạo playlist
                                </div>                       
                            </button>
                    </div>
                    <div class="saibar-from ">
                        <button class="saibar-button " style="background-color: black; ">
                        
                                <div class="saibar-button-icon " style="margin-left: 10px; ">
                                    <img src="images/traitim.png" style="width: 20px;height: 20px; ">                        
                                  Bài hát yêu thích
                                </div>                       
                            </button>
                    </div>
                    <div class=" border-top ">
                    </div>
                </div>
                <div id="class-coment ">
                    <p align="center "> Document</p>
                    <p align="center "> Document</p>
                    <p align="center "> Document</p>
                    <p align="center "> Document</p>
                    <p align="center "> Document</p>
                </div>
                <div class="thanhnhac7" style="color:black">a
                </div>
                <div class="thanhnhac8" style="color:black">s
                </div>
                <div class="thanhnhac7" style="color:black">
                    d</div>
                <div class="thanhnhac8" style="color:black">
                    e</div>
                <div class="img " style="display:flex; margin-top: 303px; margin-left: 25px;">
                    <i class="bi bi-arrow-down-circle " style="font-size:25px "></i>
                    <p class="imgyc ">

                        Cài đặt ứng dụng
                    </p>
                </div>
                <div class="fffff ">
                    <a href="javascript:void(0) " id="dragbar " style="width: 5px; top: 175px; left: 555px; height: 171px; cursor: col-resize; "></a>
                </div>
            </div>
            <div id="main " style="background-color: rgb(8, 8, 8);">
                nội dung main
                <div class="main_content " style="background-color:rgb(10, 9, 9);color: black;">
                    <div class="row " style="background-color: rgb(7, 7, 7);margin-left: 310px; ">

                        <div class="player">

                            <div style="margin: 55px 20px; color: white; font-size: 30px; font-weight: 600;">Danh sách nổi bật</div>
                            <div class="playlist">
                                <div class="song">
                                    <div class="thumb" style="background-image: url('https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg')">
                                    </div>
                                    <div class="body">
                                        <h3 class="title">Music name</h3>
                                        <p class="author">Singer</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- phần tanh nhạc -->
    <div class="container-thanh">
        <div class=" thanhnhac">
            <!-- Dashboard -->

            <!-- Header -->
            <div class="header">
                <header style="display: flex;">

                    <div class="cd">
                        <div class="cd-thumb" style="background-image: url('https://i.ytimg.com/vi/jTLhQf5KJSc/maxresdefault.jpg')">
                        </div>
                    </div>
                    <div class="header-my" style="margin-left: 20px;margin-top: 20px;">
                        <h4>Now playing:</h4>
                        <h2>String 57th & 9th</h2>
                    </div>

                </header>

            </div>

            <!-- Control -->
            <div class="control">
                <div class="thanhnhac1">
                    <i class="bi bi-heart"></i>
                    <i class="bi bi-pip"></i>

                </div>


                <div class="btn btn-repeat">
                    <i class="fas fa-random"></i>
                </div>
                <div class="btn btn-prev">
                    <i class="fas fa-step-backward"></i>
                </div>
                <div class="d3" style=" margin-bottom: 35px;">
                    <div class="btn btn-toggle-play" style="background-color: rgb(244, 248, 248); margin-bottom: 10px; width: 36px;height: 36px;">
                        <i class="fas fa-pause icon-pause" style="display:none"></i>
                        <i class="fas fa-play icon-play" style="color: black;font-size: 16px;"></i>
                    </div>
                    <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">
                </div>
                <div class="btn btn-next">
                    <i class="fas fa-step-forward"></i>
                </div>
                <div class="btn btn-random">
                    <i class="bi bi-arrow-repeat"></i>
                </div>
            </div>

            <audio id="audio" src=""></audio>
            <div class="thanhnhac4">
                <i class="bi bi-mic"></i>
                <i class="bi bi-pc-display"></i>
                <i class="bi bi-text-indent-left"></i>
                <i class="bi bi-volume-up"></i>
                <input id="progress2" class="progress2" type="range" value="0" step="1" min="0" max="100">
            </div>


        </div>
    </div>

    <script src="flie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>

</body>

</html>