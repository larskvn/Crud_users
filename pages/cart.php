<?php
session_start();
include '../model/conexion.php'; // tu conexión MySQL

// Si usas $_SESSION['cart'] para guardar productos
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;
$tax = 0.12; // Suponiendo un impuesto del 12%
// Calcula el total y los impuestos
foreach ($cart as $item) {
    $total += $item['cantidad'] * $item['precio'];
}
$taxAmount = $total * $tax;
$grandTotal = $total + $taxAmount;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito - Sistema POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet"> <!-- Íconos -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #04B4FC !important;
        }
        .navbar a {
            color: #ffffff !important;
        }
        .table thead {
            background-color: #04B4FC;
            color: white;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-success {
            background-color: #28a745;
        }
        .card-footer {
            background-color: #f1f3f5;
        }
        .badge {
            font-size: 1rem;
            padding: 0.5rem 0.75rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cueva POS</a>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="text-center mb-4">Carrito de Compras</h2>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['nombre']) ?></td>
                                <td><?= $item['cantidad'] ?></td>
                                <td>$<?= number_format($item['precio'], 2) ?></td>
                                <td>$<?= number_format($item['cantidad'] * $item['precio'], 2) ?></td>
                                <td><a href="remove_from_cart.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <div>
                    <h5>Total: $<?= number_format($total, 2) ?></h5>
                    <h6>Impuesto (12%): $<?= number_format($taxAmount, 2) ?></h6>
                    <h4 class="text-success">Total con Impuestos: $<?= number_format($grandTotal, 2) ?></h4>
                </div>
                <div>
                    <a href="checkout.php" class="btn btn-success btn-lg">Finalizar Venta</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
