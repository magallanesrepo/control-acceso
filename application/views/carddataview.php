        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Datos del Carnet</h2>
                   
                </div>
               
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
        
           
            <div class="row">
               <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Acceso Permitido</h5>
                            <div class="ibox-tools">
                           
                          
                                       
                                 
                                        </div>
                            </div>

                                        <div class="ibox-content">


<div class="row">

     <div class="col-lg-12">
        <!--<div class="col-lg-4"></div>  
            <div class="col-lg-4"><div class='alert'>EL CARNET ES VALIDO</div></div>      <div class="col-lg-4"></div>  -->

<div class="alert alert-success" role="alert" style="text-align: center">
<b>Datos del Carnet:</b><br><?php echo $this->session->flashdata('msg');?>
</div>

<div style="text-align: center"><br><br>
 <a href="<?php echo site_url('Qcards') ?>"><button class="btn btn-primary btn-lg" type="button"  >Aceptar</button></a>
</div>


     </div>


             


</div>


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
            url:"<?php echo site_url('CardsPrinta/deliver') ?>/"+id,
            method:"POST",
            data:{name:name},
            success:function(result) { 


//$("#idforconfirm_"+id).html(' <div class="alert alert-success">   <strong> Concepto Editado con Exito</strong></div>');

             //location.reload();    
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