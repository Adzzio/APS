<?php
/* Smarty version 3.1.33, created on 2023-04-01 14:36:12
  from 'C:\xampp7.4\htdocs\PSS_003\app\views\VideosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6428253cce63d2_35408331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983f4cb10c0958e622fe7815f2aeaa84b44c365e' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\PSS_003\\app\\views\\VideosList.tpl',
      1 => 1680352543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6428253cce63d2_35408331 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="inner" id="videosList" style="width: 100%;">
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
</div><?php }
}
