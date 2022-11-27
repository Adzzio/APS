<?php
/* Smarty version 3.1.30, created on 2022-11-27 17:39:15
  from "C:\xampp7.4\htdocs\php_06_namespaces\app\views\templates\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_638392b3ec3f15_49177418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4032f7f397b6bdec434250ea961584cab10d70f9' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_06_namespaces\\app\\views\\templates\\Home.tpl',
      1 => 1669567150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638392b3ec3f15_49177418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929901188638392b3ec34e5_79623345', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225870132638392b3ec3c78_49244781', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1929901188638392b3ec34e5_79623345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1225870132638392b3ec3c78_49244781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Strona glowna</h2>
<?php
}
}
/* {/block 'content'} */
}
