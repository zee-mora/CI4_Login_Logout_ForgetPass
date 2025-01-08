<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="<?= base_url('public/css/index.css') ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title ?></title>
</head>
<body>
<form action="<?base_url('login') ?>" method="post">
    <!-- NAVBAR CREATION -->
   <header class="header">
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">Portfolio</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
          <a href="#">Help</a>
    </nav>
    
    </form>
   </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>Form Login</h2>
            <div class="text-item">
                <h2>Welcome! <br><span>
                    To Our Project
                </span></h2>
                <p>Bambang Trash Metal & Dodo Punk Forever </p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="text" required>
                        <label >Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button class="btn">Login In</button>
                    <div class="create-account">
                        <p>Already have a account? <a href="<?= base_url('Login/v_login') ?>" class="register-link">Sign In</a></p>
                    </div>
                </form>
            </div>
            
     <!-- SIGN UP FORM CREATION -->

    <script src="index.js"></script>
</body>

</html>