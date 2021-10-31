<?php
include '../partials-front/header.php';
include '../config.php';
?>

<main class="main-login vh-100 w-100 d-flex justify-content-center align-items-center">
    <form action="./process_register.php" method="post" class="form w-100">
        <a href="../index.php" class="mb-5 d-flex justify-content-center">
            <img src="../assets/img/logo (2).png" alt="" class="form__logo-img">
        </a>
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Enter Username</label>
            <input type="text" class="form-control form-control-login" required placeholder="Enter Username" name="txtUsername" id="inputUsername">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Enter Email</label>
            <input type="email" class="form-control form-control-login" required placeholder="Enter Email" name="txtEmail" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Enter Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Enter Password" name="txtPass" id="inputPassword">
        </div>
        <div class="mb-3">
            <label for="inputRePassword" class="form-label">Re-enter Password</label>
            <input type="password" class="form-control form-control-login" required placeholder="Re-enter Password" name="txtRePass" id="inputRePassword">
        </div>
        <button type="submit" class="form-btn btn btn-primary w-100 fw-bold bg-transparent" name="btnRegister">Register</button>
        <div class="mt-3">
            Nếu đã có tài khoản, chọn
            <a href="./login.php">Đăng  nhập</a>
        </div>
    </form>
</main>

<?php
include '../partials-front/footer.php';
?>