<?
session_start();

if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}





require_once('/home/waibrasi/Scripts/valedosapucai/Connections/valedosapucai.php');
mysql_select_db($database_principal, $principal);
 

 
?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	
		<meta http-equiv="Content-Type" section="text/html; charset=utf-8">
		<meta name="ROBOTS" section="INDEX, FOLLOW">
		<meta http-equiv="X-UA-Compatible" section="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        
        
     <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        
	


<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '283223254877952');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=283223254877952&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<? include ("/home/waibrasi/Scripts/headbody_veiculos_2023.php"); ?>
       
     
<header>
 
  <div id="linha_topo">
  	
  	<div id="limite_horizontal">
  	
  		
  	<div id="servicos_topo"><? echo $_SESSION['slogan']; ?></div>
  	
  

 	
 	</div>
  	
  </div>
  
   <div id="header_fundo">

    	<div id="centro_topo">
               
        	<div id="logotopo"><a href="/"><img src="https://<? echo $_SESSION['www']; ?>/imagens/logo.png"/></a></div>
			
      <div id="info_topo">
              <div id="redessociais">
                    <a href="https://www.facebook.com/jbautomoveisitajuba/" target="_blank"><i class="fab fa-facebook"></i></a> <a href="https://www.instagram.com/jbautomoveis_itajuba/" target="_blank"><i class="fab fa-instagram"></i></a>
                    
                    </div>
        	<div id="endereco_topo">
 	 
  	 <a href="?conteudo=Localizacao"><i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['estado']; ?></a></div> 
      <div id="telefone_topo"><a href="tel:<? echo $_SESSION['telefone']; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a> <span> | </span><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['celular']); ?>"><i class="fab fa-whatsapp"></i> <? echo $_SESSION['celular']; ?></a><br></div><br>


  	
      

      </div>
       
        
</div>
     </div>
      
</header>
       
        
<div id="menu"><div id="limite_horizontal"><?  include ("menu2020.php"); ?></div></div>
        
                

	
   
  
 
 <? if ($_GET['conteudo'] == '') { ?>
 

 <div id="banner">
<? //include ("/home/waibrasi/Scripts/clientes/bannerbox_clientes.php"); ?>
 </div>
 <? } ?>
  
  


                
            
            <div id="conteudo">
            
            <? if ($_GET['conteudo'] != 'Localizacao') { ?>
            
         
            <div id="limite_horizontal">
             
     
<? } ?>
         
			   
				   <?
                  switch(htmlspecialchars($_REQUEST['conteudo'])){
				case '':
                include "/home/waibrasi/Scripts/valedosapucai/veiculos_2020_modelo2.php";
                break;
				        
				
				case 'A Loja':
                include "/home/waibrasi/Scripts/valedosapucai/paginas_vs.php";
				break;
				
				  
						  
						  
				case 'veiculos':
                include "/home/waibrasi/Scripts/valedosapucai/veiculos_2020_modelo2.php";
                break;						  
				
				case 'Localizacao':
                include "localizacao_2018.php";
                break;				

				case 'contato':
                include "/home/waibrasi/Scripts/valedosapucai/contatov.php";
                break;
						  
						  
				case 'ordens_maladireta':
                include "/home/waibrasi/Scripts/clientes/wwdout/ordens_maladireta.php";
                
                break;						  
						  
						  
				
						  
						  
				case 'Contato':
                include "/home/waibrasi/Scripts/valedosapucai/contatov.php";
                break;
				
				// TESTANDO FORMULARIO DE FICHA DE FINANCIAMENTO
				case 'fotografiasv':
                include "/home/waibrasi/Scripts/valedosapucai/fotografiasv_2024.php";
                break;
				

			        default:
                include "index.php";
                break;
}
?>
            

  

    <? // include ("/home/waibrasi/Scripts/clientes/parceiros_div_owl.php"); ?>
    
       <? if ($_GET['conteudo'] != 'Localizacao') { ?>
    </div>
    <? } ?>
   
   </div>
    
    
    
    
    
    <div id="fundo_logo_rodape">
    <div id="logo_rodape"><img src="https://<? echo $_SESSION['www']; ?>/imagens/logo.png" /></div>

		</div>
    
   
		<footer>
        		
               <div id="alvo"><img src="https://<? echo $_SESSION['www']; ?>/imagens/alvo.png" /></div>
               
                <div id="rodape">
                
                
                
                
                
                 <div id="rodape_blockleft">
                   
                   <h1 class="rodapeh1">Endereço</h1>
                   
                    
                    <div id="endereco_rodape"><a href="?conteudo=Localizacao"><i class="fas fa-map-marker-alt"></i> <? echo $_SESSION['endereco']; ?>, Nº <? echo $_SESSION['numero']; ?> - 
 <? echo $_SESSION['bairro']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['estado']; ?></a></div>
                    
                    <br>

                    <h1 class="rodapeh1">Telefones</h1>
                      <div id="telefone_rodape">
						 <a href="tel:<? echo $_SESSION['telefone']; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a>
                    </div>
                    
                         <div id="celular_rodape">
						 <a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['celular']); ?>"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['celular']; ?></a>
                    </div>
                    
                    
                    
                       
                        
                    
                    </div>
                    
                 
               
                
                    
                    
                    <div id="rodape_blockright">
                    
           
                    
                    
                    
                     <div id="rodape_mapadosite">
                         
                    <h1 class="rodapeh1">Mapa do Site</h1>
                    
                    	<ul>
                    		<li>
                    			<a href="?conteudo=A Loja">A Loja</a>	
                    		</li>
                    		
                    		<li>
                    			<a href="?conteudo=veiculos">Estoque</a>	
                    		</li>
                    
                    				<li>
                    			<a href="?conteudo=Localizacao">Localização</a>
                    		</li>		
                    		
                    		<li>
                    			<a href="?conteudo=Contato">Contato</a>
                    		</li>
                    	</ul>
                    
                    
					</div>
        			</div>
               
               
               
               
               
                 <div id="rodape_servicos">
                       <h1 class="rodapeh1">Facebook</h1>
                   
                    <div class="fb-page" 
  data-tabs="timeline,events,messages"
  data-href="https://www.facebook.com/jbautomoveisitajuba/"
  data-width="380" 
  data-hide-cover="false"></div>
                   

                    
                    
                    
        			</div>
               
                
                </div>	
                
		</footer>

     	 <posfooter><div class="loguinho">
	     	 <? include ("/home/waibrasi/Scripts/clientes/loguinho_rodape.php"); ?>
	     	 </div></posfooter>
	     	 

<!-- @formatter:on -->


<? echo $_SESSION['googleanalytics']; ?>
               
    
<? include "/home/waibrasi/Scripts/clientes/wp.php"; ?>



</body>
</html>