<?php /* Smarty version Smarty-3.1.18, created on 2014-10-08 11:44:38
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4351541af67780c261-72832416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1412678443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4351541af67780c261-72832416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541af677c20b42_63318989',
  'variables' => 
  array (
    'article_list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541af677c20b42_63318989')) {function content_541af677c20b42_63318989($_smarty_tpl) {?><div id="article">
<section>

<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>

	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
		<content><p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
<p></content>
		<!--<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='') {?>
 			<img class="photo" src="images/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
 " ><br>
		<?php }?>-->
	</article>

<?php } ?>
</section>
</div><?php }} ?>
