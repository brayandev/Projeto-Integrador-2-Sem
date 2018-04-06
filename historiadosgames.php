<?php
 require 'traducao/lang.php';
 $numero_pg = 1;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>TheGamers - História dos Games</title>
        <?php

            require_once 'menus/head.php';

        ?>
    
    </head>

    <body class="fundohistoria">

        <div class="container-fluid">

            <?php

                require_once 'menus/menu.php';

            ?>

            <div class="row">

                <article class="meio">

                    <div class="grid">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['magnavox'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#magnavox">

                                <img src="images/magnavoxodssey.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="magnavox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['magnavox'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/magnavoxodssey.jpg" class="img-modal-unica">
                                  <br><br>
                                <?php echo $trad['tmagnavox'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['pong'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#pong">

                                <img src="images/pong.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="pong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['pong'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/pong.jpg" class="img-modal-unica">
                                  <br><br>
                                <?php echo $trad['tpong'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['coleco'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#coleco">

                                <img src="images/telstar.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="coleco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">
                                <br><br>    
                                <?php echo $trad['coleco'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/telstar.jpg" class="img-modal-unica">
                                <?php echo $trad['tcoleco'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['2600'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#2600">

                                <img src="images/atari-2600.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="2600" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><br><br><?php echo $trad['2600'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/atari-2600.jpg" class="img-modal-unica">
                                <?php echo $trad['t2600'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['telejogo'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#telejogo">

                                <img src="images/telejogo.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="telejogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['telejogo'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/telejogo.jpg" class="img-modal-unica"><br><br><br><br>
                                <?php echo $trad['ttelejogo'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['intellivision'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#intellivision">

                                <img src="images/intelevision.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="intellivision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['intellivision'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/intelevision.jpg" class="img-modal-unica"><br><br><br><br>
                                <?php echo $trad['tintellivision'];?>
                                <br>
                                <?php echo $trad['tintellivision2'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['nes'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#nes">

                                <img src="images/nes-console1.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="nes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['nes'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/nes-console1.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tnes'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['7800'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#7800">

                                <img src="images/atari7800.jpeg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="7800" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['7800'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/atari7800.jpeg" class="img-modal-unica"><br><br>
                                <?php echo $trad['t7800'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['3d0'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#3d0">

                                <img src="images/3do.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="3d0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['3d0'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/3do.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['t3d0'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['jaguar'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#jaguar">

                                <img src="images/jaguar.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="jaguar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['jaguar'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/jaguar.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tjaguar'];?>
                                <br>
                                <?php echo $trad['tjaguar2'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['snk'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#snk">

                                <img src="images/snk-neo-geo-cd.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="snk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['snk'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/snk-neo-geo-cd.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tsnk'];?>
                                <br>
                                <?php echo $trad['tsnk2'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['saturn'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#saturn">

                                <img src="images/sega-saturno.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="saturn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['saturn'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/sega-saturno.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tsaturn'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['playstation'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#playstation">

                                <img src="images/playstation.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="playstation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['playstation'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/playstation.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tplaystation'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['64'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#64">

                                <img src="images/nitendo64.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="64" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['64'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/nitendo64.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['t64'];?>
                                <br>
                                <?php echo $trad['t642'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['dreamcast'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#dreamcast">

                                <img src="images/sega%20Deamcast.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="dreamcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['dreamcast'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/sega%20Deamcast.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tdreamcast'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['playstation2'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#playstation2">

                                <img src="images/playstation2.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="playstation2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['playstation2'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/playstation2.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tplaystation2'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['cube'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#cube">

                                <img src="images/gamecube.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="cube" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['cube'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/gamecube.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['tcube'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>
                    
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element elemento">

                            <h3 class="h3-history-ref"><?php echo $trad['xbox'];?></h3>

                            <a href="#" data-toggle="modal" data-target="#xbox">

                                <img src="images/microsoft%20X-box.jpg" class="img-history">

                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="xbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $trad['xbox'];?></h4>
                              </div>
                              <div class="modal-body">
                                <img src="images/microsoft%20X-box.jpg" class="img-modal-unica"><br><br>
                                <?php echo $trad['txbox'];?>
                                <br>
                                <?php echo $trad['txbox2'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                            </div>
                            </div>


                            <hr class="hr_home">
                            
                        </div>
                    
                    </div>
                
                </article>

            </div>

            <div class="row" style="margin-bottom: 200px;">

                <aside class="grid meio-history">
                    
                    <h3 class="h3_home_novidades">Galeria</h3>

                    <hr class="hr_home">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/fairchild.jpg" class="img-galeria" alt="Imagem do fairchild">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  grid-element-galeria elemento">
                        
                        <img src="images/rca-studio.jpg" class="img-galeria" alt="Imagem do rca-studio">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/stunt-cycle1.jpg" class="img-galeria" alt="Imagem do stunt">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/telstar-combat.jpg" class="img-galeria" alt="Imagem do telstar combat">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/magnavox-odyssey.jpg" class="img-galeria" alt="Imagem do odyssey 3000">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/magnavox-odyssey-40001.jpg" class="img-galeria" alt="Imagem do odyssey 40001">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/sega-master-system1.jpg" class="img-galeria" alt="imagem do master system 1">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/nec-turbografx.jpg" class="img-galeria" alt="imagem do nec turbografx">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/sega-genesis1.jpg" class="img-galeria" alt="imagem do sega genesis">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/sega-master-system-2.jpg" class="img-galeria" alt="imagem do master system 2">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/snk-neo-geo-aes-console1.jpg" class="img-galeria" alt="imagem do snk neogeo aes">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/super_nintendo1.jpg" class="img-galeria" alt="imagem do super nintendo1">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/nec-turbo-duo-console1.jpg" class="img-galeria" alt="imagem do nec turbo duo">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/sega-cd1.jpg" class="img-galeria" alt="imagem do sega-cd">

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/magnavox-odyssey2.jpg" class="img-galeria" alt="imagem do magnavox odyssey2">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/coleco-telstar-colortron1.jpg" class="img-galeria" alt="telstar colortron">
                        
                    </div>

                    

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/coleco-telstar-arcade-thumb.jpg" class="img-galeria" alt="imagem do telstar arcade thumb">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/zircon-channel-f-system-ii1.jpg" class="img-galeria" alt="imagem do zircon">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/atari400.jpg" class="img-galeria" alt="imagem do atari 400">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/atari-2600-jr-console1.jpg" class="img-galeria" alt="imagem do matari 2600 jr console">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/coleco-gemini1.jpg" class="img-galeria" alt="imagem do coleco gemini1">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/mattel-intellivision-ii1.jpg" class="img-galeria" alt="imagem mattel-intellivision">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/famicon.jpg" class="img-galeria" alt="imagem do famicon">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/coleco-telstar-gemini.jpg" class="img-galeria" alt="imagem do telstar gemini">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/emerson-arcadia-20011.jpg" class="img-galeria" alt="imagem do emerson arcadia">
                        
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-element-galeria elemento">
                        
                        <img src="images/colecovision1.jpg" class="img-galeria" alt="imagem do colecovision">
                        
                    </div>

                </aside>

            </div>
            
            <?php

                require_once 'menus/rodape.php';

            ?>
            
        </div>

    </body>

    </html>
