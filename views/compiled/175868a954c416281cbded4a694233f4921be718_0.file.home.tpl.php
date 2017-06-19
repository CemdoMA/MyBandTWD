<?php
/* Smarty version 3.1.30, created on 2017-06-19 09:13:52
  from "D:\P1.4\PROJ\MyBandV_M\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594795d0c5ca68_62575819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175868a954c416281cbded4a694233f4921be718' => 
    array (
      0 => 'D:\\P1.4\\PROJ\\MyBandV_M\\views\\home.tpl',
      1 => 1497863629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594795d0c5ca68_62575819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="wrapper">
    <h1 style="color: white;">PHOTO'S</h1>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>

        <div class="textBuiten1">
            <h5 class="datum"><strong>Posted on: </strong><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</h5>
            <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h2>

            <img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" class="textFoto1">
            <div class="textBericht">
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
" class="links"><strong><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['linkTekst'];?>
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

    <p id="pagenumber">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <table id="pagechanger">
        <tr>
            <td id="left">
                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                    <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Previous</a>
                <?php }?>
            </td>
            <td id="right">
                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
                    <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Next</a>
                <?php }?>

            </td>
        </tr>
    </table>

</div>





<?php }
}
