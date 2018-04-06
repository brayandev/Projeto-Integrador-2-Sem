<?php
 require 'traducao/lang.php';
 $numero_pg = 0;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>TheGamers - Detalhes</title>
        <?php

            require_once 'menus/head.php';

        ?>
    
    </head>

    <body>

        <div class="container-fluid">

            <?php

                require_once 'menus/menu.php';

            ?>

            <div class="row meio">

                <article class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    
                    <?php

                        $valida = 0;

                        foreach($noticias as $noticia){
                            
                            if($noticia['id'] == $_GET['id']){

                                $valida = 1;
                    
                    ?>
                    
                    <h2 class="h2-noticia-detalhes"><?php echo $noticia['titulo']; ?></h2>
                   
                    <img class="img-noticia-detalhes" src="<?php echo $noticia['imagem']; ?>">

                    <p class="p-noticia-detalhes"><?php echo $noticia['texto']; ?> <a href="<?php echo $noticia['fonte']; ?>" class="a-link-noticia" target="_blank"><?php echo $trad['fonte'];?></a></p>

                    <small class="small-noticia-rodape"><?php echo $noticia['data']; ?></small>
                    
                    <?php 
                            
                            }
                        
                        } 

                        if($valida == 0){

                    ?>

                    <img class="img-noticia-erro" src="images/erro.png">

                    <h2 class="h2-noticia-detalhes" style="color: #505050;">Ops!</h2>

                    <h3 class="h3_home_novidades" style="text-align: center; margin-bottom: 50px; color: #505050;"><?php echo $trad['texto_erro']; ?> </h3>

                    <?php

                        }
                    
                    ?>

                    <div class="grid-secoes">

                        <h3 class="h3_home_novidades"><?php echo $trad['secoes'];?></h3>

                        <hr class="hr_home">

                        <a href="historiadosgames.php" class="a_secao">
                            
                            <div class="secao">
                                
                                <h2 class="h2-secoes"><?php echo $trad['historia']; ?></h2>

                            </div>

                        </a>

                        <a href="plataformasatualmente.php" class="a_secao">
                            
                            <div class="secao">
                                
                                <h2 class="h2-secoes"><?php echo $trad['plataformas']; ?></h2>

                            </div>

                        </a>

                        <a href="jogospremiados.php" class="a_secao">
                            
                            <div class="secao">
                                
                                <h2 class="h2-secoes"><?php echo $trad['jogos']; ?></h2>

                            </div>

                        </a>

                    </div>
                   
                </article>
                
                <aside class="col-lg-4 col-md-4 hidden-sm hidden-xs aside-noticia-secundaria">

                    <h3 class="h3-novidade-secundaria"><?php echo $trad['recentes'];?></h3>

                    <hr>
                    
                    <?php

                        $qtd = 0;
                    
                        $noticias = array_reverse($noticias);
                    
                        foreach($noticias as $noticia){

                            $qtd = $qtd + 1;

                            if($qtd <= 5){
                            
                                if($noticia['id'] != $_GET['id']){
                    
                    ?>

                    <a href="noticia.php?id=<?php echo $noticia['id'];?>" class="a-noticia-secundaria">
                        
                        <img src="<?php echo $noticia['imagem']; ?>" class="img-noticia-secundaria">

                        <h3 class="h3-noticia-secundaria"><?php echo $noticia['titulo']; ?></h3>

                        <hr class="hr_home">

                    </a>
                    
                    <?php
                    
                                }

                            }
                            
                        }
                    
                    ?>

                
                </aside>

            </div>

            <?php

                require_once 'menus/rodape.php';

            ?>

        </div>

    </body>

    </html>
