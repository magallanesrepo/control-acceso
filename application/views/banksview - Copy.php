        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Bancos</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Mantenimiento</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Bancos</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>



              <div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Bancos</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" >Nuevo Banco</button>


                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewbank" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Nuevo Banco</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Banks/create') ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="name" id="name"></div>
                                              </div>





                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 



                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
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
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Nombre </th>
                                       
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $row) {
                                        ?>
                                    <tr>
                                        
                                        <th scope="row"> <?php echo $row->bank_id;
                                        ?></th>
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                        <td><?php echo $row->name;?></td>
                                        <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditbank<?php echo$row->bank_id;
                                        ?>" >Editar</button>
</td>
                                       
                                    </tr>




 <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modaleditbank<?php echo$row->bank_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Editar Banco</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Banks/create') ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$row->name;
                                        ?>" name="name<?php echo$row->bank_id;
                                        ?>" id="name<?php echo$row->bank_id;
                                        ?>">


                                        <input type="hidden" class="form-control" value="<?php echo$row->bank_id;
                                        ?>" name="idedit<?php echo$row->bank_id;
                                        ?>" id="idedit<?php echo$row->bank_id;
                                        ?>">
                                    </div>
                                              </div>





                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        
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

            </div>
        </div>