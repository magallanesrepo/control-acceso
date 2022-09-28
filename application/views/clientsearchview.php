        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Registro de Factura</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
               <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Cliente</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" ><i class="fa fa-plus"></i></button>

<?php// var_dump( $userdatas);?>
                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewbank" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Nuevo Cliente</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Clientsearch/create') ?>" method="post">

                                             <div class="row">


                                                <div class="col-lg-4">
                                              <div class="form-group "><label class="float-left">Nombre</label>

                                         <input type="text" class="form-control" name="client_name" id="name" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Apellido</label>

                                       <input type="text" class="form-control" name="client_lastname" id="name" required>
                                              </div>
                                            </div>

                                            <div class="col-lg-2"><label class="float-left">Cedula -Rif</label>
                                            <div class="form-group">    <select class="form-control" name="idtype" style="margin-top:27px">
                                        <option>V</option>
                                        <option>J</option>
                                        <option>E</option>
                                        <option>G</option>
                                                </select>
                                                </div>
                                                </div>


                                             <div class="col-lg-2">
                                               <div class="form-group  ">

                                         <input type="text" style="margin-top:26px" class="form-control" name="cedularif" id="name" required>
                                              </div>
                                            </div>


                                            
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Fecha de Nacimiento</label>

                                         <input type="date" class="form-control" name="birthdate" id="name" required>
                                              </div>
                                            </div>
                                                 <div class="col-lg-4">
                                              <div class="form-group "><label class="float-left">Direccion</label>

                                        <input type="text" class="form-control" name="address" id="name" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">

                                               <div class="form-group "><label class="float-left">Cantidad de hijos</label>

                                         <input type="number" class="form-control" name="children_qty" id="name" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Cantidad de nietos</label>

                                         <input type="number" class="form-control" name="grandchildren_qty" id="name" required>
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                               <div class="form-group"><label class="float-left">Telefono</label>

                                        <input type="number" class="form-control" name="phone" id="name" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Email</label>

                                         <input type="email" class="form-control" name="email" id="name" required>
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                                <div class="form-group "><label class="float-left">Lugar de Trabajo</label>

                                         <input type="text" class="form-control" name="work" id="name">
                                              </div>
                                            </div>

</div>
                                              


                                           
                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary" >Guardar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 



                            </div>
                        </div>















  <div class="ibox-content">


<form name="clientlist" action="Clientsearch/take" method="post">
  
<div class="row">
    <div class="col-sm-3 m-b-xs"></div>
   <div class="col-sm-6 m-b-xs"> <input list="brow" class="form-control-sm form-control input-s-sm inline" name="currentclient" placeholder="Seleccionar Cliente">
<datalist id="brow">
                               <!-- <div class="col-sm-8 m-b-xs"><select class="form-control-sm form-control input-s-sm inline" name="currentclient">-->
                                   <!-- <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>-->
                                    <?php

                                    foreach ($clients as $client) {

                                     echo' <option value="'.$client->client_id.'">'.$client->client_name.' - '.$client->client_lastname.' - '.$client->cedularif.' - '.$client->email.'</option>';


                                      
                                    }


                                    ?>
                                  </datalist>






                                </div>
                              <!--  </select>--> <div class="col-sm-3 m-b-xs"> <Button type="submit" name=""  class="btn btn-primary">Ok</Button></div>
                                </div>
                                
</div>
<div class="row">
    <div class="col-sm-2 m-b-xs"></div>
                                <div class="col-sm-8 m-b-xs">

                                </div>
                                 <div class="col-sm-2 m-b-xs"><br><br>
                                   
                                 </div>
</div>



</form>



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
              <!--  <table class="table table-striped" id="customtable">
                    <thead>
                        <tr>
                          
                            <th>Nombre</th>
                            <th>Fecha de Registro</th>
                        
                            <th>Accion</th>
                        </tr>
                    </thead>-->
                  <!--  <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                              
                                <td><?php echo$row->name ?></td>
                                <td><?php echo$row->registre_date ?></td>

                               
                                <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditbank<?php echo$row->bank_id;
                                        ?>" title="Editar" ><i class="fa fa-pencil"></i></button>

                                        <button class="btn btn-danger btn-sm" type="button" onclick="deleteconcept(<?php echo$row->bank_id;
                                        ?>);" title="Borrar"><i class="fa fa-trash-o"></i></button>
                                        
                                </td>
                                 
                                
                              
                            </tr>-->


 <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modaleditbank<?php echo$row->bank_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Editar Banco</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('banks/update') ?>/<?php echo$row->bank_id; ?>" method="post">
                                              
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
                                            <div id="idforconfirm_<?php echo$row->bank_id ?>">
                                                <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo$row->bank_id ?>)">Guardar Cambios</button>
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            </div>
                                                </form>
                                        

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 







<!--
                        <?php endforeach; ?>
                    </tbody>
                </table>
                  <p><?php echo $links; ?></p>-->
        </div>

                        </div>
                    </div>
                </div><div class="col-lg-2"></div>


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




$(document).ready(function() {
    $('.js-example-basic-single').select2();
});



  </script>