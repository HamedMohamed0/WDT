<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OnePyOne</title>
    <link rel="stylesheet" href="E-Learning/css/bootstrap.min.css" />
    <link rel="stylesheet" href="E-Learning/css/normalize.css" />
    <link rel="stylesheet" href="E-Learning/css/all.min.css" />
    <link rel="stylesheet" href="loginstyle.css" />
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <!-- GoogleFonts -->
    <style>
      :root {
        --main-color: #181818;
        --second-color: #00ce79;
        --second-color-dark: #00ce79f0;
        --second-color-light: #00e472;
        --section-padding: 100px;
      }
      * {
        box-sizing: border-box;
      }
      ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      a {
        text-decoration: none;
      }
      body {
        background-color: var(--main-color);
        color: white;
        font-family: "Cairo", sans-serif;
        position: relative;
        z-index: -999;
      }
      ::-webkit-scrollbar {
        width: 10px;
      }
      ::-webkit-scrollbar-track {
        background-color: var(--main-color);
        border-radius: 20px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        -ms-border-radius: 20px;
        -o-border-radius: 20px;
      }
      ::-webkit-scrollbar-thumb {
        background-color: var(--second-color-dark);
        border-radius: 20px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        -ms-border-radius: 20px;
        -o-border-radius: 20px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background-color: var(--second-color-light);
      }
      /* Start Header */
      header {
        background-color: var(--main-color);
        z-index: 999;
      }
      header .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        flex-direction: row-reverse;
      }
      header .container .logo a {
        font-size: 36px;
        color: white;
        font-family: "Dancing Script", cursive;
        font-family: "Dancing Script", cursive;
      }
      header .container .logo span {
        color: var(--second-color);
      }
      header .container .links {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .links ul {
        display: flex;
        flex-direction: row-reverse;
      }
      .links ul li {
        padding: 7px 15px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
        margin: 0px 5px;
        cursor: pointer;
      }
      .links ul li:hover {
        background-color: #383838;
        color: var(--main-color);
      }
      .links ul li:hover a {
        color: var(--second-color);
      }
      .links ul li a {
        color: white;
        font-size: 18px;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      .links ul .active {
        background-color: #383838;
        color: var(--second-color);
      }
      .links ul .active a {
        color: var(--second-color);
      }
      .login {
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      .login > a {
        font-size: 18px;
        color: var(--main-color);
        background-color: var(--second-color-dark);
        padding: 7px 20px;
        border-radius: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        -ms-border-radius: 6px;
        -o-border-radius: 6px;
        font-weight: 500;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      .login:hover {
        transform: translateY(-5px);
        -webkit-transform: translateY(-5px);
        -moz-transform: translateY(-5px);
        -ms-transform: translateY(-5px);
        -o-transform: translateY(-5px);
      }
      .login:hover > a {
        background-color: var(--second-color);
      }
      .button {
        display: flex;
      }
      .button .lang {
        margin-left: 10px;
      }
      .button .lang a {
        color: var(--second-color-dark);
        font-size: 20px;
        font: bold;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      .button .lang a:hover {
        color: var(--second-color-light);
      }
      .burger-icon {
        display: none;
      }
      header .list {
        background-color: #383838;
        padding: 20px;
        position: absolute;
        width: 100%;
        top: -280px;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
        z-index: -1;
        direction: rtl;
      }
      header .list .button {
            margin-top: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
      header .list .login a {
        padding: 5px 15px;
      }
      header .show {
        display: block;
        top: 82px;
      }
      header .list ul li {
        margin-bottom: 20px;
        border-bottom: 1px solid var(--second-color);
        padding-bottom: 10px;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      header .list ul li:hover a {
        color: var(--second-color);
      }
      header .list ul li:hover {
        transform: translateY(-5px);
        -webkit-transform: translateY(-5px);
        -moz-transform: translateY(-5px);
        -ms-transform: translateY(-5px);
        -o-transform: translateY(-5px);
      }
      header .list ul li a {
        color: white;
        transition: 0.4s;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
      }
      @media (max-width: 991px) {
        header .container {
                justify-content: space-between;
            }
            .burger-icon {
                display: block;
                font-size: 28px;
                cursor: pointer;
                transition: .4s;
                -webkit-transition: .4s;
                -moz-transition: .4s;
                -ms-transition: .4s;
                -o-transition: .4s;
            }
            .clicked {
                color:var(--second-color) ;
            }
            header .container .links {
                display: none;
            }
            header .container .button {
                display: none;
            }
      }
      /* End Header */
      .login-page {
        /* background-color:#02020e; */
        height: calc(100vh - 94px);
        position: relative;
        z-index: -999;
        direction: rtl;
      }
      .login-page form {
        padding-top: 40px;
        width: 64%;
      }
      .login-page form h2 {
        font-size: 44px;
      }
      .login-page form h2 span {
        font-family: "Dancing Script", cursive;
        font-family: "Dancing Script", cursive;
      }
      .login-page form h2 span span {
        color: var(--second-color);
      }
      .login-page form p {
        color: var(--second-color);
        margin-bottom: 20px;
      }
      .login-page form label {
        display: block;
        margin-bottom: 5px;
        color: #a9a9a9;
        padding: 0px 10px;
      }
      .login-page form input {
        margin-bottom: 30px;
        background-color: #2c2b2b !important;
        border: none;
        padding: 15px 10px;
        width: 100%;
        color: white;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        color: var(--second-color) !important;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      input[type="number"] {
        -moz-appearance: textfield;
      }
      .login-page form input::placeholder {
        color: var(--second-color);
      }
      .login-page form input:focus {
        outline: none;
      }
      .login-page form button {
        width: 100%;
        color: var(--second-color);
        padding: 15px 0;
        background-color: #2c2b2b;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        margin-top: 20px;
        border: none;
        font-weight: bold;
        font-size: 22px;
      }
      .login-page form a {
        display: block;
        margin-top: 40px;
        color: var(--second-color);
      }
      .login-page form a span {
        color: #a9a9a9;
        cursor: default;
      }
      .login-page {
        display: flex;
      }
      .login-page .form {
        width: 50%;
        display: flex;
        justify-content: center;
      }
      .login-page .right-side {
        background-color: #2c2b2b;
        height: 100%;
        flex: 1;
        text-align: center;
        padding-top: 50px;
      }
      .login-page .right-side h1 {
        font-family: "Dancing Script", cursive;
        font-family: "Dancing Script", cursive;
        font-size: 60px;
        font-weight: bold;
      }
      .login-page .right-side h1 span {
        color: var(--second-color);
      }
      .login-page .right-side img {
        width: 500px;
      }
      @media (max-width:991px) {
        .login-page  {
          justify-content: center;
        }
        .login-page .right-side {
          display: none;
        }
        .login-page .form {
          width: 100%;
          display: flex;
          justify-content: center;
        }
      }
    </style>
  </head>
  <body>
    <!-- Start Header -->
    <header>
      <div class="container">
        <div class="logo">
          <a href="E-Learning/arabic/indexarabic.html">
            One<span>Py</span>One
          </a>
        </div>
        <div class="links">
          <ul>
            <li><a href="E-Learning/arabic/indexarabic.html">الرئيسيه</a></li>
            <li><a href="index2arabic.php">الدورة التعليمية</a></li>
            <li><a href="index2arabic.php">الجدول</a></li>
            <li><a href="index2arabic.php">المهام</a></li>
            <li>
              <a href="E-Learning/arabic/contactarabic.html">تواصل معانا</a>
            </li>
          </ul>
        </div>
        <div class="button">
          <div class="login">
            <a href="index2arabic.php">تسجيل الدخول</a>
          </div>
          <div class="lang">
              <a href="E-Learning/index.html">EN</a>
            </div>
        </div>
        <div class="burger-icon">
          <i class="fa-solid fa-bars-staggered"></i>
        </div>
      </div>
      <div class="list">
        <ul>
          <li><a href="E-Learning/arabic/indexarabic.html">الرئيسيه</a></li>
          <li><a href="index2arabic.php">الدورة التعليمية</a></li>
          <li><a href="index2arabic.php">الجدول</a></li>
          <li><a href="index2arabic.php">المهام</a></li>
          <li>
            <a href="E-Learning/arabic/contactarabic.html">تواصل معانا</a>
          </li>
        </ul>
        <div class="button">
          <div class="login">
            <a href="index2arabic.php">تسجيل الدخول</a>
          </div>
          <div class="lang">
              <a href="E-Learning/index.html">EN</a>
            </div>
        </div>
      </div>
    </header>
    <!-- Start Header -->
    <div class="login-page">
      <div class="form">
        <form action="signup-checkarabic.php" method="post">
          <h2>الأشتراك</h2>
          <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>الاسم</label>
          <?php if (isset($_GET['name'])) { ?>
          <input
            type="text"
            name="name"
            placeholder="الاسم"
            value="<?php echo $_GET['name']; ?>"
          />
          <br />
          <?php }else{ ?>
          <input type="text" name="name" placeholder="الاسم" /><br />
          <?php }?>

          <label>اسم المستخدم</label>
          <?php if (isset($_GET['uname'])) { ?>
          <input
            type="text"
            name="uname"
            placeholder="اسم المستخدم"
            value="<?php echo $_GET['uname']; ?>"
          /><br />
          <?php }else{ ?>
          <input type="text" name="uname" placeholder="اسم المستخدم" /><br />
          <?php }?>
          <label>العمر</label>
          <?php if (isset($_GET['name'])) { ?>
          <input
            type="number"
            name="age"
            placeholder="العمر"
            value="<?php echo $_GET['age']; ?>"
          /><br />
          <?php }else{ ?>
          <input type="number" name="age" min="1" placeholder="العمر" /><br />
          <?php }?>
          <label>كلمة المرور</label>
          <input type="password" name="password" placeholder="كلمة المرور" /><br />

          <label>إعادة كلمة المرور</label>
          <input
            type="password"
            name="re_password"
            placeholder="إعادة كلمة المرور"
          /><br />

          <button type="submit">الأشتراك</button>
          <a href="index2arabic.php" class="ca">لديك حساب بالفعل ؟</a>
        </form>
      </div>
      <div class="right-side">
        <h1>One<span>Py</span>One</h1>
        <img src="E-Learning/image/sign-up-animate (1).svg" alt="" />
      </div>
    </div>
    <script src="E-Learning/js/all.min.js"></script>
    <script src="E-Learning/js/bootstrap.bundle.min.js"></script>
    <script src="E-Learning/js/tasks.js"></script>
  </body>
</html>
