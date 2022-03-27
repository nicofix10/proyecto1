<?php
$sueldoimponibleanual=$_POST['sueldod']+$_POST['sueldoe']+$_POST['sueldof']+$_POST['sueldom']+$_POST['sueldoa']+$_POST['sueldomay']
+$_POST['sueldoj']+$_POST['sueldojul']+$_POST['sueldoag']+$_POST['sueldosep']+$_POST['sueldooc']+$_POST['sueldonov'];

echo "$sueldoimponibleanual  ";

$honorariosbrutosanuales=$_POST['boletad']+$_POST['boletae']+$_POST['boletaf']+$_POST['boletam']+$_POST['boletaa']+$_POST['boletamay']
+$_POST['boletaj']+$_POST['boletajul']+$_POST['boletaag']+$_POST['boletasep']+$_POST['boletaoc']+$_POST['boletanov'];

echo "$honorariosbrutosanuales";

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
?>