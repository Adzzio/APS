<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <title>Kalkulator</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/obiektowo/app/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/obiektowo/app/assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Kalkulator</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <form action="" method="POST">
                <label for="id_x">Kwota: </label>
                <input id="id_x" type="text" name="x" value=""/><br/>
                <label for="id_y">Lata: </label>
                <input id="id_y" type="text" name="y" value=""/><br/>
                <label for="id_z">Oprocentowanie: </label>
                <input id="id_z" type="text" name="z" value=""/><br/>
                <input type="submit" class="btn btn-success" value="Oblicz"/>
            </form>
            {if !empty($result)}
                <div class="inner" style="background: forestgreen; padding: 10px 15px;">
                    {$result}
                </div>
            {/if}

            {if !empty($error)}
                <div class="inner" style="background: indianred; padding: 10px 15px;">
                    {$error}
                </div>
            {/if}

    </section>


</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="/obiektowo/app/assets/js/jquery.min.js"></script>
<script src="/obiektowo/app/assets/js/jquery.scrollex.min.js"></script>
<script src="/obiektowo/app/assets/js/jquery.scrolly.min.js"></script>
<script src="/obiektowo/app/assets/js/browser.min.js"></script>
<script src="/obiektowo/app/assets/js/breakpoints.min.js"></script>
<script src="/obiektowo/app/assets/js/util.js"></script>
<script src="/obiektowo/app/assets/js/main.js"></script>

</body>

</html>