        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Registro de Factura</h2>
                   
                </div>
               
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Datos de Factura</h5>
                            <div class="ibox-tools">
                           
                          
                                       
                                 
                                        </div>
                            </div>

                                        <div class="ibox-content">

  <form action="<?php echo site_url('Invoice/create') ?>" method="post">
<div class="row">


<?php

foreach ($currentclient as $row) {
 



?>



<div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Nombre</label>

                                    <div class="col-sm-9">

                                    	<input type="text" class="form-control" name="client_name" id="name" value="<?php echo$row->client_name ?>" disabled>


                                    </div>


                            </div>
                          </div>

                          <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Apellido</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="client_lastname" id="name" value="<?php echo$row->client_lastname ?>" disabled>


                                    </div>


                            </div>
                          </div>

                            <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Telefono</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="phone" id="name" value="<?php echo$row->phone ?>" disabled>


                                    </div>


                            </div>
                          </div>

                            <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Direccion</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="address" id="name" value="<?php echo$row->address ?>" disabled>


                                    </div>


                            </div>
                          </div>

                           <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Correo Electronico</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="email" id="name" value="<?php echo$row->phone ?>" disabled>


                                    </div>


                            </div>
                          </div>

                           <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Cedula - Rif</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="cedularif" id="name" value="<?php echo$row->phone ?>" disabled>


                                    </div>


                            </div>
                          </div>

                          <?php

                          }


                          ?>
                         
                      <!--      <div class="col-md-3"></div>  <div class="col-md-3"></div>-->
                          <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Nro Factura</label>

                                    <div class="col-sm-9">

                                      <input type="number" class="form-control" name="inumber" id="name" required >


                                    </div>


                            </div>
                          </div>

                          <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Tipo de Carnet</label>

                                    <div class="col-sm-9">
                                         <div class="col-sm-12 m-b-xs">
                                    	<select class="form-control-sm form-control input-s-sm inline" name="cardtype" id="cardtype" onchange="ccty();">
                                       <option value="1"> Silver</option> 
                                       <option value="2"> Gold</option> 
                                       <option value="3"> Black</option> 
                                      </select>
                                    </div>


                                    </div>


                            </div>
                          </div>

                            <div class="col-md-3"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Cantidad de Carnets</label>

                                    <div class="col-sm-9">

                                      <input type="text" class="form-control" name="clones" id="cardqty" required="" value="1" disabled>


                                    </div>


                            </div>
                          </div>

                       
<!--<div class="col-md-6"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Cliente</label>

                                    <div class="col-sm-9">

                                    	<input type="text" class="form-control" name="name" id="name">


                                    </div>


                            </div>
                          </div>-->


         <div class="col-md-4"></div>     <div class="col-md-4"></div>  <div class="col-md-4"></div>  <div class="col-md-4"></div>  <div class="col-md-4"></div>  <div class="col-md-4"></div>  <div class="col-md-4"></div>       <div class="col-md-4"></div>       <div class="col-md-4"></div>       <div class="col-md-4"></div>                           	
                                       <div class="col-md-2"> </div>   
                                        <div class="col-md-2">
    <button type="submit" class="btn btn-primary">Generar</button>
    </div> 
             


</div>

</form>
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



function ccty() {

var e = document.getElementById("cardtype");
var cardtype = e.value;
//alert(cardtype);

if (cardtype==3) {

document.getElementById("cardqty").disabled = false;


}

if (cardtype==2) {

document.getElementById("cardqty").disabled = false;


}
if (cardtype==1) 
{

document.getElementById("cardqty").disabled = true;
  
}

}

  </script>