<!DOCTYPE html>
<html>


<head>
  <title>Datos</title>

  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estiloss.css">
  
</head>


<BR>
<H1>Consultando tablas de la Base de Datos</H1>
<body class="hola">
<form action="indexpg.php" method="POST"> 
<?php
$v_usuario=  $_POST["username"];
$v_password= $_POST["password"];
$v_tabla=    $_POST["tabla"];
$conexion = pg_connect("host=localhost port=5433 dbname=ventas user=$v_usuario password=$v_password");
echo "<BR>";
echo "Datos de la tabla $v_tabla";
echo "<BR>";
echo "<BR>";


if($v_tabla=="factura"){
  echo "Código || Valor factura"; 
  echo "<BR>";
$sql="select * from $v_tabla";
$resultado_set=pg_Exec($conexion, $sql);
  while($row=pg_fetch_array($resultado_set)){
      echo "------------------------";
      echo "<BR>";
      echo $row["cod_factura"]."--->" .$row["val_factura"];
      echo "<BR>";
 }
};
if ($v_tabla=="cliente"){
  echo "<BR>";
  echo "Código || Nombre cliente || Telefono cliente"; 
  echo "<BR>";
$sql="select *from $v_tabla";
$resultado_set=pg_Exec($conexion, $sql);
    while($row=pg_fetch_array($resultado_set)){
      echo "-------------------------------------";
      echo "<BR>";
      echo $row["cod_cliente"]."--->".$row["nom_cliente"]."--->".$row["tel_cliente"];
     echo "<BR>";
   }
};



/*if ($v_tabla=="vendedor"){
  $sql="select *from $v_tabla";
  $resultado_set=pg_Exec($conexion, $sql);
      while($row=pg_fetch_array($resultado_set)){
        echo "------------------------";
        echo "<BR>";
        echo $row["cod_vendedor"]."--->".$row["nom_vendedor"]."--->".$row["tel_cliente"];
       echo "<BR>";
     }
  };
*/
pg_close($conexion);
?>
<BR>
<BR>
<tr>
    <BR>
    <td colspan="2" align="center" ><input class="boton" type="Submit" value="Regresar"></td>
  </tr>

</body>
</html>