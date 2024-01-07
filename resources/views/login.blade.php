<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codeskdhaka.com/html/cashiar-prev/cashiar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 18:23:29 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset ('assets/css/font-awesome-pro.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/metisMenu.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/swiper-bundle.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/main.css') }}">
  <title>Cashiar – Tailwind HTML5 Accounting Dashboard Template</title>
  <script src="https://cdn.tailwindcss.com/"></script>
  <script src="{{asset ('assets/js/tailwind-config.js') }}"></script>
</head>

<body class="bg-bodyBg">
  <main>
    <div class="cashier-login-area flex justify-center items-center w-full h-full">
      <div class="cashier-login-wrapper">
        <div class="cashier-login-logo text-center mb-12">
          <img src="{{asset ('assets/img/logo/logo.png')}}" alt="logo not found">
        </div>
        <div class="cashier-select-field mb-5">
          <div class="cashier-input-field-style">
            <div class="single-input-field w-full">
              <input type="text" placeholder="Username" value="Admin">
            </div>
            <span class="input-icon">
              <i class="fa-light fa-user"></i>
            </span>
          </div>
        </div>
        <div class="cashier-select-field mb-5">
          <div class="cashier-input-field-style cashier-input-field-style-eye">
            <div class="single-input-field w-full">
              <input id="password-field" type="password" class="form-control" name="password" value="123456">
              <button formaction="#password-field" class="fal fa-fw fa-eye-slash field-icon toggle-password"></button>
            </div>
          </div>
        </div>
        <div class="cashier-login-footer-forgot mb-5">
          <a href="forgotpassword.html" class="text-[16px] inline-block text-themeBlue">Forgot Password?</a>
        </div>
        <div class="cashier-login-btn mb-7">
          <div class="cashier-login-btn-full default-light-theme">
            <button class="btn-primary" onclick="document.location='dashboard.html'" type="submit">Log
              in</button>
          </div>
        </div>
        <div class="cashier-login-footer">
          <div class="cashier-login-footer-account text-center">
            <span class="text-[16px] inline-block text-bodyText">Have not an account? <a href="register.html"
                class="text-[16px] text-themeBlue">Register</a></span>
          </div>
        </div>
      </div>
    </div>
  </main>


  <script src="{{asset ('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{asset ('assets/js/metisMenu.js') }}"></script>
  <script src="{{asset ('assets/js/jquery.nice-select.js') }}"></script>
  <script src="{{asset ('assets/js/apexcharts.js') }}"></script>
  <script src="{{asset ('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{asset ('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from codeskdhaka.com/html/cashiar-prev/cashiar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 18:23:29 GMT -->
</html>