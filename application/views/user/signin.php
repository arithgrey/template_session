<script src="<?=base_url('application/js/sha1.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/home/iniciosession/iniciosession.js')?>"></script>
<style type="text/css">
#title_sigin_s{  
  color: #358399;  
  font-size: 1.7em;
}
.label_text_form{
  color: #358399;  
  font-size: 1.1em; 
}
#createnueva{
  font-size: 1.2em; 
  color: #008CBA;
}
#img_start{
  width: 6%;
}
#contenedorform{
  padding: 20px;
}
#forgotpw{
  color: #358399;
  font-size: .9em;
}


/*Solo para el fex*/
body{
  background: white;
}







  #section_pw_hiden{
    display: none;
  }
#img_start{
  width: 6%;
}
#repo_section{
  color: grey;
  font-size: 1.1em;
}

.jumbotron{
  display: none;
}



.cta-mail{
  display: none;
}
</style>







<div class='text-center'>
  <h1 class='text-center'><strong>Bienvenido</strong></h1>



  <a href="<?=base_url('index.php/home/signup/')?>">
    <label class='animated  bounce btn-line'>      
      <img id="img_start" src="<?=base_url('application/img/general/star83.png')?>">
       Registra cuenta 
    </label>
  </a>
    <a href="<?=base_url();?>"><label class='btn-line'>Home </label></a>
</div>







                   





<!--**************************************************************************************-->



<div class='row'>

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">

                           <a data-toggle="modal" class='col-sm-6 col-md-12' href="#myModal"> Olvidaste la contraseña?</a>
                           
                      </div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

      <!--Inicia el formulario -->          



       
                  <form id="in" method="post" action="">
                    <fieldset>                    
                          <legend>
                            <label id="title_sigin_s" class="text-center" >
                              <strong class="">
                                      Iniciar sessión                                
                              </strong>                  
                            </label>
                          </legend>


                        <!--Inicia input usuario -->  
                        <label class='label_text_form'><strong>Usuario</strong></label>          
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">@</span>
                          <input type="mail" name='mail' id="mail"  class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                        </div>
                        <!--Termina input usuario -->

          
                        
                        <!--Inicia passwor input -->
                            <label class='label_text_form'><strong>Password</strong></label>    
                            <input type='hidden' name='secret' id="secret">

                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">******</span>
                              <input type="password" class="form-control"  name='pw' id="pw" aria-describedby="basic-addon1" >
                            </div>   

                        <!--Termina pasword-->


                          <label class="label">No recuerdo mi contraseña</label>
                         
                          <div class='row'>

                            <div class='col-sm-6 col-md-4'></div>
                            <button role="button" id="inbutton" class='btn btn-info col-sm-6 col-md-4'>Empezar ahora</button>
                            <div class='col-sm-6 col-md-4'></div>
                          </div>                        




                          
                      
                      
                      <label class='' id="reportesession"></label>
                          </fieldset>
                      </form>





                
                  







  </div>


</div><!--Termina row-->

</div>
</div>
</div>



   













                   
                
          







                  

























 <!--********************************************************************************************+***** -->
 <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Olvidaste tu contraseña?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Ingresa tu correo electrónico y tu contraseña será enviada a el</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
