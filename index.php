<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tax Help</title>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0" >Tax Help</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" href="index.php">Calcular Impuestos</a>
            <a class="nav-link" href="contact.php">Contacto</a>
          </nav>
        </div>
      </header>
    <p><h1><br>Ingrese Sueldo por mes:</h1></p>
      <main class="px-3">
      <form action="calculos.php" method="post" target="_blank">


    <p><br>Enero: <input type="number" min="0" name="sueldoe">
    <p>Febrero: <input type="number"min="0" name="sueldof">
    <p>Marzo: <input type="number"min="0" name="sueldom">
    <p>Abril: <input type="number"min="0" name="sueldoa">
    <p>Mayo: <input type="number"min="0" name="sueldomay">
    <p>Junio: <input type="number" min="0"name="sueldoj">
    <p>Julio: <input type="number" min="0"name="sueldojul">
    <p>Agosto: <input type="number"min="0" name="sueldoag">
    <p>Septiembre: <input type="number"min="0" name="sueldosep">
    <p>Octubre: <input type="number"min="0" name="sueldooc">
    <p>Noviembre: <input type="number"min="0" name="sueldonov">
    <p>Diciembre: <input type="number"min="0" name="sueldod">


    <h1><br>Ingrese Boletas de Honorarios por mes:</h1>

    <p><br><br>Enero: <input type="number"min="0" name="boletae">
    <p>Febrero: <input type="number"min="0" name="boletaf">
    <p>Marzo: <input type="number"min="0" name="boletam">
    <p>Abril: <input type="number"min="0" name="boletaa">
    <p>Mayo: <input type="number" min="0"name="boletamay">
    <p>Junio: <input type="number"min="0" name="boletaj">
    <p>Julio: <input type="number" min="0"name="boletajul">
    <p>Agosto: <input type="number"min="0" name="boletaag">
    <p>Septiembre: <input type="number"min="0" name="boletasep">
    <p>Octubre: <input type="number"min="0" name="boletaoc">
    <p>Noviembre: <input type="number"min="0" name="boletanov">
    <p>Diciembre: <input type="number"min="0" name="boletad">

    
     <input type="submit" value="Enviar datos"></p>

</form>
      </main>
    
      <footer class="mt-auto text-white-50">
      <br><br><br><p>Tax Help</p>
      </footer>
    </div>
    
    
        
      
    
    </body>
</html>
