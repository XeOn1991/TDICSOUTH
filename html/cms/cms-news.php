<!DOCTYPE html>
<html lang="en-us">

<?php include '../header/header.php'; ?>

<body>
    <header>
        <img id="index-header-logo" src="/Icon/tdics-logo.webp" alt="tdics logo" />
        <img id="index-header-menu" src="/Icon/menu.webp" alt="tdics menu" />
    </header>
    <section style="display: flex; flex-direction:column;margin-top:12%;">
        <header>
            <h1 style="text-align:center; margin:0; font-size:60px;">CMS</h1>
            <h2 style="text-align: center; margin:0; font-size:20px;">TDICSOUTH</h2>
        </header>
    </section>
    <main style="display: flex;flex-direction:column;flex-wrap:wrap;margin:1rem;justify-content:center;">
        <section id="cms-news-topic">
            <img id="cms-news-img" src="/Icon/News.webp" alt="Menu-News">
            <h1 style="margin: 1rem;">News > CRUD</h1>
        </section>
        <form id="cms-news-form" style="margin: 1rem 1rem 0 1rem ;" action="">
            <section id="cms-news-section">
                <h3 style="margin: 0.5rem;">ID : </h3>
                <input type="text" name="text" id="news-id" style="margin: 0.5rem;">
                <img id="news-check" src="/Icon/Check.webp" alt="Check">
            </section>
            <section id="cms-news-section">
                <h3 style="margin: 0.5rem;">Header : </h3>
                <input type="text" name="text" id="news-id" style="margin: 0.5rem;">
                <img id="news-check" src="/Icon/Check.webp" alt="Check">
            </section>
            <section id="cms-news-section">
                <h3 style="margin: 0.5rem;">Details : </h3>
                <textarea name="news-details" id="news-details" style="margin: 0.5rem;"></textarea>
                <img id="news-check" src="/Icon/Check.webp" alt="Check">
            </section>
            <section id="cms-news-pic">
                <section id="cms-news-pic-upload">
                    <h3 style="margin: 0.5rem;">Picture : </h3>
                    <input type="file" name="file" id="news-pic" style="margin: 0.5rem;">
                    <img id="news-check" src="/Icon/Check.webp" alt="Check">
                </section>
                <section id="cms-news-pic-upload">
                    <input type="file" name="file" id="news-pic" style="margin: 0.5rem;">
                    <img id="news-check" src="/Icon/Check.webp" alt="Check">
                </section>
                <section id="cms-news-pic-upload">
                    <input type="file" name="file" id="news-pic" style="margin: 0.5rem;">
                    <img id="news-check" src="/Icon/Check.webp" alt="Check">
                </section>
                <section id="cms-news-pic-upload">
                    <input type="file" name="file" id="news-pic" style="margin: 0.5rem;">
                    <img id="news-check" src="/Icon/Check.webp" alt="Check">
                </section>
                <section id="cms-news-pic-upload">
                    <input type="file" name="file" id="news-pic" style="margin: 0.5rem;">
                    <img id="news-check" src="/Icon/Check.webp" alt="Check">
                </section>
            </section>
            <section id="cms-news-section">
                <h3 style="margin: 0.5rem;">Date : </h3>
                <input type="date" name="text" id="news-id" style="margin: 0.5rem;">
                <img id="news-check" src="/Icon/Check.webp" alt="Check">
            </section>
            <section id="cms-news-section">
                <h3 style="margin: 0.5rem;">Time : </h3>
                <input type="time" name="time" id="news-id" style="margin: 0.5rem;">
                <img id="news-check" src="/Icon/Check.webp" alt="Check">
            </section>
            <section id="cms-news-manu">
                <section id="cms-news-section-menu">
                    <img id="cms-news-img" src="/Icon/Back.webp" alt="Menu-News">
                    <h4 style="margin: 0.3rem 0 0.3rem 0;">Back</h4>
                </section>
                <section id="cms-news-section-menu">
                    <img id="cms-news-img" src="/Icon/Delete.webp" alt="Menu-News">
                    <h4 style="margin: 0.3rem 0 0.3rem 0;">Delete</h4>
                </section>
                <section id="cms-news-section-menu">
                    <img id="cms-news-img" src="/Icon/Edit.webp" alt="Menu-News">
                    <h4 style="margin: 0.3rem 0 0.3rem 0;">Edit</h4>
                </section>
                <section id="cms-news-section-menu">
                    <img id="cms-news-img" src="/Icon/Add.webp" alt="Menu-News">
                    <h4 style="margin: 0.3rem 0 0.3rem 0;">Insert</h4>
                </section>
            </section>
        </form>
    </main>
    <section>
        <article style="margin: 1.5rem;">
            <hr style="border: 1.5px solid #F5F5F5;border-radius: 5px;">
            <h5 style="text-align: center;font-size:3vw;">Copyright @ 2024 TDICSouth.com all rights reserved</h5>
            <hr style="border: 1.5px solid #ffffff;">
        </article>
    </section>
</body>

</html>