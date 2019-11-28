<!-- Inicio do Modal INICIAR SESSAO -->
<div class="modal" tabindex="-1" role="dialog" id="login">
  
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
         <!-- Start Contact section -->
  <section id="contact">
    <div class=" container ">     
        <div class="bordas">
          <div class="contact-right wow fadeInRight">
            <h2>Iniciar Sessão</h2>
            <form action="" class="contact-form">
              <div class="form-group">                
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">                
                <input type="password" class="form-control" placeholder="Senha">
              </div>
             <div class="form-row">
                <div class="form-group col-md-6">                                
                    <p><a class="link-verde" rel="nofollow" href=""><span>Recuperar Senha</span></a></p>
                  </div>
                <div class="form-group col-md-6">                                  
                    <button type="button" class="link-verde botao-link" data-toggle="modal" data-target="#registo" data-dismiss="modal"> <span>Ainda não estou registrado</span></button>                   
                </div>
              </div>
              <div class="form-group "> 
              <br><br>                      
                 <button type="submit" data-text="INICIAR SESSÃO" class=" teste button button-default"><span>INICIAR SESSÃO</span></button>
                 <button type="button" data-text="CANCELAR" class="teste botao-cancelar button button-default" data-dismiss="modal"><span>CANCELAR</span></button>
              </div>
            </form>
      </div>
    </div>
  </section>

      </div>
     </div>



<!-- Fim do Modal INICIAR SESSAO -->




<!-- Inicio do Modal Registo -->
<div class="modal" tabindex="-1" role="dialog" id="registo">
  
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
         <!-- Start Contact section -->
  <section id="contact" >
    <div class=" container ">     
        <div class="bordas-registo ">
          <div class="contact-right wow fadeInRight">
            <h2>Registo</h2>


            

            <script type="text/javascript">
              function validarEmail(){
                email = document.getElementById("email");

                @foreach ($emails as $email)
                  alert('{{$email}}'+email.value );
                  if(email.value == '{{$email}}'){
                    alert('email ja registrado');
                    return false;
                  }
                @endforeach

                return true;
              }
            </script>
            

           @if(isset($errors) && count($errors)>0 )

           <script type="text/javascript">
             
             $(document).ready(function(){
                $('#registo').modal('show');
             })
           </script>

          <div class="contact-left wow fadeInLeft alert alert-danger">
            <address class="single-address">
              @foreach($errors->all() as $error)
                <p class="erros">{{$error}}</p>
              @endforeach
            </address>
          </div>
          @endif
        

            <form  method="post"  role="form" action="{{route('user.store')}}" onsubmit="validarEmail()" class="contact-form ">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="form-group">                
                    <input type="text" name="name" minlength="2" maxlength="64" class="form-control" placeholder="Nome" required="required">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="form-group">                
                    <input type="text" name="apelido" class="form-control" minlength="2" maxlength="32" placeholder="Apelido" required="required">
                  </div>
                </div>
              </div>
              <div class="form-row">    
                <div class="form-group col-md-12">           
                  <div class="form-group">                
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                  </div>
                </div>  
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="form-group">                
                    <input type="password" name="password" class="form-control" placeholder="Senha" id="senha" required="required" minlength="5" maxlength="64">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="form-group">                
                    <input type="password" class="form-control" placeholder="Confirmar Senha" id="cSenha" required="required" minlength="5" maxlength="64" data-match="#senha" 
                   >
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="form-group" >                
                    <select class="form-control componentes" name="categoria" value="" required="required" >
                      <option class=" select-option">Tipo de Usuario</option>
                      <option value="estudante" class=" select-option">Estudante</option>
                      <option value="professor" class=" select-option">Professor</option>
                      <option value="instituicao" class=" select-option">Instituicao</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="form-group">                
                    <input type="text" class="form-control" name="" placeholder="Colocar algo depois" >
                  </div>
                </div>
              </div>


              <div class="form-row">
               <div class="form-group col-md-6">
               <div class="form-group">                
                <button type="button" class="link-verde botao-link" data-toggle="modal" data-target="#login" data-dismiss="modal"> <span>Já Tenho uma Conta</span></button>
              </div>
            </div>
          </div>
              <button type="submit" data-text="REGISTRAR" class="button button-default"><span>REGISTRAR</span></button>
            </form>     
            <button type="button" data-text="CANCELAR" class=" botao-cancelar button  button-default" data-dismiss="modal"><span>CANCELAR</span></button>   
        </div>
      </div>
    </div>
  </section>

      </div>      
    </div>



<!-- Fim do Modal Registo -->