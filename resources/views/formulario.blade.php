<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario</title>
  </head>
  <body style="background-color:#DEF5E3;">
  <div class="container-fluid shadow-lg" style="padding: 20px; background-color:#326C3C; color:white">
  <div class="row">
  <div class="col-1"></div>
  <div class="col-2"><img src="Logo.png" alt="Logo" width="60px"></div>
  <div style="text-aling-left; font-size:25px;" class="col-9">Comercio electronico en tiempos de cuarentena inteligente a causa del covid 19</div>
  </div>
  </div>
  <div style="background-color:#F8F9F9; padding: 30px;" class="Container-md shadow">

      <div class="row">
            <div class="col-sm-3"></div>
    <form  action="./form-enviar" method="post" class="col-sm-6">
      {{csrf_field()}}
      <p>a) ¿Implementaba el e-commerce en su empresa antes de la pandemia?</p>
            <input type="text" class="form-control" name="rta1" required>
      <p>b) ¿Le costo adaptarse al modelo del e-commerce?</p>
            <input type="text" class="form-control" name="rta2" required>
      <p>c) ¿Que métodos de pago acepto durante la pandemia?</p>
            <input type="text" class="form-control" name="rta3" required>
      <p>d) ¿Encontró problemas a la hora de implementar el modelo de e-commerce?</p>
            <input type="text" class="form-control" name="rta4" required>
      <p>e) ¿Como promociono la empresa durante la pandemia? </p>
            <input type="text" class="form-control" name="rta5" required>
      <p>f) ¿Considera útil el e-commerce actualmente?</p>
            <input type="text" class="form-control" name="rta6" required><br>




      <input type="submit" class="btn btn-dark form-control" name="enviar" value="Enviar">
      <div class="col-sm-3"></div>
      </form>
      </div>
    </div>

  </body>
</html>
