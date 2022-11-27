<?php
/* Smarty version 3.1.30, created on 2022-11-27 17:51:01
  from "C:\xampp7.4\htdocs\php_07_routing\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63839575b4bd25_69480468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6accaa55acf0ecd62f0fed9eb8eae89ee169c5' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\php_07_routing\\app\\views\\CalcView.tpl',
      1 => 1669567849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63839575b4bd25_69480468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153356131163839575b4b904_42702963', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_153356131163839575b4b904_42702963 extends Smarty_Internal_Block
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

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<!--    <div class="form-group">-->
		<!--        <label for="id_x">Kwota</label>-->
		<!--        <input type="text" class="form-control" value="--><?php echo '<?php ';?>//print($x ?? ' '); <?php echo '?>';?>
		<!--"id="id_x" placeholder="Password">-->
		<!--    </div>-->
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value=""/><br/>
		<label for="id_y">Lata: </label>
		<input id="id_y" type="text" name="y" value=""/><br/>
		<label for="id_z">Oprocentowanie: </label>
		<input id="id_z" type="text" name="z" value=""/><br/>
		<input type="submit" class="btn btn-success" value="Oblicz"/>
	</form>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
