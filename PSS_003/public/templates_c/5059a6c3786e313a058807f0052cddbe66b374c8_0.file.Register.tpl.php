<?php
/* Smarty version 3.1.33, created on 2023-01-28 14:14:47
  from 'C:\xampp7.4\htdocs\php_09_framework\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d51fc75284d8_52679697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5059a6c3786e313a058807f0052cddbe66b374c8' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_09_framework\\app\\views\\Register.tpl',
      1 => 1674911670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d51fc75284d8_52679697 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1 class="major">Rejestracja</h1>

            <!-- Text -->
            <section>
                <form action="/php_09_framework/public/register_post" method="POST" margin="5px">
                    <label for="id_login">Login: </label>
                    <input id="id_login" type="text" name="login" />
                    <label for="id_email">Email: </label>
                    <input id="id_email" type="email" name="email" />

                    <label for="id_pass">pass: </label>
                    <input id="id_pass" type="password" name="password" />
                    <label for="id_pass">Powtórz hasło: </label>
                    <input id="id_pass" type="password" name="pass_repeat" />
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
</html>
<?php }
}
