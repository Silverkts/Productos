<?php
$Producto1= $_POST  ['Producto1'];
$Valor1=$_POST ['Valor1'];
$Producto2= $_POST  ['Producto2'];
$Valor2=$_POST ['Valor2'];
$Producto3= $_POST  ['Producto3'];
$Valor3=$_POST ['Valor3'];
echo "El nombre del producto1 es: ".Producto1;
echo "El nombre del producto2 es: ".Producto2;
echo "El nombre del producto3 es: ".Producto3;
echo "La suma de los 3 precios es: ".Valor1+Valor2+Valor3;
echo "Y si a ese valor se le añade un descuento del 0.16% da: ".(Valor1+Valor2+Valor3)*0.16;
?>
