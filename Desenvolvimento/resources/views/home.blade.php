@extends ('templates.login_registo') @extends ('templates.html_estructure') @section('html_estructure')



<!-- Start header section -->
<header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="{{url('assets/images/header-bg.jpg')}}" alt="img">
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide">KUPFUNA
                    <span>APRENDA</span>
                    <span>ENSINA</span>
                    <span>COMPARTILHA</span> JUNTE-SE A NÓS</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <!-- <a class="knowmore-btn" href="#">INICIAR SESSÃO</a>-->
                    <button type="button" class=" knowmore-btn " data-toggle="modal" data-text="INICIAR SESSÃO" data-target="#login  "><span>INICIAR SESSÃO</span></button>
                    <button type="button" class=" download-btn " data-toggle="modal" data-text="REGISTRAR-ME" data-target="#registo  "><span>REGISTRAR-ME</span></button>
                    <!-- <a class="download-btn" href="{{url('/registo')}}">REGISTRAR-ME</a>-->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html"><img src="{{url('assets/images/logo.jpg')}}" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                    <li class="active"><a href="#">INICIO</a></li>
                    <li><a href="#about">BEM VINDO</a></li>
                    <li><a href="#sobre">SOBRE NÓS</a></li>
                    <li><a href="#service">SERVIÇOS</a></li>
                    <li><a href="#contact">CONTACTO</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
    </nav>
</section>
<!-- End menu section -->





<!-- Start about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Start welcome area -->
                <div class="welcome-area">
                    <div class="title-area">
                        <h2 class="tittle">Bem Vindo ao <span>Kupfuna</span></h2>
                        <span class="tittle-line"></span>
                        <p>Bem-vindo ao nosso site. É nossa expectativa estarmos mais proximo de todos e cada um de vós individualmente. Num mundo global e cada vez mais digital, ambicionamos partilhar convosco, em tempo real, as nossas iniciativas empresariais
                            e os nossos produtos. </p>
                    </div>
                    <div class="welcome-content">
                        <ul class="wc-table">
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-users wc-icon"></span>
                                    <h4 class="wc-tittle">Estudo em grupo</h4>
                                    <p>Aprenda estudando com outros estudantes</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-sellsy wc-icon"></span>
                                    <h4 class="wc-tittle">Produtividade</h4>
                                    <p>Aprenda a produtividade estudando connosco</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-line-chart wc-icon"></span>
                                    <h4 class="wc-tittle">Estratégias</h4>
                                    <p>Melhore as suas estratégias de ensino e aprendizado</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-bus wc-icon"></span>
                                    <h4 class="wc-tittle">Soluções</h4>
                                    <p>Soluções para os seus problemas</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End welcome area -->
            </div>
        </div>
        <div class="row" id="sobre">
            <div class="col-md-12">
                <div class="about-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-left wow fadeInLeft">
                                <img src="{{url('assets/images/about-img.jpg')}}" alt="img">
                                <a class="introduction-btn" href="#">Introdução</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight">
                                <div class="title-area">
                                    <h2 class="tittle">Sobre <span>Kupfuna</span> </h2>
                                    <span class="tittle-line"></span>
                                    <p>A empresa Kupfuna fundada em 2019, na cidade de Maputo pelo Grupo X de Eng de Software. A sua principal missão é oferecer soluções para Estudantes e empresas que trabalham no ramo da educação.</p>

                                    <p>O objectivo da empresa é liderar no ramo da educação digital e oferecer um serviço de qualidade para seus clientes.</p>
                                    <div class="about-btn-area">
                                        <button type="button" data-toggle="modal" data-text="INICIAR SESSÃO" data-target="#login  " class="button button-default"><span>INICIAR SESSÃO</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about section -->

<!-- Start call to action -->
<section id="call-to-action">
    <img src="{{url('assets/images/call-to-action-bg.png')}}" alt="img">
    <div class="call-to-overlay">
        <div class="container">
            <div class="call-to-content wow fadeInUp">
                <h2>Obtenha o material acadêmico onde estiver</h2>
                <a href="documentos" class="button button-default" data-text="OBTER AGORA"><span>OBTER AGORA</span></a>

            </div>
        </div>
    </div>
</section>
<!-- End call to action -->


<!-- Start service section -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-area">
                    <div class="title-area">
                        <h2 class="tittle">Nossos Serviços</h2>
                        <span class="tittle-line"></span>
                        <p>Fornecemos serviços em varias áreas relacionadas a educação</p>
                    </div>
                    <!-- service content -->
                    <div class="service-content">
                        <ul class="service-table">
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-book service-icon"></span>
                                    <h4 class="service-title">Partilha de Material academico</h4>
                                    <p>Partilha Material acadêmico com outros estudantes</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-users service-icon"></span>
                                    <h4 class="service-title">Criação de grupos de estudos</h4>
                                    <p>Crie grupos de estudo virtuais com seus amigos e colegas</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-globe service-icon"></span>
                                    <h4 class="service-title">Rede acadêmica e troca de experiencias</h4>
                                    <p>Uma rede de estudantes onde o foco é o aprendizado</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-graduation-cap service-icon"></span>
                                    <h4 class="service-title">Explicadores <br><br><br></h4>
                                    <p>Explicadores Kupfuna e fornecemos suporte para que explicadores particulares</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-bus service-icon"></span>
                                    <h4 class="service-title">Transporte Escolar</h4>
                                    <p>Transportes escolar Kupfuna e particulares .</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-line-chart service-icon"></span>
                                    <h4 class="service-title">Publicidade <br></h4>
                                    <p>Publicite os seus produtos e serviços em nossa plataforma.</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-university service-icon"></span>
                                    <h4 class="service-title">Instituições de Ensino</h4>
                                    <p>Localiza instituições de ensino com o Kupfuna </p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-support service-icon"></span>
                                    <h4 class="service-title">Supporte</h4>
                                    <p>Fornecemos suporte e exclarecemos dúvidas relacionadas a plataforma</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service section -->

<h1>{{$message ?? ''}}</h1>

<!-- Start counter section -->
<section id="counter">
    <img src="{{url('assets/images/counter-bg.jpg')}}" alt="img">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start counter area -->
                    <div class="counter-area">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-users"></span>
                                <div class="counter-count">
                                    <span class="counter">{{$emails->count()}}</span>
                                    <p>Usuarios</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-graduation-cap"></span>
                                <div class="counter-count">
                                    <span class="counter">0</span>
                                    <p>Explicadores</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-users"></span>
                                <div class="counter-count">
                                    <span class="counter">0</span>
                                    <p>Grupos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-book"></span>
                                <div class="counter-count">
                                    <span class="counter">{{$docs->count()}}</span>
                                    <p>Livros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End counter section -->


<!-- Start Contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contact-nos</h2>
                    <address class="single-address">
              <h4>Endereço</h4>
              <p>Matola A, Avenida União Africana, No 897</p>
            </address>
                    <address class="single-address">
              <h4>Telefone</h4>
              <p>Numero: (+258) 84 641 995</p>
            </address>
                    <address class="single-address">
              <h4>Email</h4>
              <p>Supporte: Supporte@kupfuna.com</p>
            </address>
                </div>
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Envie-nos uma Mensagem</h2>
                    <form method="post" role="form" action="{{route('cliente.store')}}" class="contact-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mensagem" required="required" name="mensagem"></textarea>
                        </div>
                        <button type="submit" data-text="ENVIAR" class="button button-default"><span>ENVIAR</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->


@endsection