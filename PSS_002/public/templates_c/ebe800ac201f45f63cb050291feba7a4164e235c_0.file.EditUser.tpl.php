<?php
/* Smarty version 3.1.33, created on 2023-01-28 14:15:19
  from 'C:\xampp7.4\htdocs\PSS_002\app\views\EditUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d51fe70be3d3_41380221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe800ac201f45f63cb050291feba7a4164e235c' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\PSS_002\\app\\views\\EditUser.tpl',
      1 => 1674911670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d51fe70be3d3_41380221 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
    <title>Elements - Hyperspace by HTML5 UP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/PSS_002/public/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/PSS_002/public/assets/css/noscript.css"/>
    </noscript>
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
            <h1 class="major">Edytuj usera</h1>

            <section>
                <form action="/PSS_002/public/edit_user_post" method="POST" margin="5px">
                    <label for="id_login">Login: </label>
                    <input id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Nazwa'];?>
" type="text" name="login"/>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" type="hidden" name="userId"/>
                    <label for="id_pass">Email: </label>
                    <input id="id_pass" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['EMail'];?>
" type="email" name="email"/>

                    <label for="id_pass">Uprawnienia: </label>
                    <input id="id_pass" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Uprawnienia'];?>
" type="text" name="uprawnienia"/>
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

            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/PSS_002/public/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
