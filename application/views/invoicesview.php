        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Avisos de Cobro</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Avisos de Cobro</h5>
                            <div class="ibox-tools">
                             <!--<a href="<?php echo site_url('Invoices/create') ?>"> <button class="btn btn-primary btn-sm" type="button"> Mensual</button></a>-->

                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewmonthly" >Mensual </button>
                                
                                 <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modalnewother" >Individual </button>

                                 <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#modalnewconcept" >Especial </button>

                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewconcept" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                      <form action="<?php echo site_url('Manualinv/create') ?>" method="post">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title"> Cuota Especial</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Concepto</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="concept" id="concept"></div>
                                              </div>
                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Monto</label>

                                         <div class="col-sm-10"><input type="number" class="form-control" name="price" id="price"></div>
                                              </div>

                                               <div class="form-group  row"><label class="col-sm-3 col-form-label">Observaciones</label>

                                         <div class="col-sm-9"><textarea class="form-control" name="observations" id="observations"></textarea> </div>
                                              </div>

                                              

                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary" onclick="sendsave()">Guardar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 



  <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewother" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Aviso de Cobro Individual</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Manualinv/createother') ?>" method="post">


                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Propietario</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="owner">
                                        <option value="">Seleccionar</option>

                                        <?php foreach ($userr as $usr ) { ?>
                                                 <option value="<?php echo$usr->user_id ?>"><?php echo$usr->user_name." ". $usr->user_lastname; ?></option>
                                          <?php  } ?>




                                    
                                    </select>

                                        
                                    </div>
                                </div>





                                          
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Concepto</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="concept" id="concept"></div>
                                              </div>
                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Monto</label>

                                         <div class="col-sm-10"><input type="number" class="form-control" name="price" id="price"></div>
                                              </div>

                                               <div class="form-group  row"><label class="col-sm-3 col-form-label">Observaciones</label>

                                         <div class="col-sm-9"><textarea class="form-control" name="observations" id="observations"></textarea> </div>
                                              </div>

                                              

                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary" onclick="sendsave()">Guardar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 






  <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewmonthly" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Aviso de Cobro Mensual</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body" >
                                
                                          
                                             <!-- <div class="form-group  row"><label class="col-sm-2 col-form-label">Concepto</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="concept" id="concept"></div>
                                              </div>
                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Monto</label>

                                         <div class="col-sm-10"><input type="number" class="form-control" name="price" id="price"></div>
                                              </div>

                                               <div class="form-group  row"><label class="col-sm-3 col-form-label">Observaciones</label>

                                         <div class="col-sm-9"><textarea class="form-control" name="observations" id="observations"></textarea> </div>
                                              </div>-->
                                                  <table class="table table-bordered" >
                                                   <thead style="text-align: center"><th>Concepto</th><th>Monto</th><th>Monto + Alic 1</th><th>Monto + Alic 2</th></thead>
                                                   <tbody>
                                             
                                                 
                                              


                                              <?php   foreach ($all_concepts as $concept) { ?>


                                               <?php foreach ($aliq1 as $aliqval1) {

                                                $aliqreal1=$concept->price*$aliqval1->valor;
                                                $concept_total1=$aliqreal1+$concept->price;



                                                foreach ($aliq2 as $aliqval2) {

                                                $aliqreal2=$concept->price*$aliqval2->valor;
                                                $concept_total2=$aliqreal2+$concept->price;

                                                ?>
                                              <tr style="text-align: center"><td ><?php echo$concept->concept_name; ?></td><td><?php echo$concept->price; ?></td><td><?php echo$concept_total1; ?></td><td><?php echo$concept_total2; ?></td></tr>
                                             <?php    }
                                                 ?>


                                                  <?php    }
                                                 ?>

                                                  <?php    }
                                                 ?>
                                                 
                                                   </tbody>
                                                 </table>

                                 
                                        </div>
                                        <div class="modal-footer">

                                               <a href="<?php echo site_url('Invoices/create') ?>"> <button type="button" class="btn btn-primary" >Guardar</button> </a>
                                                
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 






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
            <div class="column">
                        
                <table class="table table-striped" id="customtable" >
                    <thead>
                        <tr>
                          
                            <th>Nro Factura</th>
                            <th>Fecha de Generacion</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Tipo de Factura</th>
                                                
                            <th>Mes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>


                          <?php if ($row->invoice_type==1) {

                            $type='Mensual';
                            
                          }
                          if ($row->invoice_type==2) {

                            $type='Especial';

                            
                          }
                           if ($row->invoice_type==3) {

                            $type='Individual';

                            
                          }



                           ?>
                            <tr>
                              
                                <td><?php echo$row->inv_number ?></td>
                                 <td><?php echo$row->generation_date ?></td>

                               
                                <td><?php echo$row->due_date ?></td>
                                 <td><?php echo$type ?></td>
                                  <td><?php echo$row->month ?></td>
                             
                                
                              
                            </tr>





                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
        </div>
         

                        </div>
                    </div>
                
            </div>
        </div>
</div></div>
  
  <script type="text/javascript">


  





  </script>