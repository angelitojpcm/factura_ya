<!DOCTYPE html>
<html>
<head>
    <title>Factura</title>
</head>
<body>
    <h1>Factura</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        <!-- Aquí iría un bucle para mostrar los productos de la factura -->
        <?php foreach ($factura->getProductos() as $producto) { ?>
            <tr>
                <td><?php echo $producto->nombre; ?></td>
                <td><?php echo $producto->cantidad; ?></td>
                <td><?php echo $producto->precio; ?></td>
            </tr>
        <?php } ?>
    </table>
    <p>Total: <?php echo $factura->getTotal(); ?></p>
</body>
</html>