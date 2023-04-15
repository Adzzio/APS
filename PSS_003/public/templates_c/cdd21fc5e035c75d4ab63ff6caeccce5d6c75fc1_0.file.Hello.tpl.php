<?php
/* Smarty version 3.1.33, created on 2023-01-25 19:22:40
  from 'C:\xampp7.4\htdocs\php_09_framework\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d17370777321_85304115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd21fc5e035c75d4ab63ff6caeccce5d6c75fc1' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_09_framework\\app\\views\\Hello.tpl',
      1 => 1674670927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d17370777321_85304115 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
    <title>Generic - Hyperspace by HTML5 UP</title>
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
            <h1 class="major">Przykłady na glowną</h1>
        </div>
    </section>

    <div class="inner" style="width: 100%;">
        <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allVideos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                <div class="inner-wrap"
                     style="border: 1px solid black; flex: 33%; padding: 15px; background-image: linear-gradient(to bottom right, #450564, #9a33cb);">
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
                    <a href="film?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['ID_Film'];?>
"> Zobacz mnie </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/php_09_framework/public/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
