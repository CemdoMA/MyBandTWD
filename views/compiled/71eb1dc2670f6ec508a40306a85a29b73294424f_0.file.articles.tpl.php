<?php
/* Smarty version 3.1.30, created on 2017-05-24 10:31:27
  from "D:\P1.4\BAP\BOVI\MyBandV_M\MyBandV_M\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592560ffd953e4_20672543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71eb1dc2670f6ec508a40306a85a29b73294424f' => 
    array (
      0 => 'D:\\P1.4\\BAP\\BOVI\\MyBandV_M\\MyBandV_M\\views\\articles.tpl',
      1 => 1495621870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592560ffd953e4_20672543 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">
<?php echo '<?php
';?>//rewrite this to a smarty template and get the result_array from the model
//=> we do not want to see a fetch_assoc in a view file!

<section>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>}
        <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
        <content ><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</content>
        </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</section>

</content>


<?php }
}
