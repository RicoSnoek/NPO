<?php /* Smarty version Smarty-3.1.18, created on 2014-10-08 11:44:39
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2721554216c2f6b6007-85864465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1412678443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2721554216c2f6b6007-85864465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54216c2f830296_72714102',
  'variables' => 
  array (
    'total_pages' => 0,
    'page_cur' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54216c2f830296_72714102')) {function content_54216c2f830296_72714102($_smarty_tpl) {?><div id="knopbox">
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <?php if ($_smarty_tpl->tpl_vars['page_cur']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
        <button type="button" class="page_item on"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
    <?php } else { ?>
        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> 
        <button type="button" class="page_item"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button></a>
    <?php }?>
<?php }} ?>
</div><?php }} ?>
