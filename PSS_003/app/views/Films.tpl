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
    <a href="/php_09_framework/public/" class="title">MoovieWeb</a>
    <nav>
        <ul>
            <li><a href="/php_09_framework/public/" class="active">Filmy</a></li>
            {if !empty({$smarty.session.user})}
                <li><a href="">{$smarty.session.user.Nazwa}</a></li>
                <li><a href="/php_09_framework/public/list_users">Panel użytkowników</a></li>
                <li><a href="/php_09_framework/public/list_films">Panel filmów</a></li>
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
            <h1 class="major">Lista filmów</h1>
        </div>
    </section>

    <div class="inner" style="width: 100%;">
        <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
            <table class="table">
                <thread>
                    <tr>
                        <th>#</th>
                        <th>Tytul</th>
                        <th>Edycja</th>
                        <th>Usuń</th>
                    </tr>
                </thread>
                <tbody>
                {foreach from=$allVideos item=video}
                    <tr>
                        <th>{$video.ID_Film}</th>
                        <th>{$video.Tytul}</th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/php_09_framework/public/edit_film?id={$video.ID_Film}">
                                Edytuj
                            </a>
                        </th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/php_09_framework/public/delete_film?id={$video.ID_Film}">
                                Usuń
                            </a>
                        </th>
                    </tr>
                {/foreach}
                </tbody>
            </table>

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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>