<!DOCTYPE HTML>
<html>
<head>
    <title>Generic - Hyperspace by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
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
            <h1 class="major">{$video.Tytul}</h1>
        </div>
    </section>

    <div class="container" style="width: 100%; padding: 15px; margin:15px;">
        <div style="display: flex; width:100%; flex-direction: column">
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

        </div>
        <div class="row"
             style="text-align: left; display: flex; flex-direction: column; width:100%; justify-content: center; align-content: center; align-items: center">
            <h3>Oceń film</h3>
            {if !empty({$smarty.session.user})}
                <form method="POST" action="/PSS_002/public/add_star_post">
                    <label for="ocena">Ocena: </label>
                    <input id="ocena" type="number" name="ocena" style="color: black;" min="1" max="5"/>
                    <input type="hidden" name="film" value="{$video.ID_Film}">
                    <input type="hidden" name="user" value="{$smarty.session.user.idUser}">
                    <input type="submit" value="Oceń"/>
                </form>
            {/if}
        </div>
        <div class="row" style="text-align: left; display: flex; flex-direction: column; width:100%;">
            <h3>Lista ocen</h3>
            {foreach from=$allStars item=star}
                <div>
                    <p>Ocene dodał: {$star.username}</p>
                    <p>Ocena: {$star.Ocena}</p>
                </div>
            {/foreach}
        </div>
    </div>
    <a href="/PSS_002/public/"> Powrót do listy filmów </a>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>