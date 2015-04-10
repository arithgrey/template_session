<script src="<?=base_url('application/js/sha1.js'); ?>"></script>
<script src="<?=base_url('application/js/home/registro/general.js'); ?>"></script>
<style type="text/css">
	#section_form{	
	}
	#section_form h2{
	}
	.form_icon{
		width: 8%;
	}
	h3{
		color: #074E68;	
	}
	#section_pw_hiden{
		display: none;
	}
#createnueva{
  font-size: 1.2em; 
  color: #008CBA;
}
#img_start{
  width: 6%;
}
#repo_section{
	color: grey;
	font-size: 1.1em;
}



#title_legen{  
  color: #358399;  
  font-size: 1.7em;
}
.jumbotron{
	display: none;
}
</style>



<center>
	<div class="modal-header">
		<h3>Registrar tu cuenta ahora</h3>
	</div>
</center>




















<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Registra ahora.!  </a></li>
              
              <li class=""><a href="#why" data-toggle="tab"> <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>  Why?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="why">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signin">
           	<!--Inicia registro-->


						<form class="" id="form_cuenta_general"  method="POST">
							
									<!-- Username -->

									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">Nombre</span>
									  <input type="text" class="form-control" placeholder="Jonathan" 
									  aria-describedby="basic-addon1" id="username" name="username">
										<input type="hidden" name="otro" id="otro">
									</div>
									<br>
								
									<!-- Correo electroónico -->
								

									<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1">@ email</span>
									  <input type="text" class="form-control" placeholder="Username"
									   aria-describedby="basic-addon1" name="useremail" id="useremail">
									</div>
	<br>

									<!-- Password-->
									<div class="input-group">
									  <span class="input-group-addon" >Contraseña</span>
									  <input type="password" class="form-control" 
									  name="userpassword" id="userpassword">
									</div>
									
	<br>
									<!-- Segundo pw -->
									<div id="section_pw_hiden">


										<div class="input-group">
										  <span class="input-group-addon" >Confirmar **</span>
										  <input type="password" class="form-control" 
										  name="userpassword_confirm" id="userpassword_confirm">
										</div>

<br>
		
										<div class="input-group">
										  <span class="input-group-addon" >Empresa</span>
										  <input type="text" class="form-control" 
										  name="empresaname" id="empresaname">
										</div>



									</div>

									<div class="checkbox">
							          <label>
							            <input id="termiinoscondition" value="0" type="checkbox"> 
							            He leído y acepto los términos y condiciones 
							          </label>
							        </div>


	<br>
									
									<div class="control-group">
										<!-- Button -->
										
											<label id="" class="button_segistro btn btn-info animated bounce">Registrar</label>

											<div class='repo_section' id='repo_section'></div>
										
										
									</div>

								
							</form>

           	<!--Termina Registro -->
        </div>
    </div>
      </div>
      
    </div>
  </div>



	<div class="row">    
    <label></label>
    <div class="animated infinite bounce">       
      <label id="createnueva" class="small-6 large-centered columns">
        <a href="<?=base_url('index.php/sessioncontroller/iniciosessionuser')?>">
          <strong><img id="img_start" src="<?=base_url('application/img/general/star83.png')?>">  Inicia a tu cuenta </strong>        
        </a>        
      </label> 
     </div>     
   </div> 
   




              
              
              
              
          



