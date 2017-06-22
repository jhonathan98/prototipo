<?php
include "php/conexion.php";
$a=1;
$sql1= "select * from datos_solicitud where numero_radicado = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Funcionario</title>
  </head>
  <body>


    <?php
      include 'php/navbar.php';
     ?>

     <div class="container">

 <form class="form-horizontal" method="post"  action="php/responder.php">
     <section class=" row text-center" >
       <fieldset>
       <legend>Solicitud</legend>

         <div class="control-group col-md-6">
           <label class="control-label" for="textinput">Numero radicado</label>
           <div class="controls">
             <input class="input-xlarge" disabled type="text" value="<?php echo $person->numero_radicado; ?>" name="numero_radicado">
           </div>
         </div>

       <div class="control-group col-md-6">
      <!--
       -->
            <label class="control-label" for="passwordinput">Cedula del funcionario</label>
            <div class="controls">
              <input   class="input-xlarge" >
            </div>
       </div>
      </fieldset>
     </section>


        <br>
     <section class=" row text-center" >
        <div class="control-group col-md-6">
          <label class="control-label"  for="passwordinput">Cedula del usuario</label>
          <div class="controls">
            <input  disabled class="input-xlarge"  value="<?php echo $person->cedula_usuario; ?>" >
          </div>
        </div>
        <div class="control-group col-md-6">
          <label class="control-label" for="selectbasic">Area del funcionario</label>
           <div class="controls">
             <select id="selectbasic" name="selectbasic" class="input-xlarge">
               <option>Vivienda</option>
               <option>Seguridad</option>
               <option>Solicitudes</option>
             </select>
           </div>

        </div>


   </section>

         <br>
              <section class=" row text-center" >
                    <div class="control-group col-md-6">
                        <label class="control-label" for="passwordinput">Archivos adjuntos</label>
                        <div class="controls">
                         <input  disabled class="input-xlarge" value="<?php echo $person->archivos_adjuntos;?>" >
                        </div>
                    </div>
                    <div class="control-group  col-md-6">
                        <label class="control-label" for="selectbasic">Seleccione estado de la solicitud</label>
                        <div class="controls">
                          <select id="selectbasic" name="estado" class="input-xlarge">
                            <option>Sin leer</option>
                            <option>Leida</option>
                            <option>En proceso</option>
                            <option>Solucionada</option>
                          </select>
                        </div>
                    </div>
              </section>
              <br>
              <section class=" row text-center" >
                        <div class="control-group col-md-6">
                          <label class="control-label" for="passwordinput">Fecha radicado</label>
                            <div class="controls">
                              <input  disabled class="input-xlarge"  value="<?php echo $person->fecha_radicado; ?>"  name="fecha_radicado">
                            </div>
                        </div>

                            <div class="control-group col-md-6">
                              <label class="control-label" for="passwordinput">Fecha limite</label>
                              <div class="controls">
                                <input   class="input-xlarge" >
                              </div>
                            </div>

               </section>
              <br>
              <section class=" row text-center" >
                        <div class="control-group col-md-6">
                          <label class="control-label" for="textarea">Solicitud del usuario</label>
                          <div class="controls">
                            <textarea id="textarea" disabled name="textarea"  > <?php echo $person->solicitud;?></textarea>
                          </div>
                        </div>
                        <div class="control-group  col-md-6">
                            <label class="control-label" for="selectbasic">Tipo de respuesta</label>
                            <div class="controls">
                              <select id="selectbasic" name="tipo_respuesta" class="input-xlarge">
                                <option>Correo</option>
                                <option>Telefono</option>
                              </select>
                            </div>
                        </div>
             </section>
           <br>
              <section class="row text-center">
                <div class="col-md-3">
                </div>
                <div class="control-group col-md-6">
                  <label class="control-label" for="textarea">Respuesta del funcionario</label>
                    <div class="controls">
                      <textarea id="textarea"  name="respuesta"> </textarea>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
             </section>
             <section class="row text-center">
                <div class="control-group text-center">
                    <label class="control-label" for="singlebutton">Responder</label>
                  <div class="controls">
                    <button id="singlebutton" name="singlebutton"  type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </section>
  </form>
 </div>


    </body>
</html>
