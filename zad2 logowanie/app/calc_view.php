<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <title>Kalkulator</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
            <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
                <!--    <div class="form-group">-->
                <!--        <label for="id_x">Kwota</label>-->
                <!--        <input type="text" class="form-control" value="--><?php //print($x ?? ' '); ?><!--"id="id_x" placeholder="Password">-->
                <!--    </div>-->
                <label for="id_x">Kwota: </label>
                <input id="id_x" type="text" name="x" value="<?php print($x ?? ' '); ?>" /><br />
                <label for="id_y">Lata: </label>
                <input id="id_y" type="text" name="y" value="<?php print($y ?? ' '); ?>" /><br />
                <label for="id_z">Oprocentowanie: </label>
                <input id="id_z" type="text" name="z" value="<?php print($z ?? ' '); ?>" /><br />
                <input type="submit" class="btn btn-success" value="Oblicz" />
            </form>

            <?php
            //wyświeltenie listy błędów, jeśli istnieją
            if (isset($messages)) {
                if (count ( $messages ) > 0) {
                    echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
                    foreach ( $messages as $key => $msg ) {
                        echo '<li>'.$msg.'</li>';
                    }
                    echo '</ol>';
                }
            }
            ?>

            <?php if (isset($result)){ ?>
                <div class="inner">
                    <?php echo 'Wynik: '.$result; ?>
                </div>
            <?php } ?>
    </section>


</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
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