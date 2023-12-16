<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/style_singup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="acsset/spotify.png" type="image/x-icon" />
    <title>Sign Up</title>
</head>

<body>
  <div class="container">
    
    <div class="buttondangki-facebook">
      <a style="text-decoration: none"
        href="https://accounts.spotify.com/vi-VN/login?method=facebook&amp;continue=https%3A%2F%2Fwww.spotify.com%2Faccount%2Foverview%2F&amp;intent=signup">
        <div class="dangki">
          Đăng ký bằng Facebook
        </div>
      </a>
    </div>


    <div class="line-space">
      <span>hoặc</span>
      <!-- <hr  width="430px" size="5px" align="center" /> -->

    </div>
    <!-- <hr  width="430px" size="5px" align="center" /> -->

    <form novalidate="" id="login-form" action="process_signup.php" method="post">
      <div>
        <div>
          <label for="email">
            <p class="vanban">
              Email của bạn là gì?
            </p>
          </label>
        </div>
        <div class="form-control">
          <input type="email" aria-invalid="false" id="email" name="txtEmail2" placeholder="Nhập email của bạn." required=""
          value="" class="Input" />
        </div>
      </div>

      <div>
        <div>
          <label for="confirm">
            <p class="vanban">Tên đăng nhập</p>
          </label>
        </div>
        <input type="text" aria-invalid="false" id="confirm" name="txtUser2" pattern=""
          placeholder="Nhập tên đăng nhập của bạn." required="" value="" class="Input" />
      </div>

      <div>
        <div>
          <label for="confirm">
            <p class="vanban">Số điện thoại</p>
          </label>
        </div>
        <input type="text" aria-invalid="false" id="confirm" name="txtPhone2" pattern=""
          placeholder="Nhập số điện thoại của bạn." required="" value="" class="Input" />
      </div>

      <div class="">
        <div class="">
          <label for="password">
            <p class="vanban">Tạo mật khẩu</p>
          </label>
        </div>
        <input type="password" aria-invalid="false" autocomplete="new-password" id="password" pattern=".{8,}"
          name="txtPass2" placeholder="Tạo mật khẩu." required="" value="" class="Input" />
      </div>

      <div class="">
        <div class="">
          <label for="displayname">
            <p class="vanban">Nhập lại mật khẩu</p>
          </label>
        </div>
        <input type="password" aria-invalid="false" id="displayname" name="txtRePass2" placeholder="Nhập lại mật khẩu"
          required="" value="" class="Input" />
      </div>
      <?php
            if(isset($_GET['error'])){
            echo "<h5 style='color:red'> {$_GET['error']} </h5>";
            }
      ?>
      <div class="ngaythang">
        <div class="">
          <label>
            <p class="vanban">Bạn sinh ngày nào?</p>
          </label>
        </div>

        <div data-testid="dob-parent" class="datetime">
          <div data-testid="day" class="Day">
            <div class="ngaythang">
              <div>
                <label for="day">Ngày</label>
              </div>
              <input type="text" aria-invalid="false" id="day" inputmode="numeric" maxlength="2" name="day"
                pattern="((0?[1-9])|([12][0-9])|(3[01]))" placeholder="DD" required="" value="" />
            </div>
          </div>

          <div data-testid="month" class="thang">
            <div class="ngaythang">
              <div class="">
                <label for="month">Tháng</label>
              </div>
              <div>
                <select id="month" name="month" required="" aria-invalid="false" class="thangsinh">
                  <option selected="" disabled="" value="">
                    Tháng
                  </option>
                  <option value="01">Tháng 1</option>
                  <option value="02">Tháng 2</option>
                  <option value="03">Tháng 3</option>
                  <option value="04">Tháng 4</option>
                  <option value="05">Tháng 5</option>
                  <option value="06">Tháng 6</option>
                  <option value="07">Tháng 7</option>
                  <option value="08">Tháng 8</option>
                  <option value="09">Tháng 9</option>
                  <option value="10">Tháng 10</option>
                  <option value="11">Tháng 11</option>
                  <option value="12">Tháng 12</option>
                </select>
              </div>
            </div>
          </div>

          <div data-testid="year">
            <div class="ngaythang">
              <div>
                <label for="year" class="box">Năm</label>
              </div>
              <input type="text" aria-invalid="false" id="year" inputmode="numeric" maxlength="4" name="year"
                pattern="(19[0-9]{2})|(200)[0-9]" placeholder="YYYY" required="" value="" class="" />
            </div>
          </div>
        </div>


        <div>
          <div role="radiogroup" class="">
            <legend class="vanbangioitinh">
              <p class="vanban" style="margin-top: 5px;">Giới tính của bạn là gì?</p>
            </legend>
            <div class="gioitinh">
              <div class="">
                <input type="radio" id="gender_option_male" name="gender" required="" value="male" aria-invalid="false"
                  class="" />
                <label for="gender_option_male">
                  <span class="">
                  </span>
                  <span class="nam">
                    Nam
                  </span>
                </label>
              </div>
              <div class="">
                <input type="radio" id="gender_option_female" name="gender" required="" value="female"
                  aria-invalid="false" class="" /><label for="gender_option_female">
                    <span class="nu">Nữ
                  </span>
                </label>
              </div>
              <div class="">
                <input type="radio" id="gender_option_nonbinary" name="gender" required="" value="neutral"
                  aria-invalid="false" class="" /><label for="gender_option_nonbinary"><span class="">
                  </span>
                  <span class="">
                    Không phân biệt giới tính
                  </span>
                </label>
              </div>
            </div>
          </div>


          
          </div>
        </div>



        <div class="capcha">
          <div id="checkbox-container">
            <div style="width: 304px; height: 78px;margin-top: 5px;">
              <div>
                <iframe title="reCAPTCHA"
                  src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LeO36obAAAAALSBZrY6RYM1hcAY7RLvpDDcJLy3&amp;co=aHR0cHM6Ly93d3cuc3BvdGlmeS5jb206NDQz&amp;hl=vi&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;size=normal&amp;cb=rzr78zmhaqbp"
                  width="304" height="78" role="presentation" name="a-wjtqvotobukp" frameborder="0" scrolling="no"
                  sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
              </div>
              <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
            </div>
            <iframe style="display: none"></iframe>
          </div>
          <input type="text" hidden="" name="recaptchaCheckbox" required="" data-testid="recaptcha-input-test"
            value="" />
        </div>

        <div class="footer">
         
          <button name="btnSignUp" type="submit" class="buttondangki">
            <div>
              Sign Up
            </div>
          </button>
        </div>

        <div style="margin-bottom:150px;">
          <p style="text-align: center;">
            <span class="">Bạn có tài khoản?
              <a href="login.php">
                Đăng nhập</a>.</span>
          </p>
        </div>
      </div>
  </div>
</body>

</html>