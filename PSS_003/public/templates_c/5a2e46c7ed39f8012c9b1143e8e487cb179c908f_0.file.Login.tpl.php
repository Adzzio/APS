<?php
/* Smarty version 3.1.33, created on 2023-01-28 14:14:50
  from 'C:\xampp7.4\htdocs\php_09_framework\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d51fca5cd770_53947080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2e46c7ed39f8012c9b1143e8e487cb179c908f' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_09_framework\\app\\views\\Login.tpl',
      1 => 1674911670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d51fca5cd770_53947080 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1 class="major">Zaloguj sie</h1>

            <!-- Text -->
            <section>
                <form action="/php_09_framework/public/login_post" method="POST" margin="5px">
                    <label for="id_login">login: </label>
                    <input id="id_login" type="text" name="login" />
                    <label for="id_pass">pass: </label>
                    <input id="id_pass" type="password" name="pass" />
                    <input margin="5px" type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
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
</html><?php }
}
