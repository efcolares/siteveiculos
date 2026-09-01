<nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    MENU
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      
      
   
                
        <a class="nav-item nav-link<? if ($_GET['conteudo'] == '') { ?> active<? } ?>" href="/">A Loja</a>
        
                
        <a class="nav-item nav-link<? if ($_GET['conteudo'] == 'veiculos' or $_GET['conteudo'] == 'fotografiasv') { ?> active<? } ?>" href="?conteudo=veiculos">Nosso Estoque</a>
        
        <a class="nav-item nav-link<? if ($_GET['conteudo'] == 'Localizacao') { ?> active<? } ?>" href="?conteudo=Localizacao">Localização</a>
        
        
                <a class="nav-item nav-link<? if ($_GET['conteudo'] == 'Contato') { ?> active<? } ?>" href="?conteudo=Contato">Contato</a>
        
                
  
        
        
       
        

    </div>

</nav>
