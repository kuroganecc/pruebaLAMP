<?php
// Incluye  el archivo de configuración que contiene las constantes de conexión a la base de datos
require_once 'config.php';

class Database {
    // Propiedad pública para almacenar la conexión a la base de datos
    public $conn;

    public function __construct() {
        // Crea una nueva conexión a la base de datos usando las constantes definidas en config.php
        $this->conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if ($this->conn->connect_error) {
            # Verifica si la conexión ha fallado
            die('Conexión fallida: ' . $this->conn->connect_error);
        }
    }
}
?>