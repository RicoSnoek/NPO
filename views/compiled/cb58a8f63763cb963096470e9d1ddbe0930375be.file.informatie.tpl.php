<?php /* Smarty version Smarty-3.1.18, created on 2014-09-29 13:32:19
         compiled from "views\informatie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270885420200eea1546-52851479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb58a8f63763cb963096470e9d1ddbe0930375be' => 
    array (
      0 => 'views\\informatie.tpl',
      1 => 1411990337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270885420200eea1546-52851479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5420200ef1d051_35709279',
  'variables' => 
  array (
    'article_list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420200ef1d051_35709279')) {function content_5420200ef1d051_35709279($_smarty_tpl) {?><section>

<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
<div id="info">
	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['Title'];?>
</h1>
		<content><p><?php echo $_smarty_tpl->tpl_vars['article']->value['Content'];?>
<p></content>
		<!--<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='') {?>
 			<img class="photo" src="images/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
 " ><br>
		<?php }?>-->
	</article>
</div>	
<?php } ?>
</section><?php }} ?>
