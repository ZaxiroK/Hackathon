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
                  
                    
                           
                    <div class="form-group">
                    <table width="500px" border="2" style= "background-color:#F9F9F9">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>email</th>
            <th>Ver</th>
        </tr>
        
       <?php 
           /*  $consulta = "SELECT * FROM usuarios";
            $ejecutar = mysqli_query($conexion, $consulta);
            $i = 0;
            while($fila= mysqli_fetch_array($ejecutar)){
                $id= $fila['id'];
                $usuario= $fila['username'];
                $password= $fila['password'];
                $email= $fila['email'];
                $i++;
            */
        ?>


            <?php foreach($r as $usuario){?>
            <tr aling= "center">
        
            <td><?php echo "$usuario->id"; ?></td>
            <td><?php echo "$usuario->fullname"; ?></td>
            <td><?php echo "$usuario->direccion"; ?></td>
            <td><?php echo "$usuario->email"; ?></td>
            <td> <a href="<?php echo site_url()."/verUsuario/".$usuario->id."/ver"; ?>" class="btn btn-sm btn-success">ver</a></td>

        </tr>
        <?php 
            }
        ?>
        </table>
                       

            </div>

                        
                        <a href= "menu" class="btn btn-lg btn-primary ">Salir</a>

                     </form>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      
      
   </body>
</html>