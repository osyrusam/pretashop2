<?php
/* Smarty version 3.1.33, created on 2020-03-31 17:04:29
  from 'C:\wamp\www\prestashop\admin294k2e7hy\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e835bfd6b5c04_35258582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ffb34b6f3f43106f786be2b6a6b5d23f670e3bf' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin294k2e7hy\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1585063049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e835bfd6b5c04_35258582 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
