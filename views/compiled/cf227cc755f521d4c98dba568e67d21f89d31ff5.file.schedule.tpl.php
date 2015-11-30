<?php /* Smarty version Smarty-3.1.18, created on 2014-09-23 14:30:58
         compiled from "views\schedule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215465421680224c784-87175183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf227cc755f521d4c98dba568e67d21f89d31ff5' => 
    array (
      0 => 'views\\schedule.tpl',
      1 => 1411056062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215465421680224c784-87175183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_542168027dff04_47469537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542168027dff04_47469537')) {function content_542168027dff04_47469537($_smarty_tpl) {?><section>

<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>

<div id="info">
	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['Title'];?>
</h1>
		<content><p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p></content>
		<content><p><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</p></content>
	</article>
</div>

<?php } ?>
</section><?php }} ?>
