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
                        <h3>Busca musicos</h3>
                        <p>Que tipo de musico buscas?:</p>
                     </div>
                     <div class="myform-top-right">
                        <i class="fa fa-key"></i>
                     </div>
                  </div>
                  <div class="myform-bottom">
                  
                     <form role="form" method="POST" class="form-login" action="usuarioControles/traerUsuariosbusqueda">
                        

                     
                           
                    <div class="form-group">
                         <h1>Intrumentos Musicales</h1>


                            <select name="instrumento" id="">
                            <?php foreach($instrumentos as $index=> $value){?>
                                <option name="" value="<?php echo $value->id ?>"><?php echo $value->nombreinstrumento ?></option>
                            <?php } ?>
                            </select>

                            </div>
                            
                            <div class="form-group">
                        <h1>Generos Musicales</h1>
                        <select name="genero" id="">
                            <?php foreach($generos as $index=> $value){?>
                                <option name="" value="<?php echo $value->id ?>"><?php echo $value->nombregeneromusical ?></option>
                            <?php } ?>
                            </select>  

                    </div>

                  



                        <button type = "submit" class= "btn btn-lg btn-success"  id="bntLogin" >Buscar</button>
                        <a href= "login" class="btn btn-lg btn-primary ">Salir</a>

                     </form>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      
      
   </body>
</html>