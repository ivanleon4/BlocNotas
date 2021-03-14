<?php
$archivo='';
$ar=fopen("Archivo.txt", "a") or die ("Error al crear");


$Asu=$_REQUEST['asunto'];
$Des=$_REQUEST['descripcion'];

fwrite($ar,$Asu);
fwrite($ar,"\n");
fwrite($ar,$Des);    
fwrite($ar,"\n");

$ar=fopen("Archivo.txt","r+");//abrir el archivo
while ($ver=fgets($ar)) { //comprobar que la linea existe (igual a true)
   
$archivo.="$ver <br/> ";   //guardar la linea añadiendola a la anterior
    }

echo $archivo; //ver en pantalla.





echo "Se creo correctamente el archivo de texto en el directorio.";



?>
