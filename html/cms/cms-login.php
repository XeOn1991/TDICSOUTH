<!DOCTYPE html>
<html lang="en-us">
<?php include '../header/header.php'; ?>

<body>
    <header>
        <img id="index-header-logo" src="/Icon/tdics-logo.webp" alt="tdics logo" />
        <img id="index-header-menu" src="/Icon/menu.webp" alt="tdics menu" />
    </header>
    <!--<section class="index-article" style="display: flex; flex-direction:column;margin-top:2%;">
        <header class="index-article-head">
            <h1 style="text-align: center; margin: 0; font-size:8vw;">Login</h1>
        </header>
    </section>-->
    <main>
        <form class="Login-CMS" action="">
            <section class="login-cms-head">
                <img id="login-cms-scetion-img" src="/Icon/Login Avatar.webp" alt="Login-Img">
            </section>
            <section class="login-cms-section">
                <h1 class="login-cms-head">CMS TDICSouth</h1>
            </section>
            <section class="login-cms-section">
                <h2 class="login-cms-user">Username</h2>
                <input type="text" id="Username" name="Username" placeholder="Username"><br>
            </section>
            <section class="login-cms-section">
                <h2 class="login-cms-password">Password</h2>
                <input type="password" id="Password" name="Password" placeholder="Password"><br>
            </section>
            <section class="login-cms-footer">
                <button class="login-cms-btn" type="button">Submit</button>
            </section>
        </form>
    </main>
</body>

</html>