        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Consulta Diaria</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Consultas</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Consulta Diaria</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>



              <div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row"> <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">




                            <h5>Búsqueda de Accessos Diarios</h5>
                            <div class="ibox-tools">
                            <a href="<?php echo site_url('Qlog/pdfreport') ?>" target="_blank"> <button class="btn btn-primary btn-sm" type="button" >Generar PDF</button></a>



                            </div>
                        </div>
                        <div class="ibox-content">
                           <div class="row">
                                <div class="col-sm-1 m-b-xs">
                                </div>
                                <div class="col-sm-10 m-b-xs">
                                  <form action="<?php echo site_url('Qlog/findLogs') ?>" method="post">
                                    <div class="input-group">Desde: <input value="<?php echo$datee[0]->log_search ?>" name="fecha-inicio" type="date" class="form-control form-control-sm"> Hasta: <input value="<?php echo$datee[0]->log_search_to ?>" name="fecha-fin" type="date" class="form-control form-control-sm"> <span class="input-group-append"> <button type="submit" class="btn btn-sm btn-primary">Ir
                                      </button> </span></div>
                                  </form>
                                </div>
                                <div class="col-sm-1">

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Bloque </th>
                                        <th>Accesos </th>
                                         <th>Color </th>
                                       
                                       <!-- <th>Accion</th>-->
                                    </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <tr>
                                        <?php //echo var_dump($datee) ?>
                                    
                                        </th>
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                       <tr> <td>10:00 am - 1:00 pm</td>
                                        <td><?php echo$ninethirty[0]->accesstime;?></td>
                                        <td>Rosado</td></tr>

                                        <tr> <td>11:00 am - 02:00 pm</td>
                                        <td><?php echo$tenthirty[0]->accesstime;?></td>
                                        <td>Amarillo</td></tr>


                                         <tr><td>12:00 pm - 03:00 pm</td>
                                        <td><?php echo$eleventhirty[0]->accesstime;?></td>
                                        <td>Azul</td></tr>


                                         <tr><td>01:00 pm - 03:00 pm</td>
                                        <td><?php echo$twelvethirty[0]->accesstime;?></td>
                                        <td>Naranja</td></tr>


                                         <tr><td>02:00 pm - 05:00 pm</td>
                                        <td><?php echo$thirteenthirty[0]->accesstime;?></td>
                                        <td>Morado</td></tr>

                                        <tr><td>03:00 pm - 06:00 pm</td>
                                        <td><?php echo$fourteenthirty[0]->accesstime;?></td>
                                        <td>Rosado</td></tr>

                                         <tr><td>04:00 pm - 7:00 pm</td>
                                        <td><?php echo$fifteenthirty[0]->accesstime;?></td>
                                        <td>Amarillo</td></tr>

                                         <tr><td>05:00 pm - 08:00 pm</td>
                                        <td><?php echo$sixteenthirty[0]->accesstime;?></td>
                                        <td>Azul</td></tr>

                                         <tr><td>06:00 pm - 09:00 pm</td>
                                        <td><?php echo$seventeenthirty[0]->accesstime;?></td>
                                        <td>Naranja</td></tr>

                                         <tr><td>07:00 pm - 10:00 pm</td>
                                        <td><?php echo$eighteenthirty[0]->accesstime;?></td>
                                        <td>Morado</td></tr>

                                   

                                        



                                       
                                   
                                        
                                       
                                    </tr>









                               
                                 
                                    </tbody>
                                </table>
                                  
                            </div>

                        </div>
                    </div>
                </div>
 <div class="col-lg-3"></div>
            </div>
        </div>