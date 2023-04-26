<!DOCTYPE HTML>
<html>
<head>
    <title>Elements - Hyperspace by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/php_09_framework/public/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/php_09_framework/public/assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a href="/php_09_framework/public/" class="title">MoovieWeb</a>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner" margin="5px">
            <h1 class="major">Edytuj usera</h1>

            <section>
                <form action="/php_09_framework/public/edit_user_post" method="POST" margin="5px">
                    <label for="id_login">Login: </label>
                    <input id="id_login" value="{$user.Nazwa}" type="text" name="login"/>
                    <input value="{$userId}" type="hidden" name="userId"/>
                    <label for="id_pass">Email: </label>
                    <input id="id_pass" value="{$user.EMail}" type="email" name="email"/>

                    <label for="id_pass">Uprawnienia: </label>
                    <input id="id_pass" value="{$user.Uprawnienia}" type="text" name="uprawnienia"/>
                    <input margin="5px" type="submit" value="Zapisz" class="pure-button pure-button-primary"/>
                </form>
            </section>

            <footer id="footer" class="wrapper alt">
                <div class="inner">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved.</li>
                        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer>

            <script src="/php_09_framework/public/assets/js/jquery.min.js"></script>
            <script src="/php_09_framework/public/assets/js/jquery.scrollex.min.js"></script>
            <script src="/php_09_framework/public/assets/js/jquery.scrolly.min.js"></script>
            <script src="/php_09_framework/public/assets/js/browser.min.js"></script>
            <script src="/php_09_framework/public/assets/js/breakpoints.min.js"></script>
            <script src="/php_09_framework/public/assets/js/util.js"></script>
            <script src="/php_09_framework/public/assets/js/main.js"></script>

</body>
</html>
