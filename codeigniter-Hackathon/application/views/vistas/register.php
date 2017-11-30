<!DOCTYPE html>
<html lang="">
   <head>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,shrink-to-fit=0">
      <title>Hackathon Register</title>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
   
   </head>
   <body>
      
      
            <div class="row">
               <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                  <div class="myform-top">
                     <div class="myform-top-left">
                        <h3>Registro de Musico</h3>
                        <p>Digite los datos que se le indican para su registro:</p>
                     </div>
                     <div class="myform-top-right">
                        <i class="fa fa-key"></i>
                     </div>
                  </div>
                  <div class="myform-bottom">
                     <form action="usuarioControles/guardarUsuario" method="POST" role="form" class="form-login" enctype= "multipar/form-data">
                     
                        <div class="form-group">
                           <input type="text" name="fullname" placeholder="Nombre completo..." required class="form-control" id="form-fullname" >
                        </div>
                        
                        <div class="form-group">
                           <input type="text" name="direccion" placeholder="Direccion" required class="form-control" id="form-direccion" >
                        </div>

                        <div class="form-group">
                        <h1>Intrumentos Musicales</h1>
                    
                           <?php foreach($instrumentos as $instrumento){ ?>
                                <div class = "checkbox">
                                <label><input type="checkbox" name = "instrumentos[]" 
                                value= "<?php echo "$instrumento->id"?>" >
                                <?php echo "$instrumento->nombreinstrumento"?></label>
                                
                                </div>
                           <?php }?>

                        </div>
                         
                        <div class="form-group">
                        <h1>Generos Musicales</h1>
                           <?php foreach($generos as $genero){ ?>
                                <div class = "checkbox">
                                <label><input type="checkbox" name = "generos[]"
                                 value ="<?php echo "$genero->id"?>" ><?php echo "$genero->nombregeneromusical"?></label>
                                
                                </div>
                           <?php }?>

                        </div>
                        Foto de Perfil:<br/>
                        <!--<input type= "file" name= "photo" />photo<br/>-->
                        
                        <br/>
                        <div class="form-group">
                           <input type="text" name="email" placeholder="email..." required class="form-control" id="form-email" >
                        </div>

                        <div class="form-group">
                           <input type="password" name="password" placeholder="Contraseña..." required class="form-control" id="form-password" >
                        </div>

                        <button type = "submit" class= "btn btn-lg btn-success" name = "validacion" id="btnRegistrarse" >Registrarse</button>
                        <a href= "login" class="btn btn-lg btn-primary ">Iniciar sesion</a>
                        


                     </form>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      
      
   </body>
</html>