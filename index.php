<?php
 require 'traducao/lang.php';
 $numero_pg = 0;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>TheGamers - Home</title>
        <?php

            require_once 'menus/head.php';

        ?>

    </head>

    <body class="bdindex">

        <div class="container-fluid">

            <?php

                require_once 'menus/menu.php';

            ?>

            <div class="row meio">

                <div class="grid">

                    <h3 class="h3_home_novidades"><?php echo $trad['novidadeSemana'];?></h3>

                    <hr class="hr_home">

                    <?php
                    
                        $noticias = array_reverse($noticias);

                        foreach ($noticias as $noticia) { 
                            
                            echo "<section class='col-lg-6 col-md-6 col-sm-12 col-xs-12 elemento'>

                                    <a href='noticia.php?id=".$noticia['id']."' class='a_noticia_home'>
                                    
                                        <img src='".$noticia['imagem']."' class='img_noticia_home'>
                                    
                                        <h3 class='h3_noticia_home'>".$noticia['titulo']."</h3>

                                    </a>

                                    <hr class='hr_home'>

                                </section>";
                            

                        }

                    ?>

                </div>
     
            </div>

            <?php

                require_once 'menus/rodape.php';

            ?>

        </div>

    </body>

    </html>
