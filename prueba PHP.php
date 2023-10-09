
<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
                CREATE
$sql = "INSERT INTO articulos (codart, descrip, precio, stock, stock_min, dto) VALUES ('valor1', 'valor2','valor3','valor4','valor5', 'valor6')";
if ($conn->query($sql) === TRUE) {
  echo "Nuevo articulo creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO clientes (codcli, nombre, direccion, codpostal,codpue) VALUES ('valor1', 'valor2', 'valor3', 'valor4', 'valor5')";
if ($conn->query($sql) === TRUE) {
  echo "Nuevo cliente creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO facturas (codfac, fecha, codcli, codven, iva, dto) VALUES ('valor1', 'valor2','valor3','valor4','valor5','valor6')";
if ($conn->query($sql) === TRUE) {
  echo "Nueva factura creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO lineas_fac (codfac, linea, cant, codart, precio, dto) VALUES ('valor1', 'valor2','valor3','valor4','valor5','valor6' )";
if ($conn->query($sql) === TRUE) {
  echo "Nueva linea de facturas creada exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO provincias (codpro, nombre) VALUES ('valor1', 'valor2')";
if ($conn->query($sql) === TRUE) {
  echo "Nueva provincia creada exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pueblos (codpue, nombre, codpro) VALUES ('valor1', 'valor2', 'valor3')";
if ($conn->query($sql) === TRUE) {
  echo "Nuevo pueblo creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO vendedores (codven, nombre, direccion, codpostal, codpue, codjefe) VALUES ('valor1', 'valor2', 'valor3', 'valor4', 'valor5', 'valor6')";
if ($conn->query($sql) === TRUE) {
  echo "Nuevo vendedor creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




                SELECT
$sql = "SELECT codcli, nombre FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "codcli: " . $row["codcli"]. " - nombre: " . $row["nombre"]. "<br>";
  }
} else {
  echo "0 resultados";
}

$sql = "SELECT codpro, nombre FROM provincias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "codpro: " . $row["codpro"]. " - nombre: " . $row["nombre"]. "<br>";
  }
} else {
  echo "0 resultados";
}
$sql = "SELECT codfac, fecha FROM facturas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "codfac: " . $row["codfac"]. " - fecha: " . $row["fecha"]. "<br>";
  }
} else {
  echo "0 resultados";
}



                UPDATE
$sql = "UPDATE articulos SET dto='nuevo_valor' WHERE precio >= 50";

if ($conn->query($sql) === TRUE) {
  echo "Articulo actualizado exitosamente";
} else {
  echo "Error actualizando articulo: " . $conn->error;
}


                DELETE
$sql = "DELETE FROM clientes WHERE nombre = 'Juanito' AND direccion = '20#14'";
if ($conn->query($sql) === TRUE) {
  echo "cliente eliminado exitosamente";
} else {
  echo "Error eliminando cliente: " . $conn->error;
}

$conn->close();
?>
