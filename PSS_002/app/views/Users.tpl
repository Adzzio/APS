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
            <h1 class="major">Lista użytkowników</h1>
        </div>
    </section>

    <div class="inner" style="width: 100%;">
        <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
            <table class="table">
                <thread>
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                        <th>Email</th>
                        <th>Uprawnienia</th>
                        <th>Edycja</th>
                        <th>Usun</th>
                    </tr>
                </thread>
                <tbody>
                {foreach from=$allUsers item=user}
                    <tr>
                        <th>{$user.idUser}</th>
                        <th>{$user.Nazwa}</th>
                        <th>{$user.EMail}</th>
                        <th>{$user.Uprawnienia}</th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/PSS_002/public/edit_user?id={$user.idUser}">
                                Edytuj
                            </a>
                        </th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/PSS_002/public/delete_user?id={$user.idUser}">
                                Usun
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