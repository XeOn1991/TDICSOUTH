<!DOCTYPE html>
<html lang="en-us">
<?php include 'header/header.php'; ?>

<body>
    <header id="index-header">
        <img id="index-header-logo" src="/Icon/tdics-logo.webp" alt="tdics logo" />
        <img id="index-header-menu" src="/Icon/menu.webp" alt="tdics menu" />
    </header>
    <section class="index-article" style="display: flex; flex-direction:column;margin-top:12%;">
        <header>
            <h1 style="text-align: center; margin: 0; font-size:8vw;">TDICS Contact Us</h1>
        </header>
    </section>
    <main>
        <article style="margin: 1rem;">
            <section class="section-history">
                <article class="article-detail" style="display:flex; flex-direction: column; margin: 1rem;">
                    <h1 style="margin:0;font-size: 5vw;">Get In Touch</h1>
                    <p style="margin:0;font-size: 3vw;text-align:justify; text-justify: inter-word;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </article>
            </section>
            <section>
                <form id="contact-form" action="">
                    <section style="flex: 45%;width: 45%;margin: 0.5rem;">
                        <label for="Name">Name</label><br>
                        <input type="text" id="Name" name="Name">
                    </section>
                    <section style="flex: 45%;width: 45%;margin: 0.5rem;">
                        <label for="Email">Email Address</label><br>
                        <input type="email" id="Email" name="Email"><br>
                    </section>
                    <section style="flex: 100%;width: 45%;margin: 0.5rem;">
                        <label for="Message">Message</label><br>
                        <textarea id="Message" name="Message" placeholder="Write something.."></textarea>
                    </section>
                    <section style="flex: 100%;width: 45%;margin: 0.5rem;">
                        
                    </section>
                </form>
            </section>

        </article>
    </main>
    <?php include 'footer/footer.php'; ?>
</body>

</html>