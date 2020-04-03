<?php

require './lib/autoload.php';

$smarty = new Template();
//Rotas::PAG_Pagina();

//valores para o template
$smarty->assign('NOME', 'CARLINE IMPORTS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA()); 
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_LOGIN', Rotas::pag_Login());
$smarty->assign('PAG_CADASTRO', Rotas::pag_Cadastro());
$smarty->assign('PAG_CONTA', Rotas::pag_Conta());
$smarty->assign('PAG_FAVORITOS', Rotas::pag_Favoritos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

$smarty->display('index.tpl');
?>