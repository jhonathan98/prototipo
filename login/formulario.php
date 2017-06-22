<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
  </head>
  <body>

      <div class="row ">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 jumbotron contenido" >
          <h1 class="text-center">login</h1>
          <form action="validar_formulario.php" method="post" >
            <div class="form-group">
              <label for="exampleInputEmail1">usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">contraseña </label>
              <input type="password" class="form-control" id="password" name="password" placeholder="contraseña">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> recuerdame
              </label>
            </div>
            <button type="submit" class="btn btn-default" value="enviar">Submit</button>
          </form>
        </div>
      </div>

  </body>
</html>
