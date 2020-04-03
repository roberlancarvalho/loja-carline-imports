<!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$TITULO_SITE}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{$GET_TEMA}/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{$GET_TEMA}/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="{$GET_TEMA}/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{$GET_TEMA}/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="{$GET_TEMA}/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{$GET_TEMA}/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{$GET_TEMA}/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{$GET_TEMA}/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>

<body>

 <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{$GET_TEMA}">Página Inicial</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Produtos</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
            
              <!--MENUS E FILTROS-->

              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categorias</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="category.html" class="nav-link">Masculino <span class="badge badge-secondary">42</span></a>
                      <ul class="list-unstyled">
                        <li><a href="category.html" class="nav-link">Perfumes</a></li>
                        <li><a href="category.html" class="nav-link">Acessórios</a></li>
                        <li><a href="category.html" class="nav-link">Eletrônicos</a></li>
                        <li><a href="category.html" class="nav-link">Outros</a></li>
                      </ul>
                    </li>
                    <li><a href="category.html" class="nav-link">Feminino  <span class="badge badge-secondary">123</span></a>
                      <ul class="list-unstyled">
                        <li><a href="category.html" class="nav-link">Perfumes</a></li>
                        <li><a href="category.html" class="nav-link">Acessórios</a></li>
                        <li><a href="category.html" class="nav-link">Eletrônicos</a></li>
                        <li><a href="category.html" class="nav-link">Outros</a></li>
                      </ul>
                    </li>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Marcas <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Polo  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> One Million  (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> 212  (15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Apple  (14)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Aplicar</button>
                  </form>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Cores <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> Branco (14)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Azul (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>  Verde (20)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Amarelo (13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>  Vermelho (10)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Aplicar</button>
                  </form>
                </div>
              </div>

              <!-- *** FIM DE MENUS E FILTROS ***-->

              <div class="banner"><a href="#"><img src="{$GET_TEMA}/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div class="box">
                <h1>Produtos</h1>
                <p>Em nosso departamento de produtos, oferecemos uma ampla seleção dos melhores produtos que encontramos e cuidadosamente selecionados.</p>
              </div>
              <div class="box info-bar">
                <div class="row">
                  <div class="col-md-12 col-lg-4 products-showing">Mostrando <strong>12</strong> de <strong>25</strong> produtos</div>
                  <div class="col-md-12 col-lg-8 products-number-sort">
                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                      <div class="products-number"><strong>Mostrar</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">Todos</a><span>products</span></div>
                      <div class="products-sort-by mt-2 mt-lg-0"><strong>Ordenar por</strong>
                        <select name="sort-by" class="form-control">
                          <option>Preço</option>
                          <option>Nome</option>
                          <option>Mais vendidos</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Lista de Produtos -->
              <div class="row products">

              {foreach from=$PRO item=P}

                <div class="col-lg-6 col-md-6">
                  <div class="product thumbnail">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}"><img src="{$P.pro_img}" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}"><img src="{$P.pro_img}" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="invisible"><img src="{$P.pro_img}" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}"> {$P.pro_nome} </a></h3>
                      <p class="price"> 
                        <del></del>{$P.pro_valor}
                      </p>
                      {$P.pro_desc}
                      <p class="buttons"><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn btn-outline-secondary">Ver detalhes</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a></p>
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.produtos-->
                </div>

              {/foreach}


              <div class="pages">
                <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Ver mais</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Páginas</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">Sobre Nós</a></li>
              <li><a href="text.html">Termos e condições</a></li>
              <li><a href="faq.html">Atendimento</a></li>
              <li><a href="{$PAG_CONTATO}">Contate-nos</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">Seção de clientes</h4>
            <ul class="list-unstyled">
              <li><a href="{$PAG_LOGIN}" data-toggle="modal" data-target="#login-modal">Login</a></li>
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
    <script src="{$GET_TEMA}/vendor/jquery/jquery.min.js"></script>
    <script src="{$GET_TEMA}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{$GET_TEMA}/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{$GET_TEMA}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{$GET_TEMA}/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="{$GET_TEMA}/js/front.js"></script>
  </body>
</html>