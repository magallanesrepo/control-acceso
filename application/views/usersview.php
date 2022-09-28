        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Usuarios</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Lista de Usuarios</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewconcept" >Nuevo Usuario</button>


                             



                            </div>
                        </div>



















     <div class="modal inmodal fade" id="modalnewconcept" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Nuevo Usuario</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                                     <div class="row">
                                                 <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Nombre</label>
                                            <input class="form-control" name="first_name" id="first_name" placeholder="" required>
                     </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Apellido</label>
                                            <input class="form-control" name="lastname" id="lastname" placeholder="" required>
                     </div>
                </div>
                 
                <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">E-Mail</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                     </div>
                </div>
          <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Contraseña</label>
                                            <input type="password" class="form-control" name="pass" 
                                           id="password" placeholder="" pattern=".{4,}"   required title="4 caracteres minimo">
                     </div>
                </div>

                  <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Confirmar Contraseña</label>
                                            <input type="password" class="form-control" name="confirmpass" id="confirm_password" placeholder="" pattern=".{4,}"   required title="4 caracteres minimo">
                     </div>
                </div>
                  
        <div class="col-lg-4">
                 <div class="form-group">
                                          <label class="float-left">Nivel</label>
                                           <select class="form-control" name="level" id="level" required>
                                              <option value="" selected>Seleccionar</option>
                                               <option value="1">Administrador</option>
                                               <option value="2">General</option>
                                                
                                                

                                               
                                                
                                            </select>
                     </div>
                </div>
              
         
        
</div>

                                              
                                        </div>

                                        <div class="modal-footer">
                                              <button type="button" class="btn btn-primary" onclick="sendsave()">Guardar</button>
                                             
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
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
                            <th>Apellido</th>
                               <th>Email</th>

                               <th>Nivel</th>
                            
                            <th>Fecha de Registro</th>
                         
                            
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                              
                                <td><?php echo$row->user_name ?></td>
                                 <td><?php echo$row->user_lastname ?></td>
                                    <td><?php echo$row->user_email ?></td>
                                    <td><?php
                                    
                                    if($row->user_level==1){$level='Administrador';}
                                    if($row->user_level==2){$level='General';}

                                    
                                    
                                    
                                    
                                    echo$level?></td>
                               
                                <td><?php echo$row->registre_date ?></td>
                            
                               
                                <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditconcept<?php echo$row->user_id;
                                        ?>" title="Editar" ><i class="fa fa-pencil"></i></button>

                                        <!--<button class="btn btn-danger btn-sm" type="button" onclick="deleteconcept(<?php echo$concept->tower_id;
                                        ?>);" title="Borrar"><i class="fa fa-trash-o"></i></button>-->
                                        
                                </td>
                                 
                                
                              
                            </tr>







     <div class="modal inmodal" id="modaleditconcept<?php echo$row->user_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Editar Usuario</h4>
                                           
                                        </div>
                                        <div class="modal-body">

                                                     <div class="row">
                                                 <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Nombre</label>
                                            <input class="form-control" placeholder="" value="<?php echo$row->user_name;
                                        ?>" name="name<?php echo$row->user_id;
                                        ?>" id="name<?php echo$row->user_id;
                                        ?>" required>
                     </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Apellido</label>
                                            <input class="form-control"  value="<?php echo$row->user_lastname;
                                        ?>" name="lname<?php echo$row->user_id;
                                        ?>" id="lname<?php echo$row->user_id;
                                        ?>"placeholder="" required>
                     </div>
                </div>
                 
                <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">E-Mail</label>
                                            <input type="email" class="form-control"  value="<?php echo$row->user_email;
                                        ?>" name="email<?php echo$row->user_id;
                                        ?>" id="email<?php echo$row->user_id;
                                        ?>" placeholder="" required>
                     </div>
                </div>
          <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Contraseña</label>
                                            <input type="password" class="form-control" value="<?php echo$row->user_password;
                                        ?>" name="pass<?php echo$row->user_id;
                                        ?>" id="pass<?php echo$row->user_id;
                                        ?>" pattern=".{4,}"   required title="4 caracteres minimo">
                     </div>
                </div>

                  <div class="col-lg-4">
                 <div class="form-group">
                                            <label class="float-left">Confirmar Contraseña</label>
                                            <input type="password" class="form-control"  value="<?php echo$row->user_password;
                                        ?>" name="confirm_pass<?php echo$row->user_id;
                                        ?>" id="confirm_pass<?php echo$row->user_id;
                                        ?>" pattern=".{4,}"   required title="4 caracteres minimo">
                     </div>
                </div>
                  
        <div class="col-lg-4">
                 <div class="form-group">
                                          <label class="float-left">Nivel</label>
                                           <select class="form-control" name="level<?php echo$row->user_id;
                                        ?>" id="level<?php echo$row->user_id;
                                        ?>"required >
                                             
                                                <option <?php if($row->user_level=="1"){echo"selected";} ?> value="1">Administrador</option>
                                      <option <?php if($row->user_level=="2"){echo"selected";} ?>  value="1">General</option>
                                                
                                                

                                               
                                                
                                            </select>
                     </div>
                </div>


                  <div class="col-lg-4">
                 <div class="form-group">
                                          <label class="float-left">Status</label>
                                           <select class="form-control" name="status<?php echo$row->user_id;
                                        ?>" id="status<?php echo$row->user_id;
                                        ?>" required>
                                             
                                       <option <?php if($row->user_status=="Activo"){echo"selected";} ?>>Activo</option>
                                      <option <?php if($row->user_status=="Inactivo"){echo"selected";} ?>>Inactivo</option> 
                                                
                                                

                                               
                                                
                                            </select>
                     </div>
                </div>
              
         
        
</div>

                                              
                                        </div>

                                        <div class="modal-footer">
                                              <div id="idforconfirm_<?php echo$row->user_id ?>">
                                                <button type="button" class="btn btn-primary" onclick="sendeditforuser(<?php echo$row->user_id ?>);">Guardar Cambios</button>
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>













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
  <script src="<?php echo base_url(); ?>/../assets/home/js/jquery-3.1.1.min.js"></script>
  <script >


function sendsave() {
  console.log($('#first_name'));
//alert(id);
     var name = document.getElementById("first_name").value; 
     var lname = document.getElementById("lastname").value; 
      var email = document.getElementById("email").value; 
      var pass = document.getElementById("password").value; 
      var level = document.getElementById("level").value; 

  //   var price = document.getElementById("price").value; 
  //   var type = document.getElementById("concept_type").value; 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Users/create') ?>",
            method:"POST",
            data:{name:name,lname:lname,email:email,pass:pass,level:level},
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


      

function sendeditforuser(id) {

//alert(id);
     var name = document.getElementById("name"+id).value; 
      
       var lname = document.getElementById("lname"+id).value; 
        var email = document.getElementById("email"+id).value; 
         var pass = document.getElementById("pass"+id).value; 
          var level = document.getElementById("level"+id).value; 
           var status = document.getElementById("status"+id).value;


     //alert(price+"-"+email+"-"+pass+"-"+level+"-"+status);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Users/update') ?>",
            method:"POST",
            data:{user_id:id,user_name:name,user_lastname:lname,user_email:email,user_password:pass,user_status:status,user_level:level},
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





function testfunction(){alert("YES")}


  </script>

