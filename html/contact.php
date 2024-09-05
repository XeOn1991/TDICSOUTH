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
        <section class="index-article">
            <article class="article-detail" style="text-align:center;">
                <h1 style="margin:0;font-size: 5vw;">Get In Touch</h1>
                <p style="margin:0;font-size: 3vw;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            </article>
        </section>
        <section class="index-contact">
            <form class="contact-form" action="">
                <section class="contact-form-name">
                    <label for="Name">Name</label><br>
                    <input type="text" id="Name" name="Name" placeholder="Mr.Example">
                </section>
                <section class="contact-form-mail">
                    <label for="Email">Email Address</label><br>
                    <input type="email" id="Email" name="Email" placeholder="Example@Mail.com"><br>
                </section>
                <section class="contact-form-message">
                    <label for="Message">Message</label><br>
                    <textarea id="Message" name="Message" placeholder="Write something.."></textarea>
                </section>
                <section class="contact-form-button">
                    <button id="contact-reset-button" type="button">Reset</button>
                    <button id="contact-submit-button" type="button">Submit</button>
                </section>
            </form>
        </section>
        <section class="index-contact">

        </section>
        <!--<article style="margin: 1rem;">
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
                    <section style="flex: 45%;width: 45%;margin: 0.5rem;">
                        <button id="contact-reset-button" type="button">Reset</button>
                        <button id="contact-submit-button" type="button">Submit</button>
                    </section>
                </form>
            </section>
            <hr style="margin:0.5rem; border:1.5px solid #F5F5F5;border-radius: 5px;">
            <section class="section-history">
                <article class="article-detail" style="display:flex; flex-direction: column; margin: 1rem;">
                    <h1 style="margin:0;font-size: 5vw;">MAP</h1>
                    <p style="margin:0;font-size: 3vw;text-align:justify; text-justify: inter-word;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <img style="display:block;margin-top:1rem; margin-left:auto;margin-right:auto;max-width:100%;" src="/Icon/Map.webp" alt="tdics map">
                </article>
            </section>
            <section>
                <article style="display:flex; flex-direction: column; margin: 1rem;">
                    <h1 style="margin:0;font-size: 5vw;">Main Contact</h1>
                </article>
                <section class="section-contact">
                    <img style="display:block;margin-left:auto;margin-right:auto;max-width:80px;" src="/Icon/email.webp" alt="tdics contact">
                    <article class="contact-detail" style="margin: 1rem;">
                        <h1 style="margin:0; font-size:5vw; text-align:center;">Sale@tdicsouth.com</h1>
                    </article>
                </section>
                <section class="section-contact">
                    <img style="display:block;margin-left:auto;margin-right:auto;max-width:80px;" src="/Icon/telephone.webp" alt="tdics contact">
                    <article class="contact-detail" style="margin: 1rem;">
                        <h1 style="margin:0; font-size:5vw; text-align:center;">Tel : 074-805969 - 71</h1>
                    </article>
                </section>
            </section>
            <hr style="margin:0.5rem; border:1.5px solid #F5F5F5;border-radius: 5px;">
        </article>-->
    </main>
    <?php include 'footer/footer.php'; ?>
</body>

</html>