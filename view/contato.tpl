<script src="{$GET_TEMA}/js/validacao-form"></script>

 <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
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
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Página Inicial</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Contato</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">


              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Páginas</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="text.html" class="nav-link">Página de texto</a></li>
                    <li><a href="contact.html" class="nav-link">Página de contato</a></li>
                    <li><a href="faq.html" class="nav-link">Perguntas frequentes</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->
              <div class="banner"><a href="#"><img src="{$GET_TEMA}view/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Contato</h1>
                <p class="lead">Você está curioso sobre alguma coisa? Você tem algum tipo de problema com nossos produtos?</p>
                <p>Contate-nos. A nossa central de atendimento ao cliente está trabalhando para melhor te atender.</p>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Endereço</h3>
                    <p>Rua José de Queiroz Pessoa, 1812<br>Centro<br>Belo Horizinte<br>Minas Gerais<br><strong>Brasil</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-phone"></i> Central de atendiento</h3>
                    <p class="text-muted">Este é o nosso número nos ligar. Caso contrário, recomendamos que você use a forma eletrônica de comunicação.</p>
                    <p><strong>(88) 99934-1994</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-envelope"></i> Suporte Eletrônico</h3>
                    <p class="text-muted">Por favor, sinta-se à vontade para nos escrever um email.</p>
                    
                      <li><strong><a href="mailto:">atendimento@carlineimports.com</a></strong></li>
                      <li><strong><a href="#">Acesse</a></strong> nossa plataforma de suporte</li>
                    
                  </div>
                  <!-- /.col-sm-4-->
                </div>
                <!-- /.row-->
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d372.2194116841051!2d-39.01774742
                648469!3d-4.968503263421573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7be9fb84603f5ad%3A0
                x929d958438adb6!2sRua%20Jos%C3%A9%20de%20Queiroz%20Pessoa%20-%20Centro%2C%20Quixad%C3%A1%20-%20CE%2
                C%2063900-221!5e0!3m2!1spt-BR!2sbr!4v1582013633560!5m2!1spt-BR!2sbr"
                width="785" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                <hr>
                <h2>Formulário de contato</h2>
                <form id="form" action="envio">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" name="firstname" type="name" class="form-control" placeholder="Seu primeiro nome" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" class="form-control" placeholder="Seu sobrenome">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Coloque um e-mail válido" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input id="subject" type="text" class="form-control" placeholder="Assunto do seu contato">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Escreva aqui a sua mensagem: Elogio, crítica, ou sugestão" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar mensagem</button>
                    </div>
                  </div>
                  <!-- /.row-->
                </form>
              </div>
            </div>
            <!-- /.col-md-9-->
            
          </div>
        </div>
      </div>
    </div>
