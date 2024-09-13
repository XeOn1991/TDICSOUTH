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
        <section class="index-contact">
            <article class="article-detail" style="text-align:center;">
                <h1 style="margin:0 0 1rem 0;font-size: 5vw;">Get In Touch</h1>
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
            <footer>
                <hr style="margin:0.5rem; border:1.5px solid #F5F5F5;border-radius: 5px;">
            </footer>
        </section>
        <section class="index-contact">
            <article class="article-detail" style="text-align:center;">
                <h1 style="margin:0 0 1rem 0;font-size: 5vw;">TDICS MAP</h1>
                <p style="margin:0 0 1rem 0;font-size: 3vw;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </article>
            <article class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1664.9368970705898!2d100.36753119381513!3d7.019910900834058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d27d510bf7eeb%3A0x90737eca01ab49cd!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4l-C4teC4lOC4tOC4gSDguYDguIvguLLguJfguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sen!2sth!4v1726203411370!5m2!1sen!2sth" width="100%" height="450" style="border:0;box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.2);border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>
            <footer>
                <hr style="margin:0.5rem; border:1.5px solid #F5F5F5;border-radius: 5px;">
            </footer>
        </section>
        <section class="index-contact">
            <article class="article-detail" style="text-align:center;">
                <h1 style="margin:0 0 1rem 0;font-size: 5vw;">TDICS Contact</h1>
            </article>
            <article class="contact-main">
                <section class="contact-main-support">
                    <img class="img-contact-main" src="/Icon/telephone.webp" alt="tdics news" loading="lazy">
                    <h1 style="margin: 0.5rem 0 0.5rem 0;">support</h1>
                    <p>+66-62-0157843</p>
                    <p>Mon - Fri, 9AM - 5PM</p>
                </section>
                <section class="contact-main-marketing">
                    <img class="img-contact-main" src="/Icon/telephone.webp" alt="tdics news" loading="lazy">
                    <h1 style="margin: 0.5rem 0 0.5rem 0;">support</h1>
                    <p>+66-62-0157843</p>
                    <p>Mon - Fri, 9AM - 5PM</p>
                </section>
                <section class="contact-main-office">
                    <img class="img-contact-main" src="/Icon/telephone.webp" alt="tdics news" loading="lazy">
                    <h1 style="margin: 0.5rem 0 0.5rem 0;">support</h1>
                    <p>+66-62-0157843</p>
                    <p>Mon - Fri, 9AM - 5PM</p>
                </section>
                <section class="contact-main-email">
                    <img class="img-contact-main" src="/Icon/email.webp" alt="tdics news" loading="lazy">
                    <h1 style="margin: 0.5rem 0 0.5rem 0;">Email</h1>
                    <p>admin@tdicsouth.com</p>
                    <p>Mon - Fri, 9AM - 5PM</p>
                </section>
            </article>
            <footer>
                <hr style="margin:0.5rem; border:1.5px solid #F5F5F5;border-radius: 5px;">
            </footer>
        </section>
    </main>
    <?php include 'footer/footer.php'; ?>
</body>

</html>