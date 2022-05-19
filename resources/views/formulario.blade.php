<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario</title>
  </head>
  <body>

  <div style="background-color:#dedbd9; ">
    <h3>Comercio electronico en tiempos de cuarentena inteligente a causa del covid 19</h3>


    <form  action="./form-enviar" method="post">
      {{csrf_field()}}
      <p>a) ¿Implementaba el e-commerce en su empresa antes de la pandemia?</p>
            <input type="text" class="form-control" name="rta1" required>
      <p>b) ¿Le costo adaptarse al modelo del e-commerce?</p>
            <input type="text" class="form-control" name="rta2" required>
      <p>c) ¿Que metodos de pago acepto durante la pandemia?</p>
            <input type="text" class="form-control" name="rta3" required>
      <p>d) ¿Encontro problemas a la hora de implementar el modelo de e-commerce?</p>
            <input type="text" class="form-control" name="rta4" required>
      <p>e) ¿Como promociono la empresa durante la pandemia? </p>
            <input type="text" class="form-control" name="rta5" required>
      <p>f) ¿Considera util el e-commerce actualmente?</p>
            <input type="text" class="form-control" name="rta6" required>




      <input type="submit" class="btn btn-primary form-control" name="enviar" value="Enviar">

      </form>

    </div>

  </body>
</html>
