<!DOCTYPE HTML>
<html>
<head>
    <title>Generic - Hyperspace by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/PSS_002/public/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/PSS_002/public/assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a href="/PSS_002/public/" class="title">MoovieWeb</a>
    <nav>
        <ul>
            <li><a href="/PSS_002/public/" class="active">Filmy</a></li>
            {if !empty({$smarty.session.user})}
                <li><a href="">{$smarty.session.user.Nazwa}</a></li>
                {if {$smarty.session.user.Uprawnienia == "admin"}}
                    <li><a href="/PSS_002/public/list_users">Panel użytkowników</a></li>
                    <li><a href="/PSS_002/public/list_films">Panel filmów</a></li>
                {/if}
                <li><a href="logout">Wyloguj sie</a></li>
            {else}
                <li><a href="login">Zaloguj sie</a></li>
                <li><a href="register">Zarejestruj się</a></li>
            {/if}
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Przykłady na glowną</h1>
        </div>
    </section>

    <div class="inner" style="width: 100%;">
        <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
            {foreach from=$allVideos item=video}
                <div class="inner-wrap"
                     style="border: 1px solid black; flex: 33%; padding: 15px; background-image: linear-gradient(to bottom right, #450564, #9a33cb);">
                    <p>Tytuł filmu: {$video.Tytul}<p>
                    <p>Obsada:</p>
                    <p>Imię: {$video.obsada.Imie}</p>
                    <p>Nazwisko: {$video.obsada.Nazwisko}</p>
                    <p>Data urodzenia: {$video.obsada.Data_Urodzenia}</p>
                    <p>Imię: {$video.obsada.Imie}</p>
                    <p>Nazwisko: {$video.obsada.Nazwisko}</p>
                    <p>Data urodzenia: {$video.obsada.Data_Urodzenia}</p>
                    <p>Rezyser: </p>
                    <p>Imie rezysera: {$video.rezyser.Imie}</p>
                    <p>Nazwisko rezysera: {$video.rezyser.Nazwisko}</p>
                    <p>Wiek rezysera: {$video.rezyser.Wiek}</p>
                    <a href="film?id={$video.ID_Film}"> Zobacz mnie </a>
                </div>
            {/foreach}
        </div>
    </div>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="/PSS_002/public/assets/js/jquery.min.js"></script>
<script src="/PSS_002/public/assets/js/jquery.scrollex.min.js"></script>
<script src="/PSS_002/public/assets/js/jquery.scrolly.min.js"></script>
<script src="/PSS_002/public/assets/js/browser.min.js"></script>
<script src="/PSS_002/public/assets/js/breakpoints.min.js"></script>
<script src="/PSS_002/public/assets/js/util.js"></script>
<script src="/PSS_002/public/assets/js/main.js"></script>

</body>
</html>