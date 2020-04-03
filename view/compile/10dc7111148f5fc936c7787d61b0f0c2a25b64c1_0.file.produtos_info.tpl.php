<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 15:52:44
  from 'C:\xampp\htdocs\lojaCarline\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e59293c21ef46_27839981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10dc7111148f5fc936c7787d61b0f0c2a25b64c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojaCarline\\view\\produtos_info.tpl',
      1 => 1582775502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e59293c21ef46_27839981 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

    <div class="col-lg-6 col-md-6">
    <div class="product thumbnail">
        <div class="flip-container">
        <div class="flipper">
            <div class="front"><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" class="img-fluid"></a></div>
            <div class="back"><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" class="img-fluid"></a></div>
        </div>
        </div><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" class="img-fluid"></a>
        <div class="text">
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </a></h3>
        <p class="price"> 
            <del><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</del>
        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
        <p class="buttons"><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" 
        class="btn btn-outline-secondary">Ver detalhes</a><a href="basket.html" 
        class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a></p>
        </div>
        <!-- /.text-->
    </div> 
    <!-- /.produtos-->
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
