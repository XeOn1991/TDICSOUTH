<!DOCTYPE html>
<html lang="en-us">
<?php include '../header/header.php'; ?>

<body>
    <header>
        <img id="index-header-logo" src="/Icon/tdics-logo.webp" alt="tdics logo" />
        <img id="index-header-menu" src="/Icon/menu.webp" alt="tdics menu" />
    </header>
    <section class="index-article" style="display: flex; flex-direction:column;margin-top:12%;">
        <header style="margin-bottom: 4rem;">
            <h1 style="text-align: center; margin: 0; font-size:8vw;">Login</h1>
        </header>
    </section>
    <main>
        <form id="Login-CMS" style="margin: 2rem ;" action="">
            <section id="login-cms-head">
                <img id="login-cms-scetion-img" src="/Icon/Login Avatar.webp" alt="Login-Img">
            </section>
            <section id="login-cms-section">
                <h1 style="font-size: 35px; margin:3rem 0 0 0;">CMS TDICSouth</h1>
                <!--<H2 style="font-size: 20px; margin:0;">TDICSouth</H2>-->
            </section>
            <section id="login-cms-section">
                <h2 style="margin: 0 0 0 2.5rem;float:left;">Username</h2>
                <input type="text" id="Username" name="Username" placeholder="Username"><br>
            </section>
            <section id="login-cms-section">
                <h2 style="margin: 0 0 0 2.5rem;float:left;">Password</h2>
                <input type="password" id="Password" name="Password" placeholder="Password"><br>
            </section>
            <section style="margin: 0.6rem 0 1.5rem 0;">
                <button id="login-cms-btn" type="button">Submit</button>
            </section>
        </form>
    </main>
    <?php include '../footer/footer.php'; ?>
</body>

</html>