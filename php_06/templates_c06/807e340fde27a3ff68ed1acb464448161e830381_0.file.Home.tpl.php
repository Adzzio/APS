<?php
/* Smarty version 3.1.30, created on 2022-11-27 17:39:52
  from "C:\xampp7.4\htdocs\php_06_namespaces\app\views\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_638392d82312d6_36126008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807e340fde27a3ff68ed1acb464448161e830381' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_06_namespaces\\app\\views\\Home.tpl',
      1 => 1669567190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_638392d82312d6_36126008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_784655704638392d82307b6_42040788', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188378635638392d8231015_37116387', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_784655704638392d82307b6_42040788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_188378635638392d8231015_37116387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <h3>Strona glowna</h2>
    </div>
<?php
}
}
/* {/block 'content'} */
}
