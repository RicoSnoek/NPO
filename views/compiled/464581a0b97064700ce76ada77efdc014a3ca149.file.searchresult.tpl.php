<?php /* Smarty version Smarty-3.1.18, created on 2014-09-25 11:27:15
         compiled from "views\searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19734541c64963e0f12-90177921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464581a0b97064700ce76ada77efdc014a3ca149' => 
    array (
      0 => 'views\\searchresult.tpl',
      1 => 1411637220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19734541c64963e0f12-90177921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541c6496597018_24347820',
  'variables' => 
  array (
    'search' => 0,
    'searchList' => 0,
    'searchItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c6496597018_24347820')) {function content_541c6496597018_24347820($_smarty_tpl) {?>
<h1>Zoekresultaat voor: <?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</h1>

<div id="article">
<section>

<?php  $_smarty_tpl->tpl_vars['searchItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['searchItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['searchItem']->key => $_smarty_tpl->tpl_vars['searchItem']->value) {
$_smarty_tpl->tpl_vars['searchItem']->_loop = true;
?>

	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['searchItem']->value['title'];?>
</h1>
		<content><p><?php echo $_smarty_tpl->tpl_vars['searchItem']->value['content'];?>
</p></content>
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['searchItem']->value['image'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='') {?>
		<div id="Sphoto">
			<img class="photo" src="images/<?php echo $_smarty_tpl->tpl_vars['searchItem']->value['image'];?>
 " ><br>
		</div>
		<?php }?>
	</article>

<?php } ?>	
</section>
</div><?php }} ?>
