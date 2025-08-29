<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Resultado Vista Préstamos</title>
</head>
<body class="bg-black bg-gradient vh-100">
    <div class="container bg-light p-5 rounded mt-4">
        <h1 class="display-4 mb-3 fw-bold text-black">Préstamos Registrados</h1>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Lector</th>
                    <th>Libro</th>
                    <th>Autor</th>
                    <th>Fecha de Préstamo</th>
                    <th>Fecha de Devolución</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../controlador/ControladorPrestamo.php';
                $controlador = new ControladorPrestamo();
                $controlador->obtenerPrestamos();
                ?>
            </tbody>
        </table>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>