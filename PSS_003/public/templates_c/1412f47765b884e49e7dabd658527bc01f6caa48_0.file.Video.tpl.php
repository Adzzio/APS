<?php
/* Smarty version 3.1.33, created on 2023-01-27 19:49:40
  from 'C:\xampp7.4\htdocs\php_09_framework\app\views\Video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d41cc479e1b6_77222272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1412f47765b884e49e7dabd658527bc01f6caa48' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_09_framework\\app\\views\\Video.tpl',
      1 => 1674845377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d41cc479e1b6_77222272 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
            <?php ob_start();
echo $_SESSION['user'];
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
                <li><a href=""><?php echo $_SESSION['user']['Nazwa'];?>
</a></li>
                <?php ob_start();
echo $_SESSION['user']['Uprawnienia'] == "admin";
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                    <li><a href="/php_09_framework/public/list_users">Panel użytkowników</a></li>
                    <li><a href="/php_09_framework/public/list_films">Panel filmów</a></li>
                <?php }?>
                <li><a href="logout">Wyloguj sie</a></li>
            <?php } else { ?>
                <li><a href="login">Zaloguj sie</a></li>
                <li><a href="register">Zarejestruj się</a></li>
            <?php }?>
        </ul>
    </nav>
</header>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major"><?php echo $_smarty_tpl->tpl_vars['video']->value['Tytul'];?>
</h1>
        </div>
    </section>

    <div class="container" style="width: 100%; padding: 15px; margin:15px;">
        <div style="display: flex; width:100%; flex-direction: column">
            <p>Tytuł filmu: <?php echo $_smarty_tpl->tpl_vars['video']->value['Tytul'];?>
<p>
            <p>Obsada:</p>
            <p>Imię: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Imie'];?>
</p>
            <p>Nazwisko: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Nazwisko'];?>
</p>
            <p>Data urodzenia: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Data_Urodzenia'];?>
</p>
            <p>Imię: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Imie'];?>
</p>
            <p>Nazwisko: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Nazwisko'];?>
</p>
            <p>Data urodzenia: <?php echo $_smarty_tpl->tpl_vars['video']->value['obsada']['Data_Urodzenia'];?>
</p>
            <p>Rezyser: </p>
            <p>Imie rezysera: <?php echo $_smarty_tpl->tpl_vars['video']->value['rezyser']['Imie'];?>
</p>
            <p>Nazwisko rezysera: <?php echo $_smarty_tpl->tpl_vars['video']->value['rezyser']['Nazwisko'];?>
</p>
            <p>Wiek rezysera: <?php echo $_smarty_tpl->tpl_vars['video']->value['rezyser']['Wiek'];?>
</p>

        </div>
        <div class="row"
             style="text-align: left; display: flex; flex-direction: column; width:100%; justify-content: center; align-content: center; align-items: center">
            <h3>Oceń film</h3>
            <?php ob_start();
echo $_SESSION['user'];
$_prefixVariable3 = ob_get_clean();
if (!empty($_prefixVariable3)) {?>
                <form method="POST" action="/php_09_framework/public/add_star_post">
                    <label for="ocena">Ocena: </label>
                    <input id="ocena" type="number" name="ocena" style="color: black;" min="1" max="5"/>
                    <input type="hidden" name="film" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['ID_Film'];?>
">
                    <input type="hidden" name="user" value="<?php echo $_SESSION['user']['idUser'];?>
">
                    <input type="submit" value="Oceń"/>
                </form>
            <?php }?>
        </div>
        <div class="row" style="text-align: left; display: flex; flex-direction: column; width:100%;">
            <h3>Lista ocen</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allStars']->value, 'star');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['star']->value) {
?>
                <div>
                    <p>Ocene dodał: <?php echo $_smarty_tpl->tpl_vars['star']->value['username'];?>
</p>
                    <p>Ocena: <?php echo $_smarty_tpl->tpl_vars['star']->value['Ocena'];?>
</p>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <a href="/php_09_framework/public/"> Powrót do listy filmów </a>
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
