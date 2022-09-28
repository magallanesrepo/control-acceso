        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Torres</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Torres</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewconcept" >Nueva Torre</button>


                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewconcept" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Nueva Torre</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Towers/create') ?>" method="post">
                                              
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
                           
                            <th>Fecha de Registro</th>
                            <th>Fecha de Modificacion</th>
                            <th>Status</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                              
                                <td><?php echo$row->name ?></td>
                        
                               
                                <td><?php echo$row->registre_date ?></td>
                                 <td><?php echo$row->edit_date ?></td>
                                <td><?php echo$row->status ?></td>
                                <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditconcept<?php echo$row->tower_id;
                                        ?>" title="Editar" ><i class="fa fa-pencil"></i></button>

                                        <!--<button class="btn btn-danger btn-sm" type="button" onclick="deleteconcept(<?php echo$concept->tower_id;
                                        ?>);" title="Borrar"><i class="fa fa-trash-o"></i></button>-->
                                        
                                </td>
                                 
                                
                              
                            </tr>


 <!-- New Bank Modal -->  
                              <div class="modal inmodal" id="modaleditconcept<?php echo$row->tower_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Editar Torre</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Torres/update') ?>/<?php echo$row->tower_id; ?>" method="post">
                                              
                                              <div class="form-group  row"><label class="col-sm-2 col-form-label">Nombre</label>

                                         <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo$row->name;
                                        ?>" name="name<?php echo$row->tower_id;
                                        ?>" id="name<?php echo$row->tower_id;
                                        ?>">


                                        <input type="hidden" class="form-control" value="<?php echo$row->tower_id;
                                        ?>" name="idedit<?php echo$row->tower_id;
                                        ?>" id="idedit<?php echo$row->tower_id;
                                        ?>">
                                    </div>


                                              </div>





                                                 <div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="tower_status" id="tower_status<?php echo$row->tower_id;
                                        ?>">
                                        
                                      <option <?php if($row->status=="Activo"){echo"selected";} ?>>Activo</option>
                                      <option <?php if($row->status=="Inactivo"){echo"selected";} ?>>Inactivo</option>
                                   
                                        
                                    </select>                                        
                                    </div>
                                          </div>






                                 
                                        </div>
                                        <div class="modal-footer">
                                            <div id="idforconfirm_<?php echo$row->tower_id ?>">
                                                <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo$row->tower_id ?>)">Guardar Cambios</button>
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
  //   var price = document.getElementById("price").value; 
  //   var type = document.getElementById("concept_type").value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Towers/create') ?>",
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
      
       var status = document.getElementById("tower_status"+id).value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Towers/update') ?>/"+id,
            method:"POST",
            data:{name:name,status:status},
            success:function(result) { 

//$("#idforconfirm_"+id).html(row);

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