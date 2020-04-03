<?php
/* Smarty version 3.1.33, created on 2020-03-31 17:03:56
  from 'C:\wamp\www\prestashop\admin294k2e7hy\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e835bdcb0f968_97318757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b8b9c2320b2971f4e0d2bd299ad877103525f90' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin294k2e7hy\\themes\\default\\template\\content.tpl',
      1 => 1585063061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e835bdcb0f968_97318757 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
