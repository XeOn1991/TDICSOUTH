<!DOCTYPE html>
<html lang="en">
<?php include '../header/header.php'; ?>

<body>
    <header id="index-header">
        <img id="index-header-logo" src="/Icon/tdics-logo.webp" alt="tdics logo" />
        <img id="index-header-menu" src="/Icon/menu.webp" alt="tdics menu" />
    </header>
    <section class="index-article" style="display: flex; flex-direction:column;margin-top:12%;">
        <header>
            <h1 style="text-align: center; margin: 0; font-size:8vw;">Login</h1>
        </header>
    </section>
    <main>
        <form id="Login-CMS" style="margin:1rem 2rem 1rem 2rem;">
            <section id="login-cms-section">
                <h1 style="font-size: 5vw; padding-top: 1rem; margin:0;">CMS</h1>
                <H2 style="font-size: 4vw; margin:0;">TDICSouth</H2>
            </section>
            <section id="login-cms-section">
                <label for="Username">Username</label><br>
                <input type="text" id="Username" name="Username"><br>
            </section>
            <section id="login-cms-section">
                <label for="Password">Password</label><br>
                <input type="text" id="Password" name="Password"><br>
            </section>
            <section id="login-cms-section">
                <button id="login-cms-btn" type="button">Submit</button>
            </section>
        </form>
    </main>
    <?php include '../footer/footer.php'; ?>
</body>

</html>