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
            <del>{$P.pro_valor}</del>
        {$P.pro_desc}</p>
        <p class="buttons"><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" 
        class="btn btn-outline-secondary">Ver detalhes</a><a href="basket.html" 
        class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a></p>
        </div>
        <!-- /.text-->
    </div> 
    <!-- /.produtos-->
    </div>

{/foreach}