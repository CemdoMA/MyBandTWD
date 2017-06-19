<?php
/* Smarty version 3.1.30, created on 2017-06-19 12:22:44
  from "D:\P1.4\PROJ\MyBandV_M -Local\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947c214104817_13617095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c316c923188c8396c1875b460864221e3609a5d2' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M -Local\\views\\home.tpl',
      1 => 1497874960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947c214104817_13617095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="wrapper">
    <h1 style="color: white;">PHOTO'S | CAST</h1>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="1" style="background-image: url('images/rick.jpg')" onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 2.5% 0 5%;">
        <div class="Imagegalary_img" id="2" style="background-image: url('images/Glenn.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 5% 0 2.5%;">
        <div class="Imagegalary_img" id="3" style="background-image: url('images/daryl.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="4" style="background-image: url('images/maggie.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="5" style="background-image: url('images/carl.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 2.5% 0 5%;">
        <div class="Imagegalary_img" id="6" style="background-image: url('images/michonne.jpg')" onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary"  style="padding: 0 5% 0 2.5%;">
        <div class="Imagegalary_img" id="7" style="background-image: url('images/morgan.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="8" style="background-image: url('images/carol.jpg') " onclick="modaal(this.id)"></div>
    </div>
<br style="clear: left;"/>


    <div id="berichtenAll">
        <h1>ARTICLES</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>

        <div class="textBuiten1">
            <h5 class="datum"><strong>Posted on: </strong><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</h5>
            <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>

            <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" class="textFoto1">
            <div class="textBericht">
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="links"><strong><?php echo $_smarty_tpl->tpl_vars['article']->value['linkTekst'];?>
</strong></a>
                </p>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    </div>

    
    
        
            
                
                    
                
            
            
                
                    
                

            
        
    

</div>





<?php }
}
