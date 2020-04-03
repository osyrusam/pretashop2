<?php
/* Smarty version 3.1.33, created on 2020-04-02 12:22:31
  from 'C:\wamp\www\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e85bce7216904_65774330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9479d4b6eb3a1028f343871b21ad9c54f4b1d5' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1585063203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85bce7216904_65774330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3607496755e85bce6e18eb3_05222896', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20730392145e85bce6e60132_48580212 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18322143835e85bce6e276b9_57242941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20730392145e85bce6e60132_48580212', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16560025585e85bce6e9fd44_36681313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8539494075e85bce6edd862_08772728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18324407055e85bce6e956e2_46755773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16560025585e85bce6e9fd44_36681313', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8539494075e85bce6edd862_08772728', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2542495965e85bce71de3f7_26043456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12955419015e85bce709fb82_37481418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2542495965e85bce71de3f7_26043456', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3607496755e85bce6e18eb3_05222896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3607496755e85bce6e18eb3_05222896',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18322143835e85bce6e276b9_57242941',
  ),
  'page_title' => 
  array (
    0 => 'Block_20730392145e85bce6e60132_48580212',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18324407055e85bce6e956e2_46755773',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16560025585e85bce6e9fd44_36681313',
  ),
  'page_content' => 
  array (
    0 => 'Block_8539494075e85bce6edd862_08772728',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12955419015e85bce709fb82_37481418',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2542495965e85bce71de3f7_26043456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18322143835e85bce6e276b9_57242941', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18324407055e85bce6e956e2_46755773', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12955419015e85bce709fb82_37481418', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
