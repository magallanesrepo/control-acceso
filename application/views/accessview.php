        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Acceso</h2>
                   
                </div>
               
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5></h5>
                            <div class="ibox-tools">
                           
                          
                                       
                                 
                                        </div>
                            </div>

                                        <div class="ibox-content">

  <form action="<?php echo site_url('Access/checkcode') ?>" method="post">
<div class="row">



<?php
/*
foreach ($spcards as $card) {

  echo$card->cardid;

  
 
}*/

?>



<!--<div class="col-md-4"><br><br>
                            <div class="form-group row"><label class="col-sm-3 col-form-label">Nro Factura</label>

                                    <div class="col-sm-9">

                                    	<input type="text" class="form-control" name="inumber" id="name">


                                    </div>


                            </div>
                          </div>-->


 <div class="col-md-4"></div> <div class="col-md-4 align" ><input type="text" class="form-control" name="code"> </div><div class="col-md-1 align" > <button type="submit" class="btn btn-success">Ok</button></div><div class="col-md-4"></div>

         <div class="col-md-4"></div>     <div class="col-md-4"></div>                               	
                                       <div class="col-md-2"> </div>   
                                        <div class="col-md-2">
   <!-- <button type="submit" class="btn btn-primary">Guardar</button>-->
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








  </script>