        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Carnets</h2>
                   
                </div>
               
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
               <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Datos de Carnets</h5>
                            <div class="ibox-tools">
                           
                          
                                       
                                 
                                        </div>
                            </div>

                                        <div class="ibox-content">

  <form action="<?php echo site_url('CardsPrinta/create') ?>" method="post">
<div class="row">


 <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr style="text-align: center">

                                        <th>Nro Factura </th>
                                        <th>Codigo de Carnet </th>
                                       
                                        <th>Imagen QR</th>
                                        
                                       
                                        <th>Accion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php

foreach ($spcards as $card) {

  //echo$card->cardid;

  ?>


   <tr style="text-align: center">
                                        
                                
                                       <!-- <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>-->
                                        
                                        <td><?php echo $card->invoice;?></td>
                                        <td><?php echo $card->cardid;?></td>
                                        <td ><img src='<?php echo base_url() . "/../assets/qrimages/$card->cardid.png"; ?>' style='width: 18%;'></td>
                                       
                                        <td>  <a href="<?php echo base_url();?>index.php/CardsPrinta/pdfcard/<?php echo$card->cardid ?>"><button onclick="reloadd();" class="btn btn-info btn-sm" type="button" <?php 
                                         if($card->printed=='YES'){echo"disabled";} ?> ><?php if($card->printed=='YES'){echo"Impreso";} else {echo"Imprimir";}?></button></a> 

                                        <button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#modalregcard<?php echo$card->id;
                                        ?>" <?php if($card->delivered=='YES'){echo"disabled";} ?> ><?php if($card->delivered=='YES'){echo"Entregado";} else {echo"Entregar";} ?></button>









 <!-- New Bank Modal --> 
                              <div class="modal inmodal" id="modalregcard<?php echo$card->id;
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

                                         <input type="text" class="form-control" name="name<?php echo$card->id;
                                        ?>" id="name<?php echo$card->id;
                                        ?>" required>
                                              </div>
                                            </div>
                                           
                                        
   <input type="hidden" class="form-control" value="<?php echo$card->id;
                                        ?>" name="idedit<?php echo$card->id;
                                        ?>" id="idedit<?php echo$card->id;
                                        ?>">
</div>
                





                                 
                                        </div>
                                        <div class="modal-footer">
                                          <div id="idforconfirm_<?php echo$card->id;
                                        ?>"></div>
                                                <button type="button" class="btn btn-primary" onclick="sendedit(<?php echo $card->id; ?>)">Aceptar</button>
                                                </form>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <!-- New Bank Modal --> 
























</td>
                                       
                                    </tr>



  <?php
 
}

?>

   </tbody>
                                </table>
                                  <!--<p><?php echo $links; ?></p>-->
                            </div>

<!--<div class="col-md-4"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Nro Factura</label>

                                    <div class="col-sm-9">

                                    	<input type="text" class="form-control" name="inumber" id="name">


                                    </div>


                            </div>
                          </div>-->


 <!--<div class="col-md-4"></div> <div class="col-md-4 align" > <button type="button" class="btn btn-primary">Visualizar Carnets</button> <button type="button" class="btn btn-success">Registrar Entrega</button></div> <div class="col-md-4"></div>

         <div class="col-md-4"></div>     <div class="col-md-4"></div>                               	
                                       <div class="col-md-2"> </div>   
                                        <div class="col-md-2">
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div> -->
             


</div>

</form>
</div>

                            </div>
                  














                    </div>
                     <div class="col-lg-3"></div>
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

$("#idforconfirm_"+id).html(' <div class="alert alert-success">   <strong> Concepto Editado con Exito</strong></div>');

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
 
    // alert(price);
     //var prop ="all";
   $.ajax({
            url:"<?php echo site_url('CardsPrinta/deliver') ?>",
            method:"POST",
            data:{id:id,name:name},
            success:function(result) { 


//$("#idforconfirm_"+id).html(' <div class="alert alert-success">   <strong> Concepto Editado con Exito</strong></div>');

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

              console.log("here");
             //location.reload();    
            }

                
        })

    } else {
        return false;
    }
}



/*
function reload(){

  location.reload("localhost/controldeacceso/ndex.php/CardsPrinta");

}

*/

  </script>