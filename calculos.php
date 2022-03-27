<?php
$sueldoimponibleanual=$_POST['sueldod']+$_POST['sueldoe']+$_POST['sueldof']+$_POST['sueldom']+$_POST['sueldoa']+$_POST['sueldomay']
+$_POST['sueldoj']+$_POST['sueldojul']+$_POST['sueldoag']+$_POST['sueldosep']+$_POST['sueldooc']+$_POST['sueldonov'];

echo "$sueldoimponibleanual  ";

$honorariosbrutosanuales=$_POST['boletad']+$_POST['boletae']+$_POST['boletaf']+$_POST['boletam']+$_POST['boletaa']+$_POST['boletamay']
+$_POST['boletaj']+$_POST['boletajul']+$_POST['boletaag']+$_POST['boletasep']+$_POST['boletaoc']+$_POST['boletanov'];

echo "$honorariosbrutosanuales";


?>