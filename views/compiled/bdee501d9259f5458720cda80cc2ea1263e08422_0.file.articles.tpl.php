<?php
/* Smarty version 3.1.30, created on 2017-06-13 07:42:17
  from "D:\P1.4\PROJ\MyBandV_M\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593f97596e24d4_16442401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdee501d9259f5458720cda80cc2ea1263e08422' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M\\views\\articles.tpl',
      1 => 1497338830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593f97596e24d4_16442401 (Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>}
            <div class="textBuiten1">
                    <h5 class="datum"><strong>Posted on: </strong><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</h5>
                    <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>

                    <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['foto'];?>
" class="textFoto1">
                    <div class="textBericht">
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="links" target="_blank"><strong><?php echo $_smarty_tpl->tpl_vars['article']->value['linkTekst'];?>
</strong></a>
                            </p>
                    </div>
            </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>





<?php }
}
