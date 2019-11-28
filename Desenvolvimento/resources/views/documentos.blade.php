@extends ('templates.html_estructure') @section('html_estructure') 





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
                <a class="navbar-brand logo" href="{{url('/')}}"><img src="assets/images/logo.jpg" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                    <li><a href="#">INICIO</a></li>
                    <li class="active"><a href="#">DOCUMENTOS</a></li>
                    <li><a href="#">PERFIL</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
            <div class="search-area">
                <form action="">
                    <input id="search" name="search" type="text" placeholder="Pesquisar">
                    <input id="search_submit" value="Rechercher" type="submit">
                </form>
            </div>
        </div>
    </nav>
</section>
<!-- End menu section -->
<!-- Start blog banner section -->
<section id="blog-banner">
    <img src="assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-banner-area">
                        <h2>Documentos</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Documentos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog banner section -->







    


<!-- Start blog section -->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="blog-left blog-archive">
                                <!-- Start single blog post -->
                                
                                <div class="row">

                                   
                                       
                                        
                                        @foreach ($docs as $doc)    
                                        
                                    <div class=" col-lg-4 col-md-12 col-sm-6">
                                        <article class="single-from-blog">
                                            <div class="blog-title">
                                            <h2><a href="{{url("storage/documentos/$doc->documento")}}" ></a>{{$doc->titulo}}</h2>
                                            </div>
                                            <a  type="button" href="{{url("storage/documentos/$doc->documento")}}" ></a>
                                           
                                            <figure>
                                                 <a href="{{url("storage/documentos/$doc->documento")}}" ><img alt="img" src="assets/images/pdf.png"></a>
                                            </figure>
                                           </button>
                                        </article>
                                    </div>
                                    
                                @endforeach


                                    

                                </div>
                                <!-- End single blog post -->







                               

                                <!--Start Blog pagination -->
                                <nav>
                                    <ul class="pagination blog-pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- End blog pagination -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12">
                            <aside class="blog-right">




                                <!-- Publicidade -->
                                <div class="single-widget">
                                    <h2>Publicidade</h2>
                                    <div class="instagram-feed">
                                        <div class="single-instagram-feed">
                                            <img src="assets/images/mult.png" alt="img">
                                        </div>
                                        <div class="single-instagram-feed">
                                            <img src="assets/images/mult.png" alt="img">
                                        </div>
                                        <div class="single-instagram-feed">
                                            <img src="assets/images/mult.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <!-- publicidade -->

                                <!-- Enviar documentos    -->

                                <div class="single-widget">
                                    <h2>Documentos</h2>
                                    <div class="follow-us">
                                        <button class="button button-default" data-toggle="modal" data-target="#upload-docs  " data-text="Enviar" type="button"><span>Enviar Documentos</span></button>
                                    </div>
                                </div>


                                <!--Fim enviar documentos-->

                                <!-- Start Sidebar Single widget -->
                                <div class="single-widget">
                                    <h2>Livros Populares</h2>
                                    <div class="popular-post-widget">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="blog-single.html">
                                                    <img class="media-object" src="assets/images/pdf2.png" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Cisco Packet Tracer</a></h4>
                                                <p>Descricao</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="blog-single.html">
                                                    <img class="media-object" src="assets/images/pdf2.png" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Allan Turing 1950</a></h4>
                                                <p>Descricao</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="blog-single.html">
                                                    <img class="media-object" src="assets/images/pdf2.png" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Introdução a programação</a></h4>
                                                <p>Descriçao</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sidebar Single widget -->


                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog section -->





<!-- Inicio do Modal INICIAR SESSAO -->
<div class="modal bordas" tabindex="-1" role="dialog" id="upload-docs">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

        <!-- Start Contact section -->
        <section>
            <div class="single-widget  wow fadeInUp ">
                <h2>Enviar Documentos</h2>
                <div class="follow-us ">
                    <div>
                        <form class="comment-form" method="POST" enctype="multipart/form-data" action="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" placeholder="Título" name="titulo" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <input type="text" placeholder="Autor" name="autor" class="form-control">
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="up">
                                        <span class="fa fa-plus" aria-hidden="true">
                                        Adicionar Documento
                                        <input type="file" id="up" name="documento" style="display: none" re/>
                                    </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Comentário"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="button button-default" data-text="Enviar" type="submit"><span>Enviar</span></button>
                        </form>
                        <button type="button" data-text="CANCELAR" class=" botao-cancelar button  button-default" data-dismiss="modal"><span>CANCELAR</span></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
< <!-- Fim do Modal INICIAR SESSAO -->

    < <!-- Inicio do Modal INICIAR SESSAO -->
        <div class="modal " tabindex="-1" role="dialog" id="visualizar-docs">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">

                <!-- Start Contact section 
                <section>
                    <div class="single-widget  wow fadeInUp ">
                        <h2>Enviar Documentos</h2>
                        <div class="follow-us ">
                            <div>
                                <div class="row" style="border:2px">
                                    <div class="col-md-11">
                                        <iframe src="{{url('storage/documentos/Introdução a programação.pdf')}}" width="100%" height="500" frameborder="0" style="border:none" style="border:0" allowfullscreen>
                    </iframe>
                                    </div>
                                    <div class="col-md-1">
                                        <a type="button" data-text="FECHAR" class="fa fa-close wc-icon botao-cancelar button  button-default" data-dismiss="modal"><span>FECHAR</span></a>
                                        <br><br><br>
                                        <a href="{{url('storage/documentos/Introdução a programação.pdf')}}" type="button" data-text="BAIXAR" class="fa fa-download wc-icon botao-cancelar button  button-default" data-dismiss="modal"><span>BAIXAR</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
            </div>
        </div>



        <!-- Fim do Modal INICIAR SESSAO -->






        @endsection