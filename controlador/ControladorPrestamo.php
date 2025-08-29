<?php
// Incluye el archivo Database.php que contiene la clase para la conexión a la base de datos
require_once __DIR__ . '/../modelo/Database.php';

class ControladorPrestamo {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function obtenerPrestamos() {
        // Consulta SQL para seleccionar los datos de los préstamos y sus cargos
        $sql = "SELECT p.id_prestamo, p.f_prestamo, p.f_devolucion, li.titulo, li.autor, le.nombre
        FROM prestamos p
        JOIN libros li ON p.id_libro_fk = li.id_libro
        JOIN lector le ON p.id_lector_fk = le.id_lector
	ORDER BY p.id_prestamo ASC;";

        // Ejecuta la consulta y almacena el resultado en $result
        $result = $this->db->conn->query($sql);
        // Verifica si la consulta devolvió algún resultado
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                # Imprime una fila de una tabla HTML con los datos de cada préstamo
                echo "<tr>
                        <td>{$row['id_prestamo']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['titulo']}</td>
                        <td>{$row['autor']}</td>
                        <td>{$row['f_prestamo']}</td>
                        <td>{$row['f_devolucion']}</td>
                     </tr>";
            }
        } else {
            # Si no hay resultados, imprimir una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='7'>0 resultados</td></tr>";
        }
    }
}
?>