<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript" src="<?=base_url('/application/js/foundation/foundation.reveal.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/application/js/opensource/open.js')?>"></script>
<style type="text/css">


#git_h1{
	text-align: center;
	font-size: 2em;
}
#title_source{
	background: none repeat scroll 0% 0% rgba(9, 157, 239, 1);
	text-align: center;
	border-radius: 2px;
	color: white;
}
#perfilimg{
	border-radius: 40% / 50%;

}
label{
	text-align: center;

}

#btn_tw{
	
	background: none repeat scroll 0% 0% rgba(44, 61, 65, 1);
	color: white;
	padding: 5px;
}

</style>



<div id='github'>	
	<div class='row'>
		<p id='git_h1'> En GitHub </p>
	</div>	

	<div class='row'>
		<div class='large-3 columns' id='perfil_img'>
			
			<a href="<?=$arithuser->getHtmlUrl()?>">
				<img id='perfilimg' src="<?=$arithuser->getAvatarUrl()?>">
				
				<label><?=$arithuser->getEmail()?></label>				
				<label><?=$arithuser->getCompany()?></label>				
			</a>
			<label id='btn_tw'>Twitter @<?=$arithuser->getName()?></label>
			
		</div>

		<?php
		$gitelements="";
		
			foreach ($repolist as $key => $value) {
					$reporesume = $repolist[$key];


					if ($reporesume->getName() == "grey") {											
					}elseif ($reporesume->getName() == "Numeros-Romanos-Java") {						
					}elseif ($reporesume->getName() == "analizador-l-xico") {						
					}elseif ($reporesume->getName() == "Extracci-n-de-datos-MVC-php") {												
					}elseif ($reporesume->getName() == "Manejo-de-Archivos") {												
					}elseif($reporesume->getName() == "proyecto-bus-python"){
					}elseif ($reporesume->getName() == "simple_templatephp") {
						# code...
					} else{
						$gitelements.= "<div id='img_git' class='large-3 columns' >

							<p id='title_source'>".$reporesume->getName()."</p>
							<label>". substr( $reporesume->getDescription() , 0 , 90)."</label>
							<br><a href='".$reporesume->getHtmlUrl()."'>.. Ver proyecto</a>							
			
						  </div>";	
					}					

					
						  
				}
		?>
		<?=$gitelements;?>
	</div>
</div>

<div>
	<div class='row'>
		<p id='git_h1'> En Youtube</p>		

	</div>
</div>







		

<div class="reveal-modal" id="dlg_twitter" data-reveal>

	<a class="twitter-timeline"  href="https://twitter.com/arithgrey" data-widget-id="549424249111584768">Tweets por el @arithgrey.</a>
		
		
    <a class="close-reveal-modal">&#215;</a>
</div>  


