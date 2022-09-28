        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Clientes</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Mantenimiento</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Clientes</strong>
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
                            <h5>Lista de Clientes</h5>
                            <div class="ibox-tools">
                              <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modalnewbank" >Nuevo Cliente</button>


                              <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalnewbank" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Nuevo Cliente</h4>
                                            <!--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo site_url('Clients/create') ?>" method="post">
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

                                         <input type="text" class="form-control" name="cedularif" id="name" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Fecha de Nacimiento</label>

                                         <input type="date" class="form-control" name="birthdate" id="name" required>
                                              </div>
                                            </div>
                                                 <div class="col-lg-8">
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

                                                <button type="submit" class="btn btn-primary">Guardar</button>
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
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Nombre </th>
                                        <th>Apellido </th>
                                        <th>Cedula-Rif </th>
                                        <th>Fecha de Nacimiento </th>
                                        <th>Direccion </th>
                                        <th>Telefono </th>
                                          <th>Email </th>
                                        <th>Lugar de Trabajo </th>
                                       
                                        <th>Accion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $row) {
                                        ?>
                                    <tr>
                                        
                                        <th scope="row"> <?php echo $row->client_id;
                                        ?></th>
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                        <td><?php echo $row->client_name;?></td>
                                        <td><?php echo $row->client_lastname;?></td>
                                        <td><?php echo $row->cedularif;?></td>
                                        <td><?php echo $row->birthdate?></td>
                                        <td><?php echo $row->address;?></td>
                                        <td><?php echo $row->phone;?></td>
                                        <td><?php echo $row->email;?></td>
                                        <td><?php echo $row->work;?></td>
                                        <td>   <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#modaleditbank<?php echo$row->client_id;
                                        ?>" >Editar</button>
</td>
                                       
                                    </tr>




 <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modaleditbank<?php echo$row->client_id;
                                        ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           <!-- <i class="fa fa-plus-o modal-icon"></i>-->
                                            <h4 class="modal-title">Editar Cliente</h4>
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


                                                <div class="col-lg-4">
                                              <div class="form-group "><label class="float-left">Nombre</label>

                                         <input type="text" class="form-control" value="<?php echo$row->client_name;
                                        ?>" name="name<?php echo$row->client_id;
                                        ?>" id="name<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Apellido</label>

                                       <input type="text" class="form-control" value="<?php echo$row->client_lastname;
                                        ?>" name="client_lastname<?php echo$row->client_id;
                                        ?>" id="client_lastname<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>

                                            <div class="col-lg-2"><label class="float-left">Cedula -Rif</label>
                                            <div class="form-group">    <select class="form-control" style="margin-top:27px" name="idtype<?php echo$row->client_id;
                                        ?>" id="idtype<?php echo$row->client_id;
                                        ?>" >

                                         
                                          

                                        <option value="V" <?php if($row->idtype=='V'){echo 'Selected';} ?>>V</option>
                                        <option value="J" <?php if($row->idtype=='J'){echo 'Selected';} ?>>J</option>
                                        <option value="E" <?php if($row->idtype=='E'){echo 'Selected';} ?>>E</option>
                                        <option value="G" <?php if($row->idtype=='G'){echo 'Selected';} ?>>G</option>
                                                </select>
                                                </div>
                                                </div>
                                             <div class="col-lg-2">
                                               <div class="form-group  ">

                                         <input type="text" class="form-control"  value="<?php echo$row->cedularif;
                                        ?>" name="cedularif<?php echo$row->client_id;
                                        ?>" id="cedularif<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Fecha de Nacimiento</label>

                                         <input type="date" class="form-control" value="<?php echo$row->birthdate;
                                        ?>" name="birthdate<?php echo$row->client_id;
                                        ?>" id="birthdate<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                                 <div class="col-lg-8">
                                              <div class="form-group "><label class="float-left">Direccion</label>

                                        <input type="text" class="form-control" value="<?php echo$row->address;
                                        ?>" name="address<?php echo$row->client_id;
                                        ?>" id="address<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">

                                               <div class="form-group "><label class="float-left">Cantidad de hijos</label>

                                         <input type="number" class="form-control"  value="<?php echo$row->children_qty;
                                        ?>" name="children_qty<?php echo$row->client_id;
                                        ?>" id="children_qty<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Cantidad de nietos</label>

                                         <input type="number" class="form-control"  value="<?php echo$row->grandchildren_qty;
                                        ?>" name="grandchildren_qty<?php echo$row->client_id;
                                        ?>" id="grandchildren_qty<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                               <div class="form-group"><label class="float-left">Telefono</label>

                                        <input type="number" class="form-control" value="<?php echo$row->phone;
                                        ?>" name="phone<?php echo$row->client_id;
                                        ?>" id="phone<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-4">
                                               <div class="form-group "><label class="float-left">Email</label>

                                         <input type="email" class="form-control" value="<?php echo$row->email;
                                        ?>" name="email<?php echo$row->client_id;
                                        ?>" id="email<?php echo$row->client_id;
                                        ?>" required>
                                              </div>
                                            </div>
                                             <div class="col-lg-4">
                                                <div class="form-group "><label class="float-left">Lugar de Trabajo</label>

                                         <input type="text" class="form-control" value="<?php echo$row->work;
                                        ?>" name="work<?php echo$row->client_id;
                                        ?>" id="work<?php echo$row->client_id;
                                        ?>" >
                                              </div>
                                            </div>
   <input type="hidden" class="form-control" value="<?php echo$row->client_id;
                                        ?>" name="idedit<?php echo$row->client_id;
                                        ?>" id="idedit<?php echo$row->client_id;
                                        ?>">
</div>
                





                                 
                                        </div>
                                        <div class="modal-footer">

                                                <button type="button" class="btn btn-primary" onclick="sendeditforclient(<?php echo$row->client_id ?>);">Guardar Cambios</button>
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
                                  <p><?php echo $links; ?></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


  <script src="<?php echo base_url(); ?>/../assets/home/js/jquery-3.1.1.min.js"></script>
  <script >
    function sendeditforclient(id) {

//alert(id);
     var name = document.getElementById("name"+id).value;      
     var lname = document.getElementById("client_lastname"+id).value; 
     var cedula = document.getElementById("cedularif"+id).value;
     var birthdate = document.getElementById("birthdate"+id).value;
     var address = document.getElementById("address"+id).value;
     var childrenQty = document.getElementById("children_qty"+id).value;
     var grandchildrenQty = document.getElementById("grandchildren_qty"+id).value;
     var phone = document.getElementById("phone"+id).value;
     var email = document.getElementById("email"+id).value; 
     var work = document.getElementById("work"+id).value;
     var idtype = document.getElementById("idtype"+id).value;


     //alert(price+"-"+email+"-"+pass+"-"+level+"-"+status);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('Clients/update') ?>",
            method:"POST",
            data:{client_id:id,name:name,lastname:lname,cedula:cedula,birthdate:birthdate,address:address,childrenQty:childrenQty,grandchildrenQty:grandchildrenQty,phone:phone,email:email,work:work,idtype:idtype},
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
  </script>