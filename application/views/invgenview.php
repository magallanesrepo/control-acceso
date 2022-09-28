        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Generar Avisos de Cobro</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Conceptos</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewconcept" >Nuevo Concepto</button>


                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewconcept" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Nuevo Concepto</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Concepts/create') ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" name="name" id="name"></div>
                                              </div>
                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Precio Mensual</label>

                                         <div class="col-sm-10"><input type="number" class="form-control" name="price" id="price"></div>
                                              </div>


                                              <div class="form-group row"><label class="col-sm-2 col-form-label">Tipo</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="concept_type" id="concept_type">
                                        <option>Seleccionar</option>
                                        <option>Mensual</option>
                                        <option>Ocasional</option>
                                        
                                    </select>                                        
                                    </div>
                                          </div>

                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="button" class="btn btn-primary" onclick="sendsave()">Guardar</button>
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
                          
                            <th>Nombre</th>
                            <th>Tipo</th>
                             <th>Precio</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Modificacion</th>
                            <th>Status</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($concepts as $concept): ?>
                            <tr>
                              
                                <td><?php echo$concept->concept_name ?></td>
                                <td><?php echo$concept->type ?></td>
                                 <td><?php echo$concept->price ?></td>
                                <td><?php echo$concept->registre_date ?></td>
                                 <td><?php echo$concept->edit_date ?></td>
                                <td><?php echo$concept->status ?></td>
                                <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditconcept<?php echo$concept->concept_id;
                                        ?>" title="Editar" ><i class="fa fa-pencil"></i></button>

                                        <!--<button class="btn btn-danger btn-sm" type="button" onclick="deleteconcept(<?php echo$concept->concept_id;
                                        ?>);" title="Borrar"><i class="fa fa-trash-o"></i></button>-->
                                        
                                </td>
                                 
                                
                              
                            </tr>


 <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modaleditconcept<?php echo$concept->concept_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Editar Concepto</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Concepts/update') ?>/<?php echo$concept->concept_id; ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$concept->concept_name;
                                        ?>" name="name<?php echo$concept->concept_id;
                                        ?>" id="name<?php echo$concept->concept_id;
                                        ?>">


                                        <input type="hidden" class="form-control" value="<?php echo$concept->concept_id;
                                        ?>" name="idedit<?php echo$concept->concept_id;
                                        ?>" id="idedit<?php echo$concept->concept_id;
                                        ?>">
                                    </div>


                                              </div>


                                               <div class="form-group  row"><label class="col-sm-2 col-form-label">Precio</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$concept->price;
                                        ?>" name="price<?php echo$concept->concept_id;
                                        ?>" id="price<?php echo$concept->concept_id;
                                        ?>">


                                     
                                    </div>

                                    
                                              </div>

                                                  <div class="form-group row"><label class="col-sm-2 col-form-label">Tipo</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="concept_type" id="concept_type<?php echo$concept->concept_id;
                                        ?>">
                                        
                                      <option <?php if($concept->type=="Mensual"){echo"selected";} ?>>Mensual</option>
                                      <option <?php if($concept->type=="Ocasional"){echo"selected";} ?>>Ocasional</option>
                                   
                                        
                                    </select>                                        
                                    </div>
                                          </div>



                                                 <div class="form-group row"><label class="col-sm-2 col-form-label">Tipo</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="concept_status" id="concept_status<?php echo$concept->concept_id;
                                        ?>">
                                        
                                      <option <?php if($concept->status=="Activo"){echo"selected";} ?>>Activo</option>
                                      <option <?php if($concept->status=="Inactivo"){echo"selected";} ?>>Inactivo</option>
                                   
                                        
                                    </select>                                        
                                    </div>
                                          </div>






                                 
                                        </div>
                                        <div class="modal-footer">
                                            <div id="idforconfirm_<?php echo$concept->concept_id ?>">
                                                <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo$concept->concept_id ?>)">Guardar Cambios</button>
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            </div>
                                                </form>
                                        

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 








                        <?php endforeach; ?>
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
     var price = document.getElementById("price").value; 
     var type = document.getElementById("concept_type").value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Concepts/create') ?>",
            method:"POST",
            data:{name:name,price:price,concept_type:type},
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
     var price = document.getElementById("price"+id).value;
      var type = document.getElementById("concept_type"+id).value;  
       var status = document.getElementById("concept_status"+id).value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Concepts/update') ?>/"+id,
            method:"POST",
            data:{name:name,price:price,concept_type:type,status:status},
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
      if(confirm("Esta seguro que desea borrar este Concepto?")) {
   $.ajax({
            url:"<?php echo site_url('Concepts/delete') ?>/"+id,
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