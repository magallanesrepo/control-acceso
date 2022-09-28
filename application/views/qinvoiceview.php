        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Búsqueda de Facturas</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Mantenimiento</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Impresión de Carnets</strong>
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




                            <h5>Búsqueda de Facturas</h5>
                            <div class="ibox-tools">
                            <!--  <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" >Nuevo Cliente</button>-->



                            </div>
                        </div>
                        <div class="ibox-content">
                           <div class="row">
                                <div class="col-sm-4 m-b-xs">
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                  <form action="<?php echo site_url('Qinvoice/getInvoices') ?>" method="post">
                                    <div class="input-group"><input value="<?php echo $result[0]->invoice ?>" name="inv" type="text" class="form-control form-control-sm"> <span class="input-group-append"> <button type="submit" class="btn btn-sm btn-primary">Ir
                                      </button> </span></div>
                                  </form>
                                </div>
                                <div class="col-sm-4">

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Factura </th>
                                        <th>Carnet </th>
                                        <th>QR </th>
                                        <th>Acción </th>
                                        
                                       
                                       <!-- <th>Accion</th>-->
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $row) {
                                        ?>
                                    <tr>
                                        
                                    
                                        </th>
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                        <td><?php echo $row->invoice;?></td>
                                        <td><?php echo $row->cardid;?></td>
                                        <td><img src='<?php echo base_url() . "/../assets/qrimages/$row->cardid.png"; ?>' style='width: 18%;'></td>
                                        <td>
                                        <a href="<?php echo base_url();?>index.php/CardsPrinta/pdfcard/<?php echo$row->cardid ?>"><button onclick="reloadd();" class="btn btn-info btn-sm" type="button" <?php 
                                         if($row->printed=='YES'){echo"disabled";} ?> ><?php if($row->printed=='YES'){echo"Impreso";} else {echo"Imprimir";}?></button></a>
                                          <button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#modalregcard<?php echo$row->id;
                                        ?>" <?php if($row->delivered=='YES'){echo"disabled";} ?> ><?php if($row->delivered=='YES'){echo"Entregado";} else {echo"Entregar";} ?></button>   </td>
                                   
                                        
                                       
                                    </tr>






 <!-- New Bank Modal --> 
 <div class="modal inmodal" id="modalregcard<?php echo$row->id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Entregado A:</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Clients/create') ?>" method="post">
                                              
                                             <!-- <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$row->client_name;
                                        ?>" name="name<?php echo$row->client_id;
                                        ?>" id="name<?php echo$row->client_id;
                                        ?>">


                                        <input type="hidden" class="form-control" value="<?php echo$row->client_id;
                                        ?>" name="idedit<?php echo$row->client_id;
                                        ?>" id="idedit<?php echo$row->client_id;
                                        ?>">
                                    </div>
                                              </div>-->



                                                                                <div class="row">


                                                <div class="col-lg-12">
                                              <div class="form-group "><label class="float-left">Nombre y Apellido</label>

                                         <input type="text" class="form-control" name="name<?php echo$row->id;
                                        ?>" id="name<?php echo$row->id;
                                        ?>" required>
                                              </div>
                                            </div>
                                           
                                        
   <input type="hidden" class="form-control" value="<?php echo$row->id;
                                        ?>" name="idedit<?php echo$row->id;
                                        ?>" id="idedit<?php echo$row->id;
                                        ?>">
</div>
                





                                 
                                        </div>
                                        <div class="modal-footer">
                                          <div id="idforconfirm_<?php echo$row->id;
                                        ?>"></div>
                                                <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo $row->id; ?>)">Aceptar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 







                                    <?php
                                }
                                    ?>
                                 
                                    </tbody>
                                </table>
                                  
                            </div>

                        </div>
                    </div>
                </div>
 <div class="col-lg-3"></div>
            </div>
        </div>

<script>
</script>