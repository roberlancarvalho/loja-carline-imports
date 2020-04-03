<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-29 23:57:59
  from 'C:\xampp\htdocs\lojaCarline\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5aec7737b775_84451555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7422e2a1af6a534ec58ac67fe30d34c880893c6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojaCarline\\view\\index.tpl',
      1 => 1583017077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5aec7737b775_84451555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--TOPO-->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Oferta</a><a href="#" class="ml-1">20% de desconto para produtos acima de R% 150,00</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
">Minha conta</a></li>
                <li class="list-inline-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_FAVORITOS']->value;?>
">Favoritos</a></li>
                <li class="list-inline-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="E-mail" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="Senha" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>
                  </p>
                </form>
                <p class="text-center text-muted">Ainda não é registrado(a)?</p>
                <p class="text-center text-muted"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
"><strong>Registrar-se agora</strong></a>! É fácil e feito em 1 minuto e dá acesso a descontos especiais e muito mais!</p>
              </div>
            </div>
          </div>
        </div>
        <!--Fim do topo-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="navbar-brand home zoom"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo.png" alt="Carline logo" class="d-none d-md-inline-block"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-small.png" alt="Carline logo" class="d-inline-block d-md-none"><span class="sr-only">Carline - Página Inicial</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#pesquisar" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Pesquisar</span><i class="fa fa-search"></i></button><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="nav-link active">Início</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Masculino<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Perfumes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Perfumes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Eletrônicos</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Smartphones</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Tablets</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Notebooks</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Outros</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessórios</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Bolsas</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Cases</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pulseiras</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Relógios</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Óculos</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Outros</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Roupas</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Camisas</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Calças</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Calçados</a></li>
                        </ul>
                        <h5>Kits</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Feminino<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Clothing</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/banner.jpg" alt="" class="img img-fluid"></a></div>
                        <div class="banner"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Navegação<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Shop</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="index.html" class="nav-link">Homepage</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Category - sidebar left</a></li>
                          <li class="nav-item"><a href="category-right.html" class="nav-link">Category - sidebar right</a></li>
                          <li class="nav-item"><a href="category-full.html" class="nav-link">Category - full width</a></li>
                          <li class="nav-item"><a href="detail.html" class="nav-link">Product detail</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>User</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="register.html" class="nav-link">Register / login</a></li>
                          <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                          <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                          <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                          <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Order process</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
" class="nav-link">Carrinho</a></li>
                          <li class="nav-item"><a href="checkout1.html" class="nav-link">Checkout - step 1</a></li>
                          <li class="nav-item"><a href="checkout2.html" class="nav-link">Checkout - step 2</a></li>
                          <li class="nav-item"><a href="checkout3.html" class="nav-link">Checkout - step 3</a></li>
                          <li class="nav-item"><a href="checkout4.html" class="nav-link">Checkout - step 4</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Pages and blog</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing</a></li>
                          <li class="nav-item"><a href="post.html" class="nav-link">Blog Post</a></li>
                          <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                          <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                          <li class="nav-item"><a href="text-right.html" class="nav-link">Text page - right sidebar</a></li>
                          <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Buscar</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span></span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Buscar" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>


    
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide1.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide2.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide3.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide4.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide5.png" alt="" class="img-fluid"></div>
                <!--<div class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/main-slider4.jpg" alt="" class="img-fluid"></div>-->
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>


        <?php 

        Rotas::get_Pagina();
        //var_dump(Rotas::$pag)

        ?>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">Nós amamos nossos clientes</a></h3>
                  <p class="mb-0">Somos conhecidos por oferecer o melhor serviço possível de todos os tempos</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Ótimos preços</a></h3>
                  <p class="mb-0">Ótimos preços e ótima qualidade nos nossos produtos. E descontos melhores ainda</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% de satisfação garantida</a></h3>
                  <p class="mb-0">Devoluções gratuitas de qualquer ítem em até 3 meses.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">PRODUTOS EM DESTAQUE DA SEMANA</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Polo Red - Rauph Lauren</a></h3>
                    <p class="price"> 
                      <del></del>R$ 390,00
                    </p>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NOVO</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/5.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/6.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/7.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">One Million</a></h3>
                    <p class="price"> 
                      <del>320,00</del> R$ 280,00
                    </p>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NOVO</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/9.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/10" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/9.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Xiaomi Mi Band 4</a></h3>
                    <p class="price"> 
                      <del></del>R$ 169.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/7.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/8.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/8.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">iPhone 11 Pro Max</a></h3>
                    <p class="price"> 
                      <del></del>R$ 6.120,00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/4.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/4.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Azzaro</a></h3>
                    <p class="price"> 
                      <del></del>R$ 300,00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon new">
                    <div class="theribbon">NOVO</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Fur coat</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                    <p class="price"> 
                      <del>$280</del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Inspire-se</h3>
              <p class="lead">Estamos sempre postando as tendências, com os nossos produtos</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide1b.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide2b.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide3b.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/slide1b.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***

        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">Confira o nosso Blog</h3>
              <p class="lead mb-0">Confira as nossas dicas e últimas novidades em PERFMUMES e ACESSÓRIOS: <a href="blog.html">Acessar o Blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Quem somos</a></h4>
                  <p class="author-category">Por <a href="#">Aline</a> em <a href="">Sobre nós</a></p>
                  <hr>
                  <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas quis mauris in feugiat. Duis porta sem dui, eget facilisis est mattis vulputate...</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continuar lendo</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Nossos produtos</a></h4>
                  <p class="author-category">Por <a href="#">Carlos</a> em <a href="">Carline Imports</a></p>
                  <hr>
                  <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas quis mauris in feugiat. Duis porta sem dui, eget facilisis est mattis vulputate...</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continuar lendo</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Páginas</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">Sobre Nós</a></li>
              <li><a href="text.html">Termos e condições</a></li>
              <li><a href="faq.html">Atendimento</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contate-nos</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">Seção de clientes</h4>
            <ul class="list-unstyled">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Registrar-se</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Principais categorias</h4>
            <h5>Masculino</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">Perfumes</a></li>
              <li><a href="category.html">Acessórios</a></li>
              <li><a href="category.html">Eletrônicos</a></li>
            </ul>
            <h5>Feminino</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">Perfumes</a></li>
              <li><a href="category.html">Acessórios</a></li>
              <li><a href="category.html">Eletrônicos</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Onde estamos</h4>
            <p><strong>Carline Imports</strong><br>Rua do Ouro, 651<br>Centro<br>Belo Horizonte<br>MG<br><strong>Brasil</strong></p><a href="contact.html">Ir para a página de contato</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Receba as notícias</h4>
            <p class="text-muted">Se inscreva em nossa Newsletter e lhe enviaremos ofertas e promoções e notícias da nossa loja.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Se inscreva!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Manter contato</h4>
            <p class="social">
            <a href="facebook.com/carlineimports" class="facebook external"><i class="fa fa-facebook"></i></a>
            <a href="instagram.com/carlineimports" class="instagram external"><i class="fa fa-instagram"></i></a>
            <a href="mailto:" class="email external"><i class="fa fa-envelope"></i></a>
            </p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2020 Copyright Tec North - Desenvolvimento.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Desenvolvido por <a href="https://tecnorth.com.br" target="_blank">Tec North</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/jquery.cookie/jquery.cookie.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/owl.carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/front.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
