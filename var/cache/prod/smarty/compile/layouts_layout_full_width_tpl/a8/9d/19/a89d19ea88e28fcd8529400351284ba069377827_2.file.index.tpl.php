<?php
/* Smarty version 3.1.33, created on 2020-04-03 13:52:38
  from 'D:\wamp32\www\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8723864cdaf5_49953153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89d19ea88e28fcd8529400351284ba069377827' => 
    array (
      0 => 'D:\\wamp32\\www\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1585063203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8723864cdaf5_49953153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7363180405e8723864c50f4_13544978', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20468640865e8723864c6578_13012182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12144671895e8723864c9537_48184540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11269872625e8723864c8200_22135439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12144671895e8723864c9537_48184540', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7363180405e8723864c50f4_13544978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7363180405e8723864c50f4_13544978',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20468640865e8723864c6578_13012182',
  ),
  'page_content' => 
  array (
    0 => 'Block_11269872625e8723864c8200_22135439',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12144671895e8723864c9537_48184540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20468640865e8723864c6578_13012182', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11269872625e8723864c8200_22135439', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
