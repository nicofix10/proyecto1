<?php
$sueldoimponibleanual=$_POST['sueldod']+$_POST['sueldoe']+$_POST['sueldof']+$_POST['sueldom']+$_POST['sueldoa']+$_POST['sueldomay']
+$_POST['sueldoj']+$_POST['sueldojul']+$_POST['sueldoag']+$_POST['sueldosep']+$_POST['sueldooc']+$_POST['sueldonov'];

//echo "$sueldoimponibleanual  ";

$honorariosbrutosanuales=$_POST['boletad']+$_POST['boletae']+$_POST['boletaf']+$_POST['boletam']+$_POST['boletaa']+$_POST['boletamay']
+$_POST['boletaj']+$_POST['boletajul']+$_POST['boletaag']+$_POST['boletasep']+$_POST['boletaoc']+$_POST['boletanov'];

//echo "$honorariosbrutosanuales";

function impuestounicoyglobal($x)
{
    if ($x>=0&&$x<8775702) {
        return 0;
    };
    if ($x>=8775702&&$x<19501560) {
        return ($x*0.040)-351028.08;
    };
    if ($x>=19501560&&$x<32502600) {
        return ($x*0.080)-1131090.48;
    };
    if ($x>=32502600&&$x<45503640) {
        return ($x*0.135)-2918733.48;
    };
    if ($x>=45503640&&$x<58504680) {
        return ($x*0.230)-7241579.28;
    };
    if ($x>=58504680&&$x<78006240) {
        return ($x*0.304)-11570925.6;
    };
    if ($x>=78006240&&$x<201516120) {
        return ($x*0.350)-115159212.64;
    };
    if ($x>=201516120) {
        return ($x*0.400)-25235018.64;
    };
    
}
$impuestounico=impuestounicoyglobal($sueldoimponibleanual);
//echo "  $impuestounico  ";

$impuestoretenidoshonorarios=$honorariosbrutosanuales*0.1225;
//echo "  $impuestoretenidoshonorarios  ";

$cantidadadescontar=$honorariosbrutosanuales*0.3;
if ($cantidadadescontar<9750780) {
    $Honorarios=$honorariosbrutosanuales-$cantidadadescontar;
}
if ($cantidadadescontar>=9750780) {
    $Honorarios=$honorariosbrutosanuales-9750780;
}
$total=$sueldoimponibleanual+$Honorarios;

$impuestoglobalcomplementario=impuestounicoyglobal($total);
$x=$impuestoglobalcomplementario-$impuestounico;
$devuelve=$impuestounico+$impuestoretenidoshonorarios;
if ($x<=0) {
    echo" Se le devuelve al contribuyente: $devuelve  ";
}
if ($x>0) {
    $y=$x-$impuestoretenidoshonorarios;
    if ($y>0) {
        echo" Se le devuelve al contribuyente: $y";
    }
    if ($y<0) {
        $ypositivo=$y*-1;
        
        echo" Debe pagar esta cantidad de impuestos: $ypositivo";
    }
}

?>
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
            <a class="nav-link" href="index.php">Volver a calcular impuestos</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>
      </main>
      
    </div>
      <footer class="mt-auto text-white-50">
        <br><br><br><p>Tax Help</p>
      </footer>
    </div>
