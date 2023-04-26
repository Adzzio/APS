<?php
/* Smarty version 3.1.33, created on 2023-01-28 14:45:33
  from 'C:\xampp7.4\htdocs\php_09_framework\app\views\EditFilm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d526fdc49c30_75507042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3018cee740b4ba3e16162de43933263404a653' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_09_framework\\app\\views\\EditFilm.tpl',
      1 => 1674913524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d526fdc49c30_75507042 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
    <a href="/php_09_framework/public/" class="title">MoovieWeb</a>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner" margin="5px">
            <h1 class="major">Edytuj film</h1>

            <!-- Text -->
            <section>
                <form action="/php_09_framework/public/register_post" method="POST" margin="5px">
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
            <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
