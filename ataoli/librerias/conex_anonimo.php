<?php session_start();
if ( !isset ( $link ) ) {
include_once("../includes/config.php");
function Conectarse()
{
global $Servidor, $Usuario, $Password, $BaseDeDatos;
   if (!($link=mysql_connect($Servidor,$Usuario,$Password)))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db($BaseDeDatos,$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
   
}} 

function pie_imprenta_anonimo(){
//global $link;
$ahora=date('Y-m-d H:i:s');
if(isset($_SESSION['nombre_completo'])){$nombre_completo = $_SESSION['nombre_completo'];}else{$nombre_completo = "Copia impresa por el cliente ";}
echo "<div align='left'><h4><img src='../images/vigilado_gris_200.gif' alt='VIGILADO Supersalud '></div>
		<div align='right'><h4>http://GaleNUx.com  Imprimi&oacute;: $nombre_completo / $ahora ip: $_SERVER[REMOTE_ADDR]</h4></div>";
												
										}// fin funcion pie de imprenta		
?><?php
$control_version = '0aa0b6b3207f0b3839381db1962574a2'; 
/*  ATENCION: Puede existir una versión mas reciente de este archivo en http://GaleNUx.com
    por favor compruebelo antes de modificarlo. control de versión [0aa0b6b3207f0b3839381db1962574a2]
    
    Copyright ©  13-22-2/ 17-Dic-2008 Dirección nacional de derechos de autor Colombia 
    http://GaleNUx.com Es un sistema para de información para la salud adaptado al sistema
    de salud Colombiano.
    
    Si necesita consultoría o capacitación en el manejo, instalación y/o soporte o 
    ampliación de prestaciones de GaleNUx por favor comuniquese con nosotros 
    al email praxis@galenux.com.

    Este programa es software libre: usted puede redistribuirlo y/o modificarlo 
    bajo los términos de la Licencia Pública General GNU publicada 
    por la Fundación para el Software Libre, ya sea la versión 3 
    de la Licencia, o cualquier versión posterior.

    Este programa se distribuye con la esperanza de que sea útil, pero 
    SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita 
    MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO. 
    Consulte los detalles de la Licencia Pública General GNU para obtener 
    una información más detallada. 

    Debería haber recibido una copia de la Licencia Pública General GNU 
    junto a este programa. 
    En caso contrario, consulte <http://www.gnu.org/licenses/>.
    
    POR FAVOR CONSERVE ESTA NOTA SI EDITA ESTE ARCHIVO

 */ 
?>