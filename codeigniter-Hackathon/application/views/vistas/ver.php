<!DOCTYPE html>
<html lang="">
   <head>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,shrink-to-fit=0">
      <title>Hackathon Login</title>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
   
   </head>
   <body>
      
      
            <div class="row">
               <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                  <div class="myform-top">
                     <div class="myform-top-left">
                        <h3>Peril del usuario</h3>
                        
                     </div>
                     <div class="myform-top-right">
                        <i class="fa fa-key"></i>
                     </div>
                  </div>
                  <div class="myform-bottom">
                  
                     <form role="form" method="POST" class="form-login" action="usuarioControles/validacion">
                     <div class="form-group"> 
                                    <?php foreach($usuario as $value){?>

                                  <label >Nombre:</label>       
                                 <label ><?php echo "$value->fullname"?></label> <br>
                                 <label >Direccion:</label> 
                                 <label ><?php echo "$value->direccion"?></label>   <br>
                                 <label >Email:</label> 
                                 <label ><?php echo "$value->email"?></label>    <br>       
                                 <?php 
                                     }
                                 ?>
                     </div>

                        <a href= "../../menu" class="btn btn-lg btn-primary ">Salir</a>
                                     

                     </form>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      
      
   </body>
</html>