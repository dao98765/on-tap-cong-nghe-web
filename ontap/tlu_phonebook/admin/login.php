<?php
include '../partials-front/header.php';
include '../config.php';
?>

<main class="main-login vh-100 w-100 d-flex justify-content-center align-items-center">
    <form action="./process_login.php" method="post" class="form w-100">
        <a href="../index.php" class="mb-5 d-flex justify-content-center">
            <img src="../assets/img/logo (2).png" alt="" class="form__logo-img">
        </a>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Username</label>
            <input type="text" class="form-control form-control-login" required placeholder="Enter Username" name="txtUsername" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Enter Password" name="txtPass" id="inputPassword">
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked="checked">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="form-btn btn btn-primary w-100 fw-bold bg-transparent" name="btnLogin">SIGN IN</button>
        <div class="mt-3">
            Nếu chưa có tài khoản, chọn
            <a href="./register.php">Đăng  ký</a>
        </div>
    </form>
</main>

<?php
include '../partials-front/footer.php';
?>