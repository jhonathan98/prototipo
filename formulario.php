<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Formulario</title>
    </head>
    <body>
      <?php
          include("php/navbar.php");
        if(!empty($_GET)){
          $tipo=$_GET["tipo"];

        if ($tipo=="normal"){

          echo "<div class='container'>";

          echo "<form class='well form-horizontal' action=''  method='post'  id='contact_form'>";
          echo "<fieldset>";

          echo "<!-- Form Name -->";
          echo "<legend>Ingrese la información siguiente</legend>";


          echo "<!-- Select Basic -->";

          echo "<div class='form-group'>";
          echo "<label class='col-md-4 control-label'>Tipo</label>";
          echo "<div class='col-md-4 selectContainer'>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>";
          echo "<select name='state' class='form-control selectpicker' >";
          echo "<option value=' ' >Seleccione su solicitud</option>";
          echo "<option value=' ' >Petición</option>";
          echo "<option value=' ' >Queja</option>";
          echo "<option value=' ' >Reclamo</option>";
          echo "<option value=' ' >Felicitaciones/Agradecimientos</option>";
          echo "</select>";
          echo "</div>";
          echo "</div>";
          echo "</div>";

          echo "<!-- Text input-->";

          echo "<div class='form-group'>";
          echo "<label class='col-md-4 control-label'>Nombre</label>";
          echo "<div class='col-md-4 inputGroupContainer'>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
          echo "<input  name='first_name' placeholder='Nombre' class='form-control'  type='text'>";
          echo "</div>";
          echo "</div>";
          echo "</div>";





        echo "<!-- Text input-->";
        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label' >Apellido</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
        echo "<input name='last_name' placeholder='Apellido' class='form-control'  type='text'>";
        echo "  </div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label' >Identificación</label>";
          echo "<div class='col-md-4 inputGroupContainer'>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
          echo "<input name='last_name' placeholder='Identificación' class='form-control'  type='text'>";
            echo "</div>";
          echo "</div>";
        echo "</div>";




        echo "<!-- Text input-->";
               echo "<div class='form-group'>";
          echo "<label class='col-md-4 control-label'>E-Mail</label>";
            echo "<div class='col-md-4 inputGroupContainer'>";
          echo "<div class='input-group'>";
                echo "<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>";
                echo "<input name='email' placeholder='E-Mail' class='form-control'  type='text'>";
            echo "</div>";
          echo "</div>";
        echo "</div>";

      echo "<!-- Text input-->";

echo "<div class='form-group'>";
  echo "<label class='col-md-4 control-label'>Telefono</label>";
  echo "<div class='col-md-4 inputGroupContainer'>";
    echo "<div class='input-group'>";
      echo " <span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span>";
  echo "<input name='phone' placeholder='3206542201' class='form-control' type='text'>";
    echo "</div>";
  echo "</div>";
echo "</div>";


echo "<!-- Text input-->";
  echo "<div class='form-group'>";
echo "<label class='col-md-4 control-label'>Telefono fijo</label>";
    echo "<div class='col-md-4 inputGroupContainer'>";
  echo "<div class='input-group'>";
      echo " <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
  echo "<input name='zip' placeholder='Telefono fijo' class='form-control'  type='text'>";
 echo "</div>";
 echo "</div>";
  echo "</div>";

echo "<!-- Text input-->";

echo "<div class='form-group'>";
echo "<label class='col-md-4 control-label'>Dirección</label>";
  echo "  <div class='col-md-4 inputGroupContainer'>";
  echo "  <div class='input-group'>";
  echo "    <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
    echo "  <input name='address' placeholder='Dirección' class='form-control' type='text'>";

    echo "</div>";
    echo "</div>";
     echo "</div>";


     echo "<!-- Text input-->";

  echo "<div class='form-group'>";
    echo "  <label class='col-md-4 control-label'>Ciudad</label>";
    echo " <div class='col-md-4 inputGroupContainer'>";
    echo "   <div class='input-group'>";
    echo "   <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
  echo " <input name='city' placeholder='Ciudad' class='form-control'  type='text'>";

      echo "</div>";
      echo "</div>";
       echo "</div>";


    echo "<!-- Text input-->";


    echo "  <div class='form-group'>";
        echo " <label class='col-md-4 control-label'>Asunto</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
      echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-globe'></i></span>";
    echo "<input name='website' placeholder='Asunto' class='form-control' type='text'>";
    echo "</div>";
    echo "</div>";
     echo "</div>";



      echo "<!-- Text input-->";

  echo "<div class='form-group'>";
    echo " <label class='col-md-4 control-label'>Descripción</label>";
    echo "  <div class='col-md-4 inputGroupContainer'>";
    echo "    <div class='input-group'>";
      echo "   <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>";
    echo "<textarea class='form-control' name='comment' placeholder='Descripción'></textarea>";
    echo "</div>";
    echo "</div>";
     echo "</div>";


  echo "<!-- Success message -->";
    echo " <div class='alert alert-success' hidden='true' role='alert' id='success_message'>Envio exitosamente<i class='glyphicon glyphicon-thumbs-up'></i> Gracias por usar nuestro servicio, este es el número radicado #1312393 conservelo!</div>";








  echo " <!-- Button -->";
echo "   <div class='form-group'>";
  echo "  <label class='col-md-4 control-label'></label>";
  echo "<div class='col-md-4'>";
    echo "<button type='submit' class='btn btn-success' >Send <span class='glyphicon glyphicon-send'></span></button>";
    echo "</div>";
     echo "</div>";

  echo "</fieldset>";
  echo "</form>";
  echo "</div>";
  echo "</div><!-- /.container -->";


        }
        }


?>


    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/validatorform.js"></script>
  </body>


</html>
