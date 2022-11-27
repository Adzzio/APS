<?php
/* Smarty version 3.1.30, created on 2022-11-27 18:00:42
  from "C:\xampp7.4\htdocs\php_07_routing\app\views\HomeView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_638397ba6f96e0_57089098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce50eb44f31a148cb6efefc0b0a16d5a99fcf959' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_07_routing\\app\\views\\HomeView.tpl',
      1 => 1669568440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_638397ba6f96e0_57089098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_781582418638397ba6f9337_56649845', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_781582418638397ba6f9337_56649845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
home"  class="pure-menu-heading pure-menu-link">Strona glowna</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow"  class="pure-menu-heading pure-menu-link">Kalukator</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
        <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
    </div>

    <div>
        <h1>Pozdrawiam</h1>
    </div>

<?php
}
}
/* {/block 'content'} */
}
