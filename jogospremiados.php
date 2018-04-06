<?php
 require 'traducao/lang.php';
 $numero_pg = 3;
?>
<!DOCTYPE html>
<html>

<head>
    <title>TheGamers - Jogos Premiados</title>
    <?php

        require_once 'menus/head.php';

    ?>

</head>

<body class="bdjogos">
    <div class=" container-fluid">
        <?php

            require_once 'menus/menu.php';

        ?>

        <div class="row meio">

            <article class="grid jogos-premiados">
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home"><?php echo $trad['treddead'];?></h3>

                    <a href="#" data-toggle="modal" data-target="#reddead"><img src="images/reddead.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="reddead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $trad['treddead'];?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/redDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['reddead'];?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home"><?php echo $trad['tskyrim'];?></h3>

                    <a href="#" data-toggle="modal" data-target="#theelder"><img src="images/Skyrim.png" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="theelder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">       
                        <?php echo $trad['tskyrim'];?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/skyrimDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['skyrim'];?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home">
                      <?php echo $trad['twalking'];?>
                    </h3>

                    <a href="#" data-toggle="modal" data-target="#thewalking"><img src="images/thewalking.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="thewalking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                          <?php echo $trad['twalking'];?>          
                        </h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/walkingDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['walking'];?>                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home">
                      <?php echo $trad['tgta']?>              
                    </h3>

                    <a href="#" data-toggle="modal" data-target="#gtav"><img src="images/gtav.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="gtav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">                      <?php echo $trad['tgta']?>              
                        </h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/gtaDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['gta']?>              
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home"><?php echo $trad['tdragon'];?></h3>

                    <a href="#" data-toggle="modal" data-target="#dragon"><img src="images/dragonage.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="dragon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $trad['tdragon'];?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/dragonDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['dragon'];?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home"><?php echo $trad['twitcher'];?></h3>

                    <a href="#" data-toggle="modal" data-target="#witcher"><img src="images/witcher.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="witcher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $trad['twitcher'];?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/witcherDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['witcher'];?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 elemento">
                    
                    <h3 class="h3_noticia_home"><?php echo $trad['tover'];?></h3>

                    <a href="#" data-toggle="modal" data-target="#overwatch"><img src="images/overwatch.jpg" class="img-jogos"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="overwatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $trad['tover'];?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="images/overwatchDetalhe.jpg" class="img-modal-unica"><br><br>
                        <?php echo $trad['over'];?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                    <hr class="hr_home">

                </div>

            </article>

        </div>
        

        <?php

            require_once 'menus/rodape.php';

        ?>

    </div>

</body>

</html>
