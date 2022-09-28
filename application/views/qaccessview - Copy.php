        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>HIstorial de Acceso</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Mantenimiento</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Historial de Acceso</strong>
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
                            <h5>Lista de Accesos</h5>
                            <div class="ibox-tools">
                            <!--  <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" >Nuevo Cliente</button>-->



                            </div>
                        </div>
                        <div class="ibox-content">
                           <!-- <div class="row">
                                <div class="col-sm-5 m-b-xs"><select class="form-control-sm form-control input-s-sm inline">
                                    <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>
                                </select>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-sm btn-white ">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Day
                                        </label>
                                        <label class="btn btn-sm btn-white active">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Week
                                        </label>
                                        <label class="btn btn-sm btn-white">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Month
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group"><input placeholder="Search" type="text" class="form-control form-control-sm"> <span class="input-group-append"> <button type="button" class="btn btn-sm btn-primary">Go!
                                    </button> </span></div>

                                </div>
                            </div>-->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Carnet </th>
                                        <th>Fecha de acceso </th>
                                        <th>Status </th>
                                        
                                       
                                       <!-- <th>Accion</th>-->
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $row) {
                                        ?>
                                    <tr>
                                        
                                    
                                        </th>
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                        <td><?php echo $row->id;?></td>
                                        <td><?php echo $row->cardid;?></td>
                                        <td><?php echo $row->access_date;?></td>
                                        <td><?php echo $row->status?></td>
                                   
                                        <!--<td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditbank<?php echo$row->id;
                                        ?>" >Editar</button>
</td>-->
                                       
                                    </tr>




 <!-- New Bank Modal --> 
                   <!--       <    <div class="modal inmodal" id="modaleditbank<?php echo$row->client_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      
                                            <h4 class="modal-title">Editar Cliente</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Clients/create') ?>" method="post">
                                              
                                      


                                                                      <div class="row">


                                                <div class="col-lg-4">
                                              <div class="form-group "><label class="float-left">Nombre</label>

                                         <input type="text" class="form-control" value="<?php echo$row->client_name;
                                        ?>" name="name<?php echo$row->client_id;
                                        ?>" id="name<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Apellido</label>

                                       <input type="text" class="form-control" value="<?php echo$row->client_lastname;
                                        ?>" name="client_lastname<?php echo$row->client_id;
                                        ?>" id="client_lastname<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                               <div class="form-group  "><label class="float-left">Cedula -Rif</label>

                                         <input type="text" class="form-control"  value="<?php echo$row->cedularif;
                                        ?>" name="cedularif<?php echo$row->client_id;
                                        ?>" id="cedularif<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Fecha de Nacimiento</label>

                                         <input type="text" class="form-control" value="<?php echo$row->birthdate;
                                        ?>" name="birthdate<?php echo$row->client_id;
                                        ?>" id="birthdate<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                                 <div class="col-lg-4">
                                              <div class="form-group "><label class="float-left">Direccion</label>

                                        <input type="text" class="form-control" value="<?php echo$row->address;
                                        ?>" name="address<?php echo$row->client_id;
                                        ?>" id="address<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                            <div class="col-lg-4">

                                               <div class="form-group "><label class="float-left">Cantidad de hijos</label>

                                         <input type="text" class="form-control"  value="<?php echo$row->children_qty;
                                        ?>" name="cedularif<?php echo$row->client_id;
                                        ?>" id="cedularif<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Cantidad de nietos</label>

                                         <input type="text" class="form-control"  value="<?php echo$row->grandchildren_qty;
                                        ?>" name="grandchildren_qty<?php echo$row->client_id;
                                        ?>" id="grandchildren_qty<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                               <div class="form-group"><label class="float-left">Telefono</label>

                                        <input type="text" class="form-control" value="<?php echo$row->phone;
                                        ?>" name="phone<?php echo$row->client_id;
                                        ?>" id="phone<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Email</label>

                                         <input type="text" class="form-control" value="<?php echo$row->email;
                                        ?>" name="email<?php echo$row->client_id;
                                        ?>" id="email<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                                <div class="form-group "><label class="float-left">Lugar de Trabajo</label>

                                         <input type="text" class="form-control" value="<?php echo$row->work;
                                        ?>" name="work<?php echo$row->client_id;
                                        ?>" id="work<?php echo$row->client_id;
                                        ?>">
                                              </div>
                                            </div>
   <input type="hidden" class="form-control" value="<?php echo$row->client_id;
                                        ?>" name="idedit<?php echo$row->client_id;
                                        ?>" id="idedit<?php echo$row->client_id;
                                        ?>">
</div>
                





                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                                   <!-- New Bank Modal --> 






                                    <?php
                                }
                                    ?>
                                 
                                    </tbody>
                                </table>
                                  <p><?php echo $links; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
 <div class="col-lg-3"></div>
            </div>
        </div>