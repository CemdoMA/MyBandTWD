<?php
/* Smarty version 3.1.30, created on 2017-06-19 12:53:05
  from "D:\P1.4\PROJ\MyBandV_M -Local\views\episodes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947c931e1cbe7_46363654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d301c821f57a9203471be734592ce89d33c04d7' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M -Local\\views\\episodes.tpl',
      1 => 1497864807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947c931e1cbe7_46363654 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="wrapper">
    <h1 class="epiTitle">EPISODES</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['episodes_list']->value, 'episodes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['episodes']->value) {
?>

    <div class="episodeAll">
<div class="postImg">
    <div class="post_img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['episodes']->value['backgroundIMG'];?>
') "></div>
    <div class="textOver">
    <h3 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black; margin: 0;"><?php echo $_smarty_tpl->tpl_vars['episodes']->value['epiNumber'];?>
</h3>
        <h1 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;"><?php echo $_smarty_tpl->tpl_vars['episodes']->value['epiTitle'];?>
</h1>
    </div><div class="textOverDate">
        <h2 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;"><?php echo $_smarty_tpl->tpl_vars['episodes']->value['epiDate'];?>
</h2>
        </div>
    </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

<?php }
}
