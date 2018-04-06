<?php
 require 'traducao/lang.php';
 $numero_pg = 2;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>TheGamers - Plataformas Atualmente</title>
        <?php

            require_once 'menus/head.php';

        ?>
    
    </head>

    <body class="fundoplataformas">

        <div class="container-fluid">

            <?php

                require_once 'menus/menu.php';

            ?>

            <div class="row meio">

                <article class="grid">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Playstation 4</h3>

                        <img src="images/ps4.jpg" class="img-plataformas">
                        
                        <?php 
                        
                        
                            $intro = substr($trad['tps4'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#playsatation4">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="playsatation4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">PlayStation 4</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/ps4.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tps4'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento" style="margin-top:-20px;">

                        <h3 class="h3-history-ref">Xbox One</h3>

                        <img src="images/xboxone.jpg" class="img-plataformas">
                        
                        <?php 
                        
                        
                            $intro = substr($trad['txboxone'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#xboxone">Ver mais</a></p>
                        
                        <!-- Modal -->
                            <div class="modal fade" id="xboxone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Xbox One</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/xboxone.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['txboxone'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Nintendo Switch</h3>

                        <img src="images/nintendoswirct.jpg" class="img-plataformas">
                        
                        <?php 
                        
                        
                            $intro = substr($trad['tswitch'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#nintendo">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="nintendo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Nintendo Switch</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/nintendoswirct.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tswitch'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Xbox One X</h3>

                        <img src="images/xboxx.jpg" class="img-plataformas">

                       <?php 
                        
                        
                            $intro = substr($trad['txboxx'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#onex">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="onex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Xbox One X</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/xboxx.jpg" class="img-modal-unica"><br><br>
                          <?php echo $trad['txboxx'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Nintendo Wii U</h3>

                        <img src="images/wiiu.jpg" class="img-plataformas">

                        <?php 
                        
                        
                            $intro = substr($trad['tnu'], 0, 201);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#wiiu">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="wiiu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Nintendo Wii U</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/wiiu.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tnu'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Xbox 360</h3>

                        <img src="images/360.jpg" class="img-plataformas">

                        <?php 
                        
                        
                            $intro = substr($trad['t360'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#xbox360">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="xbox360" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Xbox 360</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/360.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['t360'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>

                        <hr class="hr_home">

                    </div>
            
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 grid-element-plataformas elemento">

                        <h3 class="h3-history-ref">Playstation 3</h3>

                        <img src="images/ps3.jpg" class="img-plataformas">

                       <?php 
                        
                        
                            $intro = substr($trad['tps3'], 0, 200);
                        
                        ?>

                        <p class="p-introducao"><?php echo $intro;?>... <a href="#"  data-toggle="modal" data-target="#playsatation3">Ver mais</a></p>

                        <!-- Modal -->
                            <div class="modal fade" id="playsatation3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Playstation 3</h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/ps3.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tps3'];?>
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
