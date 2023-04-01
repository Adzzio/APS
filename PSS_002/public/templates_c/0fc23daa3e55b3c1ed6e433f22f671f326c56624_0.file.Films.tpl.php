<?php
/* Smarty version 3.1.33, created on 2023-01-28 14:31:58
  from 'C:\xampp7.4\htdocs\PSS_002\app\views\Films.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d523ce2a4d64_74988759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc23daa3e55b3c1ed6e433f22f671f326c56624' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\PSS_002\\app\\views\\Films.tpl',
      1 => 1674912520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d523ce2a4d64_74988759 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a href="/PSS_002/public/" class="title">MoovieWeb</a>
    <nav>
        <ul>
            <li><a href="/PSS_002/public/" class="active">Filmy</a></li>
            <?php ob_start();
echo $_SESSION['user'];
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
                <li><a href=""><?php echo $_SESSION['user']['Nazwa'];?>
</a></li>
                <li><a href="/PSS_002/public/list_users">Panel użytkowników</a></li>
                <li><a href="/PSS_002/public/list_films">Panel filmów</a></li>
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
            <h1 class="major">Lista filmów</h1>
        </div>
    </section>

    <div class="inner" style="width: 100%;">
        <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
            <table class="table">
                <thread>
                    <tr>
                        <th>#</th>
                        <th>Tytul</th>
                        <th>Edycja</th>
                        <th>Usuń</th>
                    </tr>
                </thread>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allVideos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['video']->value['ID_Film'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['video']->value['Tytul'];?>
</th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/PSS_002/public/edit_film?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['ID_Film'];?>
">
                                Edytuj
                            </a>
                        </th>
                        <th>
                            <a style="color:white; background-color: #6d1a9d; border 1px solid #811ae1"
                               href="/PSS_002/public/delete_film?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['ID_Film'];?>
">
                                Usuń
                            </a>
                        </th>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
