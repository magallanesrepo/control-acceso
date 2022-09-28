        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Mis Avisos de Cobro</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Mis Avisos de Cobro</h5>
                            <div class="ibox-tools">
                            <!--  <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" >Nuevo Banco</button>-->

<?php// var_dump( $userdatas);?>
                              <!-- New Bank Modal --> 
                             <!-- <div class="modal inmodal" id="modalnewbank" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                          
                                            <h4 class="modal-title">Nuevo Banco</h4>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('banks/create') ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="name" id="name"></div>
                                              </div>
                                              


                                           
                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="button" class="btn btn-primary" onclick="sendsave()">Guardar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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
                <table class="table table-striped" id="customtable">
                    <thead>
                        <tr>
                          
                            <th>Numero de Aviso</th>
                            <th>Mes</th>
                            <th>Status</th>
                        
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                   //     print_r($reg_conf);
                       

                        foreach ($result as $row){

foreach ($result as $keyr ) {


    foreach ($reg_conf as $keyconf ) {

      if ($keyr->inv_number==$keyconf->invoice_number) {
        $status="Confirmado";
      }
      else"not";




    }
    



}
                         ?>




                            <tr>
                              
                                <td><?php echo$row->inv_number ?></td>
                                <td><?php echo$row->month ?></td>
                                <td><?php echo$status ?></td>
                               <!-- <td><?php echo$row->owner ?></td>-->

                               
                              <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditbank<?php echo$row->invoice_id;
                                        ?>" title="Editar" ><i class="fa fa-book"></i></button>

                                       <!-- <button class="btn btn-danger btn-sm" type="button" onclick="deleteconcept(<?php echo$row->invoice_id;
                                        ?>);" title="Borrar"><i class="fa fa-trash-o"></i></button>-->
                                        
                                </td>
                                 
                                
                              
                            </tr>


 <!-- New Bank Modal --> <!--
                              <div class="modal inmodal" id="modaleditbank<?php echo$row->invoice_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                         
                                            <h4 class="modal-title">Registrar Pago</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Invoices/register_payment') ?>/<?php echo$row->invoice_id; ?>" method="post">


                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nro</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$row->inv_number;
                                        ?>" name="inv_number<?php echo$row->invoice_id;
                                        ?>" id="inv_number<?php echo$row->invoice_id;
                                        ?>" readonly>

                                      </div>
                                    </div>

                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de Pago</label>

                                         <div class="col-sm-10"><input type="date" class="form-control" value="" name="pay_date<?php echo$row->invoice_id;
                                        ?>" id="pay_date<?php echo$row->invoice_id;
                                        ?>">

                                    </div>
                                              </div>


                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Nro Referencia</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="reference<?php echo$row->invoice_id;
                                        ?>" id="reference<?php echo$row->invoice_id;
                                        ?>">

                                    </div>
                                              </div>
                                                  

                                                  <div class="form-group  row"><label class="col-sm-2 col-form-label">Banco Emisor</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="sending_bank<?php echo$row->invoice_id;
                                        ?>" id="sending_bank<?php echo$row->invoice_id;
                                        ?>">

                                    </div>
                                              </div>



                                                  <div class="form-group  row"><label class="col-sm-2 col-form-label">Banco Receptor</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="receiving_bank<?php echo$row->invoice_id;
                                        ?>" id="receiving_bank<?php echo$row->invoice_id;
                                        ?>">

                                    </div>
                                              </div>


                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Metodo de Pago</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="method<?php echo$row->invoice_id;
                                        ?>" id="method<?php echo$row->invoice_id;
                                        ?>">

                                    </div>
                                              </div>



                                                <div class="form-group  row"><label class="col-sm-4 col-form-label">Observaciones</label>

                                         <div class="col-sm-8"><textarea  class="form-control"  name="observations<?php echo$row->invoice_id;
                                        ?>" id="observations<?php echo$row->invoice_id;
                                        ?>"></textarea>

                                    </div>
                                              </div>



                                 
                                        </div>
                                        <div class="modal-footer">
                                            <div id="idforconfirm_<?php echo$row->invoice_id ?>">
                                            <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo$row->invoice_id ?>)">Guardar Cambios</button>
                                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            </div>
                                                </form>
                                        

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                                   <!-- New Bank Modal --> 


 <div class="modal inmodal" id="modaleditbank<?php echo$row->invoice_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                         
                                            <h4 class="modal-title">Registrar Pago</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Myinv/register')?>" method="post">


                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nro</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$row->inv_number;
                                        ?>" name="inv_number" id="inv_number" readonly>

                                      </div>
                                    </div>

                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha de Pago</label>

                                         <div class="col-sm-10"><input type="date" class="form-control" value="" name="pay_date" id="pay_date" required="">

                                    </div>
                                              </div>


                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Nro Referencia</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="reference" id="reference">

                                    </div>
                                              </div>
                                                  

                                                  <div class="form-group  row"><label class="col-sm-2 col-form-label">Banco Emisor</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="" name="sending_bank" id="sending_bank">

                                    </div>
                                              </div>



                                                  <div class="form-group  row"><label class="col-sm-2 col-form-label">Banco Receptor</label>

                                        <!-- <div class="col-sm-10"><input type="text" class="form-control" value="" name="receiving_bank<?php echo$row->invoice_id;
                                        ?>" id="receiving_bank<?php echo$row->invoice_id;
                                        ?>">-->

                                        <div class="col-sm-10">
                                           <select class="form-control" name="receiving_bank" id="receiving_bank" >
                                              <option value="" selected>Seleccionar</option>
                                             
                                             <?php

                                             foreach ($banksall as $bank) {
                                              echo' <option value="'.$bank->bank_id.'">'.$bank->name.'</option>';
                                             }

                                             ?>
                                                
                                                

                                               
                                                
                                            </select>

                                    </div>
                                              </div>


                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Metodo de Pago</label>

                                         <div class="col-sm-10"><!--<input type="text" class="form-control" value="" name="method<?php echo$row->invoice_id;
                                        ?>" id="method<?php echo$row->invoice_id;
                                        ?>">-->
                                         <select class="form-control" name="method" id="method" required>
                                              <option value="" selected>Seleccionar</option>
                                             
                                           
                                              <option>Transferencia</option>
                                              <option>Pago Movil</option>
                                              <option>Zelle</option>
                                              <option>Efectivo</option>
                                                

                                               
                                                
                                            </select>

                                    </div>
                                              </div>



                                                <div class="form-group  row"><label class="col-sm-4 col-form-label">Observaciones</label>

                                         <div class="col-sm-8"><textarea  class="form-control"  name="observations" id="observations"></textarea>

                                    </div>
                                              </div>



                                 
                                        </div>
                                        <div class="modal-footer">
                                            <div id="idforconfirm_<?php echo$row->invoice_id ?>">
                                            <!--<button type="button" class="btn btn-primary" onclick="sendedit(<?php echo$row->invoice_id ?>)">Guardar Cambios</button>-->
                                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            </div>
                                                </form>
                                        

                                        
                                        </div>
                                    </div>
                                </div>





                        <?php } ?>
                    </tbody>
                </table>
                  <p><?php echo $links; ?></p>
        </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
  
  <script type="text/javascript">


function sendsave() {

//alert(id);
     var name = document.getElementById("name").value; 
     //var price = document.getElementById("price").value; 
     //var type = document.getElementById("concept_type").value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('banks/create') ?>",
            method:"POST",
            data:{name:name},
            success:function(result) { 

//$("#idforconfirm_"+id).html(' <div class="alert alert-success">   <strong> Concepto Editado con Exito</strong></div>');

            /* setTimeout(
    function() {
   location.reload(); 
    }, 2000);   */ 
             location.reload();    
            }

                
        })
}


      

function sendedit(id) {

//alert(id);
     var name = document.getElementById("name"+id).value; 
     //var price = document.getElementById("price"+id).value;
    //  var type = document.getElementById("concept_type"+id).value;  
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('banks/update') ?>/"+id,
            method:"POST",
            data:{name:name},
            success:function(result) { 

//$("#idforconfirm_"+id).html(result);

            /* setTimeout(
    function() {
   location.reload(); 
    }, 2000);   */ 
             location.reload();    
            }

                
        })
}



function deleteconcept(id) {

//alert(id);
    // var name = document.getElementById("name"+id).value; 
     //var price = document.getElementById("price"+id).value; 
    // alert(price);
     //var prop ="all";
      if(confirm("Esta seguro que desea borrar este Banco?")) {
   $.ajax({
            url:"<?php echo site_url('banks/delete') ?>/"+id,
           // method:"POST",
          //  data:{name:name,price:price},
            success:function(result) { 


             location.reload();    
            }

                
        })

    } else {
        return false;
    }
}








  </script>