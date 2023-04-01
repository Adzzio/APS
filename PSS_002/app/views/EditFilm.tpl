<!DOCTYPE HTML>
<html>
<head>
    <title>Elements - Hyperspace by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <a href="/PSS_002/public/" class="title">MoovieWeb</a>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner" margin="5px">
            <h1 class="major">Edytuj film</h1>

            <!-- Text -->
            <section>
                <form action="/PSS_002/public/register_post" method="POST" margin="5px">
                    <label for="id_tytol">Tytul: </label>
                    <input id="id_tytol" type="text" name="tytol" />
                    <label for="id_rezyser">IDobsada: </label>
                    <input id="id_rezyser" type="text" name="rezyser" />

                    <label for="id_obsada">IDrezyser: </label>
                    <input id="id_obsada" type="text" name="obsada" />
                    <input margin="5px" type="submit" value="edytuj" class="pure-button pure-button-primary"/>
                </form>
            </section>


            <!-- Footer -->
            <footer id="footer" class="wrapper alt">
                <div class="inner">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
