<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario</title>
  </head>
  <body>

  <div>
    <h3>Comercio electronico en tiempos de cuarentena inteligente a causa del covid 19</h3>


    <form action="./form-enviar" method="post">
      {{csrf_field()}}
      <p>a) Pregunta de ejemplo</p>
      <input type="text" class="form-control" name="rta1" required>
      <input type="text" class="form-control" name="rta2" required>

      <select class="form-select" name="select" aria-label="Default select example">
        <option selected>Selecccione un valor</option>
        <option value="facil">Facil</option>
        <option value="medio-form">Medio</option>
        <option value="dificil">Dificil</option>
      </select>

      <input type="submit" class="btn btn-primary form-control" name="enviar" value="Enviar"> 
    
      <!-- <input type="radio" name="rta1" value="Respuesta_a_1" placeholder="Hola">
      <input type="radio" name="rta1" value="Respuesta_a_2">
      <input type="radio" name="rta1" value="Respuesta_a_3">
      <input type="radio" name="rta1" value="Respuesta_a_4">
      <input type="radio" name="rta1" value="Otro_1"> -->

    <!-- <p>b) Pregunta de ejemplo</p>
        <p>Respuesta a <input type="radio" name="rta2" value="Respuesta_b_2"/p>
        <p>Respuesta b <input type="radio" name="rta2" value="Respuesta_b_2"/p>
        <p>Respuesta c <input type="radio" name="rta2" value="Respuesta_b_2"/p>
        <p>Respuesta d <input type="radio" name="rta2" value="Respuesta_b_2"/p>
        <p>Otro <input type="radio" name="rta3" value="Otro_2"/p>

    <p>c) Pregunta de ejemplo</p>
        <p>Respuesta a <input type="radio" name="rta3" value="Respuesta_c_3"/p>
        <p>Respuesta b <input type="radio" name="rta3" value="Respuesta_c_3"/p>
        <p>Respuesta c <input type="radio" name="rta3" value="Respuesta_c_3"/p>
        <p>Respuesta d <input type="radio" name="rta3" value="Respuesta_c_3"/p>
        <p>Otro <input type="radio" name="rta3" value="Otro_3"/p>

    <p>d) Pregunta de ejemplo</p>
        <p>Respuesta a <input type="radio" name="rta4" value="Respuesta_d_4"/p>
        <p>Respuesta b <input type="radio" name="rta4" value="Respuesta_d_4"/p>
        <p>Respuesta c <input type="radio" name="rta4" value="Respuesta_d_4"/p>
        <p>Respuesta d <input type="radio" name="rta4" value="Respuesta_d_4"/p>
        <p>Otro <input type="radio" name="rta4" value="Otro_4"/p>-->
      </form>

    </div>

  </body>
</html>
