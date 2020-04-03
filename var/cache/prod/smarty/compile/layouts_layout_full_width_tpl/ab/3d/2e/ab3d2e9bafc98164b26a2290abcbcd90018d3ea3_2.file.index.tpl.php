<?php
/* Smarty version 3.1.33, created on 2020-04-02 12:22:30
  from 'C:\wamp\www\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e85bce6c3a021_56547296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3d2e9bafc98164b26a2290abcbcd90018d3ea3' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1585063203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85bce6c3a021_56547296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999289265e85bce6b35451_59968205', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_874118075e85bce6b432d3_19124954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3078982935e85bce6c0c056_73837158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_334815315e85bce6bd7f83_98280013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3078982935e85bce6c0c056_73837158', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1999289265e85bce6b35451_59968205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1999289265e85bce6b35451_59968205',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_874118075e85bce6b432d3_19124954',
  ),
  'page_content' => 
  array (
    0 => 'Block_334815315e85bce6bd7f83_98280013',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3078982935e85bce6c0c056_73837158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_874118075e85bce6b432d3_19124954', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334815315e85bce6bd7f83_98280013', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
