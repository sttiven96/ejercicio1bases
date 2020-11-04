<!DOCTYPE html>
<html>
<head>
  <title>Conexion PosgreSQL Germ�n Vargas</title>

  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estiloss.css">
  
</head>
<body>
  <CENTER><td colspan="2" align="center"><h1>Ejemplo de Conexión de Bases de Datos </h1></td></CENTER>
  <form action="conectark2.php" method="POST"> 
  <table class="tabla" align="center" width="500" cellspacing="2" cellpadding="2" border="0">
  <tr>
    <td class="inicio" colspan="10" align="center" bgcolor=#000000>Ingreso Consulta</td>
  </tr>
  
  
  <td align="right">Usuario: </td>
    <td><input type="text" name="username" size="40" maxlength="50"></td>
  </tr>
  <tr>
    <td align="right">Contraseña: </td>
    <td><input type="text" name="password" size="40" maxlength="50"></td>
  </tr>

    <tr>
    <td align="right">Tabla: </td>
    <td><input type="text" name="tabla" size="40" maxlength="50"></td>
  </tr>
  <tr>

  <tr>
    <BR>
    <td colspan="2" align="center" ><input class="boton" type="Submit" value="Enviar"></td>
  </tr>
  </table>
  </form>
  
</body>
</html>

