<?php
/* Smarty version 3.1.30, created on 2017-06-13 07:49:33
  from "D:\P1.4\PROJ\MyBandV_M\views\information.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593f990d898da4_12401254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8aee442f3e79b6122ea69af2d2e57ed2c44839f' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M\\views\\information.tpl',
      1 => 1497340168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593f990d898da4_12401254 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['information_list']->value, 'information');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['information']->value) {
?>}
<div id="wrapper">
<div id="InfoBuiten">
    <h1><?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
</h1>
    <iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['information']->value['video1'];?>
" frameborder="0" allowfullscreen class="vid1"></iframe>
    <p class="textInformation"><?php echo $_smarty_tpl->tpl_vars['information']->value['tekst'];?>
</p>
</div>
    <div class="DrieVideos">
    <iframe width="460" height="259" src="<?php echo $_smarty_tpl->tpl_vars['information']->value['video2'];?>
" frameborder="0" allowfullscreen class="vid2"></iframe>
    <iframe width="460" height="259" src="<?php echo $_smarty_tpl->tpl_vars['information']->value['video3'];?>
" frameborder="0" allowfullscreen class="vid3"></iframe>
    <iframe width="460" height="259" src="<?php echo $_smarty_tpl->tpl_vars['information']->value['video4'];?>
" frameborder="0" allowfullscreen class="vid2"></iframe>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
