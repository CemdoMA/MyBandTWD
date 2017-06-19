<?php
/* Smarty version 3.1.30, created on 2017-06-12 10:52:37
  from "D:\P1.4\PROJ\MyBandV_M\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e72750608f8_77103252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '902575783b4761f70983fa01ca7f260556095658' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M\\views\\header.tpl',
      1 => 1497264753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_593e72750608f8_77103252 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <div class="HeadPhotos">
        <img id="HeadPhoto" src="http://images.amcnetworks.com/amc.com/wp-content/uploads/2017/04/the-walking-dead-episode-716-negan-morgan-post-1600x720.jpg">
        <img id="HeadLogo" src="http://images.amcnetworks.com/amc.com/wp-content/uploads/2010/12/the-walking-dead-logo-white-C.png">

        <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header><?php }
}
